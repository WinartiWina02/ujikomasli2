@extends('admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tabel Jurusan</h5><br>
                <center><br>
                    <a href="{{ route('jurusan.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama jurusan</th>
                                <th>Slug</th>
                                <th>Foto</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($jurusan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- samakan dengan yang ada di dtabase --}}
                                <td>{{ $data->nama_jurusan }}</td>
                                <td>{{$data->slug}}</td>
                                <td><img src="{{ asset('assets/img/jurusan/'.$data->foto) }}" alt="" height="50px" width="100px"></td>
                                <td>
                                    <center><form action="{{route('jurusan.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('jurusan.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                         <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                     </form>
                                 </center>
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
