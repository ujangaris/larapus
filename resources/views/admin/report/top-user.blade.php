@extends('admin.templates.default')

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Laporan User Teraktif</h3>
        </div>
        <div class="box-body">


            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jumlah Pinjaman</th>
                      <th>Bergabung</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->borrow_count }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

@endsection

