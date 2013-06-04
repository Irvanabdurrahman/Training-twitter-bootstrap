@layout('templates.main')
@section('content')
<blockquote>
			<h1>Form Barang</h1>
			<small>Merupakan form untuk input data barang</small>
			<small><a href="{{URL::to('../menu')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('barang') }}
        {{ $errors->first('kode', Alert::error(":message")) }}
        {{ Form::text('kode', Input::old('kode'),array('placeholder'=>'Kode'))}}<br>
       
        {{ $errors->first('nama', Alert::error(":message")) }}
        {{ Form::text('nama', Input::old('nama'), array('placeholder'=>'Nama'))}}<br>
		
        {{ $errors->first('harga', Alert::error(":message")) }}
        {{Form::text('harga', Input::old('harga'), array('placeholder'=>'Harga'))}}<br>
		
        {{Button::info_submit('Tambah')}}
        {{Button::info_reset('Batal')}}
		<br>
    {{ Form::close() }}<br>
	<hr><blockquote>
			<h1>Tabel Barang</h1>
			<small>Tabel dibawah ini merupakan data barang</small>
	</blockquote><br>
<table class="table table-hover">
				<tr class="info">
						<td><b>No</b></td>
						<td><b>Kode</b></td>
						<td><b>Nama</b></td>
						<td><b>Harga</b></td>
						<td><b>Aksi</b></td>
				</tr>
				{{Form::hidden($no=1)}}
				@foreach(Barang::with('User')->order_by('created_at', 'desc')->take(10)->get() as $barang)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$barang->kode}}</td>					
					<td>{{$barang->nama}}</td>					
					<td>{{$barang->harga}}</td>				
					<td>{{Form::open('hapusBarang','delete')}}
					{{ Button::success_submit('Hapus', array('class' => 'btn-small')) }}
					{{ Form::hidden('id',$barang->id)}}
					{{ Form::close() }}</td>
				</tr>
				 @endforeach
			  </table>
			  <br>
			  </div>
@endsection