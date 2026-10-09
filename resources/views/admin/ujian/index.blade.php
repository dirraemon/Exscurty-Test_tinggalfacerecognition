@extends('layouts.admin')

@section('title', 'Manajemen Ujian')

@section('breadcrumb', 'Management / Ujian')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center">

        <div>

            <h1>Manajemen Ujian</h1>

            <p>
                Kelola jadwal, durasi, soal, dan status ujian.
            </p>

        </div>

        <a href="{{ route('admin.ujian.create') }}"
           class="btn btn-primary-custom">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Ujian

        </a>

    </div>

</div>


<div class="panel">

    <!-- SEARCH -->

    <div class="row g-2 mb-4">

        <div class="col-md-6">

            <div class="input-group">

                <span class="input-group-text"
                      style="background:#10182d;border-color:#293652;color:#64748b">

                    <i class="bi bi-search"></i>

                </span>

                <input type="text"
                       class="form-control"
                       placeholder="Cari nama ujian..."
                       style="background:#10182d;border-color:#293652;color:white">

            </div>

        </div>


        <div class="col-md-3">

            <select class="form-select"
                    style="background:#10182d;border-color:#293652;color:#94a3b8">

                <option>Semua Status</option>
                <option>Aktif</option>
                <option>Draft</option>
                <option>Selesai</option>

            </select>

        </div>

    </div>


    <!-- TABLE -->

    <div class="table-responsive">

        <table class="table custom-table">

            <thead>

                <tr>

                    <th>#</th>
                    <th>NAMA UJIAN</th>
                    <th>JADWAL</th>
                    <th>DURASI</th>
                    <th>PESERTA</th>
                    <th>STATUS</th>
                    <th>AKSI</th>

                </tr>

            </thead>


            <tbody>

                <tr>

                    <td>01</td>

                    <td>
                        <strong class="text-white">
                            Pemrograman Web
                        </strong>

                        <br>

                        <small style="color:#64748b">
                            40 soal
                        </small>
                    </td>

                    <td>
                        12 Okt 2026
                        <br>
                        <small style="color:#64748b">
                            09:00 WIB
                        </small>
                    </td>

                    <td>90 Menit</td>

                    <td>45 Peserta</td>

                    <td>
                        <span class="status status-active">
                            Aktif
                        </span>
                    </td>

                    <td>

                        <div class="dropdown">

                            <button class="btn-outline-custom"
                                    data-bs-toggle="dropdown">

                                <i class="bi bi-three-dots"></i>

                            </button>

                            <ul class="dropdown-menu dropdown-menu-dark">

                                <li>
                                    <a class="dropdown-item"
                                       href="#">
                                        <i class="bi bi-eye me-2"></i>
                                        Detail
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item"
                                       href="#">
                                        <i class="bi bi-pencil me-2"></i>
                                        Edit
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item text-danger"
                                       href="#">
                                        <i class="bi bi-trash me-2"></i>
                                        Hapus
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </td>

                </tr>


                <tr>

                    <td>02</td>

                    <td>
                        <strong class="text-white">
                            Basis Data
                        </strong>

                        <br>

                        <small style="color:#64748b">
                            35 soal
                        </small>
                    </td>

                    <td>
                        15 Okt 2026
                        <br>
                        <small style="color:#64748b">
                            10:00 WIB
                        </small>
                    </td>

                    <td>60 Menit</td>

                    <td>62 Peserta</td>

                    <td>
                        <span class="status status-draft">
                            Draft
                        </span>
                    </td>

                    <td>

                        <div class="dropdown">

                            <button class="btn-outline-custom"
                                    data-bs-toggle="dropdown">

                                <i class="bi bi-three-dots"></i>

                            </button>

                            <ul class="dropdown-menu dropdown-menu-dark">

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-eye me-2"></i>
                                        Detail
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-pencil me-2"></i>
                                        Edit
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item text-danger" href="#">
                                        <i class="bi bi-trash me-2"></i>
                                        Hapus
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection