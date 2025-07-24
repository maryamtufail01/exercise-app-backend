<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Example route
Route::middleware('api')->get('/example', function (Request $request) {
    return response()->json(['message' => 'Hello, World!']);
});

// Test route
Route::middleware('api')->get('/test', function (Request $request) {
    return response()->json(['message' => 'This is a test']);
});

// Root API route
Route::middleware('api')->get('/', function (Request $request) {
    return response()->json(['message' => 'Welcome to the API']);
});

// 🔐 Login route
Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'message' => 'Login successful!',
        'user' => $user
    ]);
});

// ✨ Signup route
Route::post('/signup', function (Request $request) {
    // Validate incoming data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ]);

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Respond with success
    return response()->json([
        'message' => 'Signup successful 🎉',
        'user' => $user
    ], 201);
});
