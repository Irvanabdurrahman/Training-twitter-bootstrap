@layout('templates.main')
@section('content')
<blockquote>
			<h1>Barang Masuk</h1>
			<small>Merupakan form untuk data barang masuk</small>
			<small><a href="{{URL::to('../menu')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('barang_masuk2') }}
        {{ $errors->first('tanggal', Alert::error(":message")) }}
        {{ Form::date('tanggal', Input::old('tanggal'),array('placeholder'=>'Tanggal'))}}<br>
        
        {{ $errors->first('suplier', Alert::error(":message")) }}
        {{ Form::text('suplier', Input::old('suplier'), array('placeholder'=>'suplier'))}}<br>
        {{Button::info_submit('OK')}}
		<br>
    {{ Form::close() }}<br>
@endsection