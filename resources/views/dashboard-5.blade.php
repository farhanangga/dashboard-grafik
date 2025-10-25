<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard 5</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="/img/logo.png">
</head>

<body class="bg-white font-sans">
    <!-- WRAPPER -->
    <div class="flex h-screen">

    <!-- SIDEBAR -->
    <aside id="sidebar"
      class="w-64 h-full bg-white shadow-md border border-r-gray-200 transform -translate-x-full md:translate-x-0 fixed md:relative z-40 transition-transform duration-300 ease-in-out">
      <div class="px-10 py-4 flex items-center justify-between">
        <img src="/img/logo.png" alt="Logo" class="w-25" />
      </div>
      <nav class="mt-2">
        <ul>
          <li class="px-6 py-3 hover:bg-blue-50 text-gray-700 rounded-md mx-2 my-1">
            <a href="/" class="block w-full">Identifikasi</a>
          </li>
          <li class="px-6 py-3 hover:bg-blue-50 text-gray-700 rounded-md mx-2 my-1">
            <a href="/dashboard-2" class="block w-full">Registrasi</a>
          </li>
          <li class="px-6 py-3 hover:bg-blue-50 text-gray-700 rounded-md mx-2 my-1">
            <a href="/dashboard-3" class="block w-full">Penerbitan</a>
          </li>
          <li class="px-6 py-3 hover:bg-blue-50 text-gray-700 rounded-md mx-2 my-1">
            <a href="/dashboard-4" class="block w-full">Penindakan</a>
          </li>
          <li class="px-6 py-3 bg-blue-500 text-white rounded-md mx-2 my-1">
            <a href="/dashboard-5" class="block w-full">Pengaduan</a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- OVERLAY MOBILE -->
    <div id="overlay"
      class="fixed inset-0 bg-black bg-opacity-40 hidden z-30 md:hidden transition-opacity duration-300 ease-in-out"></div>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col md:ml-0">

      <!-- TOP NAVBAR -->
      <header class="flex justify-between items-center bg-white px-6 py-4 shadow relative z-20">
        <!-- HAMBURGER -->
        <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <h2 class="text-xl font-semibold flex-1 text-center md:text-left">Dashboard / Pengaduan</h2>

        <div class="flex items-center space-x-3">
          <span class="font-medium">Jaring</span>
            <div class="bg-gray-200 text-gray-500 rounded-full w-10 h-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2a5 5 0 015 5v1a5 5 0 11-10 0V7a5 5 0 015-5zm-7 18a7 7 0 0114 0H5z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
      </header>

            <!-- CONTENT AREA -->
            <main class="p-6 overflow-y-auto">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                    <div class="relative bg-white p-5 rounded-xl shadow shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                        <div class="flex justify-between gap-2 items-start">
                            <p class="text-gray-500 text-sm font-medium leading-tight">
                                Total Pengaduan
                            </p>
                            <div class="bg-red-100 text-gray-800 p-2 rounded-lg">
                                <img src="{{ asset('img/icons/db4-1.png') }}" alt="Total Komersial" class="w-6">
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">500,689</h3>
                    </div>

                    <div class="relative bg-white p-5 rounded-xl shadow shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                        <div class="flex justify-between gap-2 items-start">
                            <p class="text-gray-500 text-sm font-medium leading-tight">
                                Total Pengaduan Non Registrasi
                            </p>
                            <div class="bg-red-100 text-gray-800 p-2 rounded-lg">
                                <img src="{{ asset('img/icons/db3-1.png') }}" alt="Total Komersial" class="w-6">
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">40,689</h3>
                    </div>

                    <div class="relative bg-white p-5 rounded-xl shadow shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                        <div class="flex justify-between gap-2 items-start">
                            <p class="text-gray-500 text-sm font-medium leading-tight">
                                Total Pengaduan Overstay
                            </p>
                            <div class="bg-red-100 text-gray-800 p-2 rounded-lg">
                                <img src="{{ asset('img/icons/db3-2.png') }}" alt="Total Komersial" class="w-6">
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">10,689</h3>
                    </div>

                    <div class="relative bg-white p-5 rounded-xl shadow shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                        <div class="flex justify-between gap-2 items-start">
                            <p class="text-gray-500 text-sm font-medium leading-tight">
                                Total Pengaduan Komersial Tidak Berizin
                            </p>
                            <div class=" bg-red-100 text-gray-800 p-2 rounded-lg">
                                <img src="{{ asset('img/icons/db4-2.png') }}" alt="Total Komersial" class="w-6">
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">5,689</h3>
                    </div>
                </div>

                <!-- CHARTS GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                    <!-- KENDARAAN MASUK -->
                    <div class="bg-white p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Pengaduan Non Registrasi</h4>
                            <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartPNRegistrasi" height="180"></canvas>
                    </div>
                    <!-- LINE CHART -->
                    <div class="bg-white rounded-lg shadow-[0_2px_20px_rgba(0,0,0,0.05)] p-4">
                        <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-800">Pengaduan Overstay</h3>
                        <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                            <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                            <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                            <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                        </div>
                        </div>
                        <canvas id="lineChart" height="180"></canvas>
                    </div>
                </div>

            </main>
        </div>
    </div>
