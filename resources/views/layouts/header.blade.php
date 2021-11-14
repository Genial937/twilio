@role('Client')
<a href="#" class="btn btn-default shadow btn-outline-success">
  Top Up
</a>
<a href="#!" class="btn btn-primary lift">
  Balance: Kes. {{ App\Http\Controllers\Helpers\HelpersController::get_client_balance() }}
</a>
@endrole
@role('Admin')
<div class="btn-group" style="width: 200px">
  <button type="button" class="btn btn-default shadow btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Teams
  </button>
  <div class="dropdown-menu">
    @php
        $clients = App\Http\Controllers\Helpers\HelpersController::teams();
    @endphp
    @foreach ($clients as $client)
    <a class="dropdown-item" href="#">{{ $client->name }}</a>
    @endforeach
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ route('clients.create') }}"> <i class="fa fa-plus-circle"></i> Add another team</a>
  </div>
</div>
@endrole