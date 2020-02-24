@extends('admin')
@section('js-plugin')
    <script>$('#data-form').trigger('reset');</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Membuat Data kategori</div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" id="data-form" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                             <div class="form-group">
                                    <label for="">Kategori</label>
                                    <input class="form-control{{ $errors->has('nama_kategori') ? ' has-error' : '' }}" type="text"
                                    name="nama_kategori" id="" required>
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
                                 <a href="{{ url('/admin/kategori') }}" style="margin-left:580px;" class="btn btn-outline-info">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
