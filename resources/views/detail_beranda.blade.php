@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Postingan</div>

                    <div class="card-body">
                        <table class="table">

                            <tbody>
                                <tr>
                                    <td scope="row">Judul</td>
                                    <td>{{ $postingan->judul }}</td>
                                </tr>
                                <tr>
                                    <td scopeos="row">Penulis</td>
                                    <td>{{ $postingan->penulis }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Isi</td>
                                    <td>{{ $postingan->isi }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Tanggal</td>
                                    <td>{{ $postingan->tanggalDibuat }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Kategori</td>
                                    <td>{{ $postingan->kategori->namaKategori }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a type="button" class="btn btn-primary" href="/">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
