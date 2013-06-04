@layout('templates.main')
@section('content')
<blockquote>
			<h1>Barang Masuk</h1>
			<small>Merupakan form untuk input data barang</small>
			<small><a href="{{URL::to('../menu')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('barang_masuk2') }}
		 {{ $errors->first('tanggal', Alert::error(":message")) }}
        {{ Form::date('tanggal', Input::old('tanggal'),array('placeholder'=>'Tanggal'))}}<br>
		
        {{ $errors->first('suplier', Alert::error(":message")) }}
        {{ Form::text('suplier', Input::old('suplier'), array('placeholder'=>'suplier'))}}<br>
		
        {{ $errors->first('jumlah', Alert::error(":message")) }}
        {{ Form::text('jumlah', Input::old('jumlah'),array('placeholder'=>'Jumlah'))}}<br>
		
        {{ $errors->first('barang', Alert::error(":message")) }}
        {{ Form::text('barang', Input::old('barang'), array('placeholder'=>'Barang'))}}<br>
			
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
						<td><b>Supplier</b></td>
						<td><b>Barang</b></td>
						<td><b>Jumlah</b></td>
						<td><b>Aksi</b></td>
				</tr>
				{{Form::hidden($no=1)}}
				@foreach(Barangmasuk::with('User')->order_by('created_at', 'desc')->take(10)->get() as $barangmasuk)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$barangmasuk->suplier}}</td>					
					<td>{{$barangmasuk->barang}}</td>					
					<td>{{$barangmasuk->jumlah}}</td>				
					<td>{{Form::open('hapusBarangMasuk','delete')}}
					{{ Button::success_submit('Hapus', array('class' => 'btn-small')) }}
					{{ Form::hidden('id',$barangmasuk->id)}}
					{{ Form::close() }}</td>
				</tr>
				 @endforeach
			  </table>
			  <br>
			  </div>
@endsection