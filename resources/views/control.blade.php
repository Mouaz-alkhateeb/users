@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					control
				</div>
				<div class="panel-body">
					<div class="bs-example" data-example-id="panel-without-body-with-table">
						<div class="panel panel-default">
							<div class="panel-heading">panel heading</div>
							<table class="table">
								<thead>
									<tr>
										 <th>id</th>
										 <th>name</th>
										 <th>email</th>
										 <th>role</th>
									</tr>
								</thead>
								<tbody>
								@foreach($users as $user)
									<tr>
										<th scope="row">{{$user->id}}</th>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>
											@if(Auth::user()->role ==2 || $user->id==1)
											Disable
											@else
											<div class="form-group" style="margin-bottom: 0px;">
												<form method="post" action="/updaterole/{{$user->id}}">
													{{csrf_field()}}
													<select class="form-control" name="role" onchange="this.form.submit();">
														<option value="1" {{ ( $user -> role == 1) ? 'selected':null }}>Admin</option>
														<option value="2" {{ ( $user -> role == 2) ? 'selected':null }}>Manager</option>
														<option value="3" {{ ( $user -> role == 3) ? 'selected':null }}>User</option>
													</select>
												</form>
											</div>
											@endif
										</td>
									</tr>
								@endforeach
								</tbody>
								
							</table>


						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>
@endsection