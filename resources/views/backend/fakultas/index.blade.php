@extends('admin')

@section('css')
        <link href="{{asset('assets/template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Fakultas</h5><br>
                <center><br>
                        <a href="{{ route('fakultas.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Fakultas</th>
                                <th>Nama Jurusan</th>
                                <th>Penulis</th>
                                <th>Foto</th>
                                <th>Slug</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fakultas as $data)
                            <tr>
                                <td>{{$data->nama_fakultas}}</td>
                                  <td>@foreach ($data->jurusan as $item)
                                     <div class="badge badge-info"> {{ $item->nama_jurusan }}</div>
                                  @endforeach</td>
                                <td>{{$data->user->name}}</td>
                                <td><img src="{{ asset('assets/img/fakultas/'.$data->foto) }}" alt="" height="50px" width="100px"></td>
                                <td>{{$data->slug}}</td>
                            <td style="text-align: center;">
                                <form action="{{route('fakultas.destroy', $data->id)}}" method="post">
                                    {{csrf_field()}}
                                <a href="{{route('fakultas.edit', $data->id)}}"
                                    class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
