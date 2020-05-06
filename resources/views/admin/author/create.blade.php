@extends('admin.templates.default')


@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data Penulis</h3>
        </div>
        <div class="box-body">
            <form action="{{ route('admin.author.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" placeholder="masukan nama penulis" class="form-control" type="text" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
