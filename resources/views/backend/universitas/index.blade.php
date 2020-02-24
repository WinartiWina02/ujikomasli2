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
                <h5 class="card-header">Data Tables Universitas</h5><br>
                <center><br>
                        <a href="{{ route('universitas.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Universitas</th>
                                <th>Nama Fakultas</th>
                                <th>Slug</th>
                                <th>Foto</th>
                                <th>Alamat</th>
                                <th>Akreditasi</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universitas as $data)
                            <tr>
                                <td>{{$data->nama_universitas}}</td>
                                <td>@foreach ($data->fakultas as $item)
                                        <ul><li>
                                        {{ $item->nama_fakultas }}
                                        </ul></li>
                                @endforeach</td>
                                <td>{{$data->slug}}</td>
                                 <td><img src="{{ asset('assets/img/universitas/'.$data->foto) }}" alt="" height="50px" width="100px"></td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->akreditas}}</td>
								<td style="text-align: center;">
                                    <form action="{{route('universitas.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('universitas.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                   <a href="{{route('universitas.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
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
