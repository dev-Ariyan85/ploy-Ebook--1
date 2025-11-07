           @extends('admin.layouts.admin')

            @section('content')
          <!-- Main Content -->
<main class="flex-1 p-6 bg-gray-100 overflow-y-auto">

  <!-- First Row Stats -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Total Revenue -->
    <div class="bg-yellow-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-yellow-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          💳
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">Total Revenue</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">$3,249</p>
        </div>
      </div>
      <div class="text-green-600 text-sm font-bold flex items-center space-x-1">
        <span>▲</span>
        <span>15%</span>
      </div>
    </div>

    <!-- Total Users -->
    <div class="bg-blue-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-blue-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          👥
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">Total Users</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">249</p>
        </div>
      </div>
      <div class="text-green-600 text-sm font-bold flex items-center space-x-1">
        <span>▲</span>
        <span>10%</span>
      </div>
    </div>

    <!-- New Users -->
    <div class="bg-green-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-green-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          ➕
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">New Users</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">2</p>
        </div>
      </div>
      <div class="text-green-600 text-sm font-bold flex items-center space-x-1">
        <span>▲</span>
        <span>5%</span>
      </div>
    </div>

  </div>

  <!-- Second Row Stats -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    <!-- Server Uptime -->
    <div class="bg-purple-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-purple-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          ⏰
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">Server Uptime</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">152 days</p>
        </div>
      </div>
      <div class="text-green-600 text-sm font-bold flex items-center space-x-1">
        <span>▲</span>
        <span>3%</span>
      </div>
    </div>

    <!-- To Do List -->
    <div class="bg-indigo-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-indigo-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          📋
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">To Do List</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">7 tasks</p>
        </div>
      </div>
      <div class="text-red-600 text-sm font-bold flex items-center space-x-1">
        <span>▼</span>
        <span>2%</span>
      </div>
    </div>

    <!-- Issues -->
    <div class="bg-red-100 rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl p-5 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <div class="bg-red-500 p-5 rounded-full flex items-center justify-center text-white text-5xl">
          ⚠️
        </div>
        <div>
          <p class="text-gray-700 text-xs font-medium uppercase">Issues</p>
          <p class="text-2xl font-semibold mt-1 text-gray-900">3</p>
        </div>
      </div>
      <div class="text-red-600 text-sm font-bold flex items-center space-x-1">
        <span>▲</span>
        <span>1%</span>
      </div>
    </div>

  </div>

</main>

<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
  <!-- Graph 1: Page Impressions / AdSense Clicks -->
  <div class="bg-white rounded-xl shadow-lg p-8">
    <h3 class="text-gray-900 font-bold mb-6 text-lg">Page Impressions & AdSense Clicks</h3>
    <canvas id="impressionsChart" class="w-full h-80"></canvas>
  </div>

  <!-- Graph 2: Views -->
  <div class="bg-white rounded-xl shadow-lg p-8">
    <h3 class="text-gray-900 font-bold mb-6 text-lg">Views</h3>
    <canvas id="viewsChart" class="w-full h-80"></canvas>
  </div>

  <!-- Graph 3: Likes -->
  <div class="bg-white rounded-xl shadow-lg p-8">
    <h3 class="text-gray-900 font-bold mb-6 text-lg">Likes</h3>
    <canvas id="likesChart" class="w-full h-80"></canvas>
  </div>

  <!-- Graph 4: P1, P2, P3 -->
  <div class="bg-white rounded-xl shadow-lg p-8">
    <h3 class="text-gray-900 font-bold mb-6 text-lg">P1, P2, P3</h3>
    <canvas id="pChart" class="w-full h-80"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Graph 1: Page Impressions & AdSense Clicks
  new Chart(document.getElementById('impressionsChart'), {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [
        { label: 'Page Impressions', data: [1200, 1900, 3000, 2500, 2200], backgroundColor: 'rgba(59, 130, 246, 0.7)' },
        { label: 'AdSense Clicks', data: [200, 400, 300, 500, 350], backgroundColor: 'rgba(16, 185, 129, 0.7)' }
      ]
    },
    options: { responsive: true }
  });

  // Graph 2: Views
  new Chart(document.getElementById('viewsChart'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{ label: 'Views', data: [500, 900, 1200, 800, 1000], borderColor: 'rgba(239, 68, 68, 1)', backgroundColor: 'rgba(239, 68, 68, 0.2)', fill: true, tension: 0.4 }]
    },
    options: { responsive: true }
  });

  // Graph 3: Likes
  new Chart(document.getElementById('likesChart'), {
    type: 'doughnut',
    data: {
      labels: ['Likes'],
      datasets: [{ data: [350], backgroundColor: ['rgba(245, 158, 11, 0.7)'] }]
    },
    options: { responsive: true }
  });

  // Graph 4: P1, P2, P3
  new Chart(document.getElementById('pChart'), {
    type: 'pie',
    data: {
      labels: ['P1', 'P2', 'P3'],
      datasets: [{ data: [300, 500, 200], backgroundColor: ['rgba(79, 70, 229, 0.7)', 'rgba(236, 72, 153, 0.7)', 'rgba(34, 197, 94, 0.7)'] }]
    },
    options: { responsive: true }
  });
</script>



@endsection
