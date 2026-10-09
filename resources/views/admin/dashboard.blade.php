```blade
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')

    <!-- PAGE HEADING -->
    <div class="page-heading">
        <h1>Dashboard</h1>
        <p>Selamat datang kembali, Putri. Berikut ringkasan aktivitas Exscurty Test.</p>
    </div>


    <!-- STATISTICS -->
    <div class="row g-3 mb-4">

        <!-- Total Ujian -->
        <div class="col-xl-3 col-md-6">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon purple">
                        <i class="bi bi-journal-text"></i>
                    </div>

                    <i class="bi bi-three-dots"
                       style="color:#475569"></i>
                </div>

                <div class="stat-title">
                    TOTAL UJIAN
                </div>

                <div class="stat-number">
                    12
                </div>

            </div>
        </div>


        <!-- Ujian Aktif -->
        <div class="col-xl-3 col-md-6">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon blue">
                        <i class="bi bi-play-circle"></i>
                    </div>

                    <span class="status status-active">
                        Aktif
                    </span>
                </div>

                <div class="stat-title">
                    UJIAN AKTIF
                </div>

                <div class="stat-number">
                    3
                </div>

            </div>
        </div>


        <!-- Peserta -->
        <div class="col-xl-3 col-md-6">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon green">
                        <i class="bi bi-people"></i>
                    </div>

                    <i class="bi bi-three-dots"
                       style="color:#475569"></i>
                </div>

                <div class="stat-title">
                    TOTAL PESERTA
                </div>

                <div class="stat-number">
                    248
                </div>

            </div>
        </div>


        <!-- Log Kecurangan -->
        <div class="col-xl-3 col-md-6">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon red">
                        <i class="bi bi-shield-exclamation"></i>
                    </div>

                    <span class="status status-danger">
                        Perlu Dicek
                    </span>
                </div>

                <div class="stat-title">
                    LOG KECURANGAN
                </div>

                <div class="stat-number">
                    17
                </div>

            </div>
        </div>

    </div>


    <!-- MAIN ROW -->
    <div class="row g-3">

        <!-- UJIAN TERBARU -->
        <div class="col-xl-8">

            <div class="panel">

                <div class="panel-header">

                    <div>
                        <div class="panel-title">
                            Ujian Terbaru
                        </div>

                        <div class="panel-subtitle">
                            Daftar ujian yang sedang dikelola
                        </div>
                    </div>

                    <a href="{{ route('admin.ujian.index') }}"
                       class="btn btn-outline-custom">
                        Lihat Semua
                    </a>

                </div>


                <div class="table-responsive">

                    <table class="table custom-table">

                        <thead>

                            <tr>
                                <th>Nama Ujian</th>
                                <th>Peserta</th>
                                <th>Durasi</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    <strong style="color:#f1f5f9;">
                                        Ujian Keamanan Jaringan
                                    </strong>

                                    <div style="font-size:10px;color:#64748b;margin-top:3px;">
                                        Dibuat 2 jam lalu
                                    </div>
                                </td>

                                <td>
                                    85 Peserta
                                </td>

                                <td>
                                    90 Menit
                                </td>

                                <td>
                                    <span class="status status-active">
                                        Aktif
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong style="color:#f1f5f9;">
                                        Ujian Basis Data
                                    </strong>

                                    <div style="font-size:10px;color:#64748b;margin-top:3px;">
                                        Dibuat kemarin
                                    </div>
                                </td>

                                <td>
                                    72 Peserta
                                </td>

                                <td>
                                    60 Menit
                                </td>

                                <td>
                                    <span class="status status-active">
                                        Aktif
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong style="color:#f1f5f9;">
                                        Pemrograman Web
                                    </strong>

                                    <div style="font-size:10px;color:#64748b;margin-top:3px;">
                                        Dibuat 3 hari lalu
                                    </div>
                                </td>

                                <td>
                                    91 Peserta
                                </td>

                                <td>
                                    90 Menit
                                </td>

                                <td>
                                    <span class="status status-finished">
                                        Selesai
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong style="color:#f1f5f9;">
                                        Sistem Operasi
                                    </strong>

                                    <div style="font-size:10px;color:#64748b;margin-top:3px;">
                                        Belum dipublikasikan
                                    </div>
                                </td>

                                <td>
                                    0 Peserta
                                </td>

                                <td>
                                    60 Menit
                                </td>

                                <td>
                                    <span class="status status-draft">
                                        Draft
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- QUICK ACTION -->
        <div class="col-xl-4">

            <div class="panel">

                <div class="panel-header">

                    <div>
                        <div class="panel-title">
                            Quick Actions
                        </div>

                        <div class="panel-subtitle">
                            Akses cepat pengelolaan sistem
                        </div>
                    </div>

                </div>


                <div class="d-grid gap-2">

                    <a href="{{ route('admin.ujian.create') }}"
                       class="btn btn-primary-custom">

                        <i class="bi bi-plus-lg me-2"></i>
                        Buat Ujian Baru

                    </a>


                    <a href="{{ route('admin.soal.index') }}"
                       class="btn btn-outline-custom">

                        <i class="bi bi-question-circle me-2"></i>
                        Kelola Bank Soal

                    </a>


                    <a href="{{ route('admin.peserta.index') }}"
                       class="btn btn-outline-custom">

                        <i class="bi bi-people me-2"></i>
                        Lihat Peserta

                    </a>


                    <a href="{{ route('admin.logs.index') }}"
                       class="btn btn-outline-custom">

                        <i class="bi bi-shield-exclamation me-2"></i>
                        Periksa Log Kecurangan

                    </a>

                </div>

            </div>


            <!-- EXAM SUMMARY -->
            <div class="panel mt-3">

                <div class="panel-header">

                    <div>
                        <div class="panel-title">
                            Status Ujian
                        </div>

                        <div class="panel-subtitle">
                            Ringkasan ujian saat ini
                        </div>
                    </div>

                </div>


                <div class="d-flex justify-content-between align-items-center mb-3">

                    <span style="font-size:12px;color:#94a3b8;">
                        Aktif
                    </span>

                    <strong style="font-size:13px;color:#34d399;">
                        3
                    </strong>

                </div>


                <div class="d-flex justify-content-between align-items-center mb-3">

                    <span style="font-size:12px;color:#94a3b8;">
                        Draft
                    </span>

                    <strong style="font-size:13px;color:#94a3b8;">
                        4
                    </strong>

                </div>


                <div class="d-flex justify-content-between align-items-center">

                    <span style="font-size:12px;color:#94a3b8;">
                        Selesai
                    </span>

                    <strong style="font-size:13px;color:#818cf8;">
                        5
                    </strong>

                </div>

            </div>

        </div>

    </div>


    <!-- LOG KECURANGAN -->
    <div class="panel mt-3">

        <div class="panel-header">

            <div>

                <div class="panel-title">
                    Aktivitas Kecurangan Terbaru
                </div>

                <div class="panel-subtitle">
                    Monitoring aktivitas mencurigakan selama ujian
                </div>

            </div>

            <a href="{{ route('admin.logs.index') }}"
               class="btn btn-outline-custom">

                Lihat Semua

            </a>

        </div>


        <div class="table-responsive">

            <table class="table custom-table">

                <thead>

                    <tr>
                        <th>Peserta</th>
                        <th>Aktivitas</th>
                        <th>Ujian</th>
                        <th>Waktu</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>
                            <strong style="color:#f1f5f9;">
                                Ahmad Fauzan
                            </strong>
                        </td>

                        <td>
                            Berpindah tab browser
                        </td>

                        <td>
                            Keamanan Jaringan
                        </td>

                        <td>
                            19:42
                        </td>

                        <td>
                            <span class="status status-danger">
                                Terdeteksi
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <strong style="color:#f1f5f9;">
                                Siti Rahma
                            </strong>
                        </td>

                        <td>
                            Kamera tidak aktif
                        </td>

                        <td>
                            Basis Data
                        </td>

                        <td>
                            19:35
                        </td>

                        <td>
                            <span class="status status-danger">
                                Perlu Dicek
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <strong style="color:#f1f5f9;">
                                Rizky Pratama
                            </strong>
                        </td>

                        <td>
                            Keluar dari halaman ujian
                        </td>

                        <td>
                            Keamanan Jaringan
                        </td>

                        <td>
                            19:21
                        </td>

                        <td>
                            <span class="status status-danger">
                                Terdeteksi
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            <strong style="color:#f1f5f9;">
                                Dina Putri
                            </strong>
                        </td>

                        <td>
                            Aktivitas normal
                        </td>

                        <td>
                            Pemrograman Web
                        </td>

                        <td>
                            19:10
                        </td>

                        <td>
                            <span class="status status-active">
                                Normal
                            </span>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>


    <!-- FOOTER INFORMATION -->
    <div class="mt-4"
         style="font-size:10px;color:#475569;text-align:center;">

        Exscurty Test Platform &copy; {{ date('Y') }}

        <span style="margin:0 6px;">•</span>

        Admin Monitoring System

    </div>

@endsection
```
