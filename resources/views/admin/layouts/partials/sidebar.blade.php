<!-- Sidebar -->
<aside class="w-64 bg-gray-900 text-gray-100 flex flex-col h-screen shadow-lg">

  <!-- Logo / Brand -->
  <div class="p-6 flex items-center space-x-2 border-b border-gray-700">
    <span class="text-2xl font-bold">📘 PolyBook</span>
  </div>

  <!-- Navigation -->
  <nav class="flex-1 p-4 space-y-2">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 hover:scale-105 transition transform duration-200">
      <span class="text-xl mr-3">🏠</span>
      <span class="font-medium">Dashboard</span>
    </a>

    <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 hover:scale-105 transition transform duration-200">
      <span class="text-xl mr-3">👥</span>
      <span class="font-medium">Users</span>
    </a>

     <a href="{{ route('admin.books.index') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 hover:scale-105 transition transform duration-200">
      <span class="text-xl mr-3">📕</span>
      <span class="font-medium">PDFS</span>
    </a>


    <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 hover:scale-105 transition transform duration-200">
      <span class="text-xl mr-3">🎫</span>
      <span class="font-medium">Events</span>
    </a>

    <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 hover:scale-105 transition transform duration-200">
      <span class="text-xl mr-3">⚙️</span>
      <span class="font-medium">Settings</span>
    </a>
  </nav>

  <!-- Logout Button -->
  <div class="p-4 border-t border-gray-700">
    <form method="POST" action="{{ route('logout') }}">
    @csrf
      <button type="submit" class="w-full bg-green-500 hover:bg-red-600 text-white py-3 rounded-lg flex items-center justify-center transition transform hover:scale-105 duration-200">
        <span class="text-xl mr-3">🚪</span>
        <span class="font-medium">Logout</span>
      </button>
    </form>
  </div>

</aside>
