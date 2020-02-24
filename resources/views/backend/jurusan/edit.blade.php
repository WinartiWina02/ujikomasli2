@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Jurusan</div>
                  <div class="card-body">
                         <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post"  enctype="multipart/form-data">
                             <input name="_method" type="hidden" value="PATCH">
                                 {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Nama Jurusan</label>
                                        <input class="form-control{{ $errors->has('nama_jurusan') ? ' has-error' : '' }}" type="text"
                                        name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" required>
                                       @if ($errors->has('nama_jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jurusan') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    @if (isset($jurusan) && $jurusan->foto)
                                    <p>
                                        <img src="{{ asset('assets/img/jurusan/'
                                        .$jurusan->foto.'') }}"
                                        style="margin-top:15px;margin-bottom:15px;
                                        max-height:100px; border:1px; border-color:black;">
                                        </p>
                                        @endif
                                    <input class="form-control{{ $errors->has('foto') ? ' has-error' : '' }}" type="file"
                                    name="foto" id="" value="{{ $jurusan->foto }}">
                                    @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                            @endif
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
