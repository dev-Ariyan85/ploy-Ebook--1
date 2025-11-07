<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
  @include('admin.layouts.partials.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

      <!-- Header -->
      @include('admin.layouts.partials.header')

      <!-- Content -->
      <main class="flex-1 p-6 overflow-y-auto">
        @yield('content')
      </main>
    </div>

  </div>

</body>
</html>