@extends("base.sitio")

@section("content")
<div class="row mt2" style="margin-top: 4em;">
    <h1 class="col-xs-12 text-center tituloVerde" style="font-size: 3em">Punta Cana Airport VIP Lounge</h1>
	<img src="{{ asset("/") }}img/banner.jpg" style="width: 100%" alt="">
</div>
<section class="row principal" ng-app="app" ng-controller="ctrl">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="row">
            <div class="col-xs-6">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <img src="{{ asset("/") }}img/avionB.png" style="width: 40%;margin:auto;display: block;" alt="">
                    </div>
                    <h3 class="col-xs-12 azul">PUJ VIP Arrival Assistance includes:</h3>
                    <ul class="col-xs-12 text-left" style="line-height: 2em;">
                        <li>Customer meeting at the ramp with banner with your name on it</li>
                        <li>Express Immigration Service</li>
                        <li>Express Customs Control</li>
                    </ul>
                    <h3 class="col-xs-12 verde">$75.00 <sup>per person</sup></h4>
                    <h5 class="col-xs-12 azul">Price is per guest, all adults in arriving party must pay for the service at the same time.</h5>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <img src="{{ asset("/") }}img/avionS.png" style="width: 40%;margin:auto;display: block;" alt="">
                    </div>
                    <h3 class="col-xs-12 azul">PUJ Fast Track Departure Service includes:</h3>
                    <ul class="col-xs-12 text-left" style="line-height: 2em;">
                        <li>Express registration for the flight (you will be check-in at business line)</li>
                        <li>Express Immigration Service (again, business line pass)</li>
                        <li>Express Customs Control</li>
                        <li>VIP Lounge Access (In Terminal A in the VIP Salon you will be offered the drinks as dominican rum, dominican beer, soft drinks, coffee, tea and light snacks as fruits, mini sandwiches, ham, cheese, croissants, nuts mini deserts)</li>
                    </ul>
                    <h3 class="col-xs-12 verde">$125.00 <sup>per person</sup></h4>
                    <h5 class="col-xs-12 azul">Price is per guest, all adults in departing party must pay for the service at the same time.</h5>
                </div>
            </div>
            
        </div>
    </div>
    <form action="" class="col-xs-12 col-sm-8 izquierda" id="formTraslado" method="post">
        <div class="row">
            <h3 class="col-xs-12 text-center titulo">Select the vip services</h3>
            <div class="col-xs-12 text-center">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="transfer" value="Transfer">TRANSFER</label>
                            <small class="col-xs-12 text-center" style="color: #334960;margin-bottom: 1em;">
                                Audi (maximum 2 people) or Suburban (maximum 5 people)
                            </small>
                        </div>        
                    </div>
                    <div class="col-xs-6">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="serviceVIP" value="Service VIP">SERVICE VIP</label>
                            <small class="col-xs-12 text-center" style="color: #334960;margin-bottom: 1em;">
                                (VIP Lounge Access)
                            </small>
                        </div>        
                    </div>
                </div>
            </div>
            <div class="col-xs-12" ng-show="transfer">
                <div class="row">
                    <h4 class="col-xs-12 text-center titulo">INFO TRANSFER</h4>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *From
                            </label>
                            <select 
                                class="form-control select2"
                                ng-change="cambiarDe(de);calcularPrecioTraslado();"
                                ng-model="de"
                                ng-options="aux.descripcion for aux in deOpciones" 
                                ng-required="transfer">
                                <option value>Choose one</option>
                            </select>
                            <input type="hidden" name="de" value="@{{ de.descripcion }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *To
                            </label>
                            <select id="hotel" class="form-control select2_para" ng-change="calcularPrecioTraslado(); cambiarPara();" ng-model="para"  ng-options="aux.descripcion for aux in paraOpciones" ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                            </select>
                            <input name="para" type="hidden" value="@{{para.descripcion}}"/>
                            <input type="hidden" name="hotel" value="@{{ hotelValue }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *Passengers
                            </label>
                            <select class="form-control select2" name="adultos" id="adultos" ng-change="calcularPrecioTraslado();cambiarPasajeros(pasajerosModel)" ng-model="pasajerosModel" ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                                <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                            </select>
                        </div>
                    </div>                    
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *Type Transfer
                            </label>
                            <select class="form-control select2" name="tipo" ng-change="calcularPrecioTraslado()" ng-model="tipoModel" ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                                <option value="1">
                                    One Way
                                </option>
                                <option value="2">
                                    Round Trip
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *Type VIP Transfer
                            </label>
                            <select id="vipSelect" class="form-control select2" name="vip" ng-change="calcularPrecioTraslado()" ng-options="aux for aux in vipTipos track by aux" ng-model="vip" ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                            </select>
                        </div>
                    </div>

                    <h5 class="col-xs-12 titulo" ng-show="de.id==-1">ARRIVAL</h5>
                    <h5 class="col-xs-12 titulo" ng-show="de.id!=-1">DEPARTURE</h5>
                    <div class="col-xs-6 col-sm-3">
                        <div class="form-group">
                            <label for="">
                                *Date
                            </label>
                            <input class="form-control" id="date1" name="fechaLlegada" type="text" placeholder="Select Date" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="form-group">
                            <label for="">
                                *Time
                            </label>
                            <input class="form-control hora" name="horaLlegada" type="text" placeholder="Select Time" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="form-group">
                            <label for="">
                                *Airline Name
                            </label>
                            <input class="form-control" name="aerolineaLlegada" type="text" placeholder="Enter airline name" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="form-group">
                            <label for="">
                                *Flight Number
                            </label>
                            <input class="form-control" name="vueloLlegada" type="text" placeholder="Enter flight name" ng-required="transfer">
                        </div>
                    </div>

                    <h5 class="col-xs-12 titulo" ng-show="de.id==-1 && tipoModel!=1">DEPARTURE</h5>
                    <h5 class="col-xs-12 titulo" ng-show="de.id!=-1 && tipoModel!=1">ARRIVAL</h5>
                    <div class="col-xs-6 col-sm-3" ng-show="tipoModel!=1">
                        <div class="form-group">
                            <label for="">
                                *Date
                            </label>
                            <input class="form-control" id="date2" name="fechaSalida" type="text" placeholder="Select Date" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3" ng-show="tipoModel!=1">
                        <div class="form-group">
                            <label for="">
                                *Time
                            </label>
                            <input class="form-control hora" name="horaSalida" type="text" placeholder="Select Time" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3" ng-show="tipoModel!=1">
                        <div class="form-group">
                            <label for="">
                                *Airline Name
                            </label>
                            <input class="form-control" name="aerolineaSalida" type="text" placeholder="Enter airline name" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3" ng-show="tipoModel!=1">
                        <div class="form-group">
                            <label for="">
                                *Flight Number
                            </label>
                            <input class="form-control" name="vueloSalida" type="text" placeholder="Enter flight name" ng-required="transfer">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="extras" value="extras">Extras</label>
                        </div> 
                    </div>
                    <div class="col-xs-12" ng-show="extras">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="thumbnail">
                                    <img src="{{ asset("/") }}img/productos/cerveza.jpg" alt="...">
                                    <div class="caption text-center">
                                        <h3>Beer</h3>
                                        <select ng-model="cervezas" name="cervezas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                            <option value="0">($5.00)</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-3">
                                <div class="thumbnail">
                                    <img src="{{ asset("/") }}img/productos/cocacola.jpg" alt="...">
                                    <div class="caption text-center">
                                        <h3>Sodas</h3>
                                        <select ng-model="sodas" name="sodas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                            <option value="0">($3.00)</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-3">
                                <div class="thumbnail">
                                    <img src="{{ asset("/") }}img/productos/vino.jpg" alt="...">
                                    <div class="caption text-center">
                                        <h3>Wine</h3>
                                        <select ng-model="vino" name="vino" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                        <option value="0">($20.00 bottle)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                <div class="thumbnail">
                                    <img src="{{ asset("/") }}img/productos/champagne.jpg" alt="...">
                                    <div class="caption text-center">
                                        <h3>Champagne</h3>
                                        <select ng-model="champagne" name="champagne" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                            <option value="0">($25.00 bottle)</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" ng-show="serviceVIP">
                <div class="row">
                    <h4 class="col-xs-12 text-center titulo">SERVICE VIP</h4>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="">
                                *How many persons are you (including children older than 7 years)?
                            </label>
                            <select class="form-control select2" name="pasajerosVIP" ng-change="calcularPrecioTraslado();" ng-model="pasajerosVIP" ng-required="serviceVIP">
                                <option value="">
                                    Choose one
                                </option>
                                <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-6 text-center">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="arrivalVIP" ng-click="calcularPrecioTraslado();" value="arrivalVIP">VIP ARRIVAL SERVICE - $75.00</label>
                        </div> 
                    </div>
                    <div class="col-xs-6 text-center">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="departureVIP" ng-click="calcularPrecioTraslado();" value="departureVIP">VIP DEPARTURE SERVICE - $125.00</label>
                        </div> 
                    </div>
                    <div class="col-xs-12">
                        <div class="row" ng-show="arrivalVIP">
                            <h4 class="mt2 col-xs-12 text-center">VIP ARRIVAL SERVICE</h4>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Arrival Date
                                    </label>
                                    <input class="form-control" id="date1VIP" name="fechaLlegadaVIP" type="text" placeholder="Select Date" ng-required="arrivalVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input class="form-control hora" name="horaLlegadaVIP" type="text" placeholder="Select Time" ng-required="arrivalVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input class="form-control" name="aerolineaLlegadaVIP" type="text" placeholder="Enter airline name" ng-required="arrivalVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input class="form-control" name="vueloLlegadaVIP" type="text" placeholder="Enter flight name" ng-required="arrivalVIP">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row" ng-show="departureVIP">
                            <h4 class="mt2 col-xs-12 text-center">VIP DEPARTURE SERVICE</h4>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group" ng-show="departureVIP">
                                    <label for="">
                                        *Date Departure
                                    </label>
                                    <input class="form-control" id="date2VIP" name="fechaSalidaVIP" type="text" placeholder="Select Date" ng-required="departureVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input class="form-control hora" name="horaSalidaVIP" type="text" placeholder="Select Time" ng-required="departureVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input class="form-control" name="aerolineaSalidaVIP" type="text" placeholder="Enter airline name" ng-required="departureVIP">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input class="form-control" name="vueloSalidaVIP" type="text" placeholder="Enter flight name" ng-required="departureVIP">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="col-xs-12 titulo text-center">CLIENT INFO</h4>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *First Name
                    </label>
                    <input class="form-control" name="nombre" type="text"  placeholder="Enter name" ng-required="transfer || serviceVIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Surname
                    </label>
                    <input class="form-control" name="apellido" type="text"  placeholder="Enter last name" ng-required="transfer || serviceVIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Email
                    </label>
                    <input class="form-control" name="correo" type="email"  placeholder="Enter email" ng-required="transfer || serviceVIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Phone number
                    </label>
                    <input class="form-control" name="telefono" type="text"  placeholder="Enter phone number" ng-required="transfer || serviceVIP">
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="">
                        Comments
                    </label>
                    <textarea class="form-control" style="overflow-x: hidden;" name="comentarios" rows="5" placeholder="Comments"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="">
                        *Promo Code (discount $ 10.00)
                    </label>
                    <input class="form-control" ng-model="codePromo" ng-change="cambiarCodigo(codePromo)" name="promoCode" type="text"  placeholder="Enter Promo Code">
                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-8">
                <h3 class="text-center">
                    $ @{{precio}}
                </h3>
                <input name="precio" type="hidden" value="@{{precioTraslado}}"/>
                <input name="precioVIP" type="hidden" value="@{{precioVIP}}"/>
            </div>
            <div class="col-xs-12 col-sm-8 text-center">
                <div class="form-group">
                    <input data-toggle="tooltip" title="Accept terms and conditions" id="terminos" name="terminos" type="checkbox" value="terminos">
                    <a class="verde" href="#" data-toggle="modal" data-target="#terminosModal">
                        <strong data-toggle="tooltip" title="Read terms and conditions">I have read and accept the terms and conditions</strong>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <button class="btn btn-primary disabled" id="traslado" name="traslado" type="submit" value="traslado">
                    Book now
                </button>
            </div>
        </div>
    </form>
    <div id="terminosModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 80%">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="color: #8dc740" class="modal-title text-center">TERMS AND CONDITIONS</h3>
                </div>
                <div class="modal-body">
                    <p>The information data and material contained in this website has been prepared solely for the purpose of providing information about Renny Travel DMC, its subsidiaries and partners and the services that they offer. <br><br>
                    Your access to the website is subject to the following terms and conditions. By using the website you agree to be bound by the Terms and Conditions and we therefore encourage you to click through to read the Terms and Conditions in full. If you do not agree to these Terms and Conditions please do not use the website. Please also see our Privacy page, which explains how we treat your information.
                    </p>
                    <br>
                    <div>
                        <h4>1. YOUR USE OF THE WEBSITE</h4>
                        <ul>
                            <li>1.1 You agreex to abide by all applicable laws, regulations and codes of conduct when using the website and to be solely responsible for all things arising from your use of the website;</li>
                            <li>1.2 not to use the website in any way which might infringe any rights of any third party or give rise to a legal claim against Renny Travel DMC by any third party;</li>
                            <li>1.3 not to damage, interfere with or disrupt access to the website or do anything that may interrupt or impair its functionality;</li>
                            <li>1.4 not to obtain or attempt to obtain unauthorized access, through whatever means, to the website or other services or computer systems or areas of our, or any of our partners’,networks which are identified as restricted;</li>
                            <li>1.5 not to collect or store personal data about other users for commercial purposes;</li>
                            <li>1.6 to respect the privacy of your fellow Internet users;</li>
                            <li>1.7 to provide true, accurate, complete and current information to us and notify us immediately of any change.</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>2. CONTENT</h4>
                        <ul>
                            <li>2.1 The material and content provided to you on the website is solely for your personal non-commercial use and you agree not for yourself or through any third party to distribute or commercially exploit all or any part of the Content.</li>

                            <li>2.2 All Content (including, but not limited to articles, features, photographs, images, brands, logos, illustrations, audio clips and video clips, as well as all products, software, technology or processes described in this website are protected by copyright, trade marks, service marks and/or other intellectual property rights and laws and all Rights in relation to the website are and shall remain owned or controlled by Renny Travel DMC, or as appropriate, the third party Rights owner. You shall abide by all additional copyright notices, information, or restrictions contained in any Content accessed through this website.</li>

                            <li>2.3 Nothing contained on the website should be construed as granting, by implication or otherwise, any license or right to use, deal with or copy in any way in party or in whole any Rights without our written permission or, as appropriate, the permission of the third party Rights owner. Your misuse of the Rights, except as expressly provided in these Terms and Conditions, is strictly prohibited.</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>3. ACCESSES AND AVAILABILITY OF SERVICE AND LINKS</h4>
                        <p>This website from time to time contains links to other related World Wide Web Internet sites, resources and sponsors of this website. Since Renny Travel DMC does not approve, check, edit, vet or endorse such sites, you agree that Renny Travel DMC is not responsible or liable in any way for the content, advertising or products available from such sites or any dealings that you may have, or the consequences of such dealings, with the operators of such sites. You agree that any dealings you have with such third party site operators shall be on the terms and conditions (if any) of the third party site operator and should direct any concerns regarding any external link to the site administrator or Webmaster of such site. Renny Travel DMC makes no representations nor does it take any responsibility in relation to the content of any sites accessed through these links.</p>
                    </div>
                    <br>
                    <div>
                        <h4>4. CHANGES TO TERMS AND CONDITIONS</h4>
                        <p>Renny Travel DMC may from time to time change, alter, adapt, add or remove portions of these Terms and Conditions and, if it does so, will post any such changes on this website. Your continued use of the website after such changes constitutes your acceptance of those changes.</p>
                    </div>
                    <br>
                    <div>
                        <h4>5. CHANGES TO WEBSITE</h4>
                        <p>Renny Travel DMC may also change, suspend or discontinue any aspect of the website, including the availability of any features, information, database or content or restrict your access to parts or all of the website at its discretion without notice or liability.</p>
                    </div>
                    <br>
                    <div>
                        <h4>6. NO WARRANTIES</h4>
                        <ul>
                            <li>6.1 The website is provided "as is" without any representations or warranties (either express or implied), including but not limited to any implied warranties or implied terms of reliability, quality, functionality, absence of contaminants (including viruses, worms, trojan horses or similar), availability, satisfactory quality, fitness for a particular purpose or non-infringement. All such implied terms and warranties are hereby excluded. Please note that some jurisdictions may not allow the exclusion of implied warranties, so some of the above exclusions may not apply to you. Check your local laws for any restrictions of limitations regarding the exclusion of implied warranties.</li>

                            <li>6.2 While Renny Travel DMC uses reasonable efforts to include accurate and up to date information on the website, it makes no warranties or representations as to its accuracy or completeness. Renny Travel DMC is not responsible for any errors or omissions or for the results obtained from the use of such information. The information does not constitute any form of advice, recommendation or arrangement by Renny Travel DMC or its affiliates or any other party involved in the website and is not intended to be relied upon by users in making (or refraining from making) any decisions based on such information. You must make your own decisions on whether or not to rely on any information posted on the website.</li>

                            <li>6.3 While Renny Travel DMC takes all reasonable steps to ensure a fast and reliable service it will not be held responsible for the security of the website or for any disruption of the website however caused, loss of or corruption of any material in transit, or loss of or corruption of material or data when downloaded onto any computer system. You will remain responsible and liable for material you upload on to or access from the website and you will indemnify Renny Travel DMC in the manner set out in paragraph 9.2 below in the Terms and Conditions in relation to your accessing or uploading.</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>7. LIABILITY FOR LOSSES/INDEMNITY</h4>
                        <ul>
                            <li>7.1 By accessing this website you agree that Renny Travel DMC will not be held liable to you or any third party for any direct, indirect, special, consequential or any other loss or damage arising from the use of or inability to use the website or from your access of other material on the internet via web links from this website.</li>

                            <li>7.2 You agree to indemnify, keep indemnified, defend and hold harmless Renny Travel DMC and its parent companies, subsidiaries, affiliates and their respective officers, directors, employees, owners, agents, information providers and licensors from and against any and all claims, damages, liability, losses, costs and expenses (including legal fees) (whether or not foreseeable or avoidable) incurred or suffered by any Indemnified Party and any claims or legal proceedings which are brought or threatened arising from your use of, connection with or conduct on the website or any breach by you of these Terms and Conditions. Renny Travel DMC reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, and in such case, you agree to co-operate with out defense of such claim.</li>                           
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>8. EXCLUSIONS</h4>
                        <p>The exclusions and limitations contained in these Terms and Conditions apply only to the extent permitted by law.</p>
                    </div>
                    <br>
                    <div>
                        <h4>9. LEGAL JURISDICTIONS AND APPLICABLE LAW</h4>
                        <p>Renny’s Management, S.R.L is a Dominican company and Renny Travel DMC is a Dominican Republican company. The terms and conditions of the use of this website shall be governed in accordance with the laws of the Dominican Republic. The user is deemed to hereby submit and agree to the exclusive jurisdiction of the courts of the Dominican Republic in respect of any disputes arising out of or in connection with this Web Site, so the user expressly waives any jurisdiction that may correspond by reason of his domicile. These terms and conditions or any further terms and conditions referenced on this Web Site or any matter related to or in connection herewith.</p>
                    </div>
                    <br>
                    <div>
                        <h4>10. LIABILITY</h4>
                        <ul>
                            <li>10.1 Online Booking of Independent Third Party Suppliers: Booking services provided for excursions on this site involve services offered by independent third party suppliers. RENNY TRAVEL is not liable nor does it accept liability for actions or omissions of the independent contractors supplying the excursions for which booking services are provided; and the purchaser of the excursions here provided shall be deemed to have waived any claims against RENNY TRAVEL in connection with the excursions purchased.</li>

                            <li>10.2 Products, services or excursions on this site for which booking services may be requested involve activities that may involve risk. The consumer of this service assumes the risk inherent in all such activities. By accepting these services, the purchaser thereof agrees that RENNY TRAVEL is not responsible for losses or damages including bodily injury, property damage, or economic loss incurred while participating in the activity for which booking services are provided.</li>                          
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>11. PROTECTION PLUS</h4>
                        <p>Protection Plus is an insurance supplement to your personal travel insurance. Protection Plus provides basic personal coverage in case of an accident which may occur during an excursion booked through Renny Travel. The policy includes limited financial reimbursement for ambulance, medical coverage, accidental death and repatriation. Protection Plus is contacted through established insurance companies in destination. The coverage includes: <br>
                        <h5>Dominican Republic: Seguros Banreservas</h5>
                        <ul>
                            <li>Accident Medical Expense - $15,000 USD</li>
                            <li>Accidental death & dismemberment –$15,000 USD</li>
                            <li>Ambulance & medical transfers - $50,000 USD</li>
                        </ul>
                        </p>
                    </div>
                    <br>
                    <div>
                        <h4>12. CONDITIONS OF CONTRACT OF ONLINE BOOKINGS</h4>
                        <p>The service supplier reserves the right to cancel, shorten or alter the excursion due to circumstances outside of their control. In the event of such an occurrence, a full or partial refund may be given, however, the consumer hereby waives any claim against Renny Travel DMC, or the service supplier for any consequential damages arising as a result thereof.</p>
                    </div>
                    <br>
                    <div>
                        <h4>13. REFUNDS, CANCELLATIONS AND CHANGES</h4>
                        <ul>
                            <li>100% of purchase price when cancellation is made more than 48 hours in advance.</li>
                            <li>50% fee of purchase price when cancellation is made between 24 and 48 hours in advance.</li>
                            <li>All deposits are non reimbursable.</li> 
                            <li>All cancellations made less than 24 hours prior to the start time of the service will be charged in full unless otherwise supported by a medical note from a qualified doctor stating the valid medical conditions for which the client cannot receive the reserved service(s).</li>
                            <li>
                                All changes to the day/time of the same service shall be subject to the following conditions:
                                <ul>
                                    <li>No charges shall apply to change requests made more than 24 hours in advance.</li>
                                    <li>Some charges may apply when the request is made less than 24 hours in advance.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <h4>14. TERMINATIONS AND SUSPENSION</h4>
                        <p>Renny Travel DMC (and any persons authorized by it), may at its sole discretion immediately suspend or terminate your right to use the website without any warning if it considers that you have contravened any of these Terms and Conditions. This is without prejudice to any other rights or remedies that Renny Travel DMC may have.</p>
                    </div>
                    <br>
                    <div>
                        <h4>15. ASSIGNMENT</h4>
                        <p>Renny Travel DMC may assign its rights and obligations under these Terms and Conditions and upon any such assignment it shall be relieved of any further obligation hereunder.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 hidden-xs derecha">
        <div class="row whyChoose">
        	<h2 class="col-xs-12">WHY CHOOSE US?</h2>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-globe"></i></div>
        		<h4>Diverse Destinations</h4>
        	</div>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-money"></i></div>
        		<h4>Value Money</h4>
        	</div>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-camera"></i></div>
        		<h4>Beautiful Places</h4>
        	</div>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-calculator"></i></div>
        		<h4>Fast Booking</h4>
        	</div>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-comments"></i></div>
        		<h4>Support Team</h4>
        	</div>
        	<div class="col-xs-12 itemWhy">
        		<div class="icon"><i aria-hidden="true" class="fa fa-heart"></i></div>
        		<h4>Passionate Travel</h4>
        	</div>
        </div>
    </div>
</section>    	
@endsection

@section('js')
	
	<script>
		$(function(){

			$('.select2').select2();
			$('#menu li').removeClass('active');
	        $('#menu li.PuntaCanaVIP').addClass('active');
	        $('#time1,#hora1,.hora').timepicker({ 'timeFormat': 'H:i' });    
	        $('#time2,#hora2,.hora').timepicker({ 'timeFormat': 'H:i' });
		});
	</script>


	<script>
	    var app = angular.module("app", []);
		app.controller("ctrl", function($scope,$http,$timeout) {
		/*----------------------------Transfers----------------------------*/
			var pasajeros = [];
			for (var i = 1; i <= 5; i++) {
				pasajeros.push(i);
			}
			$scope.pasajeros = pasajeros;
			$scope.paraOpciones = [];
			$scope.precio = 0;
	        $scope.precioTraslado = 0;
	        $scope.precioVIP = 0;
	        $scope.transfer = false;
	        $scope.serviceVIP = false;
	        $scope.arrivalVIP = false;
	        $scope.departureVIP = false;
	        $scope.extras = false;
	        $scope.paraV = [
	            {id:0,descripcion:'Punta Cana',precio:[35,45,70,100,130]},
	            {id:1,descripcion:'Bávaro - Cap Cana',precio:[35,45,70,100,130]},
	            {id:2,descripcion:'Arena Gorda - Macao',precio:[40,50,80,105,130]},
	            {id:3,descripcion:'Uvero Alto',precio:[65,80,95,120,145]},
	            {id:4,descripcion:'Four Point by Sheraton Punta Cana',precio:[20,30,60,90,120]},
	            {id:5,descripcion:'La Romana',precio:[105,135,195,220,245]},
	            {id:6,descripcion:'Santo Domingo',precio:[150,165,250,275,300]},
	        ];

	        $scope.deOpciones = [
	            {id:-1,descripcion:'Aeropuerto Punta Cana (PUJ)'},
	            {id:5,descripcion:'Aeropuerto La Romana (LRM)'},
	            {id:6,descripcion:'Aeropuerto Santo Domingo (SDQ)'},
	            {id:4,descripcion:'Four Point by Sheraton Punta Cana'},
	            {id:0,descripcion:"Majestic Colonial "},
	            {id:0,descripcion:"Majestic Elegance "},
	            {id:0,descripcion:"Majestic Mirage"},
	            {id:0,descripcion:'Iberostar Punta Cana'},
	            {id:0,descripcion:'Iberostar Bavaro'},
	            {id:0,descripcion:'Iberostar Grand'},
	            {id:0,descripcion:'Iberostar Dominicana'},
	            {id:1,descripcion:'Royalton Bavaro'},
	            /*{id:0,descripcion:'Dreams Palm Beach'},*/
	            {id:0,descripcion:'Ocean Blue & Sand Beach Resort'},
	            {id:0,descripcion:'Vik Arena Blanca'},
	            {id:0,descripcion:'Westin Punta Cana'},
	            {id:0,descripcion:'Alsol Luxury Village'},
	            {id:0,descripcion:'Alsol del Mar (Soto Grande)'},
	            {id:0,descripcion:'Sanctuary Cap Cana'},
	            {id:0,descripcion:'Club Med'},
	            {id:0,descripcion:'Natura Park Resort (Blau)'},
	            {id:0,descripcion:'Catalonia Punta Cana'},
	            {id:0,descripcion:'Be Live Collection Punta Cana'},
	            {id:0,descripcion:'Alsol Tiara Cap Cana'},
	            {id:0,descripcion:'The Villas at Cap Cana by Alsol'},
	            {id:0,descripcion:'Luxury Beach Front Apartment in Punta Palmera'},
	            {id:0,descripcion:'Eden Roc At Cap Cana'},
	            {id:0,descripcion:'Fishing Lodge CapCana Diamond Resort'},
	            {id:0,descripcion:'Grand Bahia Principe Bavaro'},
	            {id:0,descripcion:'Bavaro Princess All Suites Resort, Spa & Casino'},
	            /*{id:0,descripcion:'Melia Caribe Tropical'},*/
	            {id:0,descripcion:'Tropical Princess Beach Resort & Spa'},
	            {id:0,descripcion:'Barcelo Bavaro Palace'},
	            {id:0,descripcion:'Barcelo Bavaro Beach'},
	            {id:0,descripcion:'Blue Beach Punta Cana Luxury Resort'},
	            {id:0,descripcion:'Catalonia Royal Bavaro - All Inclusive - Adults Only'},
	            {id:0,descripcion:'Grand Bahia Principe Turquesa'},
	            {id:0,descripcion:'Caribe Club Princess Beach Resort and Spa'},
	            {id:0,descripcion:'Vista Sol Punta Cana Beach Resort & Spa'},
	            {id:0,descripcion:'Punta Cana Princess All Suites Resort and Spa'},
	            {id:0,descripcion:'Luxury Bahia Principe Esmeralda'},
	            {id:0,descripcion:'The Level at Melia Caribe Tropical'},
	            {id:0,descripcion:'Luxury Bahia Principe Ambar Blue - Adults Only'},
	            {id:0,descripcion:'whala!bávaro'},
	            {id:0,descripcion:'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts'},
	            {id:0,descripcion:'Luxury Bahia Principe Ambar Green - Adults Only'},
	            {id:0,descripcion:'Hotel Cortecito Inn Bavaro'},
	            {id:0,descripcion:'Punta Palmera Cap Cana by Essenza Retreats'},
	            {id:0,descripcion:'Residencial Las Buganvillas Bavaro'},
	            {id:0,descripcion:'Royalton Punta Cana Resort & Casino'},
	            {id:0,descripcion:'Riu Palace Punta Cana'},
	            {id:0,descripcion:'Riu Naiboa'},
	            {id:0,descripcion:'Riu Bavaro'},
	            {id:0,descripcion:'Riu Palace Macao'},          

	            {id:1,descripcion:"Occidental Caribe"},
	            {id:1,descripcion:"Occidental Punta Cana"},
	            {id:1,descripcion:"Secret Cap Cana"},
	            // {id:1,descripcion:"Secret Royal Beach"},
	            {id:1,descripcion:"Now Onix"},
	            {id:1,descripcion:"Riu República"},
	            {id:1,descripcion:"Bahia Principe Ambar"},
	            {id:1,descripcion:"Bahia Principe Fantasy"},

	            /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

	            {id:3,descripcion:"Zoetry Aqua"},
	            {id:3,descripcion:"The Palms Punta Cana"},
	            {id:3,descripcion:"Las Dunas Condo"},
	            /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
	            {id:3,descripcion:"CHIC by Royalton Resorts "},
	            /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
	            {id:3,descripcion:"Excellence Punta Cana"},
	            {id:3,descripcion:"Excellence El Carmen"},
	            {id:3,descripcion:"Sensatori Resort Punta Cana"},
	            {id:3,descripcion:"Sirenis Punta Cana Resort Casino & Aguagames"},
	            {id:3,descripcion:"Sirenis Cocotal Beach Resort Punta Cana "},
	            {id:3,descripcion:"Sirenis Tropical Suites Punta Cana "},
	            {id:3,descripcion:"Sivory Punta Cana Boutique Hotel"},
	            {id:3,descripcion:"Nickelodeon Hotels & Resorts Punta Cana "},
	        ];

	        $scope.hoteles = [
	            {id:4,descripcion:'Four Point by Sheraton Punta Cana'},
	            {id:0,descripcion:"Majestic Colonial "},
	            {id:0,descripcion:"Majestic Elegance "},
	            {id:0,descripcion:"Majestic Mirage"},
	            {id:0,descripcion:'Iberostar Punta Cana'},
	            {id:0,descripcion:'Iberostar Bavaro'},
	            {id:0,descripcion:'Iberostar Grand'},
	            {id:0,descripcion:'Iberostar Dominicana'},
	            {id:1,descripcion:'Royalton Bavaro'},
	            /*{id:0,descripcion:'Dreams Palm Beach'},*/
	            {id:0,descripcion:'Ocean Blue & Sand Beach Resort'},
	            {id:0,descripcion:'Vik Arena Blanca'},
	            {id:0,descripcion:'Westin Punta Cana'},
	            {id:0,descripcion:'Alsol Luxury Village'},
	            {id:0,descripcion:'Alsol del Mar (Soto Grande)'},
	            {id:0,descripcion:'Sanctuary Cap Cana'},
	            {id:0,descripcion:'Club Med'},
	            {id:0,descripcion:'Natura Park Resort (Blau)'},
	            {id:0,descripcion:'Catalonia Punta Cana'},
	            {id:0,descripcion:'Be Live Collection Punta Cana'},
	            {id:0,descripcion:'Alsol Tiara Cap Cana'},
	            {id:0,descripcion:'The Villas at Cap Cana by Alsol'},
	            {id:0,descripcion:'Luxury Beach Front Apartment in Punta Palmera'},
	            {id:0,descripcion:'Eden Roc At Cap Cana'},
	            {id:0,descripcion:'Fishing Lodge CapCana Diamond Resort'},
	            {id:0,descripcion:'Grand Bahia Principe Bavaro'},
	            {id:0,descripcion:'Bavaro Princess All Suites Resort, Spa & Casino'},
	            /*{id:0,descripcion:'Melia Caribe Tropical'},*/
	            {id:0,descripcion:'Tropical Princess Beach Resort & Spa'},
	            {id:0,descripcion:'Barcelo Bavaro Palace'},
	            {id:0,descripcion:'Barcelo Bavaro Beach'},
	            {id:0,descripcion:'Blue Beach Punta Cana Luxury Resort'},
	            {id:0,descripcion:'Catalonia Royal Bavaro - All Inclusive - Adults Only'},
	            {id:0,descripcion:'Grand Bahia Principe Turquesa'},
	            {id:0,descripcion:'Caribe Club Princess Beach Resort and Spa'},
	            {id:0,descripcion:'Vista Sol Punta Cana Beach Resort & Spa'},
	            {id:0,descripcion:'Punta Cana Princess All Suites Resort and Spa'},
	            {id:0,descripcion:'Luxury Bahia Principe Esmeralda'},
	            {id:0,descripcion:'The Level at Melia Caribe Tropical'},
	            {id:0,descripcion:'Luxury Bahia Principe Ambar Blue - Adults Only'},
	            {id:0,descripcion:'whala!bávaro'},
	            {id:0,descripcion:'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts'},
	            {id:0,descripcion:'Luxury Bahia Principe Ambar Green - Adults Only'},
	            {id:0,descripcion:'Hotel Cortecito Inn Bavaro'},
	            {id:0,descripcion:'Punta Palmera Cap Cana by Essenza Retreats'},
	            {id:0,descripcion:'Residencial Las Buganvillas Bavaro'},
	            {id:0,descripcion:'Royalton Punta Cana Resort & Casino'},
	            {id:0,descripcion:'Riu Palace Punta Cana'},
	            {id:0,descripcion:'Riu Naiboa'},
	            {id:0,descripcion:'Riu Bavaro'},
	            {id:0,descripcion:'Riu Palace Macao'},          

	            {id:1,descripcion:"Occidental Caribe"},
	            {id:1,descripcion:"Occidental Punta Cana"},
	            {id:1,descripcion:"Secret Cap Cana"},
	            {id:1,descripcion:"Secret Royal Beach"},
	            {id:1,descripcion:"Now Onix"},
	            {id:1,descripcion:"Riu República"},
	            {id:1,descripcion:"Bahia Principe Ambar"},
	            {id:1,descripcion:"Bahia Principe Fantasy"},

	            /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

	            {id:3,descripcion:"Zoetry Aqua"},
	            {id:3,descripcion:"The Palms Punta Cana"},
	            {id:3,descripcion:"Las Dunas Condo"},
	            /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
	            {id:3,descripcion:"CHIC by Royalton Resorts "},
	            /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
	            {id:3,descripcion:"Excellence Punta Cana"},
	            {id:3,descripcion:"Excellence El Carmen"},
	            {id:3,descripcion:"Sensatori Resort Punta Cana"},
	            {id:3,descripcion:"Sirenis Punta Cana Resort Casino & Aguagames"},
	            {id:3,descripcion:"Sirenis Cocotal Beach Resort Punta Cana "},
	            {id:3,descripcion:"Sirenis Tropical Suites Punta Cana "},
	            {id:3,descripcion:"Sivory Punta Cana Boutique Hotel"},
	            {id:3,descripcion:"Nickelodeon Hotels & Resorts Punta Cana "},
	        ];

	        $scope.aeropuerto = [
	            {id:-1,descripcion:'Aeropuerto Punta Cana (PUJ)'},
	            {id:5,descripcion:'Aeropuerto La Romana (LRM)'},
	            {id:6,descripcion:'Aeropuerto Santo Domingo (SDQ)'},
	        ];


			$scope.cervezas = "0";
			$scope.sodas = "0";
			$scope.vino = "0";
			$scope.champagne = "0";
			$scope.vipTipos = ['Audi','Suburban'];

			$scope.cambiarDe = function(obj){
				$('.select2_para').select2();
				if(obj.id==undefined)
					$scope.paraOpciones = [];
				else if(obj.id==-1 || obj.id==5 || obj.id==6)
					$scope.paraOpciones = $scope.hoteles;
				else
					$scope.paraOpciones = $scope.aeropuerto;
			}
			
			$scope.cambiarPara = function(){
				$('.select2_para').select2();
			}
	        $scope.calcularPrecioTraslado = function(){
	            var pasajeros = $scope.pasajerosModel;
	            var de = $scope.de;
	            var para = $scope.para;
	            var aux;
	            var precioTraslado = 0;
	            var precioVIP = 0;
	            var bebidas = parseInt($scope.cervezas) * 5 +  parseInt($scope.sodas) * 3 + parseInt($scope.vino) * 20 + parseInt($scope.champagne) * 25;
	            if(de!=undefined &&  para!=undefined && pasajeros!=undefined){
	                if(de.id>=5)
	                    aux = de;
	                else if(para.id>=5)
	                    aux = para;
	                else if(de.id!=-1)
	                    aux=de;
	                else
	                    aux=para;
	                $scope.hotelValue = aux.descripcion;
	                
	                if(pasajeros && aux.id!=undefined){
	                    if(pasajeros<=4)
	                        precioTraslado = $scope.paraV[aux.id].precio[0];
	                    else if(pasajeros<=6)
	                        precioTraslado = $scope.paraV[aux.id].precio[1];
	                    else if(pasajeros<=10)
	                        precioTraslado = $scope.paraV[aux.id].precio[2];
	                    else if(pasajeros<=15)
	                        precioTraslado = $scope.paraV[aux.id].precio[3];
	                    else if(pasajeros<=20)
	                        precioTraslado = $scope.paraV[aux.id].precio[4];
	                    else
	                        precioTraslado = $scope.paraV[aux.id].precio[4] + ((pasajeros-4)*5);

	                    if($scope.tipoModel==2)
	                        precioTraslado = (precioTraslado*2) + bebidas + (130);
	                    else
	                        precioTraslado = precioTraslado + bebidas + (65);
	                }
	            }

	            if($scope.serviceVIP && $scope.pasajerosVIP){
	                if($scope.arrivalVIP)
	                    precioVIP = parseFloat($scope.pasajerosVIP *75);
	                if($scope.departureVIP)
	                    precioVIP = precioVIP + parseFloat($scope.pasajerosVIP *125);
	            }
	            $scope.precio = precioTraslado + precioVIP;
	            $scope.precioTraslado = precioTraslado;
	            $scope.precioVIP = precioVIP;
	        }

			$scope.cambiarCodigo = function(code){
				$http.get('{{ url("/") }}/verificarCodigo/'+code).then(function(response){
					$scope.calcularPrecioTraslado();
					if(response.data=="correcto"){
						$scope.precio = $scope.precio - 10;
					};
				});
				
			}

			$scope.cambiarPasajeros = function(num){
				$scope.vip = "";			
				if(num<=2){
					$scope.vipTipos = ['Suburban','Audi'];
				}
				else{
					$scope.vipTipos = ['Suburban'];
				}
			}
		});
	</script>

@endsection