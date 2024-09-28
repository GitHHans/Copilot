<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm()
    {
        // Pass routes as an array to the view
        return view('auth.register', [
            'routes' => [
                'register' => route('register'),
                'login' => route('login'),
                'dashboard' => route('dashboard')
            ]
        ]);
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Pass routes as an array to the view
        return view('auth.login', [
            'routes' => [
                'register' => route('register'),
                'login' => route('login'),
                'dashboard' => route('dashboard')
            ]
        ]);
    }

    /**
     * Handle registration form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Log the user in
        \Auth::login($user);

        // Redirect to the dashboard
        return redirect()->route('dashboard');
    }

    /**
     * Handle login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (\Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Redirect to the dashboard on success
            return redirect()->route('dashboard');
        }

        // Redirect back with an error on failure
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Handle logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        \Auth::logout();

        // Redirect to the login page after logging out
        return redirect()->route('login');
    }
}
