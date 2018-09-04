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
    <form action="" class="col-xs-12 col-sm-8 izquierda" id="formTraslado" method="post" ng-submit="agregarVIP($event)">
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
                            <label><input type="checkbox" ng-model="VIP.serviceVIP" value="Service VIP">SERVICE VIP</label>
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
                                ng-change="cambiarDe();calcularPrecioTraslado();"
                                ng-model="traslado.de"
                                ng-options="aux.descripcion for aux in deOpciones" 
                                ng-required="transfer">
                                <option value>Choose one</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *To
                            </label>
                            <select 
                                id="hotel" 
                                class="form-control select2_para" 
                                ng-change="calcularPrecioTraslado(); cambiarPara();" 
                                ng-model="traslado.para"  
                                ng-options="aux.descripcion for aux in paraOpciones" 
                                ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">
                                *Passengers
                            </label>
                            <select 
                                class="form-control select2" 
                                name="pasajeros" 
                                id="pasajeros" 
                                ng-model="traslado.pasajeros"
                                ng-change="calcularPrecioTraslado();cambiarPasajeros();" ng-required="transfer">
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
                            <select c
                                lass="form-control select2" 
                                name="tipo" 
                                ng-change="calcularPrecioTraslado()" 
                                ng-model="traslado.tipo"
                                ng-required="transfer">
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
                            <select 
                                id="vip"
                                class="form-control select2 vipSelect"
                                name="vip" 
                                ng-model="traslado.vip"
                                ng-change="calcularPrecioTraslado()" 
                                ng-options="aux for aux in vipTipos track by aux"
                                ng-required="transfer">
                                <option value="">
                                    Choose one
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                        <div class="row">
                            <h5 class="col-xs-12 titulo" ng-show="traslado.de.id==-1">ARRIVAL</h5>
                            <h5 class="col-xs-12 titulo" ng-show="traslado.de.id!=-1">DEPARTURE</h5>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Date
                                    </label>
                                    <input 
                                        ng-model="traslado.llegada_fecha"
                                        class="form-control" 
                                        id="date1" 
                                        name="llegada_fecha" 
                                        type="text" 
                                        placeholder="Select Date"
                                        ng-required="traslado.tipo">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input 
                                        ng-model="traslado.llegada_hora"
                                        class="form-control" 
                                        id="time1" 
                                        name="llegada_hora" 
                                        type="text" 
                                        placeholder="Select Time"
                                        ng-required="traslado.tipo">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input 
                                        ng-model="traslado.llegada_aerolinea"
                                        class="form-control" 
                                        name="llegada_aerolinea" 
                                        type="text" 
                                        placeholder="Enter airline name"
                                        ng-required="traslado.tipo">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input 
                                        ng-model="traslado.llegada_vuelo"
                                        class="form-control" 
                                        name="llegada_vuelo" 
                                        type="text" 
                                        placeholder="Enter flight name"
                                        ng-required="traslado.tipo">
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="col-xs-12" ng-show="traslado.tipo==2">
                        <div class="row">
                            <h5 class="col-xs-12 titulo" ng-show="traslado.de.id==-1">DEPARTURE</h5>
                            <h5 class="col-xs-12 titulo" ng-show="traslado.de.id!=-1">ARRIVAL</h5>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Date
                                    </label>
                                    <input 
                                        ng-model="traslado.salida_fecha"
                                        class="form-control" 
                                        id="date2" 
                                        name="salida_fecha" 
                                        type="text" 
                                        placeholder="Select Date"
                                        ng-required="traslado.tipo==2">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input 
                                        ng-model="traslado.salida_hora"
                                        class="form-control" 
                                        id="time2" 
                                        name="salida_hora" 
                                        type="text" 
                                        placeholder="Select Time"
                                        ng-required="traslado.tipo==2">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input 
                                        ng-model="traslado.salida_aerolinea"
                                        class="form-control" 
                                        name="salida_aerolinea" 
                                        type="text" 
                                        placeholder="Enter airline name"
                                        ng-required="traslado.tipo==2">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input 
                                        ng-model="traslado.salida_vuelo"
                                        class="form-control" 
                                        name="salida_vuelo" 
                                        type="text" 
                                        placeholder="Enter flight name"
                                        ng-required="traslado.tipo==2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="">Extras</label>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="thumbnail">
                                    <img ng-src="{{ asset("/") }}img/productos/cerveza.jpg" alt="...">
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
                                    <img ng-src="{{ asset("/") }}img/productos/cocacola.jpg" alt="...">
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
                                    <img ng-src="{{ asset("/") }}img/productos/vino.jpg" alt="...">
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
                                    <img ng-src="{{ asset("/") }}img/productos/champagne.jpg" alt="...">
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



            <div class="col-xs-12" ng-show="VIP.serviceVIP">
                <div class="row">
                    <h4 class="col-xs-12 text-center titulo">SERVICE VIP</h4>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="">
                                *How many persons are you (including children older than 7 years)?
                            </label>
                            <select class="form-control select2" name="pasajerosVIP" ng-change="calcularPrecioVIP();" ng-model="VIP.pasajeros" ng-required="VIP.serviceVIP">
                                <option value="">
                                    Choose one
                                </option>
                                <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-6 text-center">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="VIP.arrival" ng-click="calcularPrecioVIP();" value="arrival">VIP ARRIVAL SERVICE - $75.00</label>
                        </div> 
                    </div>
                    <div class="col-xs-6 text-center">
                        <div class="checkbox">
                            <label><input type="checkbox" ng-model="VIP.departure" ng-click="calcularPrecioVIP();" value="departure">VIP DEPARTURE SERVICE - $125.00</label>
                        </div> 
                    </div>
                    <div class="col-xs-12">
                        <div class="row" ng-show="VIP.arrival">
                            <h4 class="mt2 col-xs-12 text-center">VIP ARRIVAL SERVICE</h4>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Arrival Date
                                    </label>
                                    <input 
                                        class="form-control" id="date1VIP" 
                                        ng-model="VIP.llegada_fecha"
                                        name="llegada_fecha" 
                                        type="text" 
                                        placeholder="Select Date" 
                                        ng-required="VIP.arrival">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input 
                                        class="form-control hora" 
                                        ng-model="VIP.llegada_hora"
                                        name="llegada_hora" 
                                        type="text" 
                                        placeholder="Select Time" 
                                        ng-required="VIP.arrival">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input 
                                        class="form-control" 
                                        ng-model="VIP.llegada_aerolinea"
                                        name="llegada_aerolinea" 
                                        type="text" 
                                        placeholder="Enter airline name" 
                                        ng-required="VIP.arrival">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input 
                                        class="form-control" 
                                        ng-model="VIP.llegada_vuelo"
                                        name="llegada_vuelo" 
                                        type="text" 
                                        placeholder="Enter flight name" 
                                        ng-required="VIP.arrival">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row" ng-show="VIP.departure">
                            <h4 class="mt2 col-xs-12 text-center">VIP DEPARTURE SERVICE</h4>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group" ng-show="VIP.departure">
                                    <label for="">
                                        *Date Departure
                                    </label>
                                    <input 
                                        class="form-control" id="date2VIP" 
                                        ng-model="VIP.salida_fecha"
                                        name="salida_fecha" 
                                        type="text" 
                                        placeholder="Select Date" 
                                        ng-required="VIP.departure">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Time
                                    </label>
                                    <input 
                                        class="form-control hora" 
                                        ng-model="VIP.salida_hora"
                                        name="salida_hora" 
                                        type="text" 
                                        placeholder="Select Time" 
                                        ng-required="VIP.departure">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Airline Name
                                    </label>
                                    <input 
                                        class="form-control" 
                                        ng-model="VIP.salida_aerolinea"
                                        name="salida_aerolinea" 
                                        type="text" 
                                        placeholder="Enter airline name" 
                                        ng-required="VIP.departure">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="form-group">
                                    <label for="">
                                        *Flight Number
                                    </label>
                                    <input 
                                        class="form-control" 
                                        ng-model="VIP.salida_vuelo"
                                        name="salida_vuelo" 
                                        type="text" 
                                        placeholder="Enter flight name" 
                                        ng-required="VIP.departure">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="">
                        *Promo Code (discount $ 10.00)
                    </label>
                    <input class="form-control" ng-model="VIP.codePromo" ng-change="cambiarCodigo(codePromo)" name="promoCode" type="text"  placeholder="Enter Promo Code">
                </div>
            </div> -->
            <div class="col-xs-12">
                <h3 class="text-center">
                    $ @{{VIP.precio + traslado.precio}}
                </h3>
            </div>
            <div class="col-xs-12 text-center">
                <button  ng-click="opcion='agregar'" class="btn btn-primary" id="traslado" name="traslado" type="submit" value="traslado">
                    Add to <i style="color: white;" class="fa fa-shopping-cart"></i>
                </button>
                <button ng-click="opcion='reservar'" class="btn btn-success" id="traslado" name="traslado" type="submit" value="traslado">
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

@endsection