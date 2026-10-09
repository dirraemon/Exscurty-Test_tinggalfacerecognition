@extends('layouts.admin')

@section('title', 'Peserta')

@section('breadcrumb', 'Management / Peserta')

@section('content')

<div class="page-heading">

    <h1>Daftar Peserta</h1>

    <p>
        Kelola peserta yang terdaftar dalam sistem ujian.
    </p>

</div>


<div class="panel">

    <div class="panel-header">

        <div>

            <div class="panel-title">
                Peserta Terdaftar
            </div>

            <div class="panel-subtitle">
                Data peserta dari sistem Exscurty Test.
            </div>

        </div>

    </div>


    <div class="table-responsive">

        <table class="table custom-table">

            <thead>

                <tr>

                    <th>#</th>
                    <th>NAMA PESERTA</th>
                    <th>EMAIL</th>
                    <th>UJIAN</th>
                    <th>STATUS</th>
                    <th>AKSI</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>01</td>

                    <td>
                        <strong class="text-white">
                            Andi Saputra
                        </strong>
                    </td>

                    <td>
                        andi@email.com
                    </td>

                    <td>
                        Pemrograman Web
                    </td>

                    <td>
                        <span class="status status-active">
                            Selesai
                        </span>
                    </td>

                    <td>

                        <button class="btn-outline-custom">
                            <i class="bi bi-eye"></i>
                        </button>

                    </td>

                </tr>


                <tr>

                    <td>02</td>

                    <td>
                        <strong class="text-white">
                            Siti Rahma
                        </strong>
                    </td>

                    <td>
                        siti@email.com
                    </td>

                    <td>
                        Basis Data
                    </td>

                    <td>
                        <span class="status status-active">
                            Sedang Ujian
                        </span>
                    </td>

                    <td>

                        <button class="btn-outline-custom">
                            <i class="bi bi-eye"></i>
                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection