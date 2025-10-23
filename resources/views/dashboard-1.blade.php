<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kendaraan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="/img/logo.png">
</head>

<body class="bg-gray-100 font-sans">

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

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col">

            <!-- TOP NAVBAR -->
            <header class="flex justify-between items-center bg-white px-6 py-4 shadow">
                <h2 class="text-xl font-semibold">Dashboard / Identifikasi</h2>
                <div class="flex items-center space-x-3">
                <span class="font-medium">Budi</span>
                <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A9 9 0 1118.879 17.8M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                </div>
            </header>

            <!-- CONTENT AREA -->
            <main class="p-6 overflow-y-auto">
                <!-- STAT CARDS -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <!-- Total Kendaraan Masuk -->
                <div class="relative bg-white p-5 rounded-xl shadow flex flex-col justify-between">
                    <div class="w-32 sm:w-36"> <!-- BUNGKUS TEKS DENGAN WIDTH TERBATAS -->
                    <p class="text-gray-500 text-sm font-medium leading-tight">
                        Total Kendaraan Masuk
                    </p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">500,689</h3>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-100 text-blue-600 p-2 rounded-lg">
                    <!-- Icon Masuk -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                    </div>
                </div>

                <!-- Total Kendaraan Keluar -->
                <div class="relative bg-white p-5 rounded-xl shadow flex flex-col justify-between">
                    <div class="w-32 sm:w-36">
                    <p class="text-gray-500 text-sm font-medium leading-tight">
                        Total Kendaraan Keluar
                    </p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">40,689</h3>
                    </div>
                    <div class="absolute top-4 right-4 bg-green-100 text-green-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                    </div>
                </div>

                <!-- Total Kendaraan Onstay -->
                <div class="relative bg-white p-5 rounded-xl shadow flex flex-col justify-between">
                    <div class="w-32 sm:w-36">
                    <p class="text-gray-500 text-sm font-medium leading-tight">
                        Total Kendaraan Onstay
                    </p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">10,689</h3>
                    </div>
                    <div class="absolute top-4 right-4 bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 2.25h12M6 21.75h12M8.25 2.25v4.5a4.5 4.5 0 0 0 1.32 3.18L12 12l2.43-2.07A4.5 4.5 0 0 0 15.75 6.75v-4.5M8.25 21.75v-4.5a4.5 4.5 0 0 1 1.32-3.18L12 12l2.43 2.07a4.5 4.5 0 0 1 1.32 3.18v4.5" />
                    </svg>
                    </div>
                </div>

                <!-- Total Kendaraan Overstay -->
                <div class="relative bg-white p-5 rounded-xl shadow flex flex-col justify-between">
                    <div class="w-32 sm:w-36">
                    <p class="text-gray-500 text-sm font-medium leading-tight">
                        Total Kendaraan Overstay
                    </p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">5,689</h3>
                    </div>
                    <div class="absolute top-4 right-4 bg-red-100 text-red-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                    </div>
                </div>
                </div>

                <!-- CHARTS GRID -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- KENDARAAN MASUK -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Kendaraan Masuk</h4>
                            <div class="flex space-x-2 text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartMasuk" height="180"></canvas>
                    </div>

                    <!-- KENDARAAN KELUAR -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Kendaraan Keluar</h4>
                            <div class="flex space-x-2 text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartKeluar" height="180"></canvas>
                    </div>

                    <!-- KOMERSIAL EKSISTING MASUK -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Komersial Eksisting Masuk</h4>
                            <div class="flex space-x-2 text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartKMasuk" height="180"></canvas>
                    </div>

                    <!-- KOMERSIAL EKSISTING KELUAR -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Komersial Eksisting Keluar</h4>
                            <div class="flex space-x-2 text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartKKeluar" height="180"></canvas>
                    </div>

                    <!-- KENDARAAN ON STAY -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Kendaraan On Stay</h4>
                            <div class="flex space-x-2 text-sm">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-full">7 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">14 Hari</button>
                                <button class="border px-3 py-1 rounded-full text-gray-600">1 Bulan</button>
                            </div>
                        </div>
                        <canvas id="chartOnStay" height="180"></canvas>
                    </div>

                    <!-- KENDARAAN OVER STAY -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-semibold text-gray-800">Kendaraan Over Stay</h4>
                            <div class="flex space-x-2 text-sm">
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
<script>
const labels = ["11/08/25","12/08/25","13/08/25","14/08/25","15/08/25","16/08/25","17/08/25"];

// 🔹 Opsi global chart
const chartOptions = {
    responsive: true,
    plugins: {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                usePointStyle: true, // ✅ ubah kotak jadi lingkaran
                pointStyle: 'circle',
                boxWidth: 8,
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

// 🔹 Opsi khusus grafik batang
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

// --- KENDARAAN MASUK ---
new Chart(document.getElementById("chartMasuk"), {
    type: "bar",
    data: {
        labels,
        datasets: [
            { label: " Plat DK", data: [14000,16000,6000,15000,13000,17000,21000], backgroundColor: "#1D4ED8" },
            { label: " Plat Non DK", data: [11000,12000,22000,8000,14000,11000,10000], backgroundColor: "#10B981" }
        ]
    },
    options: barChartOptions
});

// --- KENDARAAN KELUAR ---
new Chart(document.getElementById("chartKeluar"), {
    type: "bar",
    data: {
        labels,
        datasets: [
            { label: " Plat DK", data: [14000,16000,6000,15000,13000,17000,21000], backgroundColor: "#1D4ED8" },
            { label: " Plat Non DK", data: [11000,12000,22000,8000,14000,11000,10000], backgroundColor: "#10B981" }
        ]
    },
    options: barChartOptions
});

// --- KOMERSIAL EKSISTING MASUK ---
new Chart(document.getElementById("chartKMasuk"), {
    type: "bar",
    data: {
        labels,
        datasets: [
            { label: " Plat DK", data: [13000,12000,24000,11000,15000,18000,14000], backgroundColor: "#FACC15" },
            { label: " Plat Non DK", data: [10000,8000,23000,7000,13000,16000,11000], backgroundColor: "#EF4444" }
        ]
    },
    options: barChartOptions
});

// --- KOMERSIAL EKSISTING KELUAR ---
new Chart(document.getElementById("chartKKeluar"), {
    type: "bar",
    data: {
        labels,
        datasets: [
            { label: " Plat DK", data: [13000,12000,24000,11000,15000,18000,14000], backgroundColor: "#FACC15" },
            { label: " Plat Non DK", data: [10000,8000,23000,7000,13000,16000,11000], backgroundColor: "#EF4444" }
        ]
    },
    options: barChartOptions
});

// 🔹 Fungsi bantu: buat gradient dinamis sampai bawah
function createGradient(ctx, color) {
    const chartArea = ctx.chart?.chartArea;
    if (!chartArea) return color; // fallback kalau chart belum dirender

    const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
    gradient.addColorStop(0, color); // warna utama di atas
    gradient.addColorStop(1, "rgba(255,255,255,0)"); // transparan total di bawah
    return gradient;
}

// --- KENDARAAN ON STAY ---
new Chart(document.getElementById("chartOnStay").getContext("2d"), {
    type: "line",
    data: {
        labels,
        datasets: [
            {
                label: " Registrasi",
                data: [18000,15000,4000,6000,8000,9000,13000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "rgba(59, 131, 246, 0.2)"),
                borderColor: "#2563EB",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#2563EB",
            },
            {
                label: " Non Registrasi",
                data: [20000,17000,9000,13000,15000,16000,21000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "rgba(16,185,129,0.2)"),
                borderColor: "#10B981",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#10B981",
            }
        ]
    },
    options: chartOptions
});

// --- KENDARAAN OVER STAY ---
new Chart(document.getElementById("chartOverStay").getContext("2d"), {
    type: "line",
    data: {
        labels,
        datasets: [
            {
                label: " Registrasi",
                data: [10000,9000,2000,5000,7000,8000,10000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "rgba(59,131,246,0.2)"),
                borderColor: "#2563EB",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#2563EB",
            },
            {
                label: " Non Registrasi",
                data: [18000,16000,9000,12000,14000,15000,20000],
                fill: true,
                backgroundColor: (context) => createGradient(context.chart.ctx, "rgba(16,185,129,0.2)"),
                borderColor: "#10B981",
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: "#10B981",
            }
        ]
    },
    options: chartOptions
});
</script>


</body>
</html>
