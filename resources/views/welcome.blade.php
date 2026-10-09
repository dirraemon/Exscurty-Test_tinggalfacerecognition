<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exscurty Test - Secure Online Examination</title>
    <!-- Tailwind CSS CDN untuk styling cepat & rapi -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold text-indigo-600">🛡️ Exscurty Test</span>
            </div>
            <div class="space-x-4">
                <a href="/login" class="text-slate-600 hover:text-indigo-600 font-medium">Masuk</a>
                <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:py-32">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
            Ujian Online Aman dengan <span class="text-indigo-600">Face Recognition</span>
        </h1>
        <p class="max-w-2xl mx-auto text-lg text-slate-600 mb-8">
            Platform ujian berbasis web yang dilengkapi sistem pengawasan cerdas (anti-cheat proctoring) untuk menjamin integritas setiap ujian akademik maupun sertifikasi.
        </p>
        <div class="flex justify-center space-x-4">
            <a href="/login" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:bg-indigo-700 transition">Mulai Ujian Sekarang</a>
            <a href="#features" class="bg-white text-slate-700 border border-slate-300 px-6 py-3 rounded-xl font-semibold hover:bg-slate-50 transition">Pelajari Fitur</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-slate-200">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Fitur Unggulan Kami</h2>
            <p class="text-slate-600 mt-2">Dirancang khusus untuk mengantisipasi kecurangan secara real-time.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <div class="text-3xl mb-4">📸</div>
                <h3 class="text-xl font-semibold text-slate-900 mb-2">Real-Time Face Recognition</h3>
                <p class="text-slate-600">Memastikan peserta ujian yang hadir sesuai dengan data profil terdaftar menggunakan kamera.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <div class="text-3xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold text-slate-900 mb-2">Anti-Cheat Proctoring</h3>
                <p class="text-slate-600">Mendeteksi aktivitas mencurigakan selama ujian berlangsung untuk menjaga objektivitas.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <div class="text-3xl mb-4">📊</div>
                <h3 class="text-xl font-semibold text-slate-900 mb-2">Dashboard Admin Intuitif</h3>
                <p class="text-slate-600">Memantau jalannya ujian, rekapitulasi nilai, dan log aktivitas peserta dengan mudah.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-8 text-center text-slate-500 text-sm">
        <p>&copy; 2026 Exscurty Test Team. All rights reserved.</p>
    </footer>

</body>
</html>