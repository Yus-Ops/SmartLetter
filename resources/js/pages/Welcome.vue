<script setup>
import { Head, Link } from '@inertiajs/vue3';

// Icon SVG Manual (Supaya tidak perlu install library tambahan)
const IconForm = { template: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-slate-700"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>` };
const IconDownload = { template: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-slate-700"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M12 9.75l-4.5 4.5m0 0l-4.5-4.5m4.5 4.5V3" /></svg>` };
const IconSearch = { template: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-slate-700"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>` };
const IconLogo = { template: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-blue-900"><path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" /></svg>` };
</script>

<template>
    <Head title="Smart Letter" />

    <div class="min-h-screen font-sans text-slate-800 bg-[#F0FDF4]">
        
        <nav class="flex items-center justify-between px-6 md:px-16 py-6 bg-white/50 backdrop-blur-sm sticky top-0 z-50">
            <div class="flex items-center gap-2">
                <component :is="IconLogo" />
                <div class="flex flex-col leading-none">
                    <span class="font-bold text-lg text-slate-800 tracking-wide">SMART</span>
                    <span class="text-xs text-slate-500 uppercase tracking-[0.2em]">LETTER</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <Link href="/" class="hover:text-black transition">Home</Link>
                <button class="flex items-center gap-1 hover:text-black transition">
                    Letter Type 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <Link href="#" class="hover:text-black transition">Contact</Link>
            </div>

            <Link href="/login" class="px-6 py-2 border border-slate-400 rounded-full text-sm font-semibold hover:bg-slate-800 hover:text-white transition">
                Log in
            </Link>
        </nav>

        <header class="pt-16 pb-20 px-6 text-center bg-[#F0FDF4]">
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#0f172a] mb-6 tracking-tight">
                SMART LETTER
            </h1>
            <p class="max-w-2xl mx-auto text-slate-500 text-lg md:text-xl leading-relaxed mb-10">
                Beralihlah ke cara yang lebih cerdas: Gunakan Smart Letter dan nikmati
                kemudahan membuat surat resmi semudah memilih template.
            </p>
            <Link href="/create" class="inline-block bg-[#4ADE80] hover:bg-green-500 text-white font-bold text-xl py-3 px-12 rounded-full shadow-lg hover:shadow-green-300/50 transition transform hover:-translate-y-1">
                Create
            </Link>
        </header>

        <section class="py-24 px-6 bg-white">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-2">Tiga Langkah Mudah</h2>
                <p class="text-slate-500 text-lg">Proses sederhana untuk membuat surat</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-[#DCFCE7]/30 p-12 rounded-2xl text-center relative border border-green-100 hover:border-green-300 transition duration-300">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-[#3ccf13] text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-md border-4 border-white">
                        1
                    </div>
                    <div class="h-24 flex justify-center items-center mb-2">
                        <component :is="IconForm" />
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-2">Isi Form Surat</h3>
                    <p class="text-slate-500 text-sm">Format Doc, PDF, atau DOCX</p>
                </div>

                <div class="bg-[#DCFCE7]/30 p-12 rounded-2xl text-center relative border border-green-100 hover:border-green-300 transition duration-300">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-[#3ccf13] text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-md border-4 border-white">
                        2
                    </div>
                    <div class="h-24 flex justify-center items-center mb-2">
                        <component :is="IconDownload" />
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-2">Unduh Surat</h3>
                    <p class="text-slate-500 text-sm">Unduh dengan mudah</p>
                </div>

                <div class="bg-[#DCFCE7]/30 p-12 rounded-2xl text-center relative border border-green-100 hover:border-green-300 transition duration-300">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-[#3ccf13] text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-md border-4 border-white">
                        3
                    </div>
                    <div class="h-24 flex justify-center items-center mb-2">
                        <component :is="IconSearch" />
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-2">Lihat Hasil</h3>
                    <p class="text-slate-500 text-sm">Hasil dalam hitungan menit</p>
                </div>
            </div>
        </section>

        <footer class="bg-[#F0FDF4] pt-20 px-6 md:px-12">
            <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 mb-16">
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <component :is="IconLogo" />
                        <div class="flex flex-col leading-none">
                            <span class="font-bold text-lg text-slate-800 tracking-wide">SMART</span>
                            <span class="text-xs text-slate-500 uppercase tracking-[0.2em]">LETTER</span>
                        </div>
                    </div>
                    <div class="text-sm text-slate-600 space-y-1">
                        <p class="font-medium">Gedung Fakultas Ilmu Keperawatan</p>
                        <p>Jl. Kaligawe Raya, Terboyo Kulon,</p>
                        <p>50112, Indonesia.</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Contact</h4>
                    <div class="space-y-4 text-sm text-slate-600">
                        <div class="flex items-center gap-3">
                            <span class="text-green-600">📞</span> 
                            <span>+62 857-4745-0205</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-green-600">✉️</span> 
                            <span>fik.unissula.ac.id</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-green-600">📍</span> 
                            <span>Semarang, Jawa Tengah, Indonesia</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-green-600">📠</span> 
                            <span>(024) 6583584 ext. 266</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Related Link</h4>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li><a href="#" class="hover:text-green-600 transition">Universitas Islam Sultan Agung</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Fakultas Ilmu Keperawatan</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">UNISSULA Career</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Cilad UNISSULA</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">RSI Sultan Agung</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-green-200 bg-[#1e293b] -mx-6 md:-mx-12 px-6 py-6 text-center">
                <p class="text-xs text-white">
                    © Copyright 2026 - Fakultas Ilmu Keperawatan - Universitas Islam Sultan Agung
                </p>
            </div>
        </footer>
    </div>
</template>