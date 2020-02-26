@extends('admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/template/vendor/select2/select2.min.css')}}">
@endsection

@section('js-plugin')
    <script src="{{asset('assets/template/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Universitas</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('universitas.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
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
                               {{-- <div class="form-group">
                                <label for="">Nama Fakultas</label>
                                <select class="form-control{{ $errors->has('nama_fakultas') ? ' has-error' : '' }}" type="text"
                                name="id_fakultas" id="s2_demo3" required>
                                    @foreach ($fakultas as $data)
                                        <option value="{{$data->id}}">
                                        {{$data->nama_fakultas}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('fakultas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fakultas') }}</strong>
                            </span>
                              @endif
                            </div> --}}
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
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input class="form-control{{ $errors->has('foto') ? ' has-error' : '' }}" type="file"
                                name="foto" id="" required>
                                @if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                                <label for="">Alamat</label>
                                <input class="form-control{{ $errors->has('alamat') ? ' has-error' : '' }}" type="text"
                                name="alamat" id="" required>
                                @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <label for="">Akreditasi</label>
                                <input class="form-control{{ $errors->has('akreditasi') ? ' has-error' : '' }}" maxlength="2" type="text"
                                name="akreditasi" id="" required>
                                @if ($errors->has('akreditasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('akreditasi') }}</strong>
                            </span>
                            @endif
                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
