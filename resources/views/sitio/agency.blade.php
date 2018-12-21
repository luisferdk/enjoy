@extends('base.sitio')
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <form>
                        <h4>Contact Information</h4>
                        <hr>
                        <input type="text" name="title" placeholder="Title" id="title" class="form-control"><br>
                        <input type="text" name="name" placeholder="First Name" id="name" class="form-control"><br>
                        <input type="text" name="last" placeholder="Last Name" id="last" class="form-control"><br>
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control"><br>
                        <input type="text" name="number" placeholder="Phone Number" id="number" class="form-control"><br>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form>
                        <h4>Travel Agency Information</h4>
                        <hr>
                        <input type="text" name="company_name" placeholder="Company Name" id="company_name" class="form-control"><br>
                        <select name="company_type" id="company_type" class="form-control">
                            <option value="-">Choose One</option>
                            <option value="Airline">Airline</option>
                            <option value="Concierge">Concierge</option>
                            <option value="Consortia">Consortia</option>
                            <option value="Host">Host</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Independent Planner">Independent Planner</option>
                            <option value="Travel Agency">Travel Agency</option>
                            <option value="Online Travel Agency">Online Travel Agency</option>
                            <option value="Branch of a corporate agency">Branch of a corporate agency</option>
                            <option value="Agency with multiple branches">Agency with multiple branches</option>
                            <option value="Tour operator">Tour operator</option>
                        </select><br>
                        <input type="text" name="web" placeholder="Web Site" id="web" class="form-control"><br>
                        <input type="text" name="address" id="address" placeholder="Street Address" class="form-control"><br>
                        <input type="text" name="city" id="city" placeholder="City" class="form-control"><br>
                        <input type="text" name="zip" id="zip" placeholder="ZIP" class="form-control"><br>
                        <select name="state" id="state" class="form-control">
                            <option value="" disabled="" selected="">Choose One</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="District of Colombia">District of Colombia</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Guam">Guam</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                            <option value="Alberta">Alberta</option>
                            <option value="British Columbia">British Columbia</option>
                            <option value="Manitoba">Manitoba</option>
                            <option value="New Brunswick">New Brunswick</option>
                            <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                            <option value="Northwest Territories">Northwest Territories</option>
                            <option value="Nova Scotia">Nova Scotia</option>
                            <option value="Nunavut">Nunavut</option>
                            <option value="Ontario">Ontario</option>
                            <option value="Prince Edward Island">Prince Edward Island</option>
                            <option value="Quebec">Quebec</option>
                            <option value="Saskatchewan">Saskatchewan</option>
                            <option value="Other">Other</option>
                        </select><br>
                        <select name="country" id="country" class="form-control">
                            <option value="" disabled="" selected="">Choose One</option>
                            <option value="UNITED STATES">UNITED STATES</option>
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ALGERIA">ALGERIA</option>
                            <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                            <option value="ANDORRA">ANDORRA</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="ANGUILLA">ANGUILLA</option>
                            <option value="ANTARCTICA">ANTARCTICA</option>
                            <option value="ANTIGUA">ANTIGUA</option>
                            <option value="ARGENTINA">ARGENTINA</option>
                            <option value="ARMENIA">ARMENIA</option>
                            <option value="ARUBA">ARUBA</option>
                            <option value="AUSTRALIA">AUSTRALIA</option>
                            <option value="AUSTRIA">AUSTRIA</option>
                            <option value="AZERBAIJAN">AZERBAIJAN</option>
                            <option value="BAHAMAS">BAHAMAS</option>
                            <option value="BAHRAIN">BAHRAIN</option>
                            <option value="BANGLADESH">BANGLADESH</option>
                            <option value="BARBADOS">BARBADOS</option>
                            <option value="BELARUS">BELARUS</option>
                            <option value="BELGIUM">BELGIUM</option>
                            <option value="BELIZE">BELIZE</option>
                            <option value="BENIN">BENIN</option>
                            <option value="BERMUDA">BERMUDA</option>
                            <option value="BHUTAN">BHUTAN</option>
                            <option value="BOLIVIA">BOLIVIA</option>
                            <option value="BOSNIA-HERZEGOWINA">BOSNIA-HERZEGOWINA</option>
                            <option value="BOTSWANA">BOTSWANA</option>
                            <option value="BOUVET ISLAND">BOUVET ISLAND</option>
                            <option value="BRAZIL">BRAZIL</option>
                            <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                            <option value="BULGARIA">BULGARIA</option>
                            <option value="BURKINA FASO">BURKINA FASO</option>
                            <option value="BURUNDI">BURUNDI</option>
                            <option value="CAMBODIA">CAMBODIA</option>
                            <option value="CAMEROON">CAMEROON</option>
                            <option value="CANADA">CANADA</option>
                            <option value="CAPE VERDE">CAPE VERDE</option>
                            <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
                            <option value="CEN. AFRICAN REP.">CEN. AFRICAN REP.</option>
                            <option value="CHAD">CHAD</option>
                            <option value="CHILE">CHILE</option>
                            <option value="CHINA">CHINA</option>
                            <option value="CHRISTMAS ISL.">CHRISTMAS ISL.</option>
                            <option value="COCOS  ISLANDS">COCOS  ISLANDS</option>
                            <option value="COLOMBIA">COLOMBIA</option>
                            <option value="COMOROS">COMOROS</option>
                            <option value="CONGO">CONGO</option>
                            <option value="COOK ISLANDS">COOK ISLANDS</option>
                            <option value="COSTA RICA">COSTA RICA</option>
                            <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
                            <option value="CROATIA">CROATIA</option>
                            <option value="CUBA">CUBA</option>
                            <option value="CYPRUS">CYPRUS</option>
                            <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                            <option value="DENMARK">DENMARK</option>
                            <option value="DJIBOUTI">DJIBOUTI</option>
                            <option value="DOMINICA">DOMINICA</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="EAST TIMOR">EAST TIMOR</option>
                            <option value="ECUADOR">ECUADOR</option>
                            <option value="EGYPT">EGYPT</option>
                            <option value="EL SALVADOR">EL SALVADOR</option>
                            <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                            <option value="ERITREA">ERITREA</option>
                            <option value="ESTONIA">ESTONIA</option>
                            <option value="ETHIOPIA">ETHIOPIA</option>
                            <option value="FALKLAND ISLANDS">FALKLAND ISLANDS</option>
                            <option value="FAROE ISLANDS">FAROE ISLANDS</option>
                            <option value="FIJI">FIJI</option>
                            <option value="FINLAND">FINLAND</option>
                            <option value="FRANCE">FRANCE</option>
                            <option value="FRENCH GUIANA">FRENCH GUIANA</option>
                            <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
                            <option value="GABON">GABON</option>
                            <option value="GAMBIA">GAMBIA</option>
                            <option value="GEORGIA">GEORGIA</option>
                            <option value="GERMANY">GERMANY</option>
                            <option value="GHANA">GHANA</option>
                            <option value="GIBRALTAR">GIBRALTAR</option>
                            <option value="GREECE">GREECE</option>
                            <option value="GREENLAND">GREENLAND</option>
                            <option value="GRENADA">GRENADA</option>
                            <option value="GUADELOUPE">GUADELOUPE</option>
                            <option value="GUAM">GUAM</option>
                            <option value="GUATEMALA">GUATEMALA</option>
                            <option value="GUINEA">GUINEA</option>
                            <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                            <option value="GUYANA">GUYANA</option>
                            <option value="HAITI">HAITI</option>
                            <option value="HOLY SEE">HOLY SEE</option>
                            <option value="HONDURAS">HONDURAS</option>
                            <option value="HONG KONG">HONG KONG</option>
                            <option value="HUNGARY">HUNGARY</option>
                            <option value="ICELAND">ICELAND</option>
                            <option value="INDIA">INDIA</option>
                            <option value="INDONESIA">INDONESIA</option>
                            <option value="IRAN">IRAN</option>
                            <option value="IRAQ">IRAQ</option>
                            <option value="IRELAND">IRELAND</option>
                            <option value="ISRAEL">ISRAEL</option>
                            <option value="ITALY">ITALY</option>
                            <option value="JAMAICA">JAMAICA</option>
                            <option value="JAPAN">JAPAN</option>
                            <option value="JORDAN">JORDAN</option>
                            <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                            <option value="KENYA">KENYA</option>
                            <option value="KIRIBATI">KIRIBATI</option>
                            <option value="KOREA, DPR">KOREA, DPR</option>
                            <option value="KOREA, REP. OF">KOREA, REP. OF</option>
                            <option value="KUWAIT">KUWAIT</option>
                            <option value="KYRGYZSTAN">KYRGYZSTAN</option>
                            <option value="LAO PDR">LAO PDR</option>
                            <option value="LATVIA">LATVIA</option>
                            <option value="LEBANON">LEBANON</option>
                            <option value="LESOTHO">LESOTHO</option>
                            <option value="LIBERIA">LIBERIA</option>
                            <option value="LIBYA">LIBYA</option>
                            <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                            <option value="LITHUANIA">LITHUANIA</option>
                            <option value="LUXEMBOURG">LUXEMBOURG</option>
                            <option value="MACAU">MACAU</option>
                            <option value="MADAGASCAR">MADAGASCAR</option>
                            <option value="MALAWI">MALAWI</option>
                            <option value="MALAYSIA">MALAYSIA</option>
                            <option value="MALDIVES">MALDIVES</option>
                            <option value="MALI">MALI</option>
                            <option value="MALTA">MALTA</option>
                            <option value="MARSHALL ISL.">MARSHALL ISL.</option>
                            <option value="MARTINIQUE">MARTINIQUE</option>
                            <option value="MAURITANIA">MAURITANIA</option>
                            <option value="MAURITIUS">MAURITIUS</option>
                            <option value="MAYOTTE">MAYOTTE</option>
                            <option value="MEXICO">MEXICO</option>
                            <option value="MICRONESIA">MICRONESIA</option>
                            <option value="MOLDOVA">MOLDOVA</option>
                            <option value="MONACO">MONACO</option>
                            <option value="MONGOLIA">MONGOLIA</option>
                            <option value="MONTSERRAT">MONTSERRAT</option>
                            <option value="MOROCCO">MOROCCO</option>
                            <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                            <option value="MYANMAR">MYANMAR</option>
                            <option value="N. MARIANA ISL.">N. MARIANA ISL.</option>
                            <option value="NAMIBIA">NAMIBIA</option>
                            <option value="NAURU">NAURU</option>
                            <option value="NEPAL">NEPAL</option>
                            <option value="NETHERLANDS">NETHERLANDS</option>
                            <option value="NEW CALEDONIA">NEW CALEDONIA</option>
                            <option value="NEW ZEALAND">NEW ZEALAND</option>
                            <option value="NICARAGUA">NICARAGUA</option>
                            <option value="NIGER">NIGER</option>
                            <option value="NIGERIA">NIGERIA</option>
                            <option value="NIUE">NIUE</option>
                            <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
                            <option value="NORWAY">NORWAY</option>
                            <option value="OMAN">OMAN</option>
                            <option value="PAKISTAN">PAKISTAN</option>
                            <option value="PALAU">PALAU</option>
                            <option value="PALESTINIAN TERR.">PALESTINIAN TERR.</option>
                            <option value="PANAMA">PANAMA</option>
                            <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                            <option value="PARAGUAY">PARAGUAY</option>
                            <option value="PERU">PERU</option>
                            <option value="PHILIPPINES">PHILIPPINES</option>
                            <option value="PITCAIRN">PITCAIRN</option>
                            <option value="POLAND">POLAND</option>
                            <option value="PORTUGAL">PORTUGAL</option>
                            <option value="PUERTO RICO">PUERTO RICO</option>
                            <option value="QATAR">QATAR</option>
                            <option value="REUNION">REUNION</option>
                            <option value="ROMANIA">ROMANIA</option>
                            <option value="RUSSIAN FED.">RUSSIAN FED.</option>
                            <option value="RWANDA">RWANDA</option>
                            <option value="SAINT KITTS">SAINT KITTS</option>
                            <option value="SAINT LUCIA">SAINT LUCIA</option>
                            <option value="SAINT VINCENT">SAINT VINCENT</option>
                            <option value="SAMOA">SAMOA</option>
                            <option value="SAN MARINO">SAN MARINO</option>
                            <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                            <option value="SENEGAL">SENEGAL</option>
                            <option value="SEYCHELLES">SEYCHELLES</option>
                            <option value="SIERRA LEONE">SIERRA LEONE</option>
                            <option value="SINGAPORE">SINGAPORE</option>
                            <option value="SLOVAKIA">SLOVAKIA</option>
                            <option value="SLOVENIA">SLOVENIA</option>
                            <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
                            <option value="SOMALIA">SOMALIA</option>
                            <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                            <option value="SPAIN">SPAIN</option>
                            <option value="SRI LANKA">SRI LANKA</option>
                            <option value="ST. HELENA">ST. HELENA</option>
                            <option value="SUDAN">SUDAN</option>
                            <option value="SURINAME">SURINAME</option>
                            <option value="SWAZILAND">SWAZILAND</option>
                            <option value="SWEDEN">SWEDEN</option>
                            <option value="SWITZERLAND">SWITZERLAND</option>
                            <option value="SYRIAN ARAB REP.">SYRIAN ARAB REP.</option>
                            <option value="TAIWAN">TAIWAN</option>
                            <option value="TAJIKISTAN">TAJIKISTAN</option>
                            <option value="TANZANIA">TANZANIA</option>
                            <option value="THAILAND">THAILAND</option>
                            <option value="TOGO">TOGO</option>
                            <option value="TOKELAU">TOKELAU</option>
                            <option value="TONGA">TONGA</option>
                            <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
                            <option value="TUNISIA">TUNISIA</option>
                            <option value="TURKEY">TURKEY</option>
                            <option value="TURKMENISTAN">TURKMENISTAN</option>
                            <option value="TURKS AND CAICOS">TURKS AND CAICOS</option>
                            <option value="TUVALU">TUVALU</option>
                            <option value="U.A.E.">U.A.E.</option>
                            <option value="UGANDA">UGANDA</option>
                            <option value="UKRAINE">UKRAINE</option>
                            <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                            <option value="URUGUAY">URUGUAY</option>
                            <option value="UZBEKISTAN">UZBEKISTAN</option>
                            <option value="VANUATU">VANUATU</option>
                            <option value="VENEZUELA">VENEZUELA</option>
                            <option value="VIET NAM">VIET NAM</option>
                            <option value="VIRGIN ISLANDS (BR)">VIRGIN ISLANDS (BR)</option>
                            <option value="VIRGIN ISLANDS (US)">VIRGIN ISLANDS (US)</option>
                            <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                            <option value="YEMEN">YEMEN</option>
                            <option value="YUGOSLAVIA">YUGOSLAVIA</option>
                            <option value="ZAMBIA">ZAMBIA</option>
                            <option value="ZIMBABWE">ZIMBABWE</option>
                            <option value="-Other-">-Other-</option>
                        </select><br>
                        <button type="button" id="sendAgency" class="button">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
@endsection
@section('js')
    <script src="{{ asset('js/agency.js') }}"></script>
@endsection