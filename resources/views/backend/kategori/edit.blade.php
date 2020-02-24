@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Petugas</div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="">Kategori</label>
                                        <input class="form-control{{ $errors->has('nama_kategori') ? ' has-error' : '' }}" type="text"
                                        name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
                                       @if ($errors->has('nama_kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_kategori') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                    </button>
                                    <a href="{{ url('/admin/kategori') }}"  style="margin-left:599px;" class="btn btn-outline-danger">Batal</a>
                                </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
