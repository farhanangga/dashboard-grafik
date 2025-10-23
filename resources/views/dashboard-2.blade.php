<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard 2</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-50 font-sans">
  <div class="flex h-screen">
    <!-- SIDEBAR -->
    <div class="flex h-screen">
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4 flex items-center space-x-2">
                <img src="/img/logo.png" alt="Logo" class="w-10">
                <h1 class="font-bold text-lg">KB Samsat</h1>
            </div>
            <nav class="mt-6">
                <ul>
                <!-- Dashboard (Aktif) -->
                <li class="px-6 py-3 bg-blue-600 text-white rounded-md mx-2 my-1 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9v9a2 2 0 01-2 2h-4a2 2 0 01-2-2v-3H9v3a2 2 0 01-2 2H3a2 2 0 01-2-2v-9z" />
                    </svg>
                    <a href="#">Dashboard 1</a>
                </li>

                <!-- Identifikasi -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2z" />
                    </svg>
                    <a href="#">Identifikasi</a>
                </li>

                <!-- User Management -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1m-6 6v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h9zm3-10a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    <a href="#">User Management</a>
                </li>

                <!-- Master Data -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <a href="#">Master Data</a>
                </li>

                <!-- Registrasi -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 .88-.39 1.67-1 2.22V17h2v-3.78A3.002 3.002 0 0012 11zM12 5a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <a href="#">Registrasi</a>
                </li>

                <!-- Penerbitan -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-8-4h8M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <a href="#">Penerbitan</a>
                </li>

                <!-- Penindakan -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l3 3m0 0l3-3m-3 3V4m10 8h5v4h-5v-4z" />
                    </svg>
                    <a href="#">Penindakan</a>
                </li>

                <!-- Pengaduan -->
                <li class="px-6 py-2 hover:bg-gray-100 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1 0v10m-6 4h12a2 2 0 002-2V9l-4-4H7a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <a href="#">Pengaduan</a>
                </li>
                </ul>
            </nav>
        </aside>

    <!-- MAIN AREA -->
    <div class="flex-1 flex flex-col">
      <!-- HEADER -->
      <header class="flex justify-between items-center bg-white px-6 py-4 shadow-sm border-b">
        <h2 class="text-xl font-semibold text-gray-800">Dashboard / Registrasi</h2>
        <div class="flex items-center space-x-3">
          <span class="font-medium">Budi</span>
          <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center text-xl">
            👤
          </div>
        </div>
      </header>

      <!-- MAIN CONTENT -->
      <main class="flex-1 overflow-y-auto p-6 space-y-6">
        <!-- STAT CARDS (max 3 per row, wrap below) -->
        <div class="flex flex-wrap gap-4">
          <!-- Card 1 -->
          <div class="bg-white border rounded-xl p-4 shadow-sm flex flex-col flex-1 min-w-[280px] max-w-[32%]">
            <div class="flex items-center justify-between">
              <h3 class="text-gray-700 font-medium">Total Registrasi</h3>
              <div class="bg-blue-100 p-2 rounded-md">
                <img src="{{ asset('img/icons/db1-1.png') }}" alt="Total Registrasi" class="w-6 h-6">
              </div>
            </div>
            <p class="text-3xl font-bold mt-4">500,689</p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white border rounded-xl p-4 shadow-sm flex flex-col flex-1 min-w-[280px] max-w-[32%]">
            <div class="flex items-center justify-between">
              <h3 class="text-gray-700 font-medium">Total Komersial Registrasi</h3>
              <div class="bg-green-100 p-2 rounded-md">
                <img src="{{ asset('img/icons/db1-2.png') }}" alt="Total Komersial" class="w-5 h-6">
              </div>
            </div>
            <p class="text-3xl font-bold mt-4">40,689</p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white border rounded-xl p-4 shadow-sm flex flex-col flex-1 min-w-[280px] max-w-[32%]">
            <div class="flex items-center justify-between">
              <h3 class="text-gray-700 font-medium">Total Registrasi Aktif</h3>
              <div class="bg-purple-100 p-2 rounded-md">
                <img src="{{ asset('img/icons/db1-3.png') }}" alt="Total Aktif" class="w-6 h-5">
              </div>
            </div>
            <p class="text-3xl font-bold mt-4">10,689</p>
          </div>

          <!-- Card 4 -->
          <div class="bg-white border rounded-xl p-4 shadow-sm flex flex-col flex-1 min-w-[280px] max-w-[32%]">
            <div class="flex items-center justify-between">
              <h3 class="text-gray-700 font-medium">Total Registrasi Non Aktif</h3>
              <div class="bg-red-100 p-2 rounded-md">
                <img src="{{ asset('img/icons/db1-4.png') }}" alt="Non Aktif" class="w-6 h-5">
              </div>
            </div>
            <p class="text-3xl font-bold mt-4">5,689</p>
          </div>

          <!-- Card 5 -->
          <div class="bg-white border rounded-xl p-4 shadow-sm flex flex-col flex-1 min-w-[280px] max-w-[32%]">
            <div class="flex items-center justify-between">
              <h3 class="text-gray-700 font-medium">Total Pengulangan Registrasi</h3>
              <div class="bg-yellow-100 p-2 rounded-md">
                <img src="{{ asset('img/icons/db1-5.png') }}" alt="Pengulangan" class="w-5 h-6">
              </div>
            </div>
            <p class="text-3xl font-bold mt-4">5,689</p>
          </div>
        </div>

        <!-- CHARTS SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <!-- LINE CHART -->
          <div class="bg-white border rounded-lg shadow-sm p-4">
            <div class="flex justify-between items-center mb-4">
              <h3 class="font-semibold text-gray-800">Total Registrasi Periode</h3>
              <div class="space-x-2">
                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
              </div>
            </div>
            <canvas id="lineChart" height="180"></canvas>
          </div>

          <!-- PIE CHART -->
          <div class="bg-white border rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4">Total Registrasi Jenis Kendaraan</h3>
            <canvas id="pieChart" height="180"></canvas>
          </div>
        </div>
      </main>
    </div>
  </div>

 <script>
  // LINE CHART
  const ctxLine = document.getElementById("lineChart");
  new Chart(ctxLine, {
    type: "line",
    data: {
      labels: ["11/08/25", "12/08/25", "13/08/25", "14/08/25", "15/08/25", "16/08/25", "17/08/25"],
      datasets: [{
        label: "Registrasi",
        data: [20, 35, 15, 18, 10, 12, 25],
        fill: true,
        borderColor: "#3b82f6",
        backgroundColor: "#3b83f64c",
        tension: 0.4,
        pointRadius: 5,
        pointBackgroundColor: "#3b82f6"
      }]
    },
    options: {
      scales: {
        y: { beginAtZero: true }
      },
      plugins: {
        legend: { display: false }
      }
    }
  });

  const ctxPie = document.getElementById("pieChart");
  new Chart(ctxPie, {
    type: "doughnut",
    data: {
      labels: ["Motor", "Mobil", "Truk", "Pickup", "Trailer", "Bus 3/4", "Bus Besar", "Fusu"],
      datasets: [{
        data: [25, 20, 10, 15, 5, 10, 8, 7],
        backgroundColor: [
          "#3b82f6", "#fca5a5", "#f97316", "#22c55e",
          "#6366f1", "#f59e0b", "#ef4444", "#14b8a6"
        ],
        borderWidth: 1
      }]
    },
    options: {
      cutout: "60%",         
      aspectRatio: 1.5,      
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            usePointStyle: true, 
            pointStyle: "circle",
            boxWidth: 10,        
            boxHeight: 10
          }
        }
      }
    }
  });
</script>

</body>
</html>
