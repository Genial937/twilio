@role('Client')
<a href="#" class="btn btn-default shadow btn-outline-success">
  Top Up
</a>
<a href="#!" class="btn btn-primary lift">
  Balance: Kes. {{ App\Http\Controllers\Helpers\HelpersController::get_client_balance() }}
</a>
@endrole