@extends('layouts.admin')

@section('title', 'Tambah Ujian')

@section('breadcrumb', 'Management / Ujian / Tambah')

@section('content')

<div class="page-heading">

    <h1>Tambah Ujian</h1>

    <p>
        Buat dan atur jadwal ujian baru.
    </p>

</div>


<div class="panel">

    <form action="#" method="POST">

        @csrf

        <div class="row g-4">

            <!-- TITLE -->

            <div class="col-md-8">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Judul Ujian

                </label>

                <input type="text"
                       name="title"
                       class="form-control"
                       placeholder="Contoh: Ujian Pemrograman Web"
                       style="background:#10182d;
                              border-color:#293652;
                              color:white">

            </div>


            <!-- DURATION -->

            <div class="col-md-4">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Durasi

                </label>

                <div class="input-group">

                    <input type="number"
                           name="duration"
                           class="form-control"
                           placeholder="90"
                           style="background:#10182d;
                                  border-color:#293652;
                                  color:white">

                    <span class="input-group-text"
                          style="background:#151d35;
                                 border-color:#293652;
                                 color:#94a3b8">

                        Menit

                    </span>

                </div>

            </div>


            <!-- DATE -->

            <div class="col-md-6">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Tanggal Ujian

                </label>

                <input type="date"
                       name="date"
                       class="form-control"
                       style="background:#10182d;
                              border-color:#293652;
                              color:#94a3b8">

            </div>


            <!-- TIME -->

            <div class="col-md-6">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Waktu Mulai

                </label>

                <input type="time"
                       name="start_time"
                       class="form-control"
                       style="background:#10182d;
                              border-color:#293652;
                              color:#94a3b8">

            </div>


            <!-- DESCRIPTION -->

            <div class="col-12">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Deskripsi

                </label>

                <textarea name="description"
                          rows="4"
                          class="form-control"
                          placeholder="Tambahkan deskripsi atau instruksi ujian..."
                          style="background:#10182d;
                                 border-color:#293652;
                                 color:white"></textarea>

            </div>


            <!-- STATUS -->

            <div class="col-md-6">

                <label class="form-label text-white"
                       style="font-size:12px">

                    Status

                </label>

                <select name="status"
                        class="form-select"
                        style="background:#10182d;
                               border-color:#293652;
                               color:#94a3b8">

                    <option value="draft">
                        Draft
                    </option>

                    <option value="active">
                        Aktif
                    </option>

                </select>

            </div>


            <!-- BUTTON -->

            <div class="col-12">

                <hr style="border-color:#1d2740">

                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('admin.ujian.index') }}"
                       class="btn-outline-custom text-decoration-none">

                        Batal

                    </a>

                    <button type="submit"
                            class="btn btn-primary-custom">

                        <i class="bi bi-check-lg me-1"></i>

                        Simpan Ujian

                    </button>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection