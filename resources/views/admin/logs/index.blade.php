```blade
@extends('layouts.admin')

@section('title', 'Log Kecurangan')

@section('breadcrumb', 'Monitoring / Log Kecurangan')

@section('content')

    <!-- PAGE HEADING -->
    <div class="page-heading">

        <div class="d-flex justify-content-between align-items-start">

            <div>
                <h1>Log Kecurangan</h1>

                <p>
                    Pantau dan tinjau aktivitas mencurigakan yang terdeteksi selama ujian.
                </p>
            </div>

            <button class="btn btn-outline-custom">
                <i class="bi bi-download me-2"></i>
                Export Log
            </button>

        </div>

    </div>


    <!-- STATISTICS -->
    <div class="row g-3 mb-4">

        <!-- TOTAL LOG -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon purple">
                        <i class="bi bi-shield-exclamation"></i>
                    </div>

                    <span style="font-size:10px;color:#64748b;">
                        Hari ini
                    </span>

                </div>

                <div class="stat-title">
                    TOTAL LOG
                </div>

                <div class="stat-number">
                    47
                </div>

            </div>

        </div>


        <!-- HIGH RISK -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon red">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>

                    <span class="status status-danger">
                        Tinggi
                    </span>

                </div>

                <div class="stat-title">
                    RISIKO TINGGI
                </div>

                <div class="stat-number">
                    8
                </div>

            </div>

        </div>


        <!-- REVIEW -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon blue">
                        <i class="bi bi-eye"></i>
                    </div>

                    <span style="font-size:10px;color:#38bdf8;">
                        Review
                    </span>

                </div>

                <div class="stat-title">
                    BELUM DITINJAU
                </div>

                <div class="stat-number">
                    12
                </div>

            </div>

        </div>


        <!-- NORMAL -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon green">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <span class="status status-active">
                        Normal
                    </span>

                </div>

                <div class="stat-title">
                    AKTIVITAS NORMAL
                </div>

                <div class="stat-number">
                    215
                </div>

            </div>

        </div>

    </div>


    <!-- FILTER -->
    <div class="panel mb-3">

        <div class="panel-header">

            <div>

                <div class="panel-title">
                    Filter Aktivitas
                </div>

                <div class="panel-subtitle">
                    Gunakan filter untuk menemukan log tertentu.
                </div>

            </div>

            <button class="btn btn-outline-custom">
                <i class="bi bi-arrow-clockwise me-1"></i>
                Reset
            </button>

        </div>


        <div class="row g-3">

            <!-- SEARCH -->
            <div class="col-lg-4">

                <label class="form-label-custom">
                    Cari Peserta
                </label>

                <div class="search-box">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nama peserta atau ID...">

                </div>

            </div>


            <!-- EXAM -->
            <div class="col-lg-3">

                <label class="form-label-custom">
                    Ujian
                </label>

                <select class="form-select custom-select">

                    <option selected>Semua Ujian</option>

                    <option>
                        Keamanan Jaringan
                    </option>

                    <option>
                        Basis Data
                    </option>

                    <option>
                        Pemrograman Web
                    </option>

                    <option>
                        Sistem Operasi
                    </option>

                </select>

            </div>


            <!-- TYPE -->
            <div class="col-lg-2">

                <label class="form-label-custom">
                    Jenis Aktivitas
                </label>

                <select class="form-select custom-select">

                    <option selected>Semua</option>

                    <option>
                        Tab
                    </option>

                    <option>
                        Kamera
                    </option>

                    <option>
                        Keluar Ujian
                    </option>

                    <option>
                        Perangkat
                    </option>

                </select>

            </div>


            <!-- RISK -->
            <div class="col-lg-3">

                <label class="form-label-custom">
                    Tingkat Risiko
                </label>

                <select class="form-select custom-select">

                    <option selected>Semua Risiko</option>

                    <option>
                        Tinggi
                    </option>

                    <option>
                        Sedang
                    </option>

                    <option>
                        Rendah
                    </option>

                </select>

            </div>

        </div>

    </div>


    <!-- LOG TABLE -->
    <div class="panel">

        <div class="panel-header">

            <div>

                <div class="panel-title">
                    Aktivitas Terdeteksi
                </div>

                <div class="panel-subtitle">
                    Daftar aktivitas peserta selama proses ujian.
                </div>

            </div>

            <span style="font-size:11px;color:#64748b;">
                47 aktivitas
            </span>

        </div>


        <div class="table-responsive">

            <table class="table custom-table">

                <thead>

                    <tr>

                        <th>Peserta</th>

                        <th>Aktivitas</th>

                        <th>Ujian</th>

                        <th>Waktu</th>

                        <th>Risiko</th>

                        <th>Status</th>

                        <th style="text-align:center;">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <!-- LOG 1 -->

                    <tr>

                        <td>

                            <div class="participant">

                                <div class="participant-avatar">
                                    AF
                                </div>

                                <div>

                                    <strong>
                                        Ahmad Fauzan
                                    </strong>

                                    <small>
                                        PST-00124
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="activity">

                                <div class="activity-icon danger">
                                    <i class="bi bi-window"></i>
                                </div>

                                <span>
                                    Berpindah tab browser
                                </span>

                            </div>

                        </td>


                        <td>
                            Keamanan Jaringan
                        </td>


                        <td>
                            19:42:18
                        </td>


                        <td>

                            <span class="risk high">
                                Tinggi
                            </span>

                        </td>


                        <td>

                            <span class="status status-danger">
                                Belum Dicek
                            </span>

                        </td>


                        <td class="text-center">

                            <button
                                class="action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- LOG 2 -->

                    <tr>

                        <td>

                            <div class="participant">

                                <div class="participant-avatar">
                                    SR
                                </div>

                                <div>

                                    <strong>
                                        Siti Rahma
                                    </strong>

                                    <small>
                                        PST-00131
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="activity">

                                <div class="activity-icon warning">
                                    <i class="bi bi-camera-video-off"></i>
                                </div>

                                <span>
                                    Kamera tidak aktif
                                </span>

                            </div>

                        </td>


                        <td>
                            Basis Data
                        </td>


                        <td>
                            19:35:44
                        </td>


                        <td>

                            <span class="risk medium">
                                Sedang
                            </span>

                        </td>


                        <td>

                            <span class="status status-danger">
                                Belum Dicek
                            </span>

                        </td>


                        <td class="text-center">

                            <button
                                class="action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- LOG 3 -->

                    <tr>

                        <td>

                            <div class="participant">

                                <div class="participant-avatar">
                                    RP
                                </div>

                                <div>

                                    <strong>
                                        Rizky Pratama
                                    </strong>

                                    <small>
                                        PST-00145
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="activity">

                                <div class="activity-icon danger">
                                    <i class="bi bi-box-arrow-right"></i>
                                </div>

                                <span>
                                    Keluar dari halaman ujian
                                </span>

                            </div>

                        </td>


                        <td>
                            Keamanan Jaringan
                        </td>


                        <td>
                            19:21:09
                        </td>


                        <td>

                            <span class="risk high">
                                Tinggi
                            </span>

                        </td>


                        <td>

                            <span class="status status-finished">
                                Ditinjau
                            </span>

                        </td>


                        <td class="text-center">

                            <button
                                class="action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- LOG 4 -->

                    <tr>

                        <td>

                            <div class="participant">

                                <div class="participant-avatar">
                                    DP
                                </div>

                                <div>

                                    <strong>
                                        Dina Putri
                                    </strong>

                                    <small>
                                        PST-00152
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="activity">

                                <div class="activity-icon warning">
                                    <i class="bi bi-laptop"></i>
                                </div>

                                <span>
                                    Perangkat berubah
                                </span>

                            </div>

                        </td>


                        <td>
                            Pemrograman Web
                        </td>


                        <td>
                            19:10:32
                        </td>


                        <td>

                            <span class="risk medium">
                                Sedang
                            </span>

                        </td>


                        <td>

                            <span class="status status-danger">
                                Belum Dicek
                            </span>

                        </td>


                        <td class="text-center">

                            <button
                                class="action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- LOG 5 -->

                    <tr>

                        <td>

                            <div class="participant">

                                <div class="participant-avatar">
                                    NA
                                </div>

                                <div>

                                    <strong>
                                        Nadia Amalia
                                    </strong>

                                    <small>
                                        PST-00163
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="activity">

                                <div class="activity-icon danger">
                                    <i class="bi bi-copy"></i>
                                </div>

                                <span>
                                    Percobaan menyalin teks
                                </span>

                            </div>

                        </td>


                        <td>
                            Basis Data
                        </td>


                        <td>
                            18:58:47
                        </td>


                        <td>

                            <span class="risk high">
                                Tinggi
                            </span>

                        </td>


                        <td>

                            <span class="status status-finished">
                                Ditinjau
                            </span>

                        </td>


                        <td class="text-center">

                            <button
                                class="action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>


        <!-- PAGINATION -->

        <div class="pagination-wrapper">

            <span>
                Menampilkan 1–5 dari 47 aktivitas
            </span>

            <div>

                <button class="page-btn">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="page-btn active">
                    1
                </button>

                <button class="page-btn">
                    2
                </button>

                <button class="page-btn">
                    3
                </button>

                <button class="page-btn">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

        </div>

    </div>


    <!-- DETAIL MODAL -->

    <div class="modal fade"
         id="detailModal"
         tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content detail-modal">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Detail Aktivitas
                    </h5>

                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                    </button>

                </div>


                <div class="modal-body">

                    <div class="detail-user">

                        <div class="detail-avatar">
                            AF
                        </div>

                        <div>

                            <strong>
                                Ahmad Fauzan
                            </strong>

                            <span>
                                PST-00124
                            </span>

                        </div>

                    </div>


                    <div class="detail-list">

                        <div>
                            <span>Aktivitas</span>
                            <strong>Berpindah tab browser</strong>
                        </div>

                        <div>
                            <span>Ujian</span>
                            <strong>Keamanan Jaringan</strong>
                        </div>

                        <div>
                            <span>Waktu</span>
                            <strong>19:42:18</strong>
                        </div>

                        <div>
                            <span>Risiko</span>
                            <strong class="text-danger">
                                Tinggi
                            </strong>
                        </div>

                        <div>
                            <span>IP Address</span>
                            <strong>
                                192.168.1.24
                            </strong>
                        </div>

                        <div>
                            <span>Perangkat</span>
                            <strong>
                                Chrome / Windows
                            </strong>
                        </div>

                    </div>


                    <div class="alert-box">

                        <i class="bi bi-info-circle"></i>

                        <span>
                            Aktivitas ini terdeteksi secara otomatis
                            oleh sistem monitoring ujian.
                        </span>

                    </div>

                </div>


                <div class="modal-footer">

                    <button
                        class="btn btn-outline-custom"
                        data-bs-dismiss="modal">

                        Tutup

                    </button>

                    <button
                        class="btn btn-primary-custom">

                        <i class="bi bi-check2 me-1"></i>
                        Tandai Ditinjau

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- CUSTOM STYLE -->

    <style>

        .form-label-custom {
            display: block;
            color: #64748b;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 7px;
            text-transform: uppercase;
            letter-spacing: .4px;
        }


        .search-box {
            position: relative;
        }


        .search-box i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 13px;
            z-index: 2;
        }


        .search-box input {
            padding-left: 35px;
        }


        .form-control,
        .custom-select {

            background: #10182d;
            border: 1px solid #293652;
            color: #cbd5e1;
            border-radius: 8px;
            font-size: 12px;
            min-height: 38px;

        }


        .form-control::placeholder {
            color: #475569;
        }


        .form-control:focus,
        .custom-select:focus {

            background: #10182d;
            color: white;
            border-color: #7c3aed;
            box-shadow: 0 0 0 2px rgba(124,58,237,.12);

        }


        .custom-select option {
            background: #0d1428;
            color: #cbd5e1;
        }


        .participant {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        .participant-avatar {

            width: 31px;
            height: 31px;
            border-radius: 8px;
            background: rgba(124,58,237,.15);
            color: #a78bfa;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 10px;
            font-weight: 700;

        }


        .participant strong {

            display: block;
            color: #e2e8f0;
            font-size: 11px;

        }


        .participant small {

            display: block;
            color: #475569;
            font-size: 9px;
            margin-top: 2px;

        }


        .activity {

            display: flex;
            align-items: center;
            gap: 9px;

        }


        .activity-icon {

            width: 28px;
            height: 28px;
            border-radius: 7px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;

        }


        .activity-icon.danger {

            background: rgba(239,68,68,.12);
            color: #f87171;

        }


        .activity-icon.warning {

            background: rgba(245,158,11,.12);
            color: #fbbf24;

        }


        .risk {

            padding: 5px 9px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 700;

        }


        .risk.high {

            background: rgba(239,68,68,.12);
            color: #f87171;

        }


        .risk.medium {

            background: rgba(245,158,11,.12);
            color: #fbbf24;

        }


        .risk.low {

            background: rgba(16,185,129,.12);
            color: #34d399;

        }


        .action-btn {

            width: 31px;
            height: 31px;

            border: 1px solid #293652;
            background: transparent;
            color: #94a3b8;

            border-radius: 7px;

            transition: .2s;

        }


        .action-btn:hover {

            background: #151d35;
            color: white;
            border-color: #475569;

        }


        .pagination-wrapper {

            display: flex;
            justify-content: space-between;
            align-items: center;

            border-top: 1px solid #1d2740;

            padding-top: 18px;
            margin-top: 5px;

            color: #475569;
            font-size: 10px;

        }


        .page-btn {

            width: 30px;
            height: 30px;

            margin-left: 4px;

            border-radius: 7px;

            border: 1px solid #293652;
            background: transparent;

            color: #64748b;

            font-size: 10px;

        }


        .page-btn:hover {

            background: #151d35;
            color: white;

        }


        .page-btn.active {

            background: #7c3aed;
            border-color: #7c3aed;
            color: white;

        }


        .detail-modal {

            background: #0d1428;
            border: 1px solid #293652;
            border-radius: 13px;
            color: #cbd5e1;

        }


        .detail-modal .modal-header {

            border-bottom: 1px solid #1d2740;

        }


        .detail-modal .modal-title {

            color: white;
            font-size: 15px;
            font-weight: 600;

        }


        .detail-modal .modal-footer {

            border-top: 1px solid #1d2740;

        }


        .detail-user {

            display: flex;
            align-items: center;
            gap: 12px;

            padding: 14px;

            background: #10182d;
            border: 1px solid #1d2740;
            border-radius: 9px;

            margin-bottom: 18px;

        }


        .detail-avatar {

            width: 40px;
            height: 40px;

            border-radius: 10px;

            background: #7c3aed;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 700;

        }


        .detail-user strong {

            display: block;
            color: white;
            font-size: 13px;

        }


        .detail-user span {

            display: block;
            color: #64748b;
            font-size: 10px;
            margin-top: 3px;

        }


        .detail-list > div {

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 11px 0;

            border-bottom: 1px solid #1d2740;

        }


        .detail-list span {

            color: #64748b;
            font-size: 11px;

        }


        .detail-list strong {

            color: #cbd5e1;
            font-size: 11px;
            text-align: right;

        }


        .alert-box {

            display: flex;
            gap: 10px;

            margin-top: 18px;
            padding: 12px;

            background: rgba(124,58,237,.08);
            border: 1px solid rgba(124,58,237,.18);

            border-radius: 8px;

            color: #94a3b8;
            font-size: 10px;

        }


        .alert-box i {
            color: #a78bfa;
            font-size: 14px;
        }


        @media(max-width: 768px) {

            .pagination-wrapper {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

        }

    </style>

@endsection
```