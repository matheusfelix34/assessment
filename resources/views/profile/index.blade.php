@extends('layouts/layout')

@section('content')

@if (session('status'))
<div class="alert alert-danger">
{{ session('status') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
{{ session('success')}}
</div>    
@endif


<fieldset>
<legend>Manage Profiles</legend>


<a href="profile/create"><button type="button" class="btn btn-primary">REGISTER PROFILES</button><br><br></a>



<table id="table_id" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" style="background-color: #fff;">
<thead>
    <tr>
            <th><center>First Name</th>
            <th><center>Last name</th>        
            <th class="width_acoes" style="width:190px;"><center>AÇÕES</th>
       
    </tr>
    
</thead>
</table>
    

</fieldset>
@endsection
