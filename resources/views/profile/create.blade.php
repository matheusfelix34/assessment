@extends('layouts/layout')

@section('content')

	<form method="post" name="profile-form" id="profile-form" action="{{url('')}}" required>
		{{ csrf_field() }}
			@include('profile.form')
	<div align="center">       
		<br>             
		<a href="{{ url('/profile') }}" class="btn btn-primary">Voltar</a>
		
        <button type="button" id="register-button" class="btn btn-primary">Register</button>
	</div>

	<br/><br/>

	</form>

    @push('scripts')
       <script>
       
       </script>
    @endpush
	
	

@endsection

