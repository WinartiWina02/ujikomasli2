@extends('admin')
@section('js-plugin')
    <script>$('#data-form').trigger('reset');</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Tag</div>
                <div class="card-body">
                    <form action="{{ route('tag.store') }}"  id="data-form" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                    <label for="">Tag</label>
                                    <input class="form-control{{ $errors->has('nama_tag') ? ' has-error' : '' }}" type="text"
                                    name="nama_tag" id="" required>
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
                                <a href="{{ url('/admin/tag') }}" style="margin-left:580px;"  class="btn btn-outline-info">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
