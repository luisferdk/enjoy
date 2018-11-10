@extends('base.sitio')

@section("content")
	<div class="row mt5">
		<div class="col-xs-12">
			<div class="row">
		        <div class="col-xs-12" id="slider">
	                <!-- Top part of the slider -->
	                <div class="row">
	                    <div class="col-sm-12" id="carousel-bounding-box" style="padding: 0">
	                        <div class="carousel slide" id="myCarouselWedding">
	                            <!-- Carousel items -->
	                            <div class="carousel-inner">
	                                <div class="item active" data-slide-number="0">
	                                <img src="{{ asset("/") }}img/bodas/1.jpg"></div>

	                                <div class="item" data-slide-number="1">
	                                <img src="{{ asset("/") }}img/bodas/2.jpg"></div>

	                                <div class="item" data-slide-number="2">
	                                <img src="{{ asset("/") }}img/bodas/3.jpg"></div>


	                            </div><!-- Carousel nav -->
	                            <a class="left carousel-control" href="#myCarouselWedding" role="button" data-slide="prev">
	                                <span class="glyphicon glyphicon-chevron-left"></span>                                       
	                            </a>
	                            <a class="right carousel-control" href="#myCarouselWedding" role="button" data-slide="next">
	                                <span class="glyphicon glyphicon-chevron-right"></span>                                       
	                            </a>                                
	                            </div>
	                    </div>
	                </div>
					<div class="row">
						<form class="form-inline wedding-code col-sm-6">
							<div class="border text-center">
						  		<div class="form-group">
								    <label for="text">Enter Code:</label>
								    <input name="codigo" type="text" class="form-control" id="text" required>
						  		</div>
						  		<button type="submit" class="btn btn-primary">Sign In</button>
					  		</div>
						</form>		
						<div class="col-sm-8 col-xs-offset-2 wedding-text">
						<!--
							<div class="row">
								<h1 class="text-center col-xs-12">Wedding</h1>
								<p class="col-xs-8 col-xs-offset-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nihil, accusamus provident ab, ipsa mollitia deserunt similique</p>
							</div>
						-->
						</div>
					</div>
	            </div>
	        </div><!--/Slider-->
        </div>
		<!--
		<h1 class="text-center col-xs-12 mt1">Features</h1>
		<div class="col-xs-4">
			<h3 class="text-center"><strong>Title 1</strong></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.</p>
		</div>
		<div class="col-xs-4">
			<h3 class="text-center"><strong>Title 1</strong></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.</p>
		</div>
		<div class="col-xs-4">
			<h3 class="text-center"><strong>Title 1</strong></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae natus quas, harum odit voluptatem, sit vel, obcaecati laboriosam vitae temporibus culpa et maiores error mollitia suscipit libero aliquid iusto incidunt.</p>
		</div>

		<h1 class="text-center col-xs-12">HOW IT WORKS</h1>
		<div class="col-xs-8 col-xs-offset-2">
			<table class="table tableWedding">
				<tbody>
					<tr>
						<td style="width: 20%;"><h3>STEP ONE</h3></td>
						<td >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptatem aliquam, ratione quas culpa doloribus, ipsum, porro optio laboriosam eos doloremque natus voluptates saepe ut quibusdam perspiciatis quam facilis praesentium!</td>
					</tr>
					<tr>
						<td style="width: 20%;"><h3>STEP ONE</h3></td>
						<td >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptatem aliquam, ratione quas culpa doloribus, ipsum, porro optio laboriosam eos doloremque natus voluptates saepe ut quibusdam perspiciatis quam facilis praesentium!</td>
					</tr>
					<tr>
						<td style="width: 20%;"><h3>STEP ONE</h3></td>
						<td >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptatem aliquam, ratione quas culpa doloribus, ipsum, porro optio laboriosam eos doloremque natus voluptates saepe ut quibusdam perspiciatis quam facilis praesentium!</td>
					</tr>
				</tbody>
			</table>
		</div>
		-->
			<form action=" {{ url('/packages') }} " method="post" class="col-xs-6 col-xs-offset-3 mt2">
				@csrf
				<p class="text-center">Send your email to have access to the best vacation packages in DR</p>
			  <div class="form-group">
			  	<label for="nombre">Name</label>
			  	<input name="nombre" type="text" class="form-control" required placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="correo">Email:</label>
			    <input name="correo" type="email" class="form-control" required placeholder="Enter Email">
			  </div>
			  <div class="form-group">
			    <label for="pais">Country:</label>
			    <select name="pais" class="form-control" id="pais">
						<option value="">Choose one</option>
						<option value="Puntacana">Puntacana</option>
						<option value="Mexico">Mexico</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cabo Verde">Cabo Verde</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo, Republic of the">Congo, Republic of the</option>
						<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote d'Ivoire">Cote d'Ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Greece">Greece</option>
						<option value="Grenada">Grenada</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Kosovo">Kosovo</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar (Burma)">Myanmar (Burma)</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="North Korea">North Korea</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Palestine">Palestine</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Qatar">Qatar</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
						<option value="St. Lucia">St. Lucia</option>
						<option value="St. Vincent and The Grenadines">St. Vincent and The Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Korea">South Korea</option>
						<option value="South Sudan">South Sudan</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-Leste">Timor-Leste</option>
						<option value="Togo">Togo</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom (UK)">United Kingdom (UK)</option>
						<option value="United States of America (USA)">United States of America (USA)</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
			    	</select>
			  	</div>
				<div class="col-xs-12 text-center" style="margin-bottom: 2em;">
					<div class="g-recaptcha" data-sitekey="6LfC0nkUAAAAABfScHUwOO6TP27IPN6_HfHFs3ef"></div>
				</div>
				<div class="col-xs-12 text-center">
			  		<button type="submit" name="mensaje" class="btn btn-primary" style="padding-left:3em;padding-right:3em;">Send</button>	
			  	</div>
			</form>
    </div>


	<script>
		$(function(){

			$('#pais').select2();
		});
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>    
@endsection


@section('js')
@if(session('status') )
    <div class="modal fade" id="completado">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <h3 class="col-xs-12 text-center" style="color:green;"><i class="fa fa-check fa-2x"></i></h3>
                        <h2 class="col-xs-12 text-center">Message Sent</h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#completado').modal('show');
    </script>
@endif
@endsection