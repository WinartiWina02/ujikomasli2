@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Jurusan</div>
                <div class="card-body">
                    <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                             <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input class="form-control{{ $errors->has('nama_jurusan') ? ' has-error' : '' }}" type="text"
                                name="nama_jurusan" id="" required>
                                @if ($errors->has('nama_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jurusan') }}</strong>
                            </span>
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file"  name="foto" id="foto" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/admin/jurusan') }}" class="btn btn-outline-info">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
