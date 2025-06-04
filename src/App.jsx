import React from 'react';
import { RouterProvider } from "react-router-dom";
import { router } from "./router/indexrouter";
import { AuthProvider } from './context/AuthContext';

function App() {
  return (
    <AuthProvider>
      <RouterProvider router={router} />
    </AuthProvider>
  );
}

export default App;