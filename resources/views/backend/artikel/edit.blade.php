@extends('admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
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
                                <form action="{{route('artikel.update',$artikel->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                     <input type="hidden" name="_method" value="PATCH">

                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control{{ $errors->has('judul') ? ' has-error' : '' }}" type="text"
                                        name="judul" value="{{ $artikel->judul }}" required>
                                       @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        @if (isset($artikel) && $artikel->foto)
                                        <p>
                                           <img src="{{ asset('assets/img/artikel/'
                                           .$artikel->foto.'') }}"
                                           style="margin-top:15px;margin-bottom:15px;
                                           max-height:100px; border:1px; border-color:black;">
                                           </p>
                                         @endif
                                        <input class="form-control{{ $errors->has('foto') ? ' has-error' : '' }}" type="file"
                                        name="foto" id="" value="{{ $artikel->foto }}">
                                       @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tag</label>
                                        <select class="form-control{{ $errors->has('tag') ? ' has-error' : '' }}" type="text"
                                        name="tag[]" id="s2_demo3"  multiple="multiple" required>
                                         @foreach ($tag as $data)
                                                <option value="{{$data->id}}"
                                                {{ (in_array($data->id, $select)) ?
                                                'selected="selected"' : ''}}>
                                                {{ $data->nama_tag }}
                                                </option>
                                            @endforeach
                                        </select>
                                         @if ($errors->has('judul'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('tag') }}</strong>
                                            </span>
                                       @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control{{ $errors->has('kategori') ? ' has-error' : '' }}" type="text"
                                        name="id_kategori" id="s2_demo3" required>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}"
                                                @if($data->id == $artikel->id_kategori) selected="selected" @endif>{{ $data->nama_kategori }}
                                                </option>
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
                                            <textarea class="form-control{{ $errors->has('konten') ? ' has-error' : '' }}" type="text"
                                            name="konten" id="editor1" required>
                                            {{ $artikel->konten }}
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
