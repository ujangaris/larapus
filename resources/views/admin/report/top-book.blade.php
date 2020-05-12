@extends('admin.templates.default')

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Laporan Buku Terlaris</h3>
        </div>
        <div class="box-body">


            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Jumlah Buku</th>
                      <th>Tital Dipinjam</th>
                      <th>Penulis</th>
                      <th>Sampul</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

