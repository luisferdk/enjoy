<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<!-- view port meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Renny Travel</title>
<style type="text/css">
/* hacks */
* { -webkit-text-size-adjust:none; -ms-text-size-adjust:none; max-height:1000000px;}
table {border-collapse: collapse !important;}
body{
	font-size: 18px;
}
#outlook a {padding:0;}
.ReadMsgBody { width: 100%; }
.ExternalClass { width: 100%; }
.ExternalClass * { line-height: 100%; }
.ios_geo a { color:#1c1c1c !important; text-decoration:none !important; }
/* responsive styles */
@media only screen and (max-width: 600px) { 

	/* global styles */
	.hide{ display:none !important; display:none;}
	.blockwrap{ display:block !important; }
	.showme{ display:block !important; width: auto !important; overflow: visible !important; float: none !important; max-height:inherit !important; max-width:inherit !important; line-height: auto !important; margin-top:0px !important; visibility:inherit !important;}
	*[class].movedown{ display: table-footer-group !important;}
	*[class].moveup{ display: table-header-group !important; }
	
	/* font styles */
	*[class].textright{ text-align: right !important; }
	*[class].textleft{ text-align: left !important; }
	*[class].textcenter{ text-align: center !important; }
	*[class].font27{ font-size: 27px !important; font-weight:normal !important; line-height:27px !important; }
	
	/* width and heights */
	*[class].hX{ height:Xpx !important; }
	*[class].wX{ width:Xpx !important; }

}

</style>
</head>

<body style="margin:0; padding:0;" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!--[if gte mso 15]>
<style type="text/css" media="all">
tr { font-size:1px; mso-line-height-alt:0; mso-margin-top-alt:1px; }
</style>
<![endif]--> 


<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="top">
			<img height="150" src="{{ asset('img/logo.png') }}" alt="" />
				<table>
					<tr>
						<td colspan="2" style="color:#8dc740;text-align: center;">
							<h2 style="margin:30px 0 5px 0;">Reservation</h2>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Name:</td>
						<td style="width:50%;">{{ $reservation->nombre }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Lastname:</td>
						<td style="width:50%;">{{ $reservation->apellido }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Email:</td>
						<td style="width:50%;">{{ $reservation->correo }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Phone:</td>
						<td>{{ $reservation->telefono }}<td>
					</tr>
					@if($reservation->hotel!==null)
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Hotel:</td>
						<td>{{ $reservation->hotel }}<td>
					</tr>
					@endif
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Price:</td>
						<td>$ {{ $reservation->precio }}<td>
					</tr>
					<!--tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">ID Paypal:</td>
						<td>{{ substr($reservation->id_pago,-10) }}<td>
					</tr-->
					@if($reservation->comentarios!==null)
						<tr>
							<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Comments:</td>
							<td>{{ $reservation->comentarios }}<td>
						</tr>
					@endif
				</table>
				
			@foreach ($reservation->transfers as $key => $transfer)
				<table>
					<tr>
						<td colspan="2" style="color:#8dc740;text-align: center;">
							<h2 style="margin:30px 0 5px 0;">Transferred {{ count($reservation->transfers)>1?$key+1:'' }}</h2>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">From:</td>
						<td style="width:50%;">{{ $transfer->de }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">To:</td>
						<td style="width:50%;">{{ $transfer->para }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Passagers:</td>
						<td style="width:50%;">{{ $transfer->pasajeros }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">price:</td>
						<td>$ {{ $transfer->precio }}<td>
					</tr>
					@if($transfer->cervezas!="0")
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Beers:</td>
						<td>{{ $transfer->cervezas }}<td>
					</tr>
					@endif
					@if($transfer->sodas!="0")
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Sodas:</td>
						<td>{{ $transfer->sodas }}<td>
					</tr>
					@endif
					@if($transfer->vino!="0")
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Wine:</td>
						<td>{{ $transfer->vino }}<td>
					</tr>
					@endif
					@if($transfer->champagne!="0")
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Champagne:</td>
						<td>{{ $transfer->champagne }}<td>
					</tr>
					@endif
					
					@if($transfer->llegada_fecha!==null)
					<tr>
						<td colspan="2" style="text-align: center;">
							<h3 style="margin:15px 0 5px 0;">Arrive</h3>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Date:</td>
						<td style="width:50%;">{{ $transfer->llegada_fecha }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Hour:</td>
						<td style="width:50%;">{{ $transfer->llegada_hora }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">aeroline:</td>
						<td style="width:50%;">{{ $transfer->llegada_aerolinea }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Travel:</td>
						<td style="width:50%;">{{ $transfer->llegada_vuelo }}<td>
					</tr>
					@endif

					@if($transfer->salida_fecha!==null)
					<tr>
						<td colspan="2" style="text-align: center;">
							<h3 style="margin:15px 0 5px 0;">Way out</h3>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Date:</td>
						<td style="width:50%;">{{ $transfer->salida_fecha }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Hour:</td>
						<td style="width:50%;">{{ $transfer->salida_hora }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Aeroline:</td>
						<td style="width:50%;">{{ $transfer->salida_aerolinea }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Travel</td>
						<td style="width:50%;">{{ $transfer->salida_vuelo }}<td>
					</tr>
					@endif
				</table>
			@endforeach

			@foreach ($reservation->tours as $key => $tour)
				<table>
					<tr>
						<td colspan="2" style="color:#8dc740;text-align: center;">
							<h2 style="margin:30px 0 5px 0;">Tour {{ count($reservation->tours)>1?$key+1:'' }}</h2>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Tour:</td>
						<td style="width:50%;">{{ $tour->tour }}</td>
					</tr>
					@if($tour->horario!==null)
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Modality:</td>
						<td style="width:50%;">{{ $tour->modalidad }}</td>
					</tr>
					@endif
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Date:</td>
						<td style="width:50%;">{{ $tour->fecha }}</td>
					</tr>
					@if($tour->horario!==null)
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Schedule:</td>
						<td style="width:50%;">{{ $tour->horario }}</td>
					</tr>
					@endif
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Adults:</td>
						<td style="width:50%;">{{ $tour->adultos }}</td>
					</tr>
					@if($tour->ninos!==null)
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Kids:</td>
						<td style="width:50%;">{{ $tour->ninos }}</td>
					</tr>
					@endif
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Price:</td>
						<td style="width:50%;">$ {{ $tour->precio }}</td>
					</tr>
				</table>
			@endforeach

			@foreach ($reservation->vips as $key => $vip)
				<table>
					<tr>
						<td colspan="2" style="color:#8dc740;text-align: center;">
							<h2 style="margin:30px 0 5px 0;">VIP {{ count($reservation->vips)>1?$key+1:'' }}</h2>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Nº Peoples:</td>
						<td style="width:50%;">{{ $vip->pasajeros }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Price:</td>
						<td>$ {{ $vip->precio }}<td>
					</tr>
					
					@if($vip->llegada_fecha!==null)
					<tr>
						<td colspan="2" style="text-align: center;">
							<h3 style="margin:15px 0 5px 0;">Arrive</h3>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Date:</td>
						<td style="width:50%;">{{ $vip->llegada_fecha }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Hour:</td>
						<td style="width:50%;">{{ $vip->llegada_hora }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">aeroline:</td>
						<td style="width:50%;">{{ $vip->llegada_aerolinea }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Travel:</td>
						<td style="width:50%;">{{ $vip->llegada_vuelo }}<td>
					</tr>
					@endif

					@if($vip->salida_fecha!==null)
					<tr>
						<td colspan="2" style="text-align: center;">
							<h3 style="margin:15px 0 5px 0;">Way out</h3>
						</td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Date:</td>
						<td style="width:50%;">{{ $vip->salida_fecha }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Hour:</td>
						<td style="width:50%;">{{ $vip->salida_hora }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Aeroline:</td>
						<td style="width:50%;">{{ $vip->salida_aerolinea }}<td>
					</tr>
					<tr>
						<td style="color:#334960;width:50%;padding-right:5px;text-align:right;">Travel:</td>
						<td style="width:50%;">{{ $vip->salida_vuelo }}<td>
					</tr>
					@endif
				</table>
			@endforeach


		</td>
	</tr>
</table>
@if($reserv == 1)
	<center>
		<p>
			Thank you for choosing Renny Travel for your upcoming visit to Punta Cana.
			We are delighted to welcome you as our guest and hope to make your stay as enjoyable as possible.
			Please take a moment to review your reservation details below. In the event that you need to modify your
			reservation prior to arrival, please contact our Reservations Department via email at info@rennytravel.com 
			or speak directly to an agent at 1(809)-949-0519 <br> <br>
			Please see attached the picture of our reps that will be waiting for you upon arrival,
			they will greet you and take you to your vehicle. Please don’t stop inside, continue until you get out of
			the airport and our rep will be waiting for you. <br>
			Looking forward to giving you the best service ever.
		</p>
	</center>
@endif

</body>
</html>