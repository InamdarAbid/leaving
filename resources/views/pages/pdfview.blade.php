@extends('layout.index')

@section('content')

{{--  @if()  --}}
@foreach($data as $d)
    <div class="container">
	<b><u><center>COLLEGE LEAVING CERTIFICATE</center></u></b><BR>
	<form action = "pdfview" method = "POST">
		<input type="hidden" value="{{$d->uid}}"  name="uid">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
		<div class = "row">
			<div class = "col-sm-offset-7 col-sm-1" align="right">
				Date : {{$date}}				
			</div>
				
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				1. Name of the student (in full) <u>{{$d->full_name}}</u>
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				2. Caste  
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				3. Place of birth  
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				4. Date of birth <u>{{$d->date_of_birth}}</u> and in (words)  
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				5. Institute last attended   
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				6. Date of addmission   {{$d->admission_year}}
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				7. Progress    8. Conduct					 
			</div>
					
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				9. Date of living institute 
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				10. BE ({{$d->branch}})
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				11. Reason for leaving institute
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				12. Remarks
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
	</form>
	
	</div>
	
@endforeach
@endsection