@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Tag</div>
                <div class="card-body">
                    <form action="{{ route('tag.update', $tag->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                                 <label for="">Tag</label>
                                        <input class="form-control{{ $errors->has('nama_tag') ? ' has-error' : '' }}" type="text"
                                        name="nama_tag" value="{{ $tag->nama_tag }}" required>
                                       @if ($errors->has('nama_tag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_tag') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                    </button>
                                     <a href="{{ url('/admin/tag') }}" style="margin-left:602px;"  class="btn btn-outline-danger">Batal</a>
                                </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
