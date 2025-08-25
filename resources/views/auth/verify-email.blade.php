<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Verification</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-lg bg-white shadow-lg rounded-2xl p-8">
    <!-- Heading -->
    <h2 class="text-2xl font-bold text-gray-800 text-center">Verify Your Email</h2>

    <!-- Info -->
    <p class="mt-3 text-sm text-gray-600 text-center">
      Thanks for signing up! Before getting started, please verify your email address by clicking the link we just emailed you.
      <br>If you didn’t receive the email, we’ll gladly send you another.
    </p>

    <!-- Status -->
    @if (session('status') == 'verification-link-sent')
      <div class="mt-4 p-3 text-sm text-green-700 bg-green-100 rounded-lg border border-green-300">
        A new verification link has been sent to the email address you provided during registration.
      </div>
    @endif

    <!-- Actions -->
    <div class="mt-6 flex items-center justify-between">
      <!-- Resend Verification -->
      <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit"
                class="px-5 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
          Resend Verification Email
        </button>
      </form>

      <!-- Logout -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
                class="text-sm text-gray-600 hover:text-gray-900 underline transition">
          Log Out
        </button>
      </form>
    </div>
  </div>

</body>
</html>
