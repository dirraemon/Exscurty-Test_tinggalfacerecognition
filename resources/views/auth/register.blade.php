<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Exscurty Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex items-center justify-center h-screen">

    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">Buat Akun Baru</h2>

        <!-- Tampilkan Error jika validasi gagal -->
        @if ($errors->any())
            <div class="mb-4 bg-red-50 text-red-600 p-3 rounded-lg text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-slate-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-600">
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-medium mb-2">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-600">
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-medium mb-2">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-600">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition">Daftar</button>
        </form>

        <p class="text-center text-slate-600 text-sm mt-4">
            Sudah punya akun? <a href="/login" class="text-indigo-600 font-medium">Masuk di sini</a>
        </p>
    </div>

</body>
</html>