@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				<div align="left"> 
				You have {{ $num_chars }}
				@if ($num_chars > 1)
					characters
				@else
					character
				@endif
				</div>
				<div align="right">
				<a href="characters/new"> @if (isset($data)) $data @endif create new</a>
				</div>
				</div>

				<div class="pure-g">
    				<div class="pure-u-1-3"><p><pre>{{ print_r($chars) }}</pre></p></div>
    				<div class="pure-u-1-3"><p>Thirds</p></div>
    				<div class="pure-u-1-3"><p>Thirds</p></div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection
