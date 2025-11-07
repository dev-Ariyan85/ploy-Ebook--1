<!-- resources/views/admin/Auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PolyBook Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

  <div class="bg-white/80 backdrop-blur-xl shadow-2xl rounded-3xl w-full max-w-md p-10 border border-gray-200">
    
    <!-- Logo -->
    <div class="text-center mb-8">
      <h1 class="text-4xl font-extrabold text-indigo-600 tracking-tight">📘 PolyBook</h1>
      <p class="text-gray-500 text-sm mt-2">Welcome back! Please login to your account</p>
    </div>

    <!-- Login Form -->
    <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
        <input type="email" name="email" placeholder="example@email.com"
          class="w-full px-4 py-3 border border-gray-300 rounded-xl text-gray-800 bg-white placeholder-gray-400
                 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all duration-200" required>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" placeholder="••••••••"
          class="w-full px-4 py-3 border border-gray-300 rounded-xl text-gray-800 bg-white placeholder-gray-400
                 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all duration-200" required>
      </div>

      <div class="flex items-center justify-between text-sm text-gray-600">
        <label class="flex items-center space-x-2 cursor-pointer">
          <input type="checkbox" name="remember" class="rounded text-indigo-600 focus:ring-indigo-500">
          <span>Remember me</span>
        </label>
        <a href="#" class="text-indigo-600 hover:underline font-medium">Forgot password?</a>
      </div>

      <button type="submit"
        class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold shadow-lg 
               transform hover:scale-[1.02] transition-all duration-200">
        Login
      </button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-8">
      <hr class="flex-1 border-gray-300">
      <span class="px-3 text-gray-400 text-sm">or</span>
      <hr class="flex-1 border-gray-300">
    </div>

    <!-- Footer -->
    <p class="text-center text-gray-500 text-sm mt-8">
      Don’t have an account?
      <a href="#" class="text-indigo-600 hover:underline font-medium">Sign Up</a>
    </p>
  </div>

</body>
</html>
