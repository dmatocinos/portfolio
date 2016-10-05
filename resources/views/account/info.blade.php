@extends('..\layout')


@section('title')
	<h1>Account Information</h1>
@stop

@section('list')

	@foreach($bank_account as $account)
		<div>
			{{ $account->account_number }}
			{{ $account->Fname }}
			{{ $account->Lname }}
			{{ $account->created_at }}
			{{ $account->updated_at }}
		</div>
	@endforeach

@stop


