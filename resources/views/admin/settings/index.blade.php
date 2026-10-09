```blade
@extends('layouts.admin')

@section('title', 'Pengaturan')

@section('breadcrumb', 'Pengaturan')

@section('content')

    <!-- PAGE HEADING -->
    <div class="page-heading">

        <h1>Pengaturan</h1>

        <p>
            Kelola profil, konfigurasi ujian, monitoring, dan keamanan sistem.
        </p>

    </div>


    <div class="row g-3">

        <!-- LEFT MENU -->
        <div class="col-xl-3 col-lg-4">

            <div class="panel settings-menu">

                <div class="settings-menu-title">
                    PENGATURAN
                </div>


                <a href="#profile"
                   class="settings-link active">

                    <i class="bi bi-person"></i>

                    <div>
                        <strong>Profil Administrator</strong>
                        <span>Informasi akun admin</span>
                    </div>

                </a>


                <a href="#exam"
                   class="settings-link">

                    <i class="bi bi-journal-check"></i>

                    <div>
                        <strong>Pengaturan Ujian</strong>
                        <span>Konfigurasi ujian</span>
                    </div>

                </a>


                <a href="#monitoring"
                   class="settings-link">

                    <i class="bi bi-shield-check"></i>

                    <div>
                        <strong>Monitoring</strong>
                        <span>Deteksi aktivitas</span>
                    </div>

                </a>


                <a href="#notification"
                   class="settings-link">

                    <i class="bi bi-bell"></i>

                    <div>
                        <strong>Notifikasi</strong>
                        <span>Pemberitahuan sistem</span>
                    </div>

                </a>


                <a href="#security"
                   class="settings-link">

                    <i class="bi bi-lock"></i>

                    <div>
                        <strong>Keamanan</strong>
                        <span>Password dan akses</span>
                    </div>

                </a>

            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="col-xl-9 col-lg-8">


            <!-- PROFILE -->
            <div class="panel mb-3"
                 id="profile">

                <div class="settings-header">

                    <div>

                        <div class="panel-title">
                            Profil Administrator
                        </div>

                        <div class="panel-subtitle">
                            Informasi akun yang digunakan untuk mengelola sistem.
                        </div>

                    </div>

                </div>


                <div class="profile-settings">

                    <div class="large-avatar">
                        P
                    </div>

                    <div>

                        <strong>
                            Putri
                        </strong>

                        <span>
                            Administrator
                        </span>

                        <button class="change-photo">
                            <i class="bi bi-camera me-1"></i>
                            Ubah Foto
                        </button>

                    </div>

                </div>


                <div class="row g-3 mt-2">

                    <div class="col-md-6">

                        <label class="settings-label">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Putri">

                    </div>


                    <div class="col-md-6">

                        <label class="settings-label">
                            Username
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="putri"
                            disabled>

                    </div>


                    <div class="col-md-6">

                        <label class="settings-label">
                            Email
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            value="admin@exscurty.test">

                    </div>


                    <div class="col-md-6">

                        <label class="settings-label">
                            Role
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Administrator"
                            disabled>

                    </div>

                </div>


                <div class="settings-footer">

                    <button class="btn btn-primary-custom">
                        <i class="bi bi-check2 me-1"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </div>


            <!-- EXAM SETTINGS -->
            <div class="panel mb-3"
                 id="exam">

                <div class="settings-header">

                    <div>

                        <div class="panel-title">
                            Pengaturan Ujian
                        </div>

                        <div class="panel-subtitle">
                            Atur konfigurasi default untuk pelaksanaan ujian.
                        </div>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Acak Soal
                        </strong>

                        <span>
                            Urutan soal peserta dibuat berbeda secara otomatis.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Acak Pilihan Jawaban
                        </strong>

                        <span>
                            Pilihan jawaban diacak untuk setiap peserta.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Batasi Waktu Ujian
                        </strong>

                        <span>
                            Peserta otomatis keluar ketika waktu habis.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Izinkan Melanjutkan Ujian
                        </strong>

                        <span>
                            Peserta dapat melanjutkan ujian setelah koneksi terputus.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox">

                    </div>

                </div>

            </div>


            <!-- MONITORING -->
            <div class="panel mb-3"
                 id="monitoring">

                <div class="settings-header">

                    <div>

                        <div class="panel-title">
                            Pengaturan Monitoring
                        </div>

                        <div class="panel-subtitle">
                            Atur sistem pendeteksian aktivitas mencurigakan.
                        </div>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Deteksi Perpindahan Tab
                        </strong>

                        <span>
                            Mencatat ketika peserta meninggalkan halaman ujian.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Monitoring Kamera
                        </strong>

                        <span>
                            Mencatat kondisi kamera selama ujian berlangsung.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Deteksi Copy / Paste
                        </strong>

                        <span>
                            Mencatat percobaan menyalin atau menempelkan teks.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Deteksi Perubahan Perangkat
                        </strong>

                        <span>
                            Mencatat perubahan perangkat selama ujian.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>

            </div>


            <!-- NOTIFICATION -->
            <div class="panel mb-3"
                 id="notification">

                <div class="settings-header">

                    <div>

                        <div class="panel-title">
                            Notifikasi
                        </div>

                        <div class="panel-subtitle">
                            Tentukan pemberitahuan yang ingin diterima administrator.
                        </div>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Log Kecurangan Baru
                        </strong>

                        <span>
                            Beri notifikasi ketika aktivitas mencurigakan terdeteksi.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Ujian Dimulai
                        </strong>

                        <span>
                            Beri notifikasi ketika ujian mulai dilaksanakan.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>


                <div class="setting-row">

                    <div>

                        <strong>
                            Ujian Selesai
                        </strong>

                        <span>
                            Beri notifikasi ketika periode ujian selesai.
                        </span>

                    </div>

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            checked>

                    </div>

                </div>

            </div>


            <!-- SECURITY -->
            <div class="panel"
                 id="security">

                <div class="settings-header">

                    <div>

                        <div class="panel-title">
                            Keamanan Akun
                        </div>

                        <div class="panel-subtitle">
                            Perbarui password untuk menjaga keamanan akun.
                        </div>

                    </div>

                </div>


                <div class="row g-3">

                    <div class="col-md-6">

                        <label class="settings-label">
                            Password Saat Ini
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Masukkan password">

                    </div>


                    <div class="col-md-6">

                        <label class="settings-label">
                            Password Baru
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Masukkan password baru">

                    </div>


                    <div class="col-md-6">

                        <label class="settings-label">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Ulangi password baru">

                    </div>

                </div>


                <div class="settings-footer">

                    <button class="btn btn-primary-custom">

                        <i class="bi bi-lock me-1"></i>

                        Perbarui Password

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- STYLE -->
    <style>

        .settings-menu {
            padding: 10px;
        }


        .settings-menu-title {
            color: #475569;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 10px 12px;
            margin-bottom: 4px;
        }


        .settings-link {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 12px;

            color: #64748b;
            text-decoration: none;

            border-radius: 8px;

            margin-bottom: 3px;

            transition: .2s;
        }


        .settings-link i {
            width: 32px;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #10182d;

            border-radius: 8px;

            font-size: 14px;
        }


        .settings-link strong {
            display: block;
            color: #cbd5e1;
            font-size: 11px;
            font-weight: 600;
        }


        .settings-link span {
            display: block;
            color: #475569;
            font-size: 9px;
            margin-top: 3px;
        }


        .settings-link:hover {
            background: #151d35;
            color: white;
        }


        .settings-link.active {
            background: rgba(124,58,237,.12);
            color: #a78bfa;
        }


        .settings-link.active i {
            background: rgba(124,58,237,.15);
            color: #a78bfa;
        }


        .settings-link.active strong {
            color: #a78bfa;
        }


        .settings-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding-bottom: 18px;

            border-bottom: 1px solid #1d2740;

            margin-bottom: 18px;
        }


        .profile-settings {
            display: flex;
            align-items: center;
            gap: 14px;

            padding: 14px;

            background: #10182d;

            border: 1px solid #1d2740;

            border-radius: 9px;
        }


        .large-avatar {
            width: 50px;
            height: 50px;

            border-radius: 12px;

            background: #7c3aed;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 17px;
            font-weight: 700;
        }


        .profile-settings strong {
            display: block;
            color: white;
            font-size: 13px;
        }


        .profile-settings span {
            display: block;
            color: #64748b;
            font-size: 10px;
            margin-top: 3px;
        }


        .change-photo {
            background: transparent;
            border: none;
            color: #a78bfa;
            font-size: 9px;
            padding: 0;
            margin-top: 6px;
        }


        .settings-label {
            color: #64748b;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 7px;
        }


        .settings-footer {
            display: flex;
            justify-content: flex-end;

            padding-top: 18px;
            margin-top: 20px;

            border-top: 1px solid #1d2740;
        }


        .setting-row {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 15px 0;

            border-bottom: 1px solid #1d2740;
        }


        .setting-row:last-child {
            border-bottom: none;
        }


        .setting-row strong {
            display: block;
            color: #cbd5e1;
            font-size: 11px;
        }


        .setting-row span {
            display: block;
            color: #475569;
            font-size: 9px;
            margin-top: 4px;
        }


        .form-check-input {
            width: 34px !important;
            height: 18px !important;

            background-color: #1d2740;
            border-color: #293652;

            cursor: pointer;
        }


        .form-check-input:checked {
            background-color: #7c3aed;
            border-color: #7c3aed;
        }


        .form-check-input:focus {
            box-shadow: 0 0 0 2px rgba(124,58,237,.15);
        }


        .form-control:disabled {
            background: #0a1020;
            color: #475569;
            border-color: #1c2740;
        }


        @media(max-width: 768px) {

            .settings-link div {
                display: none;
            }

            .settings-link {
                justify-content: center;
            }

            .settings-menu-title {
                text-align: center;
            }

        }

    </style>

@endsection
```
