@extends('admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/template/vendor/select2/select2.min.css')}}">
@endsection

@section('js-plugin')
    <script src="{{asset('assets/template/vendor/select2/select2.min.js')}}"></script>
    <script>$('#data-form').trigger('reset');</script>
    {{-- <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script> --}}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Universitas</div>
                <div class="card-body">
                    <form action="{{ route('universitas.store') }}" id="data-form" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Universitas</label>
                                <input class="form-control{{ $errors->has('nama_universitas') ? ' has-error' : '' }}" type="text"
                                name="nama_universitas" id="" required>
                                @if ($errors->has('nama_universitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_universitas') }}</strong>
                            </span>
                            @endif
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="">Nama Fakultas</label>
                            <select class="form-control" id="select2-fakultas"
                            name="fakultas[]"  multiple="multiple" required>
                                @foreach ($fakultas as $data)
                                    <option value="{{$data->id}}">
                                    {{$data->nama_fakultas}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file"  name="foto" id="foto" class="form-control" required>
                          </div>
                            </div>
                             <div class="form-group">
                                <label for="">Alamat</label>
                                <input class="form-control" type="text" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Akreditasi</label>
                                <input class="form-control" type="text" maxlength="1"  name="akreditas">
                            </div>
                              <div class="form-group">
                                <label for="">Konten</label>
                                <textarea class="form-control{{ $errors->has('konten') ? ' has-error' : '' }}"
                                name="konten"  id="editor1" required>
                                </textarea>
                                @if ($errors->has('konten'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('konten') }}</strong>
                                </span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/admin/universitas') }}" class="btn btn-outline-info">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
