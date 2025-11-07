<!-- Header -->
<header class="bg-gray-900 shadow px-6 py-4 flex justify-between items-center">

  <!-- Left: Page Title -->
  <div class="flex items-center space-x-4">
    <h1 class="text-2xl font-bold text-white">Dashboard</h1>
    <span class="text-white/80">Welcome back, Admin!</span>

  </div>

  <!-- Right: Search, Notifications, Profile -->
  <div class="flex items-center space-x-4">

    <!-- Search Bar -->
    <div class="relative">
      <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm">
      <div class="absolute left-3 top-2.5 text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
        </svg>
      </div>
    </div>

    <!-- Notifications -->
    <button class="relative p-2 rounded-full hover:bg-gray-100 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
      <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white bg-red-500 rounded-full">3</span>
    </button>

    <!-- User Profile -->
    <div class="flex items-center space-x-2 cursor-pointer">
      <span class="text-gray-700 font-medium">Admin</span>
      <img src="https://via.placeholder.com/40" alt="avatar" class="rounded-full border-2 border-gray-300">
    </div>

  </div>

</header>
