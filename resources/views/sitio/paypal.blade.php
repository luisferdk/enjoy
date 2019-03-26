<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paypal</title>
</head>
<body>

@if(ENV('SANDBOX')==true)
	<form id="form" action="https://www.sandbox.paypal.com/webscr" method="post">
	<input type="hidden" name="business" value="luisdk.03-facilitator@gmail.com">
@else
	<form id="form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="business" value="widder1604@hotmail.com">
@endif
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="item_name" value="Reservation Renny Travel">
	<input type="hidden" name="item_number" value="1">
	<input type="hidden" name="amount" value="{{ session('reservation')['precio'] }}">
	<input type="hidden" name="first_name" value="{{ session('reservation')['nombre'] }}">
	<input type="hidden" name="last_name" value="{{ session('reservation')['apellido'] }}">
	<input type="hidden" name="night_phone_a" value="{{ session('reservation')['telefono'] }}">
	<input type="hidden" name="email" value="{{ session('reservation')['correo'] }}">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="cancel_return" value="{{ url('/ipn') }}">
	<input type="hidden" name="notify_url" value="{{ url('/ipn') }}">
	<input type="hidden" name="return" value="{{ url('/ipn') }}">
</form>
<script>
	document.getElementById('form').submit();
</script>
</body>
</html>