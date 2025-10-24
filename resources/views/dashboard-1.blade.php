<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kendaraan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>
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
          <li class="px-6 py-3 bg-blue-500 text-white rounded-md mx-2 my-1">
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
          <li class="px-6 py-3 hover:bg-blue-50 text-gray-700 rounded-md mx-2 my-1">
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

        <h2 class="text-xl font-semibold flex-1 text-center md:text-left">Dashboard / Identifikasi</h2>

        <div class="flex items-center space-x-3">
          <span class="font-medium">Jaring</span>
            <div class="bg-gray-200 text-gray-500 rounded-full w-10 h-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2a5 5 0 015 5v1a5 5 0 11-10 0V7a5 5 0 015-5zm-7 18a7 7 0 0114 0H5z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
      </header>

        <!-- MAIN BODY -->
        <main class="p-4 sm:p-6 overflow-y-auto flex-1">

            <!-- SUMMARY CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                <div class="relative bg-white p-5 rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <p class="text-gray-500 text-sm font-medium leading-tight">
                            Total Kendaraan Masuk
                        </p>
                        <div class="bg-blue-100 text-gray-800 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">500,689</h3>
                </div>

                <div class="relative bg-white p-5 rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <p class="text-gray-500 text-sm font-medium leading-tight">
                            Total Kendaraan Keluar
                        </p>
                        <div class=" top-4 right-4 bg-green-100 text-gray-800 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">40,689</h3>
                </div>

                <div class="relative bg-white p-5 rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <p class="text-gray-500 text-sm font-medium leading-tight">
                            Total Kendaraan Onstay
                        </p>
                        <div class=" top-4 right-4 bg-yellow-100 text-gray-800 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 2.25h12M6 21.75h12M8.25 2.25v4.5a4.5 4.5 0 0 0 1.32 3.18L12 12l2.43-2.07A4.5 4.5 0 0 0 15.75 6.75v-4.5M8.25 21.75v-4.5a4.5 4.5 0 0 1 1.32-3.18L12 12l2.43 2.07a4.5 4.5 0 0 1 1.32 3.18v4.5" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">10,689</h3>
                </div>

                <div class="relative bg-white p-5 rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <p class="text-gray-500 text-sm font-medium leading-tight">
                            Total Kendaraan Overstay
                        </p>
                        <div class=" top-4 right-4 bg-red-100 text-gray-800 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mt-auto pt-2">5,689</h3>
                </div>
            </div>

            <!-- CHARTS GRID -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
            <!-- CHART TEMPLATE -->
            <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Kendaraan Masuk</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="chartMasuk" height="180"></canvas>
            </div>

            <!-- salin struktur di atas untuk chart lainnya -->
            <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Kendaraan Keluar</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="chartKeluar" height="180"></canvas>
            </div>

            <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Komersial Eksisting Masuk</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="komersialEMasuk" height="180"></canvas>
            </div><div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Komersial Eksisting Keluar</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="komersialEKeluar" height="180"></canvas>
            </div><div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Kendaraan On Stay</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="chartOnStay" height="180"></canvas>
            </div><div class="bg-white p-5 sm:p-6 rounded-2xl shadow-[0_2px_20px_rgba(0,0,0,0.05)]">
                <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
                <h4 class="font-semibold text-gray-800 text-base sm:text-lg">Kendaraan Overstay</h4>
                <div class="flex flex-wrap gap-2 text-xs sm:text-sm">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                    <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                </div>
                </div>
                <canvas id="chartOverStay" height="180"></canvas>
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
                padding: 15
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
        }
    }
};

new Chart(document.getElementById("chartMasuk"), {
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

new Chart(document.getElementById("chartKeluar"), {
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

new Chart(document.getElementById("komersialEMasuk"), {
  type: "bar",
  data: {
    labels,
    datasets: [
      {
        label: "Plat DK",
        data: [14000,16000,6000,15000,13000,17000,21000],
        backgroundColor: "#FFC800",
        barThickness: "flex", 
        categoryPercentage: 0.6, 
        barPercentage: 0.7        
      },
      {
        label: "Plat Non DK",
        data: [11000,12000,22000,8000,14000,11000,10000],
        backgroundColor: "#FF0000",
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

new Chart(document.getElementById("komersialEKeluar"), {
  type: "bar",
  data: {
    labels,
    datasets: [
      {
        label: "Plat DK",
        data: [14000,16000,6000,15000,13000,17000,21000],
        backgroundColor: "#FFC800",
        barThickness: "flex", 
        categoryPercentage: 0.6,  
        barPercentage: 0.7        
      },
      {
        label: "Plat Non DK",
        data: [11000,12000,22000,8000,14000,11000,10000],
        backgroundColor: "#FF0000",
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
    if (!chartArea) return color; 

    const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
    gradient.addColorStop(0, color); 
    gradient.addColorStop(1, "rgba(255,255,255,0)"); 
    return gradient;
}

new Chart(document.getElementById("chartOnStay").getContext("2d"), {
    type: "line",
    data: {
        labels,
        datasets: [
            {
                label: " Registrasi",
                data: [18000,15000,4000,6000,8000,9000,13000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "#009DFF51"),
                borderColor: "#0095FF",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#0095FF",
            },
            {
                label: " Non Registrasi",
                data: [20000,17000,9000,13000,15000,16000,21000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "#00E09653"),
                borderColor: "#07E098",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#07E098",
            }
        ]
    },
    options: chartOptions
});

new Chart(document.getElementById("chartOverStay").getContext("2d"), {
    type: "line",
    data: {
        labels,
        datasets: [
            {
                label: " Registrasi",
                data: [10000,9000,2000,5000,7000,8000,10000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "#009DFF51"),
                borderColor: "#0095FF",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#0095FF",
            },
            {
                label: " Non Registrasi",
                data: [18000,16000,9000,12000,14000,15000,20000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "#00E09653"),
                borderColor: "#07E098",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#07E098",
            }
        ]
    },
    options: chartOptions
});
</script>

</body>
</html>
