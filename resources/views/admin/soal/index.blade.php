@extends('layouts.admin')

@section('title', 'Bank Soal')

@section('breadcrumb', 'Management / Bank Soal')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center">

        <div>

            <h1>Bank Soal</h1>

            <p>
                Kelola soal yang digunakan dalam setiap ujian.
            </p>

        </div>

        <button class="btn btn-primary-custom">

            <i class="bi bi-plus-lg me-1"></i>

            Tambah Soal

        </button>

    </div>

</div>


<div class="panel">

    <div class="table-responsive">

        <table class="table custom-table">

            <thead>

                <tr>

                    <th>#</th>
                    <th>SOAL</th>
                    <th>UJIAN</th>
                    <th>TIPE</th>
                    <th>AKSI</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>01</td>

                    <td>
                        Apa yang dimaksud dengan database?
                    </td>

                    <td>
                        Basis Data
                    </td>

                    <td>
                        Pilihan Ganda
                    </td>

                    <td>

                        <button class="btn-outline-custom">
                            <i class="bi bi-pencil"></i>
                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection