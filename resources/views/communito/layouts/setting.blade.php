@extends('communito.layouts.home')
@section('setting')


<div class="row">
	<div class="col-sm-7">
		<h1>General Account Settings</h1>
	</div>
	
</div>

<div class="row" style="margin-top: 20px; font-weight: bold;font-size: 20px;">
	<div class="col-sm-12 ">
		<table class="table table-dark">

			<tr>
				<td>Name</td>
				<td>{{ $users->fname }} {{ $users->sname }}</td>
				<td>Edit</td>
			</tr>
			<tr>
				<td>Department</td>
				<td>{{ $users->dept }}</td>
				<td>Edit</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>{{ $users->sem }}</td>
				<td>Edit</td>
			</tr>
			<tr>
				<td>Mobile number</td>
				<td>8849476499</td>
				<td>Edit</td>
			</tr>

			<tr>
				<td>Email ID</td>
				<td>{{ $users->email }}</td>
				<td>Edit</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>**********</td>
				<td>Edit</td>
			</tr>

		</table>
	</div>
</div>





@endsection

@section('optionsetting')


<div class="row">
	<div class="col-sm-12">
		<h1>Option</h1>
		<div class="row" style="padding-top: 20px;">
		    <div class="col-sm-12">
		    	<button href="#" class="form-control menubtn">General</button>
		    </div>
		</div>
		<div class="row">
		    <div class="col-sm-12">
			    <button href="#" class="form-control menubtn">Privacy</button>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
		    	<button href="#" class="form-control menubtn">Blocking</button>
		    </div>
		</div>
		<div class="row">
		    <div class="col-sm-12">
			    <button href="#" class="form-control menubtn">Notification</button>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
		        <button href="#" class="form-control menubtn">Help</button>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
		        <button href="#" class="form-control menubtn">Help</button>
		    </div>
		</div>
	</div>
</div>



@endsection