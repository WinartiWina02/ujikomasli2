@extends('admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/template/vendor/select2/select2.min.css')}}">
@endsection

@section('js-plugin')
    <script src="{{asset('assets/template/vendor/select2/select2.min.js')}}"></script>
    {{-- <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script> --}}
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Data Fakultas</div>
                        </center>
                            <div class="card-body">
                                <form action="{{route('fakultas.update',$fakultas->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                     <input type="hidden" name="_method" value="PATCH">
                                   <div class="form-group">
                                        <label for="">Nama Fakultas</label>
                                        <input class="form-control{{ $errors->has('nama_fakultas') ? ' has-error' : '' }}" type="text"
                                        name="nama_fakultas" value="{{ $fakultas->nama_fakultas }}" required>
                                       @if ($errors->has('nama_fakultas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_fakultas') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <select class="form-control{{ $errors->has('jurusan') ? ' has-error' : '' }}" type="text"
                                    name="jurusan[]" id="select2-jurusan"  multiple="multiple" required>
                                        @foreach ($jurusan as $data)
                                            <option value="{{$data->id}}"
                                            {{ (in_array($data->id, $select)) ?
                                            'selected="selected"' : ''}}>
                                            {{ $data->nama_jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    @if (isset($fakultas) && $fakultas->foto)
                                    <p>
                                        <img src="{{ asset('assets/img/fakultas/'
                                        .$fakultas->foto.'') }}"
                                        style="margin-top:15px;margin-bottom:15px;
                                        max-height:100px; border:1px; border-color:black;">
                                        </p>
                                        @endif
                                    <input class="form-control{{ $errors->has('foto') ? ' has-error' : '' }}" type="file"
                                    name="foto" id="" value="{{ $fakultas->foto }}">
                                    @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
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
