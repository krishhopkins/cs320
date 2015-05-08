@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/characters') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nickname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>



						<div class="form-group">
							<label class="col-md-4 control-label">Class</label>
							<div class="col-md-6">
								   <select name="class-type">
										<option value="volvo">WARRIOR</option>
										<option value="saab">MAGE</option>
										<option value="fiat">HEALER</option>
										<option value="audi">MONK</option>
					</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label"><strong>Stats: </strong>
							<?php foreach($st as $i) echo $i." "; ?> (STR/DEX/INT/LUK);
							</label>
						</div>

						<input type="hidden" name="st" value="<?php foreach($st as $i) echo $i;?>"

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Create new character
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
