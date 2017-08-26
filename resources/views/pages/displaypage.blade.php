@extends('layout.index');

@section('content');
{{--  @if()  --}}
@foreach($data as $d)
    <div class="container">
	<b><u><center>COLLEGE LEAVING CERTIFICATE</center></u></b><BR>
	<form action = "pdfview" method = "POST">
		<input type="hidden" value="{{$d->uid}}"  name="uid">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
		<div class = "row">
			<div class = "col-sm-offset-8">
				Date :
			</div>
			<div class = "col-sm-3" >
				<p id = "DATE"></p>
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				1.
			</div>
			<div class = "col-sm-3">
				Name of the student (in full) 			</div>
			<div class = "col-sm-2">
				<input type = "text" name="name" value="{{$d->full_name}}" placeholder="{{$d->full_name}}">
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				2.
			</div>
			<div class = "col-sm-1">
				Caste  
			</div>
			<div class = "col-sm-2">
				<input name="caste" type = "text">
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				3.
			</div>
			<div class = "col-sm-2">
				Place of birth  
			</div>	
			<div class = "col-sm-2">
				<input name="palce_of_birth" type = "text">
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				4.
			</div>
			<div class = "col-sm-2">
				Date of birth    
			</div>
			<div class = "col-sm-2">
				<input type = "date" name="dob" value="{{$d->date_of_birth}}" placeholder="{{$d->date_of_birth}}">
			</div>
			<div class = "col-sm-2">
				and in (words) 
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				5.
			</div>
			<div class = "col-sm-2">
				Institute last attended   
			</div>
			<div class = "col-sm-5">
				<input name="last_institute" type = "text">
			</div>				
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				6.
			</div>
			<div class = "col-sm-2">
				Date of addmission   
			</div>	
			<div class = "col-sm-5">
				<input type = "date" name="doa" value ="{{$d->admission_year}}" placeholder="{{$d->admission_year}}">
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				7.
			</div>
			<div class = "col-sm-1">
				Progress   
			</div>
			<div class = "col-sm-3">
				<input name="progress" type = "text">
			</div>
			<div class = "col-sm-2">
				8. Conduct
			</div>	
			<div class = "col-sm-3">
				<input name="conduct" type = "text">
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				9.
			</div>
			<div class = "col-sm-3">
				Date of living institute 
			</div>
			<div class = "col-sm-5">
				<input type = "date" name="dol">
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
			<div class = "col-sm-3">
				Reason for leaving institute
			</div>
			<div class = "col-sm-3">
				<input type = "text" name="reason">
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-1">
				12.
			</div>
			<div class = "col-sm-1">
				Remarks
			</div>
			<div class = "col-sm-3">
				<input type = "text" name="remark">
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
			<div class="col-sm-1">
				Date :
			</div>
			<div class = "col-sm-5">
				<input type = "date" name="print_date">
			</div>							
		</div>
		<br>
		<div class="row" >
			<div class="col-sm-12">
				<button class="col-sm-1 btn btn-success" type="submit">Print</button>	
			</div>					
		</div>
	</form>
	{{--  <div class="row">
		<div class="col-sm-10">
			<button class="col-sm-1 btn btn-danger" type="submit">Edit</button>
		</div>
	</div>  --}}
	</div>
	<script>
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!

		var yyyy = today.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var today = dd+'/'+mm+'/'+yyyy;
		document.getElementById("DATE").value = today;
	</script>
@endforeach
@endsection