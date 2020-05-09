@extends('admin.templates.default')


@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data Buku</h3>
        </div>
        <div class="box-body">
            <form action="{{ route('admin.book.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group @error('title') has-error @enderror">
                    <label for="nama">Judul</label>
                    <input  placeholder="masukan judul buku" class="form-control" type="text" name="title" value="{{ old('name') }}">
                    @error('title')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('description') has-error @enderror">
                    <label for="nama">Deskripsi</label>
                    <textarea name="description" class="form-control"  rows="3" placeholder="Tuliskan descripsi buku">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="nama">Penulis</label>
                    <select name="author_id" class="form-control">
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('cover') has-error @enderror">
                    <label for="nama">Sampul</label>
                    <input   class="form-control" type="file" name="cover">
                    @error('cover')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('qty') has-error @enderror">
                    <label for="nama">Jumlah Buku</label>
                    <input  placeholder="masukan jumlah buku" class="form-control" type="text" name="qty" value="{{ old('name') }}">
                    @error('qty')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