</div>
    <!-- JS HAMBURGER -->
  <script>
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const menuBtn = document.getElementById("menu-btn");

    menuBtn.addEventListener("click", () => {
      sidebar.classList.toggle("-translate-x-full");
      overlay.classList.toggle("hidden");
    });

    overlay.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
      overlay.classList.add("hidden");
    });
  </script>
<script>
    // LINE CHART
    const ctxLine = document.getElementById("lineChart");
    const labels = ["11/08/25","12/08/25","13/08/25","14/08/25","15/08/25","16/08/25","17/08/25"];
    const chartOptions = {
    responsive: true,
    plugins: {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                usePointStyle: true, 
                pointStyle: 'circle',
                boxWidth: 6,
                padding: 15,
            }
        },
        tooltip: {
            callbacks: {
                label: function(context) {
                    let label = context.dataset.label || '';
                    let value = context.parsed.y;
                    if (value >= 1000) {
                        value = (value / 1000) + 'k';
                    }
                    return label + ': ' + value;
                }
            }
        }
    },
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                callback: function(value) {
                    return value >= 1000 ? value / 1000 + 'k' : value;
                },
                stepSize: 5000,
            },
            grid: { color: '#E5E7EB' }
        },
        x: { grid: { display: false } }
    },
    elements: {
        point: {
            radius: 4,
            hoverRadius: 6,
            backgroundColor: "#fff",
            borderWidth: 2
        },
        line: {
            borderWidth: 2.5
        }
    },
    interaction: {
        mode: "index",
        intersect: false
    },
    animation: {
        duration: 800,
        easing: "easeOutQuart"
    }
};
    const barChartOptions = {
        ...chartOptions,
        elements: {
            bar: {
                borderRadius: 3,
                barThickness: 8,
                maxBarThickness: 12,
            }
        }
    };

    new Chart(document.getElementById("chartPNRegistrasi"), {
    type: "bar",
    data: {
        labels,
        datasets: [
        {
            label: "Plat DK",
            data: [14000,16000,6000,15000,13000,17000,21000],
            backgroundColor: "#0095FF",
            barThickness: "flex", 
            categoryPercentage: 0.6,  
            barPercentage: 0.7       
        },
        {
            label: "Plat Non DK",
            data: [11000,12000,22000,8000,14000,11000,10000],
            backgroundColor: "#00E096",
            barThickness: "flex",
            categoryPercentage: 0.6,
            barPercentage: 0.7
        }
        ]
    },
    options: {
        ...barChartOptions,
        scales: {
        x: {
            offset: true, 
            grid: { display: false }
        },
        y: barChartOptions.scales.y
        }
    }
    });

    function createGradient(ctx, color) {
        const chartArea = ctx.chart?.chartArea;
        if (!chartArea) return color; // fallback kalau chart belum dirender

        const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
        gradient.addColorStop(0, color); // warna utama di atas
        gradient.addColorStop(1, "rgba(255,255,255,0)"); // transparan total di bawah
        return gradient;
    }

    new Chart(ctxLine, {
        type: "line",
        data: {
        labels,
        datasets: [{
            label: "Registrasi",
            data: [20, 35, 15, 18, 10, 12, 25],
            fill: true,
            borderColor: "#0095FF",
            backgroundColor: "#009DFF51",
            tension: 0.4,
            pointRadius: 5,
            pointBackgroundColor: "#0095FF"
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


</script>


</body>
</html>
