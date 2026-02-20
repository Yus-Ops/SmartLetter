<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Smart Letter - Buat Surat Resmi Mudah</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3BCF10", // The bright green from the 'Create' button and steps
                        "primary-hover": "#32b30d",
                        "secondary-green": "#E9FFEE", // Very light green background for Hero and Footer
                        "card-green": "#DCFCE3", // Slightly darker light green for step cards
                        "dark-bg": "#111827", // Dark mode background
                        "dark-card": "#1F2937", // Dark mode card background
                        "dark-text": "#F3F4F6",
                        "footer-blue": "#213660", // Dark blue for the copyright strip
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'xl': '1rem',
                        '2xl': '1.5rem',
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white dark:bg-dark-bg text-gray-800 dark:text-dark-text transition-colors duration-200">
    <nav class="w-full bg-white dark:bg-dark-bg py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center shadow-sm dark:shadow-gray-800 sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="relative">
                <span class="material-icons-outlined text-blue-900 dark:text-blue-400 text-3xl transform -rotate-12">send</span>
                <div class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></div>
            </div>
            <div class="flex flex-col leading-none">
                <span class="font-bold text-blue-900 dark:text-white text-lg tracking-wide">SMART</span>
                <span class="font-medium text-gray-500 dark:text-gray-400 text-sm tracking-widest">LETTER</span>
            </div>
        </div>
        <div class="hidden md:flex items-center space-x-8 text-gray-600 dark:text-gray-300 font-medium text-sm">
            <a class="hover:text-primary transition" href="#">Home</a>
            <div class="relative group cursor-pointer flex items-center gap-1 hover:text-primary transition">
                <span>Letter Type</span>
                <span class="material-icons-outlined text-sm">expand_more</span>
            </div>
            <a class="hover:text-primary transition" href="#">Contact</a>
        </div>
        <div>
            <a class="border border-gray-400 dark:border-gray-500 text-gray-700 dark:text-white px-6 py-2 rounded-full font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition text-sm" href="#">
                Log in
            </a>
        </div>
    </nav>
    <section class="w-full bg-secondary-green dark:bg-gray-900 py-20 px-6 text-center flex flex-col items-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white mb-6 tracking-tight">
            SMART LETTER
        </h1>
        <p class="max-w-3xl text-gray-500 dark:text-gray-400 text-lg md:text-xl leading-relaxed mb-10">
            Beralihlah ke cara yang lebih cerdas: Gunakan Smart Letter dan nikmati kemudahan membuat surat resmi semudah memilih template.
        </p>
        <button class="bg-primary hover:bg-primary-hover text-white font-bold text-lg py-3 px-12 rounded-full shadow-lg transform hover:scale-105 transition duration-200">
            Create
        </button>
    </section>
    <section class="w-full bg-white dark:bg-dark-bg py-16 px-6 md:px-12 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Tiga Langkah Mudah</h2>
            <p class="text-blue-600 dark:text-blue-400 underline font-medium text-lg">Proses sederhana untuk membuat surat</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <div class="relative bg-card-green dark:bg-dark-card rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition">
                <div class="absolute -top-5 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-white dark:border-dark-bg">1</div>
                <div class="mt-4 mb-4">
                    <span class="material-icons-outlined text-5xl text-gray-700 dark:text-gray-200">edit_note</span>
                </div>
                <h3 class="font-bold text-xl text-gray-900 dark:text-white mb-2">Isi Form Surat</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Format Doc, PDF, atau DOCX</p>
            </div>
            <div class="relative bg-card-green dark:bg-dark-card rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition">
                <div class="absolute -top-5 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-white dark:border-dark-bg">2</div>
                <div class="mt-4 mb-4">
                    <span class="material-icons-outlined text-5xl text-gray-700 dark:text-gray-200">download</span>
                </div>
                <h3 class="font-bold text-xl text-gray-900 dark:text-white mb-2">Unduh Surat</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Unduh dengan mudah</p>
            </div>
            <div class="relative bg-card-green dark:bg-dark-card rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition">
                <div class="absolute -top-5 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-white dark:border-dark-bg">3</div>
                <div class="mt-4 mb-4">
                    <span class="material-icons-outlined text-5xl text-gray-700 dark:text-gray-200">description</span>
                </div>
                <h3 class="font-bold text-xl text-gray-900 dark:text-white mb-2">Lihat Hasil</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Hasil dalam hitungan menit</p>
            </div>
        </div>
    </section>
    <footer class="bg-secondary-green dark:bg-gray-900 pt-16">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                <div class="md:col-span-5 space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="relative">
                            <span class="material-icons-outlined text-blue-900 dark:text-blue-400 text-4xl transform -rotate-12">send</span>
                            <div class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></div>
                        </div>
                        <div class="flex flex-col leading-none">
                            <span class="font-bold text-blue-900 dark:text-white text-xl tracking-wide">SMART</span>
                            <span class="font-medium text-gray-500 dark:text-gray-400 text-sm tracking-widest">LETTER</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed max-w-xs">
                        Gedung Fakultas Ilmu Keperawatan<br />
                        Jl. Kaligawe raya, Terboyo Kulon,<br />
                        50112, Indonesia.
                    </p>
                </div>
                <div class="md:col-span-4 space-y-4">
                    <h4 class="font-bold text-gray-900 dark:text-white text-lg">Contact</h4>
                    <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                        <li class="flex items-center gap-2">
                            <span class="material-icons-outlined text-base">call</span>
                            <span>+62 857-4745-0205</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons-outlined text-base">email</span>
                            <span>fik.unissula.ac.id</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="material-icons-outlined text-base mt-0.5">location_on</span>
                            <span>Semarang, Jawa Tengah, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-icons-outlined text-base">print</span>
                            <span>(024)6583584 ext. 266</span>
                        </li>
                    </ul>
                </div>
                <div class="md:col-span-3 space-y-4">
                    <h4 class="font-bold text-gray-900 dark:text-white text-lg">Related Link</h4>
                    <ul class="space-y-2 text-xs text-gray-600 dark:text-gray-400">
                        <li><a class="hover:text-primary transition" href="#">Universitas Islam Sultan Agung</a></li>
                        <li><a class="hover:text-primary transition" href="#">Fakultas Ilmu Keperawatan</a></li>
                        <li><a class="hover:text-primary transition" href="#">UNISSULA Career</a></li>
                        <li><a class="hover:text-primary transition" href="#">Cilad UNISSULA</a></li>
                        <li><a class="hover:text-primary transition" href="#">RSI Sultan Agung</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-footer-blue dark:bg-black py-3 px-6 text-center">
            <p class="text-white text-xs opacity-90 flex items-center justify-center gap-1">
                <span class="material-icons-outlined text-xs">copyright</span>
                Copyright 2026 - Fakultas Ilmu Keperawatan - Universitas Islam Sultan Agung
            </p>
        </div>
    </footer>

</body>

</html>