import React from 'react';
import { RouterProvider } from "react-router-dom";
import { router } from "./router/indexrouter";
import { AuthProvider } from './context/AuthContext';
import { NavbarProvider } from './context/NavbarContext';
function App() {
  return (
    <AuthProvider>
      <NavbarProvider>
        <RouterProvider router={router} />
      </NavbarProvider>
    </AuthProvider>
  );
}

export default App;