<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">
    <!-- Title -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-indigo-600">Welcome Back</h1>
      <p class="text-gray-500 mt-2">Login to your account</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
      <div class="mb-4 text-green-600 text-sm text-center">
        {{ session('status') }}
      </div>
    @endif

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf
      
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none"
               placeholder="Enter your email" />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none"
               placeholder="Enter your password" />
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
        <input id="remember" type="checkbox" name="remember"
               class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
        <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
      </div>

      <!-- Buttons -->
      <div class="flex items-center justify-between">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot your password?</a>
        @endif

        <button type="submit"
                class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Log In
        </button>
      </div>
    </form>

    <!-- Sign Up -->
    @if (Route::has('register'))
      <p class="text-center text-sm text-gray-500 mt-6">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-medium">Sign up</a>
      </p>
    @endif
  </div>

</body>
</html>
