<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">
    <!-- Title -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-indigo-600">Reset Password</h1>
      <p class="text-gray-500 mt-2">Enter your new password to continue</p>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
      @csrf

      <!-- Token -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none"
               placeholder="Enter your email" />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
        <input type="password" id="password" name="password" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none"
               placeholder="Enter new password" />
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none"
               placeholder="Confirm new password" />
        @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit -->
      <div class="flex items-center justify-end">
        <button type="submit"
                class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Reset Password
        </button>
      </div>
    </form>
  </div>

</body>
</html>
