@extends('layout.index');

@section('content');
	<div class="container">
		<div class="row">
			<div class="colcol-sm-12">
				<center><h1>Welcome to the college leaving certificate appliation</h1></center>
			</div>
		</div>
		<div class="col-sm-offsete-12">
			<form  method="post" action="display" >  
				<div class="form-group">	
					<label for="GR">Enter your GR number</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">			
					<input type="number" name="uid" class="form-control" required="true">
				</div>			
				<button type="submit" class="btn btn-success">Submit</button>
			</form>	
		</div>	
		
	</div>
@endsection