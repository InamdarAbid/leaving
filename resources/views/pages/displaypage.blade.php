@extends('layout.index');

@section('content');
{{--  @if()  --}}
@foreach($data as $d)
    <div class="container">
	<b><u><center>COLLEGE LEAVING CERTIFICATE</center></u></b><BR>
		<div class = "row">
			<div class = "col-sm-offset-9">
				Date :
			</div>
			<div class = "col-sm-2">
			
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				1.
			</div>
			<div class = "col-sm-11">
				Name of the student (in full) <u>{{$d->full_name}}</u>
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				2.
			</div>
			<div class = "col-sm-11">
				Caste  
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				3.
			</div>
			<div class = "col-sm-11">
				Place of birth  
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				4.
			</div>
			<div class = "col-sm-11">
				Date of birth <u>{{$d->date_of_birth}}</u> and in (words)  
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				5.
			</div>
			<div class = "col-sm-11">
				Institute last attended   
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				6.
			</div>
			<div class = "col-sm-11">
				Date of addmission   {{$d->admission_year}}
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				7.
			</div>
			<div class = "col-sm-5">
				Progress   
			</div>
			<div>
				8. Conduct
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				9.
			</div>
			<div class = "col-sm-5">
				Date of living institute 
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				10.
			</div>
			<div class = "col-sm-11">
				BE ({{$d->branch}})
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				11.
			</div>
			<div class = "col-sm-11">
				Reason for leaving institute
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				12.
			</div>
			<div class = "col-sm-11">
				Remarks
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				Certified that the above information is in accordance with the institute register.
			</div>						
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				Date :___________________
			</div>						
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				<button class="btn btn-success">Print</button>	
			</div>
			<div class=" col-sm-offset-10 col-sm-1">
				<button class="btn btn-danger">Edit</button>
			</div>			
		</div>
	</div>
@endforeach
@endsection