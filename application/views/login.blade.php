@layout('templates.main')
@section('content')<br>
<div class="span4 offset4 well">
    {{ Form::open('login') }}
        <!-- check for login errors flash var -->
        @if (Session::has('login_errors'))
            {{ Alert::error("Username or password incorrect.",array('class'=>'span3'))}}
        @endif
        <!-- username field -->
        <br>
       {{ Form::text('username', Input::old('username'),array('placeholder'=>'Username', 'class'=>'span3'))}}<br>
		{{ Form::password('password',array('placeholder'=>'Password', 'class'=>'span3'))}}<br>
        <!-- submit button -->
		{{Button::info_submit('Login')}}
        {{Button::info_reset('Cancel')}}
    {{ Form::close() }}
</div>
@endsection