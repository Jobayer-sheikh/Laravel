

@foreach($data as $users)
	<li>
		{{$users['first_name']}} {{$users['last_name']}}
	</li>
@endforeach