@layout('templates.main')
@section('content')
	<blockquote>
			<h1>Tabel Laporan Barang Masuk</h1>
			<small>Tabel dibawah ini merupakan data Laporan</small>
			<small><a href="{{URL::to('../menu')}}">Kembali Ke Menu</a></small><hr>
	</blockquote><br>
<table class="table table-condensed">
				<tr class="info">
						<td><b>No</b></td>
						<td><b>Supplier</b></td>
						<td><b>Barang</b></td>
						<td><b>Jumlah</b></td>
				</tr>
				{{Form::hidden($no=1)}}
				@foreach(Barangmasuk::with('User')->order_by('created_at', 'desc')->take(10)->get() as $barangmasuk)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$barangmasuk->suplier}}</td>					
					<td>{{$barangmasuk->barang}}</td>					
					<td>{{$barangmasuk->jumlah}}</td>				
				</tr>
				 @endforeach
			  </table>
			  <br>
			  </div>
@endsection