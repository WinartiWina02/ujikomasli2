@extends('admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/template/vendor/select2/select2.min.css')}}">
@endsection

@section('js-plugin')
    <script src="{{asset('assets/template/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
        $('#formnya').trigger('reset');
        });
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Fakultas</div>
                            </center>
                            <div class="card-body">
                                <form action="{{route('fakultas.store')}}" method="post"  id="formnya" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                        <label for="">Nama Fakultas</label>
                                        <input class="form-control" type="text" name="nama_fakultas">
                                    </div>
                                         </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Nama Jurusan</label>
                                        <select class="form-control" id="select2-jurusan"
                                        name="jurusan[]"  multiple="multiple" required>
                                         @foreach ($jurusan as $data)
                                                <option value="{{$data->id}}">
                                                {{$data->nama_jurusan}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file"  name="foto" id="foto" class="form-control" required>
                                </div>
                                    <br>
                                    <br>
                                   <div class="row">
                                       <div class="col-md-2">
                                            <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                       </div>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
