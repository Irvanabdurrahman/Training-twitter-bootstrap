@layout('templates.main')
@section('content')
<div class="span10 offset1 well">
<blockquote>
			<h1>Menu</h1>
			<small>Halaman utama web</small>
	</blockquote><hr>
<ul class="nav nav-list">
	<li ><a href="{{URL::to('suplier')}}"><i class="icon-user"></i> Supplier</a></li>
	<li ><a href="{{URL::to('barang')}}"><i class="icon-folder-close"></i> Barang</a></li>
	<li ><a href="{{URL::to('barang_masuk1')}}"><i class="icon-arrow-down"></i> Barang Masuk</a></li>
	<li ><a href="{{URL::to('laporan')}}"><i class="icon-book"></i> Laporan</a></li>
</ul>
</div>
@endsection