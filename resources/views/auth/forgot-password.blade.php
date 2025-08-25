<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
    <!-- Heading -->
    <div class="text-center mb-6">
      <h1 class="text-2xl font-bold text-gray-800">Forgot Your Password?</h1>
      <p class="text-sm text-gray-500 mt-2">
        No problem. Just let us know your email address and we’ll send you a password reset link.
      </p>
    </div>

    <!-- Status Message -->
    <!-- Replace with Laravel session('status') if needed -->
    <div class="mb-4 hidden text-green-600 bg-green-100 p-3 rounded-md text-sm">
      We have emailed your password reset link!
    </div>

    <!-- Forgot Password Form -->
    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <!-- Email Input -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" name="email" id="email" required autofocus
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
               placeholder="Enter your email" value="{{ old('email') }}">
        <!-- Error Message -->
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="flex items-center justify-end">
        <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 transition duration-200">
          Email Password Reset Link
        </button>
      </div>
    </form>
  </div>
</body>
</html>
