<?php ob_start(); ?>

<!-- HERO SECTION -->
<section class="bg-gradient-to-br from-indigo-600 to-purple-600 text-white py-32">
    <div class="max-w-6xl mx-auto text-center px-6">

        <h1 class="text-5xl font-extrabold mb-6 leading-tight">
            Manajemen Event Mahasiswa Modern & Profesional
        </h1>

        <p class="text-lg text-gray-200 max-w-3xl mx-auto">
            EventOps membantu panitia mengelola event kampus dengan lebih cepat, rapi, dan terstruktur.
            Mulai dari proposal, tugas divisi, dokumentasi, hingga laporan akhir event — semuanya otomatis.
        </p>

        <div class="mt-10 flex justify-center gap-6">

            <!-- BUTTON LOGIN -->
            <a 
                href="/Final_Project/public/index.php?page=login" 
                class="px-6 py-3 bg-white text-indigo-700 font-semibold rounded-lg shadow-lg hover:bg-gray-100"
            >
                Mulai Login
            </a>

            <!-- FEATURES SCROLL -->
            <a href="#features" class="px-6 py-3 border border-white font-semibold rounded-lg hover:bg-white hover:text-indigo-700">
                Lihat Fitur
            </a>

        </div>

    </div>
</section>

<!-- FEATURES -->
<section id="features" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Fitur Unggulan</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="p-8 shadow-lg rounded-2xl border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold mb-3 text-indigo-600">Manajemen Event</h3>
                <p class="text-gray-600">Kelola data event, jadwal, timeline, dan update progress secara real-time.</p>
            </div>

            <div class="p-8 shadow-lg rounded-2xl border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold mb-3 text-indigo-600">Divisi & Tugas</h3>
                <p class="text-gray-600">Buat divisi panitia, tetapkan tugas, dan pantau penyelesaian tugas.</p>
            </div>

            <div class="p-8 shadow-lg rounded-2xl border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold mb-3 text-indigo-600">Approval Proposal</h3>
                <p class="text-gray-600">Upload proposal, revisi otomatis, serta sistem persetujuan digital.</p>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Tentang EventOps</h2>

        <p class="text-center text-gray-600 max-w-3xl mx-auto leading-relaxed">
            EventOps dibangun untuk mendukung kegiatan mahasiswa dalam merencanakan dan
            menjalankan event secara profesional. Dengan sistem ini, proses perencanaan event
            menjadi lebih efisien, transparan, dan mudah dipantau oleh seluruh divisi.
        </p>

    </div>
</section>

<?php 
$content = ob_get_clean();
$title   = "EventOps — Manage Student Events Professionally";

include __DIR__ . "/../layouts/main_landing.php";
?>
