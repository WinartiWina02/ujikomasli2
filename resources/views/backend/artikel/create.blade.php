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
                                <div class="card-header">Tambah Artikel</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control{{ $errors->has('judul') ? ' has-error' : '' }}" type="text"
                                        name="judul" id="" required>
                                       @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Tag</label>
                                        <select class="form-control" id="select2-tag" type="text"
                                        name="tag[]"  multiple="multiple" required>
                                         @foreach ($tag as $data)
                                                <option value="{{$data->id}}">
                                                {{$data->nama_tag}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control{{ $errors->has('kategori') ? ' has-error' : '' }}" type="text"
                                        name="id_kategori" id="s2_demo3" required>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}">
                                                {{$data->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kategori') }}</strong>
                                    </span>
                                @endif
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
