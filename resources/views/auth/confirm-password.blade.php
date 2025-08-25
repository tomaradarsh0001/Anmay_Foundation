<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
        <!-- Heading -->
        <h2 class="text-2xl font-bold text-gray-800 text-center">Confirm Password</h2>
        <p class="mt-2 text-sm text-gray-600 text-center">
            This is a secure area of the application.<br>
            Please confirm your password before continuing.
        </p>

        <!-- Form -->
        <form method="POST" action="{{ route('password.confirm') }}" class="mt-6 space-y-5">
            @csrf

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                    Confirm
                </button>
            </div>
        </form>
    </div>

</body>
</html>
