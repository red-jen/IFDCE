<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Diploma;
use App\Models\Field;
use App\Models\UserDiplomaField;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Get dashboard statistics
        $stats = [
            'total_users' => User::count(),
            'total_admins' => User::where('role', 'admin')->count(),
            'total_students' => User::where('role', 'user')->count(),
            'total_diplomas' => Diploma::count(),
            'total_fields' => Field::count(),
            'total_applications' => UserDiplomaField::count(),
            'pending_applications' => UserDiplomaField::where('status', 'pending')->count(),
            'approved_applications' => UserDiplomaField::where('status', 'approved')->count(),
        ];

        return response()->json([
            'message' => 'Admin dashboard data retrieved successfully',
            'stats' => $stats
        ]);
    }

    public function getUsers(Request $request)
    {
        $query = User::with(['diplomaFields.diploma', 'diplomaFields.field']);

        // Search functionality
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by role
        if ($request->has('role')) {
            $query->where('role', $request->get('role'));
        }

        // Pagination
        $users = $query->orderBy('created_at', 'desc')
                      ->paginate($request->get('per_page', 10));

        return response()->json($users);
    }

    public function getUserApplications($userId)
    {
        $user = User::with(['diplomaFields.diploma', 'diplomaFields.field'])
                   ->findOrFail($userId);

        return response()->json([
            'user' => $user,
            'applications' => $user->diplomaFields
        ]);
    }

    public function updateUserRole(Request $request, $userId)
    {
        $request->validate([
            'role' => 'required|in:user,admin'
        ]);

        $user = User::findOrFail($userId);
        $user->role = $request->role;
        $user->save();

        return response()->json([
            'message' => 'User role updated successfully',
            'user' => $user
        ]);
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        
        // Don't allow deletion of the last admin
        if ($user->role === 'admin' && User::where('role', 'admin')->count() <= 1) {
            return response()->json([
                'message' => 'Cannot delete the last admin user'
            ], 400);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }

    public function updateApplicationStatus(Request $request, $applicationId)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $application = UserDiplomaField::findOrFail($applicationId);
        $application->status = $request->status;
        $application->save();

        return response()->json([
            'message' => 'Application status updated successfully',
            'application' => $application->load(['user', 'diploma', 'field'])
        ]);
    }
}