@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('berita.index') }}" class="btn-outline-warning"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('berita.update',$beritas->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3  ">Gambar</label>
			  			<div class="col-md-9 pr-1">	
			  			<input type="file" name="gambar" class="form-control" value="{{ $beritas->gambar }}"  required>
			  			@if (isset($beritas) && $beritas->gambar)
                                            <p>
                                                <br>
                                            <img src="{{ asset('/assets/images/avatar/'.$beritas->gambar) }}" style="width:100px; height:100px;" alt="">
                                            </p>
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>

                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $beritas->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ket') ? ' has-error' : '' }}">
			  			<label class="control-label">ket</label>	
			  			<textarea id="text" type="ckeditor" name="ket" class="ckeditor" required>{{ $beritas -> ket}}</textarea>
			  			@if ($errors->has('ket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">
			  			<i class="fa fa-save">&nbsp</i>Edit</button>
			  			<button type="reset" class="btn btn-outline-success">
						 <i class="fa fa-refresh fa-spin"></i>&nbsp ulangi</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection 