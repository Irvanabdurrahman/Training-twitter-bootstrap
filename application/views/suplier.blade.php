@layout('templates.main')
@section('content')
<blockquote>
			<h1>FORM SUPPLIER</h1>
			<small>Merupakan form untuk input data supplier</small>
			<small><a href="{{URL::to('../menu')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('suplier') }}
        {{ $errors->first('id', Alert::error(":message")) }}
        {{ Form::text('id', Input::old('id'),array('placeholder'=>'ID'))}}<br>
	
        {{ $errors->first('nama', Alert::error(":message")) }}
        {{ Form::text('nama', Input::old('nama'), array('placeholder'=>'Nama'))}}<br>
		
        {{ $errors->first('alamat', Alert::error(":message")) }}
        {{Form::textarea('alamat', Input::old('alamat'), array('rows' => '3', 'placeholder'=>'Alamat'))}}<br>
		
        {{Button::info_submit('Tambah')}}
        {{Button::info_reset('Batal')}}
		<br>
    {{ Form::close() }}<br>
	<hr><blockquote>
			<h1>Tabel Supplier</h1>
			<small>Tabel dibawah ini merupakan data diri supplier</small>
	</blockquote><br>
<table class="table table-hover">
				<tr class="info">
						<td><b>No</b></td>
						<td><b>ID</b></td>
						<td><b>Nama</b></td>
						<td><b>Alamat</b></td>
						<td><b>Aksi</b></td>
				</tr>
				{{Form::hidden($no=1)}}
				@foreach(Suplier::with('User')->order_by('created_at', 'desc')->take(10)->get() as $suplier)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$suplier->id}}</td>					
					<td>{{$suplier->nama}}</td>					
					<td>{{$suplier->alamat}}</td>				
					<td>{{Form::open('hapus','delete')}}
					{{ Button::success_submit('Hapus', array('class' => 'btn-small')) }}
					{{ Form::hidden('id',$suplier->id)}}
					{{ Form::close() }}</td>
				</tr>
				 @endforeach
			  </table>
			  <br>
			  </div>
@endsection