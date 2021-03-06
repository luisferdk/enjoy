var app = angular.module("app", ['ngSanitize']);

app.controller("ctrl", function ($scope, $http, $timeout, $window) {


    $scope.carrito = {
        traslados: [],
        tours: [],
        hoteles:[]
    };
    $scope.opcion = 'agregar';
    $scope.vector = function (n) {
        var array = [];
        for (var i = 1; i <= n; i++) {
            array.push(i);
        }
        return array;
    }
    /*----------------------------Transfers----------------------------*/
    var pasajeros = [];
    for (var i = 1; i <= 100; i++) {
        pasajeros.push(i);
    }
    $scope.pasajeros = pasajeros;
    $scope.paraOpciones = [];

    $scope.paraV = [
        { id: 0, descripcion: 'Punta Cana', precio: [35, 45, 70, 100, 130] },
        { id: 1, descripcion: 'Bávaro - Cap Cana', precio: [35, 45, 70, 100, 130] },
        { id: 2, descripcion: 'Arena Gorda - Macao', precio: [40, 50, 80, 105, 130] },
        { id: 3, descripcion: 'Uvero Alto', precio: [65, 80, 95, 120, 145] },
        { id: 4, descripcion: 'Four Point by Sheraton Punta Cana', precio: [20, 30, 60, 90, 120] },
        { id: 5, descripcion: 'La Romana', precio: [105, 135, 195, 220, 245] },
        { id: 6, descripcion: 'Santo Domingo', precio: [150, 165, 250, 275, 300] },
    ];

    $scope.deOpciones = [
        { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' },
        { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
        { id: 5, descripcion: 'La Romana' },
        { id: 5, descripcion: "Casa de Campo Resort & Villas" },
        { id: 5, descripcion: "Grand Bahia Principe La Romana" },
        { id: 5, descripcion: "La Romana Luxury Bahia Principe Bouganville - Adults Only" },
        { id: 5, descripcion: "Be Live Collection Canoa - All Inclusive" },
        { id: 5, descripcion: "Dreams La Romana Resort and Spa" },
        { id: 5, descripcion: "Catalonia La Romana - All Inclusive" },
        { id: 5, descripcion: "Tracadero Beach Resort" },
        { id: 5, descripcion: "Hotel Bayahibe" },
        { id: 5, descripcion: "Dreams Dominicus La Romana" },
        { id: 5, descripcion: "Viva Wyndham Dominicus Beach - All Inclusive" },
        { id: 5, descripcion: "Catalonia Royal La Romana Adults Only - All Inclusive" },
        { id: 5, descripcion: "Viva Wyndham Dominicus Palace - All Inclusive" },
        { id: 5, descripcion: "Iberostar Hacienda Dominicus" },
        { id: 5, descripcion: "whala! Bayahibe" },
        { id: 6, descripcion: 'Santo Domingo' },

        { id: 0, descripcion: "Majestic Colonial " },
        { id: 0, descripcion: "Majestic Elegance " },
        { id: 0, descripcion: "Majestic Mirage" },
        { id: 0, descripcion: 'Iberostar Punta Cana' },
        { id: 0, descripcion: 'Iberostar Bavaro' },
        { id: 0, descripcion: 'Iberostar Grand' },
        { id: 0, descripcion: 'Iberostar Dominicana' },
        { id: 1, descripcion: 'Royalton Bavaro' },
        /*{id:0,descripcion:'Dreams Palm Beach'},*/
        { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
        { id: 0, descripcion: 'Vik Arena Blanca' },
        { id: 0, descripcion: 'Westin Punta Cana' },
        { id: 0, descripcion: 'Alsol Luxury Village' },
        { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
        { id: 0, descripcion: 'Sanctuary Cap Cana' },
        { id: 0, descripcion: 'Club Med' },
        { id: 0, descripcion: 'Natura Park Resort (Blau)' },
        { id: 0, descripcion: 'Catalonia Punta Cana' },
        { id: 0, descripcion: 'Be Live Collection Punta Cana' },
        { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
        { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
        { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
        { id: 0, descripcion: 'Eden Roc At Cap Cana' },
        { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
        { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
        { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
        /*{id:0,descripcion:'Melia Caribe Tropical'},*/
        { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
        { id: 0, descripcion: 'Barcelo Bavaro Palace' },
        { id: 0, descripcion: 'Barcelo Bavaro Beach' },
        { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
        { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
        { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
        { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
        { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
        { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
        { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
        { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
        { id: 0, descripcion: 'whala!bávaro' },
        { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
        { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
        { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
        { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
        { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
        { id: 0, descripcion: 'Riu Bambu' },
        { id: 0, descripcion: 'Riu Bavaro' },
        { id: 0, descripcion: 'Riu Palace Macao' },
        { id: 0, descripcion: 'Riu Naiboa' },
        { id: 0, descripcion: 'Riu Palace Punta Cana' },

        { id: 1, descripcion: "Occidental Caribe" },
        { id: 1, descripcion: "Occidental Punta Cana" },
        { id: 1, descripcion: "Secret Cap Cana" },
        // {id:1,descripcion:"Secret Royal Beach"},
        { id: 3, descripcion: "Now Onix" },
        { id: 1, descripcion: "Riu República" },
        { id: 1, descripcion: "Bahia Principe Ambar" },
        { id: 1, descripcion: "Bahia Principe Fantasy" },

        /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

        { id: 3, descripcion: "Zoetry Aqua" },
        { id: 3, descripcion: "The Palms Punta Cana" },
        { id: 3, descripcion: "Las Dunas Condo" },
        /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
        { id: 3, descripcion: "CHIC by Royalton Resorts " },
        /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
        { id: 3, descripcion: "Excellence Punta Cana" },
        { id: 3, descripcion: "Excellence El Carmen" },
        { id: 3, descripcion: "Sensatori Resort Punta Cana" },
        { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
        { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
        { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
        { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
        { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
    ];

    $scope.hoteles = [
        { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
        { id: 5, descripcion: 'La Romana' },
        { id: 5, descripcion: "Casa de Campo Resort & Villas" },
        { id: 5, descripcion: "Grand Bahia Principe La Romana" },
        { id: 5, descripcion: "La Romana Luxury Bahia Principe Bouganville - Adults Only" },
        { id: 5, descripcion: "Be Live Collection Canoa - All Inclusive" },
        { id: 5, descripcion: "Dreams La Romana Resort and Spa" },
        { id: 5, descripcion: "Catalonia La Romana - All Inclusive" },
        { id: 5, descripcion: "Tracadero Beach Resort" },
        { id: 5, descripcion: "Hotel Bayahibe" },
        { id: 5, descripcion: "Dreams Dominicus La Romana" },
        { id: 5, descripcion: "Viva Wyndham Dominicus Beach - All Inclusive" },
        { id: 5, descripcion: "Catalonia Royal La Romana Adults Only - All Inclusive" },
        { id: 5, descripcion: "Viva Wyndham Dominicus Palace - All Inclusive" },
        { id: 5, descripcion: "Iberostar Hacienda Dominicus" },
        { id: 5, descripcion: "whala! Bayahibe" },
        { id: 6, descripcion: 'Santo Domingo' },

        { id: 0, descripcion: "Majestic Colonial " },
        { id: 0, descripcion: "Majestic Elegance " },
        { id: 0, descripcion: "Majestic Mirage" },
        { id: 0, descripcion: 'Iberostar Punta Cana' },
        { id: 0, descripcion: 'Iberostar Bavaro' },
        { id: 0, descripcion: 'Iberostar Grand' },
        { id: 0, descripcion: 'Iberostar Dominicana' },
        { id: 1, descripcion: 'Royalton Bavaro' },
        /*{id:0,descripcion:'Dreams Palm Beach'},*/
        { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
        { id: 0, descripcion: 'Vik Arena Blanca' },
        { id: 0, descripcion: 'Westin Punta Cana' },
        { id: 0, descripcion: 'Alsol Luxury Village' },
        { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
        { id: 0, descripcion: 'Sanctuary Cap Cana' },
        { id: 0, descripcion: 'Club Med' },
        { id: 0, descripcion: 'Natura Park Resort (Blau)' },
        { id: 0, descripcion: 'Catalonia Punta Cana' },
        { id: 0, descripcion: 'Be Live Collection Punta Cana' },
        { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
        { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
        { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
        { id: 0, descripcion: 'Eden Roc At Cap Cana' },
        { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
        { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
        { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
        /*{id:0,descripcion:'Melia Caribe Tropical'},*/
        { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
        { id: 0, descripcion: 'Barcelo Bavaro Palace' },
        { id: 0, descripcion: 'Barcelo Bavaro Beach' },
        { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
        { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
        { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
        { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
        { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
        { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
        { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
        { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
        { id: 0, descripcion: 'whala!bávaro' },
        { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
        { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
        { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
        { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
        { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
        { id: 0, descripcion: 'Riu Palace Punta Cana' },
        { id: 0, descripcion: 'Riu Naiboa' },
        { id: 0, descripcion: 'Riu Bavaro' },
        { id: 0, descripcion: 'Riu Palace Macao' },

        { id: 1, descripcion: "Occidental Caribe" },
        { id: 1, descripcion: "Occidental Punta Cana" },
        { id: 1, descripcion: "Secret Cap Cana" },
        // {id:1,descripcion:"Secret Royal Beach"},
        { id: 3, descripcion: "Now Onix" },
        { id: 1, descripcion: "Riu República" },
        { id: 1, descripcion: "Bahia Principe Ambar" },
        { id: 1, descripcion: "Bahia Principe Fantasy" },

        /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

        { id: 3, descripcion: "Zoetry Aqua" },
        { id: 3, descripcion: "The Palms Punta Cana" },
        { id: 3, descripcion: "Las Dunas Condo" },
        /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
        { id: 3, descripcion: "CHIC by Royalton Resorts " },
        /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
        { id: 3, descripcion: "Excellence Punta Cana" },
        { id: 3, descripcion: "Excellence El Carmen" },
        { id: 3, descripcion: "Sensatori Resort Punta Cana" },
        { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
        { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
        { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
        { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
        { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
    ];

    $scope.aeropuerto = [
        { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' }
    ];

    $scope.santodomingo = [
        { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' },
        { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
        { id: 0, descripcion: "Majestic Colonial " },
        { id: 0, descripcion: "Majestic Elegance " },
        { id: 0, descripcion: "Majestic Mirage" },
        { id: 0, descripcion: 'Iberostar Punta Cana' },
        { id: 0, descripcion: 'Iberostar Bavaro' },
        { id: 0, descripcion: 'Iberostar Grand' },
        { id: 0, descripcion: 'Iberostar Dominicana' },
        { id: 1, descripcion: 'Royalton Bavaro' },
        /*{id:0,descripcion:'Dreams Palm Beach'},*/
        { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
        { id: 0, descripcion: 'Vik Arena Blanca' },
        { id: 0, descripcion: 'Westin Punta Cana' },
        { id: 0, descripcion: 'Alsol Luxury Village' },
        { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
        { id: 0, descripcion: 'Sanctuary Cap Cana' },
        { id: 0, descripcion: 'Club Med' },
        { id: 0, descripcion: 'Natura Park Resort (Blau)' },
        { id: 0, descripcion: 'Catalonia Punta Cana' },
        { id: 0, descripcion: 'Be Live Collection Punta Cana' },
        { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
        { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
        { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
        { id: 0, descripcion: 'Eden Roc At Cap Cana' },
        { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
        { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
        { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
        /*{id:0,descripcion:'Melia Caribe Tropical'},*/
        { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
        { id: 0, descripcion: 'Barcelo Bavaro Palace' },
        { id: 0, descripcion: 'Barcelo Bavaro Beach' },
        { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
        { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
        { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
        { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
        { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
        { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
        { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
        { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
        { id: 0, descripcion: 'whala!bávaro' },
        { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
        { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
        { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
        { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
        { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
        { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
        { id: 0, descripcion: 'Riu Palace Punta Cana' },
        { id: 0, descripcion: 'Riu Naiboa' },
        { id: 0, descripcion: 'Riu Bavaro' },
        { id: 0, descripcion: 'Riu Palace Macao' },

        { id: 1, descripcion: "Occidental Caribe" },
        { id: 1, descripcion: "Occidental Punta Cana" },
        { id: 1, descripcion: "Secret Cap Cana" },
        // {id:1,descripcion:"Secret Royal Beach"},
        { id: 3, descripcion: "Now Onix" },
        { id: 1, descripcion: "Riu República" },
        { id: 1, descripcion: "Bahia Principe Ambar" },
        { id: 1, descripcion: "Bahia Principe Fantasy" },

        /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

        { id: 3, descripcion: "Zoetry Aqua" },
        { id: 3, descripcion: "The Palms Punta Cana" },
        { id: 3, descripcion: "Las Dunas Condo" },
        /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
        { id: 3, descripcion: "CHIC by Royalton Resorts " },
        /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
        { id: 3, descripcion: "Excellence Punta Cana" },
        { id: 3, descripcion: "Excellence El Carmen" },
        { id: 3, descripcion: "Sensatori Resort Punta Cana" },
        { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
        { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
        { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
        { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
        { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
    ];


    $scope.cervezas = "0";
    $scope.sodas = "0";
    $scope.vino = "0";
    $scope.champagne = "0";
    $scope.traslado = {};
    $scope.traslado.precio = 0;
    $scope.descuento = false;

    $scope.cambiarDe = function () {
        $timeout(function () { $('.select2_para').select2(); }, 500);
        if ($scope.traslado.de.id == undefined)
            $scope.paraOpciones = [];
        else if ($scope.traslado.de.id == 6)
            $scope.paraOpciones = $scope.santodomingo;
        else if ($scope.traslado.de.id == -1)
            $scope.paraOpciones = $scope.hoteles;
        else
            $scope.paraOpciones = $scope.aeropuerto;
    }

    $scope.cambiarPara = function () {
        $timeout(function () { $('.select2_para').select2(); }, 500);
    }

    $scope.calcularPrecioTraslado = function () {
        var pasajeros = $scope.traslado.pasajeros;
        var de = $scope.traslado.de;
        var para = $scope.traslado.para;
        var aux;
        var bebidas = parseInt($scope.cervezas) * 5 + parseInt($scope.sodas) * 3 + parseInt($scope.vino) * 20 + parseInt($scope.champagne) * 25;

        if (pasajeros > 2) {
        }
        if (de != undefined && para != undefined && pasajeros != undefined) {
            if (de.id != -1)
                aux = de;
            else
                aux = para;

            $scope.hotelValue = aux.descripcion;

            if (pasajeros && aux.id != undefined) {
                if (pasajeros <= 4)
                    precio = $scope.paraV[aux.id].precio[0];
                else if (pasajeros <= 6)
                    precio = $scope.paraV[aux.id].precio[1];
                else if (pasajeros <= 10)
                    precio = $scope.paraV[aux.id].precio[2];
                else if (pasajeros <= 15)
                    precio = $scope.paraV[aux.id].precio[3];
                else if (pasajeros <= 20)
                    precio = $scope.paraV[aux.id].precio[4];
                else
                    precio = $scope.paraV[aux.id].precio[4] + ((pasajeros - 20) * 5);

                if ($scope.traslado.tipo == 2)
                    $scope.traslado.precio = (precio * 2) + bebidas + ($scope.traslado.vip ? 130 : 0);
                else
                    $scope.traslado.precio = precio + bebidas + ($scope.traslado.vip ? 65 : 0);
            }
        }
        //$scope.cambiarCodigo($scope.codePromo);
    }

    $scope.agregarTraslado = function (event) {
        event.preventDefault();
        $scope.carrito.traslados.push({
            de: $scope.traslado.de.descripcion,
            para: $scope.traslado.para.descripcion,
            pasajeros: $scope.traslado.pasajeros,
            tipo: $scope.traslado.tipo,
            llegada_fecha: $scope.traslado.llegada_fecha ? $scope.traslado.llegada_fecha : null,
            llegada_hora: $scope.traslado.llegada_hora ? $scope.traslado.llegada_hora : null,
            llegada_aerolinea: $scope.traslado.llegada_aerolinea ? $scope.traslado.llegada_aerolinea : null,
            llegada_vuelo: $scope.traslado.llegada_vuelo ? $scope.traslado.llegada_vuelo : null,
            salida_fecha: $scope.traslado.salida_fecha ? $scope.traslado.salida_fecha : null,
            salida_hora: $scope.traslado.salida_hora ? $scope.traslado.salida_hora : null,
            salida_aerolinea: $scope.traslado.salida_aerolinea ? $scope.traslado.salida_aerolinea : null,
            salida_vuelo: $scope.traslado.salida_vuelo ? $scope.traslado.salida_vuelo : null,
            precio: $scope.traslado.precio ? $scope.traslado.precio : null,
            vip: $scope.traslado.vip ? $("#vip").val() : null,
            cervezas: $scope.cervezas ? $scope.cervezas : null,
            sodas: $scope.sodas ? $scope.sodas : null,
            vino: $scope.vino ? $scope.vino : null,
            champagne: $scope.champagne ? $scope.champagne : null
        });
        $scope.traslado = {};
        $scope.cervezas = "0";
        $scope.sodas = "0";
        $scope.vino = "0";
        $scope.champagne = "0";
        $scope.traslado.precio = 0;
        $timeout(function () {
            $('#formTraslado select').select2();
            $("html, body").animate({ scrollTop: 0 }, 500);
        }, 500);
        $scope.actualizar();

        swal({
            title: 'Transfers',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
    }

    $scope.eliminarTraslado = function (index) {
        $scope.carrito.traslados.splice(index, 1);
        $scope.actualizar();
    }
    /*------------------------------Tours------------------------------*/
    $scope.agregarTour = function (event) {
        event.preventDefault();
        var pos = $scope.carrito.tours.map(function (e) { return e.tour; }).indexOf($scope.tour.titulo + "");
        if (pos > -1) {
            swal({
                title: 'Error',
                text: 'existing tour',
                type: 'error',
                confirmButtonColor: '#1576c8',
            });
            return false;
        }

        if ($scope.carrito.tours){
            $scope.carrito.tours.push(
                {
                    tour: $scope.tour.titulo,
                    modalidad: $scope.tour.modalidad ? $scope.tour.modalidad.descripcion : $scope.tour.modalidades[0].descripcion,
                    fecha: $scope.tour.fecha,
                    horario: $scope.tour.horario ? $scope.tour.horario : null,
                    adultos: $scope.tour.adultos,
                    ninos: $scope.tour.ninos ? $scope.tour.ninos : null,
                    precio: $scope.tour.precio
                }
            );
        }

        if (window.pos != null) {
            $scope.tour.fecha = null;
            $scope.tour.adultos = null;
            $scope.tour.ninos = null;
            $scope.tour.horario = null;
            $scope.tour.precio = $scope.tour.modalidades[0].precio;
        }
        else {
            $scope.tour = {};
            $scope.tour.precio = 0;
        }
        $timeout(function () {
            $('#formTour select').select2();
            $("html, body").animate({ scrollTop: 0 }, 500);
        }, 500);
        
        $scope.actualizar();

        swal({
            title: 'Tour',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
    }

    $scope.eliminarTour = function (index) {
        $scope.carrito.tours.splice(index, 1);
        $scope.actualizar();
    }

    $scope.precioTour = 0;
    var v99 = [];
    for (var i = 1; i <= 99; i++) {
        v99.push(i);
    }
    $scope.v99 = v99;

    var tours = [
        {
            id: 15,
            mostrar: true,
            partyBoat: true,
            titulo: "Discover Saona Island",
            descripcion: `The tour starts taking the bus to Bayahibe beach, where the boats or catamaran will address to start the sea path that will lead to Saona Island. A beautiful beach, virtually untouched, where you can enjoy the sun, swim and have fun with recreational activities carried out there: Volleyball, music to dance merengue, salsa, bachata, among others. At noon Lunch will offer a delicious buffet. National drinks (soft drinks, rum, Free Cuba, water) during the time on the island. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool and then transfer by bus back to the hotels.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    The tour starts taking the bus to Bayahibe beach, where the boats or catamaran will address to start the sea path that will lead to Saona Island.
                    <br><br>A beautiful beach, virtually untouched, where you can enjoy the sun, swim and have fun with recreational activities carried out there: Volleyball, music to dance merengue, salsa, bachata, among others.
                    <br><br>At noon Lunch will offer a delicious buffet. National drinks (soft drinks, rum, Free Cuba, water) during the time on the island. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool and then transfer by bus back to the hotels.
                </p
            `,
            modalidades: [
                { id: 0, precio: 75, nino: 45, descripcion: 'Basic' },
                { id: 1, precio: 129, nino: 129, descripcion: 'Saona VIP Lobster & premium drinks' },
                { id: 2, precio: 179, nino: 179, descripcion: 'Saona VIP Lobster & premium drinks and private VIP area' },
            ]
        },
        {
            id: 27,
            titulo: "Santo Domingo",
            mostrar: true,
            descripcion: `
              Come and discover the first city of the new world. An expert tourist guide will take you through the first city of the Americas, learning historically relevant facts of this modem-day metropolitan city. Stroll down through the Colonial Zone and observe monuments and museums. Pay homage to the ﬁrst cathedral of the Americas, known as the Catedral Metropolitana Santa Maria de la Encarnacion. Stroll down Las Damas Street, the oldest back street not only in the Dominican Republic, in all of the Americas, where you can see the largest amount of monuments. Pass by the Museo de las Casa Reales, formerly the government palace. A walk across the Alcazar de Colon, will transport you back to the era of the ﬁrst Spanish Con-quistadors. 
              Lunch will be a typical Dominican meal in an authentic Dominican restaurant.
              This tour may be privatized. Please ask us how.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                Come and discover the first city of the new world.
                <br><br>An expert tourist guide will take you through the first city of the Americas, learning historically relevant facts of this modem-day metropolitan city.
                <br><br>Stroll down through the Colonial Zone and observe monuments and museums.
                <br><br>Pay homage to the ﬁrst cathedral of the Americas, known as the Catedral Metropolitana Santa Maria de la Encarnacion.
                <br><br>Stroll down Las Damas Street, the oldest back street not only in the Dominican Republic, in all of the Americas, where you can see the largest amount of monuments.
                <br><br>Pass by the Museo de las Casa Reales, formerly the government palace.
                <br><br>A walk across the Alcazar de Colon, will transport you back to the era of the ﬁrst Spanish Con-quistadors.

                <br><br>Lunch will be a typical Dominican meal in an authentic Dominican restaurant.
                <br><br>This tour may be privatized.
                <br><br>Please ask us how.
                </p
            `,
            modalidades: [
                { id: 0, precio: 95, nino: 50, descripcion: "City Tour" }
            ]
        },
        {
            id: 3,
            mostrar: true,
            titulo: "Boogies Adventure",
            descripcion: `Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic. Get to know a Tobacco Plantation, a Wild Ranch, the Nature Cave and finally the beautiful Macao Beach.This adventure includes profesional guides that will be with you the entire road trip to help you find the beauty Dominican Republic has to offer. Book with us this amazing adventure a live an unforgettable experience`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic.
                    <br><br>Get to know a Tobacco Plantation, a Wild Ranch, the Nature Cave and finally the beautiful Macao Beach.
                    <br><br>This adventure includes profesional guides that will be with you the entire road trip to help you find the beauty Dominican Republic has to offer.
                    <br><br>Book with us this amazing adventure a live an unforgettable experience
                </p
            `,
            modalidades: [
                { id: 0, precio: 65, nino: 35, descripcion: 'Doble' },
                { id: 1, precio: 90, nino: 45, descripcion: 'Individual' },
            ]
        },
        {
            id: 7,
            mostrar: true,
            titulo: "Bavaro Runners",
            descripcion: `Thop on the back of one of our safari-style trucks, other eager pioneers at your side. A zealous tourist guide eagerly waits to sweep you through the most hidden space of this mystical destination.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">Thop on the back of one of our safari-style trucks, other eager pioneers at your side. A zealous tourist guide eagerly waits to sweep you through the most hidden space of this mystical destination.</p>
            `,
            modalidades: [
                { id: 0, precio: 89, nino: 60, descripcion: 'Básico' }
            ]
        },
        {
            id: 4,
            mostrar: true,
            titulo: "Helicopter Tour",
            descripcion: `Bird's eye view of the entire area giving you amazing photo opportunities of your hotel and the surrounding area. Discover new sensations. Fly over the beautiful Dominican landscape, and admire the exuberant flora and fauna`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Bird's eye view of the entire area giving you amazing photo opportunities of your hotel and the surrounding area.
                    <br><br>Discover new sensations. Fly over the beautiful Dominican landscape, and admire the exuberant flora and fauna
                </p>
            `,
            modalidades: [
                { id: 0, precio: 89, nino: 89, descripcion: '10 min' },
                { id: 1, precio: 129, nino: 129, descripcion: '15 min' },
                { id: 2, precio: 159, nino: 159, descripcion: '20 min' },
                { id: 3, precio: 179, nino: 179, descripcion: '25 min' },
                { id: 4, precio: 219, nino: 219, descripcion: '30 min' },
            ]
        },
        {
            id: 5,
            mostrar: true,
            titulo: "Zip Line (Canopy)",
            descripcion: `Visit the first of the Dominican Republic’s Zip-Line Tour. The exhilarating adventure takes you flying across the magnificent Anamuya pond. Your naturalist guides will show you the way, helping you make the most of the adventure. Your tour consists of 15 towers and 11 Zip Lines stretched across the length of the mountain range more than 1 mile. The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean. Requirements: Min age 6 years old, max weight 250lbs (46’ waist), no pregnant women or guests with heart conditions can participate.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Visit the first of the Dominican Republic’s Zip-Line Tour.
                    <br><br>The exhilarating adventure takes you flying across the magnificent Anamuya pond.
                    <br><br>Your naturalist guides will show you the way, helping you make the most of the adventure. Your tour consists of 15 towers and 11 Zip Lines stretched across the length of the mountain range more than 1 mile.
                    <br><br>The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean.
                    <br><br><strong>Requirements:</strong> Min age 6 years old, max weight 250lbs (46’ waist), no pregnant women or guests with heart conditions can participate.
                </p
            `,
            modalidades: [
                { id: 0, precio: 90, nino: 75, descripcion: 'Day' },
                { id: 1, precio: 99, nino: 60, descripcion: 'Night' }
            ]
        },
        {
            id: 2,
            mostrar: true,
            titulo: "Boogies Adventure Terracross",
            descripcion: `After we pick you up from your Resort, you'll receive on the spot a brief safety instructions from our professional guide. Then, jump inside your dune buggy and get ready to start the adventure of a lifetime. Starts as you head out into the Dominican countryside, passing colorful Caribbean houses along the way. Your first stop will be for a real Dominican coffee and chocolate taste. We’ll follow the natural path, passing by palm trees, tobacco and banana plantations. The excursion takes a Half Day, and you can be 2 people by BUGGY. Enthusiasts for big thrills, come and join us!`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    After we pick you up from your Resort, you'll receive on the spot a brief safety instructions from our professional guide.
                    <br><br>Then, jump inside your dune buggy and get ready to start the adventure of a lifetime.
                    <br><br>Starts as you head out into the Dominican countryside, passing colorful Caribbean houses along the way.
                    <br><br>Your first stop will be for a real Dominican coffee and chocolate taste. We’ll follow the natural path, passing by palm trees, tobacco and banana plantations.
                    <br><br>The excursion takes a Half Day, and you can be 2 people by BUGGY. Enthusiasts for big thrills, come and join us!
                </p
            `,
            modalidades: [
                { id: 0, precio: 80, nino: 45, descripcion: 'Doble' },
                { id: 1, precio: 120, nino: 70, descripcion: 'Individual' },
            ]
        },
        {
            id: 6,
            mostrar: true,
            titulo: "Monkey Land",
            descripcion: `At Monkey land, a natural habitat located deep in the Dominican Republic’s jungle, you can interact with playful squirrel monkeys. On this 5-hour guided tour aboard a safari-style truck, you'll also explore the habitat's on-site botanical garden, as well as a coffee and cacao plantation. Chat it up with local farmers, learn about their organic methods and taste tropical fruit just plucked from a tree. Travel with your knowledgeable guide to a typical Dominican country house and plantation. Meet the farmer residents and learn about their organic methods processing cacao, coffee, vanilla, cinnamon and other products grown on their land. Taste some of these delights and fresh tropical fruits, and feel free to purchase any products to take back with you to your hotel. Back in your vehicle, rumble up a mountain road and deep in the jungle, disembark at Monkey land, a squirrel monkey habitat spanning 5 acres (2 hectares), managed by a Canadian couple with more than 35 years of experience caring for wildlife. Take a 45-minute tour of the grounds, including the onsite botanical garden home to native flowers and plants, and get to know the curious and intelligent monkeys that bound about cage-free. These small simians are accustomed to human contact, so don’t be (too) surprised if they swing down from a tree onto your shoulder and eat right from your hands. Not camera-shy either, they might just strike a pose when you snap photos.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    At Monkey land, a natural habitat located deep in the Dominican Republic’s jungle, you can interact with playful squirrel monkeys.
                    <br><br>On this 5-hour guided tour aboard a safari-style truck, you'll also explore the habitat's on-site botanical garden, as well as a coffee and cacao plantation.
                    <br><br>Chat it up with local farmers, learn about their organic methods and taste tropical fruit just plucked from a tree.
                    <br><br>Travel with your knowledgeable guide to a typical Dominican country house and plantation.
                    <br><br>Meet the farmer residents and learn about their organic methods processing cacao, coffee, vanilla, cinnamon and other products grown on their land.
                    <br><br>Taste some of these delights and fresh tropical fruits, and feel free to purchase any products to take back with you to your hotel.
                    <br><br>Back in your vehicle, rumble up a mountain road and deep in the jungle, disembark at Monkey land, a squirrel monkey habitat spanning 5 acres (2 hectares), managed by a Canadian couple with more than 35 years of experience caring for wildlife.
                    <br><br>Take a 45-minute tour of the grounds, including the onsite botanical garden home to native flowers and plants, and get to know the curious and intelligent monkeys that bound about cage-free.
                    <br><br>These small simians are accustomed to human contact, so don’t be (too) surprised if they swing down from a tree onto your shoulder and eat right from your hands.
                    <br><br>Not camera-shy either, they might just strike a pose when you snap photos.      
                </p
            `,
            modalidades: [
                { id: 0, precio: 75, nino: 55, descripcion: 'Básico' }
            ]
        },
        {
            id: 8,
            mostrar: true,
            titulo: "Hot Air Balloning Rides",
            descripcion: `Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.</p
            `,
            horarios: ['5:30 AM'],
            modalidades: [
                { id: 0, precio: 275, nino: 225, descripcion: 'Básico' }
            ]
        },
        {
            id: 9,
            mostrar: true,
            titulo: "Deep Sea Fishing",
            descripcion: `Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.</p
            `,
            modalidades: [
                { id: 0, precio: 110, nino: 110, descripcion: "Invidual" },
                { id: 1, precio: 800, nino: 0, descripcion: "Charter Boat (Max 6 people Fishing Boat and Max 2 Companions Watching)" }
            ]
        },
        {
            id: 13,
            mostrar: true,
            partyBoat: true,
            titulo: "Pirate Boat",
            descripcion: `Enjoy the most original combination with Caribbean Pirates! Mix fun and education with a thoroughly entertainment pirate adventure! Get on our huge pirate boat and admire the most amazing scenery sailing along the Bavaro coastline. Get an adrenaline shot by swimming with our nurse sharks at our private and exclusive floating aquarium “Stingray Bay”, and even get up close with our stingrays, with the safest interaction program in the world.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Enjoy the most original combination with Caribbean Pirates!
                    <br><br>Mix fun and education with a thoroughly entertainment pirate adventure! 
                    <br><br>Get on our huge pirate boat and admire the most amazing scenery sailing along the Bavaro coastline.
                    <br><br>Get an adrenaline shot by swimming with our nurse sharks at our private and exclusive floating aquarium “Stingray Bay”, and even get up close with our stingrays, with the safest interaction program in the world
                </p>
            `,
            modalidades: [
                { id: 0, precio: 114, nino: 57, descripcion: 'Básico' }
            ]
        },
        {
            id: 14,
            mostrar: true,
            partyBoat: true,
            titulo: "Discover Catalina Island",
            descripcion: `Enjoy a day of stunning reefs and beaches in Catalina Island. In this tour you will explore the "The Wall" and "Aquarium," two reefs excellent for all levels of diving. The Wall is an impressive drop-off that stretches to the Caribbean Sea. Inhabited by corals and vibrant fish, it is a must for divers and snorkelers alike. Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attraction`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Enjoy a day of stunning reefs and beaches in Catalina Island.
                    <br><br>In this tour you will explore the "The Wall" and "Aquarium," two reefs excellent for all levels of diving.
                    <br><br>The Wall is an impressive drop-off that stretches to the Caribbean Sea.
                    <br><br>Inhabited by corals and vibrant fish, it is a must for divers and snorkelers alike.
                    <br><br>Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attractid
                </p
            `,
            modalidades: [
                { id: 0, precio: 110, nino: 55, descripcion: 'Basic' },
                { id: 1, precio: 135, nino: 70, descripcion: 'With lobster' }
            ]
        },
        {
            id: 16,
            mostrar: true,
            titulo: "Zip Line and Monkey Land",
            descripcion: `
              Visit the first of the Dominican Republic’s Zip—Line Tour.
              The exhilarating adventure takes you flying across the magnificent Anamuya pond.
              Your naturalist guides will show you the way, helping you make the most of the adventure.
              Your tour consists of 15 towers and 11 Zip Lines stretche across the length of the mountain range more than 1 mile.
              The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">ZipLine</h2>
                <p class="col-12">Visit the first of the Dominican Republic’s Zip—Line Tour.
                    <br><br>The exhilarating adventure takes you flying across the magnificent Anamuya pond.
                    <br><br>Your naturalist guides will show you the way, helping you make the most of the adventure.
                    <br><br>Your tour consists of 15 towers and 11 Zip Lines stretche across the length of the mountain range more than 1 mile.
                    <br><br>The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean.
                </p>

                <h2 class="col-12 text-center">Monkey Land</h2>
                <p class="col-12">
                    At Monkey land, a natural habitat located deep in the Dominican Republic’s jungle, you can interact with playful squirrel monkeys.
                    <br><br>On this 5 hour guided tour aboard a safari—style truck, you'll also explore the habitat's on—site botanical garden, as well as a coffee and cacao plantation. Chat it up with local farmers, learn about their organic methods and taste tropical fruit just plucked from a tree.
                </p>
            `,
            modalidades: [
                { id: 0, precio: 119, nino: 74, descripcion: "Zip Line and Monkey Land" }
            ]
        },
        {
            id: 17,
            mostrar: true,
            titulo: "Party Boat and Jet Boat",
            descripcion: `
                  You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. Enjoy this excursion with the Punta Cana Enjoyment crew and make your vacations an unforgettable adventure.
                  440 HP of power at more than 90 km/h on the sea 360 turns, fly over the waves, incredible pirouettes  The Jet Boat is an aquatic attraction and a maritime excursion that allows you to download pure adrenaline. It is an incredible boat with a powerful brake, which is capable of performing and braking at high speeds, skidding over the Caribbean Sea and flying over the waves. Jet Boat is a fun in the sea and an unforgettable experience, besides being the only Jet Boat in Punta Cana, but throughout the Dominican Repub—lic. Are you going to miss it?
          `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Party Boat</h2>
                <p class="col-12">
                    You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area.
                    <br><br>While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean.
                    <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers.
                    <br><br>Enjoy this excursion with the Punta Cana Enjoyment crew and make your vacations an unforgettable adventure.
                </p>

                <h2 class="col-12 text-center">Jet Boat</h2>
                <p class="col-12">
                    440 HP of power at more than 90 km/h on the sea 360 turns, fly over the waves, incredible pirouettes.
                    <br><br>The Jet Boat is an aquatic attraction and a maritime excursion that allows you to download pure adrenaline.
                    <br><br>It is an incredible boat with a powerful brake, which is capable of performing and braking at high speeds, skidding over the Caribbean Sea and flying over the waves.
                    <br><br>Jet Boat is a fun in the sea and an unforgettable experience, besides being the only Jet Boat in Punta Cana, but throughout the Dominican Repub—lic. Are you going to miss it?
                </p
            `,
            modalidades: [
                { id: 0, precio: 75, nino: 45, descripcion: "Party Boat and Jet Boat" }
            ]
        },
        {
            id: 18,
            titulo: "Party Boat and Buggy",
            mostrar: true,
            descripcion: `
                You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. Enjoy this excursion with the Punta Cana Enjoyment crew and make your vacations an unforgettable adventure.
                From our ranch in Macao, we go tearing through the remote farmland of northern Punta Cana, passing palm trees and tobacco plantations with the Ori—ental Mountain Range deep in the background. These narrow, secluded country roads offer a safe haven but be ready to get dirty!
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Buggy</h2>
                <p class="col-12">
                    You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. 
                    <br><br>While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. 
                    <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. 
                    <br><br>Enjoy this excursion with the Punta Cana Enjoyment crew and make your vacations an unforgettable adventure.
                </p>

                <h2 class="col-12 text-center">Jet Boat</h2>
                <p class="col-12">
                    From our ranch in Macao, we go tearing through the remote farmland of northern Punta Cana, passing palm trees and tobacco plantations with the Ori—ental Mountain Range deep in the background.
                    <br>
                    <br>These narrow, secluded country roads offer a safe haven but be ready to get dirty!
                </p
            `,
            modalidades: [
                { id: 0, precio: 90, nino: 75, descripcion: "Party Boat and Buggy" }
            ]
        },
        {
            id: 19,
            titulo: "Coco Bongo Show & Disco",
            mostrar: true,
            descripcion: `
                The Coco Bongo Punta Cana Disco & Show is a wonderful place to spend the night after a great day of sun on the beautiful beaches of Punta Cana. Undoubtedly the nightlife of Punta Cana has changed with the arrival of Coco Bongo! Coco Bongo is a nightclub and entertainment combined. In addition to the atmosphere excitement and the music playing, people are left with wonder seeing the theatrics and perfect samples of music reminiscent of Broadway or Las Vegas. <br>
                Coco Bongo provides several shows each night, in between which contemporary music plays. Coco Bongo is known for the music, theme and that which mimics the stars of international music or are related to "soundtrack" of famous films. 'The Mask", "Moulin Rouge", "Chicago', "The Phantom of the Opera"," Batman, “" Spiden'nan, "" Tron, "" Saturday Night Fever "are fantastically recreated by combining talents live, videos and other technological resources.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    The Coco Bongo Punta Cana Disco & Show is a wonderful place to spend the night after a great day of sun on the beautiful beaches of Punta Cana.
                    <br><br>Undoubtedly the nightlife of Punta Cana has changed with the arrival of Coco Bongo! Coco Bongo is a nightclub and entertainment combined.
                    <br><br>In addition to the atmosphere excitement and the music playing, people are left with wonder seeing the theatrics and perfect samples of music reminiscent of Broadway or Las Vegas.
                    <br><br><br>
                    Coco Bongo provides several shows each night, in between which contemporary music plays.
                    <br><br> Coco Bongo is known for the music, theme and that which mimics the stars of international music or are related to "soundtrack" of famous films.
                    <br><br>'The Mask", "Moulin Rouge", "Chicago', "The Phantom of the Opera"," Batman, “" Spiden'nan, "" Tron, "" Saturday Night Fever "are fantastically recreated by combining talents live, videos and other technological resources.
                </p
            `,
            modalidades: [
                { id: 0, precio: 70, nino: 0, descripcion: "Men Regular (Tuesdays & Sundays)" },
                { id: 1, precio: 60, nino: 0, descripcion: "Ladies Regular (Tuesdays & Sundays)" },
                { id: 2, precio: 120, nino: 0, descripcion: "VIP GOLD (Tuesdays & Sundays)" },
                { id: 3, precio: 70, nino: 0, descripcion: "Regular (Wednesdays)" },
                { id: 4, precio: 120, nino: 0, descripcion: "VIP GOLD (Wednesdays)" },
                { id: 5, precio: 70, nino: 0, descripcion: "Regular (Thursdays)" },
                { id: 6, precio: 120, nino: 0, descripcion: "Couples Special (Thursdays)" },
                { id: 7, precio: 120, nino: 0, descripcion: "VIP GOLD (Thursdays)" },
                { id: 8, precio: 75, nino: 0, descripcion: "Regular (Fridays & Saturdays)" },
                { id: 9, precio: 130, nino: 0, descripcion: "VIP GOLD (Fridays & Saturdays)" },
            ]
        },
        {
            id: 20,
            titulo: "Dominican Cowboy Adventure",
            mostrar: true,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Experience the real thing! Yes, we have cowboys in the Dominican too! Come and live it up at our local authentic ranch, with well-kept and cared for Paso Higueyano horses. 
                    <br><br>The Real Countryside Adventure is the ultimate riding experience.
                    <br><br>Experienced guides will show you a glimpse of the day-to-day life of the Dominican Cowboy, walking through the beautiful trails, hills, lagoons and green pastures.
                    <br><br>You will participate in the daily quest, completing the tasks assigned and become an honorary Cana Tequila rancher. 

                    <br><br><br><strong>Includes:</strong>
                    Transportation, welcome hot beverages and pastries, soft drinks, a cowboy lunch and a tequila shot. (Snacks, hamburgers, hot dogs and alcoholic beverages are available at an extra cost.
                </p
            `,
            descripcion: `
                Experience the real thing! Yes, we have cowboys in the Dominican too! Come and live it up at our local authentic ranch, with well-kept and cared for Paso Higueyano horses.
                The Real Countryside Adventure is the ultimate riding experience. Experienced guides will show you a glimpse of the day-to-day life of the Dominican Cowboy, walking through the beautiful trails, hills, lagoons and green pastures. You will participate in the daily quest, completing the tasks assigned and become an honorary Cana Tequila rancher.
            `,
            modalidades: [
                { id: 0, precio: 99, nino: 99, descripcion: "Dominican Cowboy Adventure" }
            ]
        },
        {
            id: 21,
            titulo: "Diving at Catalina Island",
            mostrar: true,
            descripcion: `
                Enjoy a day of stunning reefs and beaches in Catalina Island.
                In this tour you will explore the "The Wall" and "Aquarium,' two reefs excellent for all levels of diving.
                The Wall is an impressive drop-off that stretches to the Caribbean Sea.
                lnhabited by corals and vibrant ﬁsh, it is a must for divers and snorkelers alike.
            
                Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attraction.
                After diving and snorkeling, you will relax with a tropical cocktail in our beach club while we prepare a delicious Dominican style barbecue.
                You will have free time in the afternoon to swim in the turquoise beaches of Catalina Island, enjoy unlimited drinks by the beach bar or simply relax in the sun.
            
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Enjoy a day of stunning reefs and beaches in Catalina Island.
                    <br><br>In this tour you will explore the "The Wall" and "Aquarium,' two reefs excellent for all levels of diving.
                    <br><br>The Wall is an impressive drop-off that stretches to the Caribbean Sea.
                    <br><br>lnhabited by corals and vibrant ﬁsh, it is a must for divers and snorkelers alike.
                    <br><br>
                    <br><br>Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attraction.
                    <br><br>After diving and snorkeling, you will relax with a tropical cocktail in our beach club while we prepare a delicious Dominican style barbecue.
                    <br><br>You will have free time in the afternoon to swim in the turquoise beaches of Catalina Island, enjoy unlimited drinks by the beach bar or simply relax in the sun.
                <br><br>
                </p
            `,
            modalidades: [
                { id: 0, precio: 195, nino: 0, descripcion: "Diving at Catalina Island" }
            ]
        },
        {
            id: 22,
            titulo: "Dolphins Discovery",
            mostrar: true,
            descripcion: `Dolphin Discovery is home of the most loved dolphins, our parks and staff are certified to give them the best care. We can offer you the experience of a lifetime! For over 20 years, Dolphin Discovery has contributed to the study and conservation of marine mammals, creating a bond of love of re-spect through the best interaction experience in unique habitats around the world. Children up to 5 years Free.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Dolphin Discovery is home of the most loved dolphins, our parks and staff are certified to give them the best care.
                    <br><br>We can offer you the experience of a lifetime! For over 20 years, Dolphin Discovery has contributed to the study and conservation of marine mammals, creating a bond of love of re-spect through the best interaction experience in unique habitats around the world.
                    <br><br>Children up to 5 years Free.
                </p
            `,
            modalidades: [
                {id:0,precio:149,ninos:149,descripcion:'Dolphin Explorer'},
                {id:1,precio:99,ninos:99,descripcion:'Dolphin Funtastic'},
                {id:2,precio:195,ninos:195,descripcion:'Dolphin Excellence'},
                {id:3,precio:259,ninos:259,descripcion:'Dolphin Extreme'},
                {id:4,precio:35,ninos:35,descripcion:'Ticket General'},
                {id:5,precio:45,ninos:45,descripcion:'Ticket Lions'},
            ]
        },
        {
            id: 23,
            titulo: "Imagine Disco",
            mostrar: true,
            descripcion: `
              This multi roomed, actually, multi-CAVED castle, will leave you breathless from the moment you lay your eyes on her majestic stature. 
              After passing through our grand entrance, and being greeted by our superb staff, you will feel like royalty as you descend down into one of three progressiver larger caves. Each as magniﬁcent and astounding as the previous! Each cave comes complete with its own prominent Dj playing only the hottest tracks, rhythms and beats the Dominican Republic, and the world, has to offer! 
              You’ll dance the night away, savoring one of our signature cocktails, all the while being entertained by our ﬁre breathing, ﬂare bartenders. And when the time comes to return to the “real world”, you’ll wish your fairy godmother would wave her magic wand and turn the clock back to mid-night, so you could do it all over again!
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    This multi roomed, actually, multi-CAVED castle, will leave you breathless from the moment you lay your eyes on her majestic stature. 
                    <br><br>After passing through our grand entrance, and being greeted by our superb staff, you will feel like royalty as you descend down into one of three progressiver larger caves. 
                    <br><br>Each as magniﬁcent and astounding as the previous! Each cave comes complete with its own prominent Dj playing only the hottest tracks, rhythms and beats the Dominican Republic, and the world, has to offer! 
                    <br><br>You’ll dance the night away, savoring one of our signature cocktails, all the while being entertained by our ﬁre breathing, ﬂare bartenders. 
                    <br><br>And when the time comes to return to the “real world”, you’ll wish your fairy godmother would wave her magic wand and turn the clock back to mid-night, so you could do it all over again!
                </p
            `,
            modalidades: [
                { id: 0, precio: 55, nino: 0, descripcion: "Open Bar with domestic drinks (Thursdays & Sundays)" },
                { id: 1, precio: 65, nino: 0, descripcion: "Open Bar with domestic drinks (Fridays & Saturday)" },
                { id: 2, precio: 100, nino: 0, descripcion: "Open Bar with premium drinks (Thursdays & Sundays)" },
                { id: 3, precio: 125, nino: 0, descripcion: "Premium VIP Bottle Service (Thursdays & Sundays)" }
            ]
        },
        {
            id: 24,
            titulo: "Oro Nightclub",
            mostrar: true,
            descripcion: `
                After its launch in November 2011, 0R0 Nightclub Punta Cana became the gem of the Caribbean and at the moment is ranked as the Best Nightclub in Dominican Republic. Located inside the Hard Rock Hotel & Casino Punta Cana, ORO is modeled to rival Las Vegas and Miami’s finest nightclubs, boasting over 14,000 square feet of space across two levels and features intelligent show lighting, Kryogenifex and award win-ning Funktion One sound. Adding to the dramatics is its signature 2 story tall LED wall consisting of over 300 individual LED screens and the ﬁrst ever inﬁnitive edge bar. Imagined by Francois Frossard and inspired by the sensuality of the Dominican Republic, ORO Nightclub Punta Cana is designed to maximize the nightclub experience, elevating & seducing its guests into uninhibited euphoria. 
                0R0 Nightclub Punta Cana has been the scene of great DJs such as Steve Angelo, Erick Morillo, Bob Sinclar, Chris Lake, Dimitri Vegas & Like Mike, Hook n Sling, Pauly D, Shermanology, Roger Sanchez, Wolfgang Gartner, DJ Chuckie and world-renowned artists such as Inna, Akon,Daddy Yankee, Don Omar, Wisin y Yandel, Snoop Dogg aka Snoop Lion, La Formula de Pina Records, among many others.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    After its launch in November 2011, 0R0 Nightclub Punta Cana became the gem of the Caribbean and at the moment is ranked as the Best Nightclub in Dominican Republic.
                    <br><br>Located inside the Hard Rock Hotel & Casino Punta Cana, ORO is modeled to rival Las Vegas and Miami’s finest nightclubs, boasting over 14,000 square feet of space across two levels and features intelligent show lighting, Kryogenifex and award win-ning Funktion One sound.
                    <br><br>Adding to the dramatics is its signature 2 story tall LED wall consisting of over 300 individual LED screens and the ﬁrst ever inﬁnitive edge bar.
                    <br><br>Imagined by Francois Frossard and inspired by the sensuality of the Dominican Republic, ORO Nightclub Punta Cana is designed to maximize the nightclub experience, elevating & seducing its guests into uninhibited euphoria.
                    <br><br><br>
                    <strong>0R0 Nightclub</strong> Punta Cana has been the scene of great DJs such as Steve Angelo, Erick Morillo, Bob Sinclar, Chris Lake, Dimitri Vegas & Like Mike, Hook n Sling, Pauly D, Shermanology, Roger Sanchez, Wolfgang Gartner, DJ Chuckie and world-renowned artists such as Inna, Akon,Daddy Yankee, Don Omar, Wisin y Yandel, Snoop Dogg aka Snoop Lion, La Formula de Pina Records, among many others.
                </p
            `,
            modalidades: [
                { id: 0, precio: 45, nino: 0, descripcion: "1 Drink transportation" },
                { id: 1, precio: 75, nino: 0, descripcion: "Open bar and transportation" },
            ]
        },
        {
            id: 25,
            titulo: "Samaná Whale Watching",
            mostrar: true,
            descripcion: `Samaria continues to attract visitors for the joy of one of the world’s best sites for watching the enormous humpback whales as they frolic offshore. The whale-watching season runs from 15 January to 30 March. Punta Balandra, on the road from Samana City to Las Galeras, is a vantage point for watching the whales without having to get on a boat. If you don’t get the chance to go whale watching, the small Museo de las Ballenas has interesting information on the whales that pass close to Samana.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Samaria continues to attract visitors for the joy of one of the world’s best sites for watching the enormous humpback whales as they frolic offshore.
                    <br><br>The whale-watching season runs from 15 January to 30 March. Punta Balandra, on the road from Samana City to Las Galeras, is a vantage point for watching the whales without having to get on a boat.
                    <br><br>If you don’t get the chance to go whale watching, the small Museo de las Ballenas has interesting information on the whales that pass close to Samana. 
                    <br><br><br><strong>Included:</strong> Tour guide, whale watch, buffet, nacional drinks, transportation.
                </p
            `,
            modalidades: [
                { id: 0, precio: 159, nino: 99, descripcion: "Samaná Whale Watching" }
            ]
        },
        {
            id: 26,
            titulo: "Samana",
            mostrar: true,
            descripcion: `
              You will start out towards the town of Miches, which has been growing touristically and go through the beautiful eastern coastal area, where cattle pasture and coconut trees predominate. This farm area is dedicated to raising cattle for milk and meat. This great scenery is the start of our adventure. 
              We ﬁnd small towns and families on the way that are engaged in agriculture and ﬁshing. You will head to the dock where you take a 30 minute boat ride to Cayo Levantado (Bacardi Island), where you will enjoy a Dominican lunch and take a relaxing swim in the crystal clear waters, or just take some sun rays on the white sands. 
              After a while you board the boat and head to Samana, where transportation awaits to take you to the ranch. Here you saddle up and ride into the virgin forest along the banks of Rio Limon, down to Salto Del Limon. The 60 meter high waterfall awaits you for a refreshing and rejuvenating bath to take off the dust.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    You will start out towards the town of Miches, which has been growing touristically and go through the beautiful eastern coastal area, where cattle pasture and coconut trees predominate.
                    <br><br>This farm area is dedicated to raising cattle for milk and meat.
                    <br><br>This great scenery is the start of our adventure.
                    <br><br>
                    We ﬁnd small towns and families on the way that are engaged in agriculture and ﬁshing.
                    <br><br>You will head to the dock where you take a 30 minute boat ride to Cayo Levantado (Bacardi Island), where you will enjoy a Dominican lunch and take a relaxing swim in the crystal clear waters, or just take some sun rays on the white sands.
                    <br><br>
                    After a while you board the boat and head to Samana, where transportation awaits to take you to the ranch.
                    <br><br>Here you saddle up and ride into the virgin forest along the banks of Rio Limon, down to Salto Del Limon.
                    <br><br>The 60 meter high waterfall awaits you for a refreshing and rejuvenating bath to take off the dust.
                </p
            `,
            modalidades: [
                { id: 0, precio: 177, nino: 90, descripcion: "Cayo levantado & Cascada Limón" }
            ]
        },
        {
            id: 28,
            titulo: "Snuba, Snorkel Et Speedboat",
            mostrar: true,
            descripcion: `
              Have fun, feel the adventure! This is a three-in-one fun-filled half day tour!
              Snorkel the crystal clear water of a protected reef, drive a speed boat. and explore the bottom of the ocean with SNUBA® excursion (you don’t need to be a certiﬁed diver) 
              Drive your own speedboat like James Bond!!! While you drive you will also enjoy the most beautiful beaches of Bavaro - Punta Cana while experiencing this exciting adventurell 
              You will meet professional guides and experience an unforgettable adventure known as ‘SNUBA®’. Thanks to this new technology you don’t need a diving license to explore the underwater world. SNUBA® is without a doubt the best combination between diving and snorkeling. Our SNUBA® equipment consists of a floating RAFT and an air hose of 20 feet. This will give you the freedom to choose the level of depth that you are comfortable with. 
              Certiﬁed guides will assist you in small groups of 4 persons per RAFT.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    <strong>Have fun, feel the adventure!</strong>
                    <br><br>This is a three-in-one fun-filled half day tour!
                    <br><br>Snorkel the crystal clear water of a protected reef, drive a speed boat. and explore the bottom of the ocean with SNUBA® excursion (you don’t need to be a certiﬁed diver) 
                    <br><br>Drive your own speedboat like James Bond!!! While you drive you will also enjoy the most beautiful beaches of Bavaro - Punta Cana while experiencing this exciting adventurell 
                    <br><br>You will meet professional guides and experience an unforgettable adventure known as ‘SNUBA®’. Thanks to this new technology you don’t need a diving license to explore the underwater world. SNUBA® is without a doubt the best combination between diving and snorkeling.
                    <br><br>Our SNUBA® equipment consists of a floating RAFT and an air hose of 20 feet.
                    <br><br>This will give you the freedom to choose the level of depth that you are comfortable with. 
                    <br><br>Certiﬁed guides will assist you in small groups of 4 persons per RAFT.
                </p
            `,
            modalidades: [
                { id: 0, precio: 109, nino: 0, descripcion: "Snuba, Snorkel Et Speedboat" }
            ]
        },
        {
            id: 29,
            titulo: "Relax Et Detox Cruise",
            mostrar: true,
            descripcion: `
              This unique 3 hour excursion is designed to provide extreme relaxation in a very exclusive setting. This double decker boat, designed to be a sailing spa, has restricted capacity in order to provide personalized attention. Let us get you involved in bio-Pilates stretching exercises to help you relax while you cruise the calm and colorful waters of Punta Cana. 
              You will reach maximum relaxation while participating in our Individual massage treatment. This massage is offered in private cubicles with ocean view, and includes head massage, and full back massage. 
              Enjoy a relaxation session on our floating mattresses in the natural pool. Let us introduce you to our wor1d famous Doctor Fish where you will be treated to the most amazing natural feet exfoliation treatment. Also you will enjoy our Detox treatments; a therapy aimed to improve, among other things, your liver and kidney function, through an electromagnetic detoxiﬁcation process carried out on the feet.
            `,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    This unique 3 hour excursion is designed to provide extreme relaxation in a very exclusive setting. This double decker boat, designed to be a sailing spa, has restricted capacity in order to provide personalized attention. Let us get you involved in bio-Pilates stretching exercises to help you relax while you cruise the calm and colorful waters of Punta Cana. 
                    <br><br>You will reach maximum relaxation while participating in our Individual massage treatment. This massage is offered in private cubicles with ocean view, and includes head massage, and full back massage. 
                    <br><br>Enjoy a relaxation session on our floating mattresses in the natural pool. Let us introduce you to our wor1d famous Doctor Fish where you will be treated to the most amazing natural feet exfoliation treatment. Also you will enjoy our Detox treatments; a therapy aimed to improve, among other things, your liver and kidney function, through an electromagnetic detoxiﬁcation process carried out on the feet.  
                </p
            `,
            modalidades: [
                { id: 0, precio: 154, nino: 0, descripcion: "Spa Boat" }
            ]
        },
        {
            id: 30,
            titulo: "Exclusive VIP Catamaran",
            mostrar: true,
            descripcion: `Enjoy our brand new catamaran “Caribbean Sea ll”. Starting from the Punta Cana Marina we will sail along the coast until a reef area where we will have time for snorkelling. After that we will go to the submarine museum. something new in the area. From there we will make a stop at Playa Blanca to enjoy a delicious meal with lobster. Boarding again the catamaran we will sail to the natural pool, having time for swim and a drink. Coming back to the marina we will do our last stop at the ecological reserve “Ojos lndigenas” for a chance to swim in the natural fresh water of the lagoons. A full day VIP catamaran adventure!`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Enjoy our brand new catamaran “Caribbean Sea ll”.
                    <br><br>Starting from the Punta Cana Marina we will sail along the coast until a reef area where we will have time for snorkelling.
                    <br><br>After that we will go to the submarine museum. something new in the area. From there we will make a stop at Playa Blanca to enjoy a delicious meal with lobster.
                    <br><br>Boarding again the catamaran we will sail to the natural pool, having time for swim and a drink. Coming back to the marina we will do our last stop at the ecological reserve “Ojos lndigenas” for a chance to swim in the natural fresh water of the lagoons.
                    <br><br>A full day VIP catamaran adventure!
                </p
            `,
            modalidades: [
                { id: 0, precio: 169, nino: 0, descripcion: "Exclusive VIP Catamaran" }
            ]
        },
        {
            id: 56,
            titulo: "Bavaro Splash",
            partyBoat: false,
            mostrar: true,
            descripcion: `Ride a Segway. Visit Ojos Indigenas Natural Reserve, Two separate beaches, La Cana golf course and a variety of interesting areas.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Combine the experience of driving a high-performance boat and explore the underwater world through Snuba! Spend three hours exploring the crystal blue waters of this destination. Board a single- or double-occupancy speedboat and cruise at high speed across the Caribbean Sea with your local guide. 
                    <br><br>You’ll navigate the Bavaro-Punta Cana coastline, where white sands and towering palm trees stretch into sunny skies. 
                    <br><br>Do SNUBA after a brief orientation, which is an underwater activity that combines the best of SCUBA DIVING and SNORKELING. A certified SNUBA guide will accompany your group and take you to the depths of the ocean where you can have your photo taken as tropical fish swim by! Once you hop back on the boat you’ll have time to relax and enjoy some complimentary soft drinks and bottled water as you make your way to the Bavaro reef.
                </p>
                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Timing</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Transportation</li>
                    <li>Snorkelling</li>
                    <li>Snuba</li>
                    <li>Speed Boat</li>
                    <li>Equipment</li>
                    <li>Soft drinks</li>
                    <li>Beer and rum</li>
                    <li>Transfer back to hotel</li>
                </ul>
                
                <ul class="col-4">
                    <li>07:00 AM – Departure from hotels</li>
                    <li>09:15  AM – Welcome at base and briefing on speedboats</li>
                    <li>09:30 AM – Set sail to reef</li>
                    <li>09:50 AM – Speedboats</li>
                    <li>10:35  AM – Snuba</li>
                    <li>11:20  AM – Reef snorkeling</li>
                    <li>12:10  PM – Sail back to base, alcoholic drinks</li>
                    <li>12:30  PM – Transfer back to hotels</li>
                </ul>

                <ul class="col-4">
                    <li>Bring towel.</li>
                    <li>Swimsuits.</li>
                    <li>Comfortable and closed shoes.</li>
                </ul>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 129, nino: 0, descripcion: 'One Seater' }
            ]
        },
        {
            id: 57,
            titulo: "Manati Park",
            partyBoat: false,
            mostrar: true,
            descripcion: `Manatí Park is the most fun Punta Cana theme park. You will be able to live incredible experiences with the native animals and you will get to know one of the most fascinating cultures of the Caribbean: the Tainos.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12 mt-3">
                    <br>Punta Cana is one of the most visited places in the Dominican Republic.
                    <br>Travelers from all over the world come to Bávaro to enjoy the sun, the white sand and the incredible beaches of the Caribbean.
                    <br>Get to know the fauna, nature and ancient local culture of the area in Manatí Park, located in the heart of Bávaro.
                </p>
                
            `,
            horarios: ['Tuesday - Sunday'],
            modalidades: [
                { id: 0, precio: 35, nino: 20, descripcion: 'Animals Show' },
                { id: 1, precio: 125, nino: 20, descripcion: 'Swimming with Dolphins' },
            ]
        },
        {
            id: 58,
            titulo: "La Hacienda (Manati Park)",
            partyBoat: false,
            mostrar: true,
            descripcion: `We invite you to know the Dominican Republic thanks to La Hacienda! Our adventure will begin at the La Hacienda headquarters in Bávaro. We will pick you up at your hotel and take a tour where you will visit the beautiful areas of Bávaro, Uvero Alto and Anamuya. Our visit will take you through the Dominican towns and incredible landscapes before arriving at La Hacienda, where you will enjoy an incredible experience!`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12 mt-3">
                    We invite you to know the Dominican Republic thanks to La Hacienda! Our adventure will begin at the La Hacienda headquarters in Bávaro.
                    <br>We will pick you up at your hotel and take a tour where you will visit the beautiful areas of Bávaro, Uvero Alto and Anamuya.
                    <br>Our visit will take you through the Dominican towns and incredible landscapes before arriving at La Hacienda, where you will enjoy an incredible experience!
                </p>
                
            `,
            horarios: ['Tuesday - Sunday'],
            modalidades: [
                { id: 0, precio: 99, nino: 99, descripcion: '7 Adventures' },
            ]
        }
        /* {
            id: 31,
            titulo: "Sabina del Mar VIP Catamaran with Slide",
            partyBoat: false,
            mostrar: true,
            descripcion: `Ride aboard a private boat, just you and your group, on a fun-filled afternoon in Punta Cana. Enjoy a selection of drinks and great music as you ride and party along the Bavaro coastline. Snorkel among colorful fish in a tropical coral reef. Visit a natural pool in the ocean and enjoy drinks on a floating bar in waist-high water. Activity duration: 3 hours (not including transportation time to and from activity). Hotel pick-up and drop off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Revel in the ultimate party cruise with the Slide on our private tour, a fun-filled sail along the Punta Cana coastline aboard a private catamaran. This private outing is exclusively for you and your group, taking you to a coral reef for unforgettable snorkeling, and to a natural pool where you can kick back with drinks from a floating bar. This is the best VIP party experience available in Punta Cana!
                    <br><br>Ride a boat just for you and your group Your VIP Catamaran private excursion takes place either in the morning or afternoon, starting with you and your private party taking air-conditioned transportation from your resort to the marina.
                    <br><br>Climb aboard a luxury catamaran, where the only passengers will be you and your group, making this an exclusive party where you decide who the VIPs are. 
                    <br><br>Throughout your ride, you’ll be able to enjoy snacks and the BBQ from an open bar that includes rum, beer, vodka, sodas, fruit punch, rum punch, mama juana shots and water. Snorkel in the Dominican reef. Dance in a natural pool 
                    <br><br>Wrap up your Sabina del Mar VIP private tour with more excitement — an unforgettable swim in a natural pool! Relax in these calm, waist-high pristine waters out in the ocean, while you enjoy drinks from a floating bar. Listen to the tropical music and let the rhythms invite you to move your hips and dance the afternoon away inside the pool.
                </p>

                <h2 class="col-4 text-center">Good to Know</h2>
                <h2 class="col-4 text-center">Included in the Excursion</h2>
                <h2 class="col-4 text-center">Excursion Options</h2>

                <ul class="col-4">
                    <li>Tour language: English | Spanish | French</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 3 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 18 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-4">
                    <li>Round-trip, air-conditioned transportation</li>
                    <li>English-speaking host and crew</li>
                    <li>Snorkel gear</li>
                    <li>Floating bar</li>
                </ul>

                <ul class="col-4">
                    <li><strong>Morning Sailing Private (up to 15 pax)</strong><br>Take your private party of up to 15 people to an incredible sailing adventure in the morning</li>
                    <li><strong>SunDowner Private (up to 25 pax)</strong><br>Board your VIP catamaran with your private party of up to 25 people to see the sun setting over Punta Cana</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Excursion available 9-12 pm, 12-3 pm, 3-6 pm.
                    <br><br>This activity is recommended for passengers 18 years and older; however, families are welcome aboard this private boat excursion
                    <br><br>Captain and crew are not responsible for supervision of any minors who might take this excursion; adult parental supervision is always required. Wear a swimsuit, comfortable clothing and footwear
                    <br><br>Bring a beach towel, hat, biodegradable sunscreen, sunglasses and money for tips and souvenirs (tipping is optional).
                    <br><br>Pick-up and drop-off times will vary according to resort location
                    <br><br>Important notice: There’s an additional transportation fee that must be paid directly to the driver when taking this tour from the following resorts:
                    <ul class="col-12 list-inline">
                        <li class="col-xs-6"><strong>$10 USD per adult and $5 USD per child:</strong> Casa de Campo Resort, Catalonia Gran Dominicus, Be Live Canoa, Dreams La Romana, Iberostar Hacienda Dominicus, Viva Wyndham Dominicus Beach, Viva Wyndham Dominicus Palace</li>
                        <li class="col-xs-6"><strong>$15 USD per adult and $8 USD per child:</strong> Grand Bahia Principe La Romana</li>
                    </ul>
                </p>
            `,
            horarios: ['9-12 PM', '12-3 PM', '3-6 PM'],
            modalidades: [
                { id: 0, precio: 40, nino: 0, descripcion: 'Basic Menu' },
                { id: 1, precio: 45, nino: 0, descripcion: 'HotDogs' },
                { id: 2, precio: 53, nino: 0, descripcion: 'Chicken Brochettes' },
                { id: 3, precio: 56, nino: 0, descripcion: 'Mini Burgers' },
                { id: 4, precio: 59, nino: 0, descripcion: 'Beef Brochettes' },
                { id: 5, precio: 65, nino: 0, descripcion: 'Shrimp Brochettes' },
                { id: 6, precio: 75, nino: 0, descripcion: 'Lobster Grilled' }
            ]
        },
        {
            id: 32,
            titulo: "Saona Island Tour",
            partyBoat: false,
            mostrar: true,
            descripcion: `Head to the hidden Saona Island from Bayahibe aboard a thrilling speedboat or a cruising catamaran. Take a dip near a sandbar and swim among starfish. Move your feet with dance lessons on the white sands of Saona Beach. Indulge in a traditional Dominican buffet lunch. Return to Bayahibe by catamaran or speedboat, the opposite of what brought you to Saona. Activity duration: 8 hours (not including transportation time to and from activity). Hotel pick-up and drop off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Travel by speedboat and catamaran to experience white sands and plenty of natural beauty along the southeastern coast of the Dominican Republic with an unforgettable Saona Island tour. This is more than a simple trip to the beach. You’ll also enjoy activities such as volleyball, swimming in a natural pool in the middle of the sea, and plenty of dancing and music aboard the boat.
                    <br><br>Sail to the Saona
                    <br>The Saona Island tour begins with transportation from your resort to the fishing village of Bayahibe, where you’ll be boarding either a catamaran or a speedboat. As you pass the national park, keep your eyes wide open for the creatures that call this wilderness home. On the way, your guides will take you to a hidden gem — a natural swimming place.
                    <br><br>Then it’s time to continue onward to the marvelous Saona Beach. You’ll know you&#39;ve arrived when the boat pulls into the gorgeous white sands that make it a must-see destination in the Dominican Republic.
                    <br><br>By the time you return to your resort in a comfortable vehicle, you’ll have lots of memories from your tropical paradise adventure.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 8 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip transportation to/from resort (transportation may not be available from some resorts or may be subject to an additional fee).</li>
                    <li>Open bar on Saona Island including water, soft drinks, beer, rum and coffee.</li>
                    <li>Buffet lunch on Saona Island</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Full-day excursion.
                    <br>Wear comfortable clothes and beach sandals.
                    <br>Bring your bathing suit, sunscreen, a beach towel, sunglasses, a camera and extra money for photos or souvenirs.
                    <br><strong>Note:</strong> On excursions to Saona Island, you may travel to the island by catamaran and return by speedboat or vice-versa, depending on availability.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 75, nino: 0, descripcion: 'Everyday A' },
                { id: 1, precio: 129, nino: 0, descripcion: 'Everyday B' },
                { id: 2, precio: 179, nino: 0, descripcion: 'Everyday C' }
            ]
        },
        {
            id: 33,
            titulo: "Speed Boat with Snuba",
            partyBoat: false,
            mostrar: true,
            descripcion: `Drive your own speed boat across the beautiful bay in Punta Cana. Try Snuba — a combination of snorkeling and scuba. Explore a coral reef teeming with fish and other sea life. Activity duration: 3 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    If you're a seeker of thrills by sea, then this Punta Cana speedboat adventure is just for you. The Bavaro Splash excursion lets you take a white-knuckle race down the picturesque Dominican coastline in a speedboat. Then, you will snorkel in the warm waters of the Caribbean and marvel at the colorful marine life. Later, take the plunge into luscious turquoise waters to explore coral reefs, with a guided Snuba experience in the stunning reef.
                    <br><br>Drive your own Punta Cana speedboat, Following pick-up at your Punta Cana resort, and a brief safety video, your speedboat adventure begins! Give your daring spirit a boost and zoom along the Dominican coastline in a speedboat made for two. Fly by beautiful stretches of white sand beaches and palm trees painting the scenery that makes up the Bavaro coast.
                    <br><br>Try Snuba — it’s scuba without tanks
                    <br>After snorkeling, experience the thrill of Snuba, a fairly new technology that gives explorers the ability to effortlessly breathe underwater without needing to repeatedly return to the surface. Consisting of a floating raft, mouthpiece and an air hose measuring 20 feet, you have the freedom to choose the level of depth you’re comfortable with as you walk on the sea floor admiring the coral reef and its colorful inhabitants face-to-face!
                </p>

                <h2 class="col-4 text-center">Good to Know</h2>
                <h2 class="col-4 text-center">Included in the Excursion</h2>
                <h2 class="col-4 text-center">Excursion Options</h2>

                <ul class="col-4">
                    <li>Tour language: English, Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 3 hours (approx.)</li>
                    <li> Hotel pickup available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 8 years old</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-4">
                    <li>English-speaking guides</li>
                    <li>Round-trip transportation</li>
                    <li>Snorkeling and Snuba gear</li>
                    <li>Bottled water</li>
                    <li>Children are not allowed to drive the boat, they can only accompany paying adults</li>
                </ul>

                <ul class="col-4">
                    <li><strong>Adult/Single:</strong> One boat for a single adult driver</li>
                    <li><strong>Adult/Double:</strong> Driver and passenger in two-person boat</li>
                    <li><strong>Child/double:</strong> Child passenger in two-person boat</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear swimsuit, comfortable clothing and flip flops
                    <br>Bring hat, sunblock, sunglasses, underwater camera, beach towel, a change of clothes and money for tips and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br>If you’re staying at the Punta Cana Resort or Sanctuary Cap Cana Resort, you’ll need to pay $10 USD per person to cover round-trip transportation costs when boarding.
                    <br><strong>Please note:</strong> This activity is not recommended for people with back problems.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 109, nino: 0, descripcion: 'Everyday' }
            ]
        },
        {
            id: 34,
            titulo: "Dolphin Encounter",
            partyBoat: false,
            mostrar: true,
            descripcion: `Swim with friendly dolphins for a delightful 40 minutes of playing and swimming. Interact with the dolphins by giving them a handshake and a lovely hug. Get the sweetest kiss ever from your newfound dolphin friend. Activity duration: 40 minutes, in water. Hotel pick-up and drop-off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Get an up-close encounter with the smartest sea mammals in the world at the Dolphin Discovery center during your Punta Cana vacation. Live an interactive experience during your swim with these awe-inspiring creatures, and enjoy dolphin smiles, hugs, kisses, and handshakes to create some long-lasting fond memories.
                    <br><br>Discover the dolphins of Punta Cana.
                    <br>Your encounter begins with transportation from your Punta Cana resort to the Dolphin Discovery, a renowned aquatic center where your sweet dolphin friends are waiting for you. Meet the friendly trainers who will lead your encounter, starting everything with a 15-minute briefing to introduce you to the friendly sea mammals.
                    <br><br>Get a dolphin kiss and a hug.
                    <br>Once you’re up to speed, go in the water and swim with the incredible dolphins of Punta Cana. For good manners, give them a nice handshake. As you build the trust, proceed to get a dolphin hug and then get a nice kiss from your smiling companion to solidify your newfound friendship! When you’re finished, wave goodbye to the dolphins and make your way back to your resort.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 40 min</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip, air-conditioned transportation</li>
                    <li>Entrance to the park</li>
                    <li>English-speaking trainers</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Guests 1 to 7 years old must swim with a paid adult
                    <br>Guests 8 years and older can swim on their own
                    <br>Groups in Punta Cana have a maximum of 15 people for a more intimate experience
                    <br>The use of safety vests is required in all water programs
                    <br>Bring a towel and a change of clothes
                    <br>For guests staying in La Romana resorts, there is a transportation fee surcharge of $100 USD per 4-person vehicle, which comes to $25 USD per person when capacity is met, and this fee is paid directly to the driver
                </p>
            `,
            modalidades: [
                { id: 0, precio: 99, nino: 0, descripcion: 'Dolphin Encounter' }
            ]
        },
        {
            id: 35,
            titulo: "Dolphin Swim adventure",
            partyBoat: false,
            mostrar: true,
            descripcion: `Experience the magic of swimming with the incredible dolphins of Punta Cana. Learn about dolphins' behavior from expert, bilingual trainers. Get in the water with the dolphins and try activities like hugs, kisses and the boogie board!. Activity duration: 50 minutes (in water, not including transportation time to and from activity). Hotel pick-up and drop-off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Have you ever kissed a dolphin? Well, now’s your chance with this swimming with dolphins adventure. These amazing creatures are super playful and lovable — plus they can hug, kiss and even high-five. Interact against the beautiful backdrop of Punta Cana, as the sun shines down and the water gently laps. Time to dive straight into some dolphin fun!
                    <br><br>Live the dream, go swimming with a dolphin
                    <br>Your dolphin swim begins with a transfer from your resort to the dolphinarium, where friendly bilingual trainers will meet you and brief you on how to interact with dolphins. Once you’re armed to the gills with information, it’s time to meet your sea mammal friends. They’re natural acrobats, so watch as they jump, spin and backflip through the air.
                    <br><br>Get ready for a boogie push and a dolphin kiss
                    <br>While you’re in the water, try the ultimate trick — the boogie push. Hop on a boogie board and let the dolphin push you across the water’s surface! You better have good balance, but if you don’t, you’ll have fun making a splash. You can also try the belly ride, where you hold on tight to the dolphin’s fin as it rides backwards across the water.
                    <br><br>This swimming experience will be an unforgettable way to spend your time in Punta Cana — and you can take some of those dolphin backflip tricks to the beach with you after the ride back to your resort.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 50 min</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Minimum height requirement: 3 ft 11 in (1.20 m)</li>
                    <li>Suitable for children: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Entrance to the dolphinarium</li>
                    <li>Briefing from dolphin trainer</li>
                    <li>Swim with dolphins</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Children 6 to 12 years old can swim with a paying adult.
                    <br>Guests 13 years or older can swim on their own.
                    <br>Groups in Punta Cana have a maximum of 12 people for a more intimate experience.
                    <br>The use of safety vests is required in all water programs.
                    <br>Photos of the swim adventure are available for purchase at the end of the excursion.
                    <br>Towels, food and beverages are not included.
                    <br>For guests staying in La Romana resorts, there is a transportation fee surcharge of $100 USD per 4-person vehicle, which comes to $25 USD per person when capacity is met, and this fee is paid directly to the driver.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 149, nino: 0, descripcion: 'Dolphin Swim adventure' }
            ]
        },
        {
            id: 36,
            titulo: "Dolphin Discovery Royal Swim",
            partyBoat: false,
            mostrar: true,
            descripcion: `Swim with the dolphins of Punta Cana for 60 minutes of memorable swimming. Feel the power of two dolphins as they push your feet with their noses, making you glide along the water!. Experience the fun of the dorsal tow or take it easier with a nice dolphin hug and a sweet kiss. Activity duration: 60 minutes in the water. Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Experience the best dolphin encounter in Punta cana with the Dolphin Discovery Royal Swim. Delight in the company of two friendly dolphins as you spend time in the water with them, and let them make you feel like flying with the famous foot-push, in which your new friends push you powerfully across the water by pushing the bottom of your feet! Other dolphin activities are included in this unforgettable activity.
                    <br><br>Enjoy a royal swim with Punta Cana dolphins
                    <br>Your phin-tastic adventure starts out with pick-up from your resort to Dolphin Discovery, a well-known aquatic center where two dolphins are waiting for you to create a lifetime of memories. When you arrive, friendly bilingual trainers will greet you and lead you on your royal swim, kicking things off with a 15-minute briefing to get to know what makes dolphins tick. Once you’ve got the knowledge, you’re ready to go in the water for a mix of exciting and relaxing adventures.
                    <br><br>Immerse yourself in a magical cenote.
                    <br>As you encounter your two dolphin friends, start by introducing yourself with a handshake and a hug. Once you’ve become better friends, receive a sweet kiss and smiles from your sea mammal friends. Then, the ultimate royal swim adventure takes off when you receive the foot push.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 60 minutes</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip, air-conditioned transportation</li>
                    <li>Entrance to the park</li>
                    <li>English-speaking trainers</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Guests aged 1 to 7 years old must swim with a paying adult.
                    <br>Guests 8 years and older can swim on their own.
                    <br>Groups taking this Punta Cana excursion have a maximum of 15 people for a more intimate dolphin experience.
                    <br>The use of safety vests is required in all water programs.
                    <br>Bring a towel and a change of clothes.
                    <br>For guests staying in La Romana resorts, there is a transportation fee surcharge of $100 USD per 4-person vehicle, which comes to $25 USD per person when capacity is met, and this fee is paid directly to the driver.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 199, nino: 0, descripcion: 'Dolphin Discovery Royal Swim' }
            ]
        },
        {
            id: 37,
            titulo: "Higuey City Tour",
            partyBoat: false,
            mostrar: true,
            descripcion: `Spend a day at the city of Higuey, the historical and cultural heart of the eastern Dominican Republic. Encounter the artistic legacy of the island at the Altagracia Museum. Explore the Minor Basilica Cathedral of Our Lady of Altagracia and let its architecture and folklore amaze you. Walk around the marketplace and purchase jewels, crafts, rum and cigars. Activity duration: 6 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Go all the way at Higuey, a city brimming with history, as well as the cultural heart of the Dominican Republic’s eastern side. Explore a museum guarding some of the island’s artistic heirlooms, become amazed by the architecture and legacy of the famous cathedral of Our Lady of Altagracia, view the city’s monuments and buildings, and visit a market to round out your day at this incredible place.
                    <br><br>Let Higuey’s architectural masterpieces amaze you
                    <br>Your adventure begins in the morning with transportation from your resort to the city of Higuey, where your first stop will be the Altagracia Museum. There, you’ll encounter the history of the Dominican Republic through exhibits featuring paintings, sculptures and even jewelry dating back generations. Then, walk a short distance from this museum to the Higuey Basilica, an inspiring shrine whose size and architecture will stun you.
                    <br><br>Next up, continue toward Higuey’s main street, where you’ll view some of the city’s monuments and buildings, such as city hall and the post office. Keep walking and encounter street vendors living an ordinary but authentic way of life, until you make it to the marketplace.
                    <br><br>Step into shops selling jewelry and fine souvenirs, see master craftsmen hand rolling the island’s famous cigars, and don’t forget to purchase a nice bottle of Dominican rum to take home with you. When your city tour of Higuey ends, hop back into your vehicle for the return ride to your resort.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English / Spanish</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 5 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Air-conditioned, round-trip transportation</li>
                    <li>Bottled water</li>
                    <li>Entrance fees and taxes</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothes and footwear.
                    <br>Bring a camera, hat, sunglasses and sunscreen.
                    <br>Bring money for food, snacks, drinks, souvenirs and tips.
                    <br>Children must be supervised by an adult at all times.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 45, nino: 0, descripcion: 'Higuey City Tour' }
            ]
        },
        {
            id: 38,
            titulo: "Hispaniola Explorer",
            partyBoat: false,
            mostrar: true,
            descripcion: `Discover the Dominican Republic’s influence on baseball at the Francisco A. Micheli Stadium. Learn the fine art of cigar rolling at a cigar factory. Visit an artisan village, Altos de Chavon. Walk through the gardens of the Regional Archaeological Museum. Float along a river boat and enjoy a seafood and shrimp lunch. Activity duration: 9 hours (including transportation time to and from the activity). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Discover the richness of the island of Hispaniola and the country known as the Dominican Republic with a full-day trip that showcases its heritage and culture. Explore the island’s baseball background, famous cigars, artist villages, breathtaking jungles and unique architecture.
                    <br><br>Experience the Dominican ABCs — art, baseball and cigars
                    <br>Your getaway begins in Punta Cana and travels all the way to La Romana aboard a comfortable, air-conditioned bus. Baseball fans will love the visit to the Francisco A. Micheli Stadium, dedicated to the many famous Dominican baseball players who have had success in Major League Baseball, including David ‘Big Papi’ Ortiz and Sammy Sosa.
                    <br><br>From the famous ball players to the famous Dominican cigars that rival those of Cuba, you will next visit a cigar factory and watch as cigar craftsmen roll a proper cigar. Next, it is a visit to a bohemian artisan village, Altos de Chavon. There, quaint shops featuring local arts and crafts overlook the Chavon River in La Romana.
                    <br><br>Explore the island’s archaeological wonders
                    <br>Leaving the modern scenes behind, it is time to walk through tropical gardens and visit the Regional Archaeological Museum, featuring a replica of a Roman amphitheater. Then you will board a riverboat to travel along the Chavon River and take in the tropical views and jungles before stopping for a shrimp and seafood lunch.
                    <br><br>The last stop on your foray will be the Basilica Cathedral Nuestra Senora de la Altagracia in Higuey. This imposing Catholic shrine is a return to modern world with a concrete structure erected in 1954. From there, you’ll be taken back to your resort in Punta Cana.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English / Spanish</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 9 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: Yes</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>

                </ul>
                
                <ul class="col-xs-6">
                    <li>Transportation on an air conditioned bus to and from the hotel</li>
                    <li>Official tour guide</li>
                    <li>Entrance fees</li>
                    <li>Beverages (beer, soda, water, wine, rum)</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothes and shoes.
                    <br>Bring extra money for souvenirs or tips.
                    <br>This excursion is a full-day tour.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 135, nino: 0, descripcion: 'Hispaniola Explorer' }
            ]
        },
        {
            id: 39,
            titulo: "Monkey land",
            partyBoat: false,
            mostrar: true,
            descripcion: `Visit the 5-acre Monkey Land sanctuary with hundreds of squirrel monkeys. Take pictures with the friendly monkeys, who will happily pose with you!. Sample coffee and cocoa at a local country home. Activity duration: 5 hours (not including transportation time to and from the activity). Hotel pick-up and drop off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Discover the richness of the island of Hispaniola and the country known as the Dominican Republic with a full-day If you came to the Dominican Republic to get closer to nature and enjoy a unique tropical environment, you won’t want to miss Monkey Land. This 5-acre nature sanctuary in Punta Cana will let you and your family pet, hold and interact with friendly squirrel monkeys, as well as sample locally-grown coffee and cocoa. There’s plenty of time to monkey around on this outing!.
                    <br><br>Meet the locals for coffee.
                    <br>Your getaway to Monkey Land is a one-of-a-kind experience. Your excursion will begin with pick-up at your Punta Cana resort. Before you meet the monkeys, you'll have a chance to get closer to the locals of the Caribbean island when you stop at a traditional country house. There, you'll meet the family that resides in the house and learn about their life and culture while sampling the region’s renowned coffee and cocoa.
                    <br><br>Have fun with squirrel monkeys.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 5 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: Suitable for all ages</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Max weight permitted: 285</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip transportation.</li>
                    <li>Transportation by safari truck.</li>
                    <li>Stroll through colorful Botanical Garden.</li>
                    <li>Visit to typical Dominican house.</li>
                    <li>Fruits, coffee and chocolate.</li>
                    <li>Water and soft drinks.</li>
                    <li>Interaction with squirrel monkeys.</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Pick-up and drop-off times will vary according to hotel location.
                    <br>Wear comfortable clothing.
                    <br>Bring a camera, a bottle of water and extra money for tips and souvenirs.
                    <br>Customers who are pregnant, suffer from heart disease, disability and / or mobility problems, epilepsy, infections of the upper airways cannot participate to this tour.
                    <br>People with severe peanut allergies cannot participate on this tour.
                    <br>People with cold infection may not attend this tour.
                    <br>Please do not use sunscreen or insect repellent.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 75, nino: 0, descripcion: 'Monkey land' }
            ]
        },
        {
            id: 40,
            titulo: "Outback Adventure",
            partyBoat: false,
            mostrar: true,
            descripcion: `Take in the Punta Cana countryside and wildlife during a safari up a jungle-covered mountain. Unwind on a private beach, with a drink in your hand. Get a taste for Dominican chocolate and coffee from a working plantation. Watch a demonstration on how the island’s cigars are made. Activity duration: 8 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Get ready to travel to the heart of the Dominican Republic to experience an eye-opening journey with an incredible Outback Safari in Punta Cana. See where the most delicious coffee and chocolate comes from, be welcomed into a typical Dominican home and top everything off with a mouth-watering lunch and a trip to the beach. If you're looking to get in touch with nature and island life, this adventure is definitely for you.
                    <br><br>Explore Punta Cana’s outback, safari-style.
                    <br>Following pick-up at your resort, the Outback Safari adventure begins on the edge of Punta Cana’s countryside, looking outward from your very own open-air, all-terrain safari truck. As you ride toward a local ranch with an English-speaking guide pointing the way, you’ll ascend a jungle-covered mountain as you marvel at the natural beauty and the richness of rural life.
                    <br><br>Hop out, and take a guided stroll around this rustic countryside ranch and learn all about the local flora and fauna. In Punta Cana, the pace is slow and the people are fascinating.
                    <br><br>Discover traditional ways of living.
                    <br>Let the sun, surf and sand melt into your memories before you take transportation back to your resort. And remember to take home some local products so you can savor your time in Punta Cana and its Outback Safari.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 8 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 3 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: No</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>English-speaking adventure guides.</li>
                    <li>Transportation on a safari truck.</li>
                    <li>Lunch and drinks (bottled water, rum, beer, sodas).</li>
                    <li>Boogie boards on the beach.</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear a swimsuit, comfortable clothing and footwear .
                    <br>Bring a beach towel, hat, biodegradable sunblock, mosquito repellent, sunglasses and money for local goodies, tips and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br>Please note: This tour operates only Tuesdays and Thursdays from La Romana.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 90, nino: 0, descripcion: 'Outback Adventure' }
            ]
        },
        {
            id: 41,
            titulo: "Outback Explorer",
            partyBoat: false,
            mostrar: true,
            descripcion: `Ride a tricked out 4x4 rally truck with DVD screens and butler/bartender service. Visit a local home, play with the kids, and sample Mamajuana juice. Enjoy lunch and fresh coffee on a coffee and cocoa plantation. Activity duration: 8 hours (not including transportation time to and from activity). Hotel pick-up and drop off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Venture out of the hotel zone and into the wild of the Dominican Republic countryside on this exhilarating Jungle Rally Punta Cana ride aboard a 4x4 rally truck. Your adventure will give you a more up close and personal view of the island, with visits to a beautiful beach, a local school, a cacao and coffee plantation, an animal ranch, and a peaceful river. Lunch and a full bar complete this awesome excursion.
                    <br><br>Greet the morning at Macao Beach.
                    <br>Your Jungle Rally tour begins early in the morning in Punta Cana, where a comfortable, air-conditioned 4x4 rally truck will pick you up from your resort. Your first stop will be the beautiful golden-sand Macao Beach for some unbelievable morning views.
                    <br><br>The next stop is a Dominican school, where you can watch students and teachers in action. Let your guide tell you about the education system and other customs on the island. Afterward, visit a local Dominican home and meet the locals who work at a coffee and cacao plantation. See how they produce organic coffee and chocolate, and sample these delicacies after they’re freshly made.
                    <br><br>Continue the Jungle Rally tour at another riverside ranch, where a villager will show you how to open up a coconut and extract its contents to create oil and sweets. Then, go on a peaceful nature trek to a river so you can relax in its pristine environment.
                    <br><br>Swim or chill out at a hammock while you sip on more drinks from the rally truck’s open bar. After you’ve relaxed to the max, your driver will take you back to Punta Cana so you can spend the evening at your resort.
                    <br><br><strong>Note:</strong> A private version of this excursion is also available for you and your party.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 8 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 2 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: No</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>English-speaking guides.</li>
                    <li>Round-trip transportation on 4x4 air conditioned rally trucks.</li>
                    <li>Lunch.</li>
                    <li>Drinks from an open bar in the vehicle.</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear a swimsuit, comfortable clothing and footwear.
                    <br>Bring a beach towel, hat, sunglasses, biodegradable sunscreen, mosquito repellent and money for tips and souvenirs (tipping is optional).
                    <br>Please note: Pick-up and drop-off times will vary according to resort location.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 145, nino: 0, descripcion: 'Outback Explorer' }
            ]
        },
        {
            id: 42,
            titulo: "Outback Explorer Private Experience",
            partyBoat: false,
            mostrar: true,
            descripcion: `Go on an all-terrain adventure for up to 4 people in Punta Cana’s jungle on a private rally truck. Learn from your own guide and driver about the local customs of rural Dominican people. See the harvest process of organic chocolate and coffee. Enjoy lunch at a ranch that features reptiles and tropical flowers and trees. Swim and relax at a secluded river following a peaceful nature walk. Activity duration: 7 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Take a journey on the wild side of Punta Cana, where even though the backroads get a little rugged, you’ll travel in absolute comfort on your own 4x4 jungle rally truck. This private tour is for up to four people, and features a visit to a gorgeous beach, a stop at a local coffee and cacao plantation, a nature walk where you’ll gaze at amazing flora and fauna, and a swim in a pristine river. Drinks and lunch round out this unforgettable private outing.
                    <br><br>Ride a private 4x4 rally truck to gorgeous Macao Beach.
                    <br>Your Jungle Rally Punta Cana private tour begins with pick-up at your resort aboard an air-conditioned 4x4 rally truck, outfitted with special off-road suspension and DVD screens. This comfortable transportation is private for your party of up to 4 passengers. Set off and let your driver/guide showcase the scenery and explain local life and customs as you arrive to the beautiful golden-sand Macao Beach.
                    <br><br>Wind down your Jungle Rally private tour with a walk to the nearby river, where you can take a refreshing dip, relax on hammocks and enjoy more drinks from the bar. At the end of the day, head back to your Punta Cana resort in the same vehicle that took you through the Dominican outback.
                </p>

                <h2 class="col-4 text-center">Good to Know</h2>
                <h2 class="col-4 text-center">Included in the Excursion</h2>
                <h2 class="col-4 text-center">Excursion Options</h2>

                <ul class="col-4">
                    <li>Tour language: English / Spanish</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 7 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 5 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-4">
                    <li>Round-trip, air-conditioned transportation aboard a 4x4 rally truck</li>
                    <li>Private guide and driver</li>
                    <li>A la carte lunch that includes wine</li>
                    <li>Purified water, sodas, rum and beer</li>
                    <li>Tasting of natural products (coffee, cocoa, fruits)</li>
                </ul>

                <p class="col-4">
                    This price of the tour is for 4 passengers, but the rally truck fits 6 people. Each additional passenger is $145 USD.
                </p>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothing and footwear.
                    <br>Bring bathing suit, towel, hat, sunglasses, biodegradable sunblock, an extra T-shirt, insect repellent, camera and money for tips and souvenirs (tipping is optional).
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 580, nino: 0, descripcion: 'Outback Explorer Private Experience' }
            ]
        },
        {
            id: 43,
            titulo: "Dr. Fish Ocean Spa",
            partyBoat: false,
            mostrar: true,
            descripcion: `Enjoy a pampering day at sea aboard a sailboat spa. Relax with an instructor-led Pilates class. Try energy-boosting detox treatments or a private massage, included with your sail. Have your feet tinkled and cleaned by Garra Rufa fish. Enjoy a healthy and light lunch, chilled white wine and snacks. Activity duration: 3 hours (not including transportation time to and from activity). Hotel pick-up and drop off included`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Get a pedicure from a school of fish and a massage from a qualified professional on a unique and delightful day at the Ocean Spa in Punta Cana. Treat yourself and experience spa pampering like never before — as you cruise along the stunning Dominican coastline. Learn relaxation exercises, chill out on floating mattresses and get treated by nature’s coolest doctor: Dr. Fish!.
                    <br><br>Pamper your feet with the incredible Dr. Fish at Ocean Spa.
                    <br>Following pick-up at your resort, you’ll begin your day by soaking up the beauty of the natural surroundings as you cruise along the breathtaking coastline on a double-decker boat.
                    <br><br>But before you board the boat, try out an amazing foot treatment from Dr. Fish. Tiny fish called Garra Rufa will gently exfoliate your feet by removing the dead skin, creating the feeling of a tender massage that leaves your feet soft.
                    <br><br>A cruise to relax with Pilates Then, go aboard your double-decker boat, set sail, watch the world go by, and begin to unwind aboard the sublime Ocean Spa. As you’re cruising, take a bio-Pilates class from specialized instructors, who will focus on gentle stretching and breathing exercises to get you to relax completely.
                    <br><br>Get massages from the waves, and from a professional.
                    <br>Finally, top off your amazing Ocean Spa experience with a light lunch and a glass of chilled white wine. You can also snack on fresh fruit and juices from the health bar throughout your cruise. When you sail back to the dock, your transportation will be waiting to take you back to your resort.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 3 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 18 years old</li>
                    <li>Suitable for children: No</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip transportation.</li>
                    <li>English-speaking crew.</li>
                    <li>All spa treatments and activities available on the catamaran.</li>
                    <li>Fresh fruits, snacks and drinks.</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear swimsuit, comfortable clothing and footwear.
                    <br>Bring hat, sunblock, sunglasses, camera, beach towel, a change of clothes.
                    <br>Bring money for tips and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br>Please note: If you are staying at the Punta Cana Hotel or Sanctuary Cap Cana Hotel, you will need to pay $10 USD per person to cover round-trip transportation costs when boarding.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 154, nino: 0, descripcion: 'Dr. Fish Ocean Spa' }
            ]
        },
        {
            id: 44,
            titulo: "Santo Domingo City Tour",
            partyBoat: false,
            mostrar: true,
            descripcion: `Visit the architectural jewels of Santo Domingo. Step back in time and shop along the city’s colonial district. Get to know the locals and their authentic cuisine at lunch (not included). Activity duration: 9 hours (not including transportation time to and from hotel). Hotel pick-up and drop off included only from Punta Cana resorts.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Embark on a guided exploration of Santo Domingo, without a doubt one of the most fascinating and exciting cities in the Caribbean, and the first city founded in the New World in 1496. This beautiful capital city, located two and half hours from Punta Cana, beckons you to explore its jewel-like charm.
                    <br><br>Will you take in the American continent's first Cathedral? Or catch a glimpse of Christopher Columbus' family fortress? Better not forget to check the city's collection of beautiful monuments off your list, one by one, before dining and shopping in the city’s Plaza to end the day.
                    <br><br>With the help of an expert English-speaking guide, take a stroll through the Colonial Zone to view the standout monuments and architecture. You’ll find out how the Spanish conquistadors lived with a visit to the Alcazar de Colon, the fortress where Columbus’ family lived. Speaking of historic buildings, you will also visit the Basilica Cathedral of Santa Maria la Menor — the oldest cathedral in the Americas. Experience Dominican dining and shopping.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Location(s): Santo Domingo</li>
                    <li>Season: All year long</li>
                    <li>Duration: 9 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 3 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: Yes</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>English-speaking guides</li>
                    <li>Transportation on air-conditioned buses</li>
                    <li>Lunch in Santo Domingo</li>
                    <li>All entrance fees</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothing and footwear.
                    <br>Wear long pants/skirt and a shirt that covers the shoulders, for entering the Cathedral.
                    <br>Bring camera, hat, sunblock, sunglasses.
                    <br>Feel free to bring money for tips, snacks and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br>Be aware that some activities, such as museums, are unavailable on Mondays, making this activity a panoramic city tour on those days.
                    <br>This excursion is available in the following languages:
                    <ul class="col-12">
                        <li>English: Daily</li>
                        <li>French: Wednesday and Friday</li>
                        <li>German/Spanish: Tuesday and Saturday</li>
                        <li>Russian: Wednesday</li>
                    </ul>
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 95, nino: 0, descripcion: 'Santo Domingo City Tour' }
            ]
        },
        {
            id: 45,
            titulo: "Zip Lines",
            partyBoat: false,
            mostrar: true,
            descripcion: `Travel by open-air safari truck to the Anamuya Mountains. Zip line along 18 different lines – including one 2,600 feet long!. Get a bird’s eye view of the Dominican jungle and rivers. Refresh with complimentary beverages. Activity duration: 4 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included only from Punta Cana resorts.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Travel safari-style to the Punta Cana Zip Line camp.
                    <br>From the moment you climb aboard the safari-tough truck, you can just sense this won’t be an ordinary day. You’ll take a scenic route through the countryside, becoming familiar with the Anamuya Mountains — safari-style! Enjoy the scenery as you rumble through the sloping hillsides, expansive vistas and dense woods that tower above you, because you’re soon going to be seeing them from a totally different angle!.
                    <br><br>Safety first.
                    <br>Upon arriving at the Punta Cana Zip Line camp, you will receive a briefing from experienced guides to make sure you have all the information needed regarding equipment and safety. Once everyone is set, you’re ready for a totally wild adventure.
                    <br><br>The circuit is top-notch with 18 platforms and 12 zip lines covering more than 1.2 miles, keeping your adrenaline levels sky high. Feel ‘on top of world’ as you soar with arms wide open on the two longest lines in the Caribbean — one over 2,400 feet long! Criss-cross past lush mountain scenery, zip over Lake Anamuya and race your friend as you both ‘step into the air’ on side-by-side cables!.
                    <br><br>Take it all in.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 4 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 6 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: No</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Round-trip, air-conditioned transportation only from Punta Cana resorts</li>
                    <li>English-speaking adventure guides</li>
                    <li>All zip line equipment</li>
                    <li>Soft drinks, sodas and water</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothing and closed footwear.
                    <br>Bring sunglasses, a hat, sunscreen, mosquito repellent and money for tips and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br>Please note: For safety reasons, people with a history of neck or back injury, heart problems, balance and/or dizziness issues will not be able to participate.
                    <br>This excursion offers transportation only for guests staying at Punta Cana resorts.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 90, nino: 0, descripcion: 'Zip Lines' }
            ]
        },
        {
            id: 46,
            titulo: "Zip Lines And Monkey Land",
            partyBoat: false,
            mostrar: true,
            descripcion: `Enjoy the premier zip line park in Punta Cana, with 18 platforms and 12 zip lines. Stop by Coconut House to sample great coffee and see how coconut oil is made. Spend time with the nicest primates on the island at Monkey Land. Activity duration: 5 hours (not including transportation time to and from activity). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    If you’re going to the Dominican Republic to get closer to nature and explore the jungle, this excursion in the depths and heights of the rainforest is what you’re looking for. You'll have a chance to meet and interact with jungle monkeys, as well as soar through the trees with a number of different zip lines, high in the Punta Cana canopy. Fly more than a mile on zip lines.
                    <br><br>Following pick-up from your resort, your adventure begins at one of the area’s best zip line attractions. Your instructor will outfit you in harnesses and helmets and you’ll receive a safety briefing before climbing to the first of 18 platforms offering 12 zip lines. Fly across the sky from one platform to another on these zip lines that range in length and height, including one that’s more than 2,600 feet long! In all, you'll travel more than a mile on zip lines, enjoying the 360-degree jungle views at every turn. Interact with wild monkeys.
                    <br><br>Next, make a quick stop at the Coconut House, where you'll see how the locals turn coconuts into coconut oil, as well as sample some of the Dominican Republic’s best coffee. Then, it’s off to Monkey Land, where you'll have a chance to come face to face with wild and friendly primates. This 5-acre nature park is owned by a couple who have spent 35 years in this area getting to know the monkeys and earning their trust so that they’ll come eat from your hands, sit on your shoulders and practically smile during photo ops. While visiting Monkey Land, you'll also be served lunch before heading back to your resort.
                </p>

                <h2 class="col-xs-6 text-center">Good to Know</h2>
                <h2 class="col-xs-6 text-center">Included in the Excursion</h2>

                <ul class="col-xs-6">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 5 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 6 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Max weight permitted: 285</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-xs-6">
                    <li>Equipment and instructor</li>
                    <li>Participation in the entire 12-zipline circuit</li>
                    <li>Water and soft drinks</li>
                    <li>Fresh fruits</li>
                    <li>Transportation by safari truck</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    What to bring:
                    <br>Comfortable clothing.
                    <br>Sunscreen.
                    <br>Tennis shoes or closed shoes.
                    <br>Camera.
                    <br>Bottle of water.
                    <br>Extra money souvenirs.
                    <br>Insect repellent.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 119, nino: 0, descripcion: 'Zip Lines And Monkey Land' }
            ]
        },
        {
            id: 47,
            titulo: "Imagine Night Club",
            partyBoat: false,
            mostrar: true,
            descripcion: `Party the night away in a cave. Dance to Latin, electro and pop, with top DJs spinning tunes. Reserve a spot in the Premium Cave and get VIP service. Activity duration: Varies (not including transportation to and from resort). Hotel pick-up and drop-off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    There's no party like a party in a cave converted into a club. The Imagine Club in Punta Cana is a unique place that looks like it's straight from a fairy tale. So get ready to party the night away to the hottest tracks at a different kind of nightclub.
                    <br><br>The beauty and the beat.
                    <br>Once you enter the Imagine Club in Punta Cana, you will be greeted by staff who will make you feel like royalty as you slowly descend down into one of the three larger caves, each as magnificent as the next.
                    <br><br>Each cave comes with its own DJ playing everything from R&B to the freshest beats the Dominican Republic has to offer. Instead of stalactites, get ready to see epic lights hanging from the cave ceilings. No need to be afraid of the dark, as neon glow sticks light the way.
                    <br><br>Punta Cana’s best tracks at Imagine Club!.
                    <br>Each part of the Imagine Club in Punta Cana is dedicated to a theme and musical style. From Latin to electro, the place is kitted out with one of the most powerful sound-systems in Punta Cana.
                    <br><br>The natural acoustics of the caves complement the bass perfectly. If you are feeling fancy, you could reserve a spot in the Premium Cave, where a VIP service will make those drinks go down even more smoothly.
                    <br><br>Set fire to the night
                    <br>So, what are you waiting for? Get down to Punta Cana’s Imagine Club to revel in music and fire shows with an Imagine signature cocktail in hand. You’ll feel like you have your very own fairy godmother; but in this fantastic setting, midnight will come and go in a flash. Dancing shoes on, leave the pumpkin behind.
                </p>

                <h2 class="col-4 text-center">Good to Know</h2>
                <h2 class="col-4 text-center">Included in the Excursion</h2>
                <h2 class="col-4 text-center">Excursion Options</h2>

                <ul class="col-4">
                    <li>Tour language: English</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 5 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 18 years old</li>
                    <li>Suitable for children: No</li>
                    <li>Suitable for the elderly: No</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-4">
                    <li>Resort pick-up and drop-off</li>
                    <li>Cover charge at Imagine Night Club</li>
                </ul>

                <p class="col-4">
                    Open Bar Package: Price vary depends on the day of your entrance.
                    <p class="col-4"></p>
                    <ul class="col-4">
                        <li>Thursday and Sunday $50 USD.</li>
                        <li>Friday and Saturday $60 USD.</li>
                    </ul>
                </p>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    Wear comfortable clothing and footwear.
                    <br>Bring your camera and money for drinks, tips and souvenirs.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 60, nino: 0, descripcion: 'Imagine Night Club' }
            ]
        },
        {
            id: 48,
            titulo: "Happy Hour Private Experience",
            partyBoat: false,
            mostrar: true,
            descripcion: `Sail aboard a private boat, just you and your group, on a fun-filled afternoon in Punta Cana. Enjoy a selection of drinks and great music as you sail and party along the Bavaro coastline. Snorkel among colorful fish in a tropical coral reef. Visit a natural pool in the ocean and enjoy drinks on a floating bar in waist-high water. Activity duration: 3 hours (not including transportation time to and from activity). Hotel pick-up and drop off included.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Revel in the ultimate party cruise with the Happy Hour private tour, a fun-filled sail along the Punta Cana coastline aboard a private catamaran. This private outing is exclusively for you and your group, taking you to a coral reef for unforgettable snorkeling, and to a natural pool where you can kick back with drinks from a floating bar. This is the best VIP party experience available in Punta Cana!.
                    <br><br>Ride a boat just for you and your group.
                    <br>Your Happy Hour private excursion takes place either in the morning or afternoon, starting with you and your private party taking air-conditioned transportation from your resort to the marina. Climb aboard a luxury catamaran, where the only passengers will be you and your group, making this an exclusive party where you decide who the VIPs are.
                    <br><br>Throughout your sail, you’ll be able to enjoy snacks and libations from an open bar that includes rum, beer, vodka, sodas and water.
                    <br><br>Snorkel in the Dominican reef.
                    <br>Dance in a natural pool.
                    <br><br>Wrap up your Happy Hour private tour with more excitement — an unforgettable swim in a natural pool! Relax in these calm, waist-high pristine waters out in the ocean, while you enjoy drinks from a floating bar. Listen to the tropical music and let the rhythms invite you to move your hips and dance the afternoon away inside the pool.
                </p>

                <h2 class="col-4 text-center">Good to Know</h2>
                <h2 class="col-4 text-center">Included in the Excursion</h2>
                <h2 class="col-4 text-center">Excursion Options</h2>

                <ul class="col-4">
                    <li>Tour language: English | Spanish | French</li>
                    <li>Location(s): Punta Cana</li>
                    <li>Season: All year long</li>
                    <li>Duration: 3 hours (approx.)</li>
                    <li>Hotel pick-up available: Yes</li>
                    <li>Good physical condition required: No</li>
                    <li>Minimum age requirement: 18 years old</li>
                    <li>Suitable for children: Yes</li>
                    <li>Suitable for the elderly: Yes</li>
                    <li>Pregnant women allowed: No</li>
                </ul>
                
                <ul class="col-4">
                    <li>Round-trip, air-conditioned transportation</li>
                    <li>English-speaking host and crew</li>
                    <li>Snorkel gear</li>
                    <li>Floating bar</li>
                </ul>

                <ul class="col-4">
                    <li><strong>Morning Sailing Private (up to 15 pax):</strong> Take your private party of up to 15 people to an incredible sailing adventure in the morning.</li>
                    <li><strong>SunDowner Private (up to 25 pax):</strong> Board your VIP catamaran with your private party of up to 25 people to see the sun setting over Punta Cana.</li>
                </ul>

                <h2 class="col-12 text-center">Practical Information</h2>
                <p class="col-12">
                    This activity is recommended for passengers 18 years and older; however, families are welcome aboard this private boat excursion.
                    <br>Captain and crew are not responsible for supervision of any minors who might take this excursion; adult parental supervision is always required.
                    <br>Wear a swimsuit, comfortable clothing and footwear.
                    <br>Bring a beach towel, hat, biodegradable sunscreen, sunglasses and money for tips and souvenirs (tipping is optional).
                    <br>Pick-up and drop-off times will vary according to resort location.
                    <br><br><strong>Important notice:</strong> There’s an additional transportation fee that must be paid directly to the driver when taking this tour from the following resorts:
                    <ul class="col-12">
                        <li>$10 USD per adult and $5 USD per child: Casa de Campo Resort, Catalonia Gran Dominicus, Be Live Canoa, Dreams La Romana, Iberostar Hacienda Dominicus, Viva Wyndham Dominicus Beach, Viva Wyndham Dominicus Palace.</li>
                        <li>$15 USD per adult and $8 USD per child: Grand Bahia Principe La Romana.</li>
                    </ul>
                </p>
            `,
            horarios: ['9-12 pm','12-3 pm','3-6 pm'],
            modalidades: [
                { id: 0, precio: 50, nino: 0, descripcion: 'Happy Hour Private Experience' }
            ]
        },
        {
            id: 50,
            titulo: "Punta Cana Buggy",
            partyBoat: false,
            mostrar: true,
            descripcion: `Drive a dune buggy. Ride through exotic landscapes and small villages. Visit El Hoyo cave, Macao Beach, and a farming ranch.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Fun and interesting self-driving off-road tour on dune buggies through the natural lush beauty of Punta Cana. Visit caves, rivers and a beach to complete this fun-filled adventure day.
                    <br><br>Itinerary.
                    <ul class="col-12">
                        <li>Experience a day full of adventure with this self-driving, off-road tour over dune buggies, on a specially designed route that takes the participants to see Punta Cana’s interior, natural lush beauty, and lovely, humble people.</li>
                        <li>The fun ride, crossing narrow trails through exotic landscapes and small villages, leads to impressive cave El Hoyo. There,  bathe in its cool, underground river; to continue the adventure, drive to superb Macao Beachand enjoy the crystal clear water, or just relax under the palm trees’ shade.</li>
                        <li>To finalize this great Caribbean escapade, visit the interesting Tours Point Ranch where local farmers will share a taste of the most typical products of the Dominican agriculture: coffee, cacao, and tobacco.</li>
                    </ul>
                    During school season, you can also visit a rural elementary school which is sponsored by this unique tour.
                </p>

                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Not Included</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Multilingual Tour Guides.</li>
                    <li>Helmet (mandatory).</li>
                    <li>Bottled water.</li>
                </ul>
                
                <ul class="col-4">
                    <li>Tour video, photos, souvenirs, coffee, cacao, cigars, and other local produces.</li>
                    <li>At the after tour bar: soft drinks, sports beverages, and beers, rum.</li>
                </ul>

                <p class="col-4">
                    Wear comfortable clothes, swimsuit, closed shoes, sunglasses, and sunscreen. Don’t forget to bring your camera and extra cash for souvenirs or additional expenses.
                </p>

                <h2 class="col-12 text-center">Additional Information</h2>
                <p class="col-12">
                    The minimum age for Buggy drivers: 18 years. The minimum age for accompanying passengers on Buggy: 5 years.
                    <br>Pregnant women or guests under the influence of alcohol are not allowed on this tour. Guests with mobility restrictions will not be able to visit the cave. Packages available: Single and Double.
                    <br>About Transportation Included. 
                    <br>Rate applies only for hotels in the Punta Cana zone. If your hotel is in a different zone, an extra fee may apply.
                    <br><br>Activity Duration: 3 hours.
                    <br>Tour Duration: 4 hours.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 65, nino: 0, descripcion: 'Punta Cana Buggy' },
                { id: 1, precio: 80, nino: 0, descripcion: 'Polaris' }
            ]
        },
        {
            id: 51,
            titulo: "Coco Bongo Gold Member",
            partyBoat: false,
            mostrar: true,
            descripcion: `Greatest night club at Punta Cana.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Coco Bongo Show & Disco creates the best party on the planet!
                    <br><br>Itinerary
                    <ul class="col-12">
                        <li>Coco Bongo Show & Disco is the place for a great night out during your vacation in Punta Cana! Enjoy an eclectic mixture of music, dance, trapeze artists, acrobats and scenes from famous movies played out to mainstream dance music.</li>
                        <li>The night really is a performance, and you are there to be entertained and amazed. No wonder Coco Bongo Show & Disco has been praised by international media. With the domestic open bar freely flowing you can enjoy this party atmosphere and get on the dance floor to dance the night away.</li>
                    </ul>
                </p>

                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Not Included</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Transportation and open bar.</li>
                </ul>
                
                <ul class="col-4">
                    <li>Tips, photos and souvenirs.</li>
                </ul>

                <p class="col-4">
                    Photos with professional camaras are not allowed, let your camera at home. Don't forget to bring money for tips and souvenirs.
                </p>

                <h2 class="col-12 text-center">Additional Information</h2>
                <p class="col-12">
                    Schedule
                    <br>Departure from Hotel: 10PM-10:30PM
                    <br>Party Time 11PM - 3:30AM
                    <br>Return to hotel: 4AM- 4:30AM
                    <br><br>About Transportation
                    <br>Included.
                    <br><br>Rate applies only for hotels in the Punta Cana zone. If your hotel is in a different zone, an extra fee may apply.
                    <br><br>Activity Duration
                    <br>Approx. 5 hours.
                    <br>Tour Duration.
                    <br>Approx. 6 hours.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 75, nino: 0, descripcion: 'National Drinks' },
                { id: 1, precio: 130, nino: 0, descripcion: 'Premium Drinks and Seated Area' }
            ]
        },
        {
            id: 52,
            titulo: "Samana Discovery",
            partyBoat: false,
            mostrar: true,
            descripcion: ` Bus Drive to Miches. 50 minutes Boat Ride from Miches to Samana. Horseback riding to El Limon waterfall. Visit to Barcardi Beach, Las Flechas Gulf and explanation of its History. Panoramic City Tours Included in Santa Barbara de Samana.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Explore all the highlights that the beautiful island of Samana has to offer. Take a walk on the wild side and discover the real Dominican Republic with this complete tour around white sandy beaches, waterfalls, amazing views and the beauty of a true Caribbean paradise.
                    <br><br>Itinerary
                    <ul class="col-12">
                        <li>Enjoy a smooth bus ride through the countryside till you reach Bahia de Miches, where the real adventure begins after you board an amazing catamaran. Sail across the bay and enjoy the coast's panoramic views.</li>
                        <li>Hop on a safari truck to take a delightful sight-seeing tour of Samana. Then, a ride into the wild until hitting the amazing Zumbador waterfall; here you can jump into the water and be amazed by the majesty of the view: a treat for the senses.</li>
                        <li>For your relaxation, enjoy a tasty Caribbean lunch at a local restaurant while you gaze at magnificent views of the surroundings. Climb aboard the catamaran and take a breathtaking ride to Cayo Levantado Island.</li>
                        <li>Experience white sandy beaches and the warm turquoise water of this romantic Paradise, while you take a last glimpse of the amazing Samana Bay.</li>
                    </ul>
                </p>

                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Not Included</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Transportation, a sampling of coffee, hot chocolate, fruits, honey.</li>
                    <li>Helmet, boots, guide, refreshments.</li>
                    <li>Access to National Park El Limon and waterfalls.</li>
                    <li>All-inclusive lunch at El Timon restaurant (beer, wine, and local cocktails).</li>
                    <li>Drinks in Cayo Levantado; official guides.</li>
                </ul>
                
                <ul class="col-4">
                    <li>Photos, videos.</li>
                </ul>

                <p class="col-4">
                    Wear comfortable clothing, closed shoes, swimsuit, sunscreen, insect repellent, and sunglasses. Don't forget to bring your camera and extra money.
                </p>

                <h2 class="col-12 text-center">Additional Information</h2>
                <p class="col-12">
                    Not recommended for infants, pregnant women and people with walking difficulties.
                    <br><br>About Transportation
                    <br>Included.
                    <br><br>Rate applies only for hotels in the Punta Cana zone. If your hotel is in a different zone, an extra fee may apply.
                    <br><br>Activity Duration
                    <br>9 hrs
                    <br>Tour Duration
                    <br>11 hrs.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 169, nino: 0, descripcion: 'Samana Discovery' }
            ]
        },
        {
            id: 53,
            titulo: "Catalina el Fieston",
            partyBoat: false,
            mostrar: true,
            descripcion: `Visit Catalina Island. Snorkel in crystal clear water. BBQ buffet lunch at the beach.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Enjoy a boat tour across crystal clear waters to the uninhabited, Catalina Island, one of the better-known areas for snorkeling in the Dominican Republic. Enjoy buffet lunch on the beach, with drinks and snacks served throughout the day.
                    <br><br>Itinerary
                    <ul class="col-12">
                        <li>This journey takes you to the town of La Romana where you'll board the party boat known as El Fieston. You'll then cruise past multimillion-dollar mansions and yachts of Casa de Campo before arriving at the quintessential Caribbean shorelines of Catalina Island.</li>
                        <li>Enjoy buffet lunch on the beach, with drinks and snacks served throughout the day, as you take in the swaying palm trees, white sands, and transparent waters. If you're not content enough by just lazying on the beach, put on some snorkeling gear and admire Catalina's underwater world or take a fun ride on the banana boat.</li>
                        <li>On the return trip, we visit quaint Altos de Chavon Artisan village, where you'll tour cobblestone walkways and shops filled with local arts and crafts.</li>
                    </ul>
                </p>

                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Not Included</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Round trip transportation</li>
                    <li>Professional guide</li>
                    <li>Snorkeling gear</li>
                    <li>Boat transport to Catalina Island</li>
                    <li>BBQ buffet lunch</li>
                    <li>Snacks</li>
                    <li>And drinks.</li>
                </ul>
                
                <ul class="col-4">
                    <li>Tips</li>
                    <li>Photos</li>
                    <li>and souvenirs.</li>
                </ul>

                <p class="col-4">
                    Wear comfortable clothes, swimsuit, sunscreen and sun glasses. Don’t forget to bring your camera and extra money.
                </p>

                <h2 class="col-12 text-center">Additional Information</h2>
                <p class="col-12">About Transportation
                    <br>Included.
                    <br><br>Rate applies only for hotels in the Punta Cana zone. If your hotel is in a different zone, an extra fee may apply.
                    <br><br>Activity Duration
                    <br>6 hrs
                    <br>Tour Duration
                    <br>8 hrs.
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 135, nino: 0, descripcion: 'Catalina el Fieston' }
            ]
        },
        {
            id: 54,
            titulo: "Segway Tour",
            partyBoat: false,
            mostrar: true,
            descripcion: `Ride a Segway. Visit Ojos Indigenas Natural Reserve, Two separate beaches, La Cana golf course and a variety of interesting areas.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    The first and only 100% ecological tour in Punta Cana. Enjoy the most spectacular scenery in the area aboard one of our Segways.
                    <br><br>Itinerary
                    <ul class="col-12">
                        <li>Brace yourself because you´re in for a unique experience conducting your own Segway. Prior to departing, our seasoned guides will give a lecture on safety and vehicle usage.</li>
                        <li>That´ll leave room for a worry-free Segway experience.</li>
                        <li>The excursion is about 1 hour 30 minutes; starting from Punta Cana, we´ll zip away visiting beautiful Playa Blanca Beach and gorgeous La Cana golf course; at Tortuga Bay Beach there is a quick stop of about 10 minutes not so much as to catch your breath, but rather to take in the amazing surrounding view.</li>
                        <li>Then, continue the trajectory passing by the Hotel Tortuga Bay and Punta Cana Resort until finally reaching the Ojos Indigenas nature reserve, which boasts 12 sweet & crystalline spring water lakes interconnected by an underground river called Yauya where you can bathe.</li>
                        <li>We'll stay for 10 minutes approximately by the first lagoon that has the same name as the river: Yauya</li>
                    </ul>
                </p>

                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Not Included</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Segway.</li>
                    <li>Refreshments.</li>
                    <li>Safety equipment.</li>
                </ul>
                
                <ul class="col-4">
                    <li>Tips.</li>
                    <li>Photos.</li>
                    <li>Videos.</li>
                    <li>and souvenirs.</li>
                </ul>

                <ul class="col-4">
                    <li>Bring towel.</li>
                    <li>Swimsuits.</li>
                    <li>Comfortable and closed shoes.</li>
                </ul>

                <h2 class="col-12 text-center">Additional Information</h2>
                <p class="col-12">
                    Minimum age is 6 years old.
                    <br><br>About Transportation
                    <br>A/C van transportation is included from your hotel lobby.
                    <br><br>Rate applies only for hotels in the Punta Cana zone. If your hotel is in a different zone, an extra fee may apply.
                    <br><br>Activity Duration
                    <br>1.5 hours
                    <br>Tour Duration
                    <br>N/A
                </p>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 79, nino: 0, descripcion: 'Segway Tour' }
            ]
        },
        {
            id: 55,
            titulo: "Scape Park",
            partyBoat: false,
            mostrar: true,
            descripcion: `Ride a Segway. Visit Ojos Indigenas Natural Reserve, Two separate beaches, La Cana golf course and a variety of interesting areas.`,
            descripcion_completa: `
                <h2 class="col-12 text-center">Description</h2>
                <p class="col-12">
                    Scape Park is without a doubt an amusement park without waste. For those who love nature, for those seeking relaxation, for those who seek adrenaline, culture, discover, for young and old, for the whole family: this is an exceptional place.
                    <br><br>Combine feelings of suspense with relaxation, meet incredible aspects of nature through the exploration of unimaginable corners, dare to make our Zip Line or swim the underwater bottom of our caves, finish exhausted to have fun and enjoy, or end up being delighted by the relaxing peace offered by our facilities.
                </p>
                <h2 class="col-4 text-center">Includes</h2>
                <h2 class="col-4 text-center">Important</h2>
                <h2 class="col-4 text-center">Recommendations</h2>

                <ul class="col-4">
                    <li>Transportation from most hotels in the area.</li>
                    <li>Blue Hole Eco Tour.</li>
                    <li>Zip line Eco Splash.</li>
                    <li>Blue Jumps.</li>
                    <li>Cultural Route.</li>
                    <li>Cave Swim.</li>
                    <li>Iguabonita Cave.</li>
                    <li>Iguanaland.</li>
                    <li>The ranch.</li>
                    <li>Playground (Eco Kids Village: From 2 to 12 years old).</li>
                    <li>Beach Getaway (drinks not included).</li>
                    <li>Dominican Buffet.</li>
                </ul>
                
                <ul class="col-4">
                    <li>This is an all day stay at Scape Park.</li>
                    <li>Depending on your hotel location bus ride may be 10 to 45 minutes long.</li>
                    <li>The departure from the park is at 4:00pm.</li>
                    <li>Some of the atractions are not included.</li>
                    <li>Kids´ages may determine access to some areas.</li>
                    <li>Any picture equipment will be put away until the end of your stay.</li>
                    <li>The realization of activities may be subject to a program or sequence.</li>
                </ul>

                <ul class="col-4">
                    <li>Bring towel.</li>
                    <li>Swimsuits.</li>
                    <li>Comfortable and closed shoes.</li>
                </ul>
            `,
            horarios: ['Everyday'],
            modalidades: [
                { id: 0, precio: 149, nino: 0, descripcion: 'Scape Park Full Admision' }
            ]
        },*/
    ];
    $scope.tours = tours;
    $scope.cambiarTour = function () {
        $('#modalidad').select2();
    }

    $scope.calcularPrecioTour = function () {
        if ($scope.tour) {
            var pos = 0;
            if ($scope.tour.modalidades.length > 1 && $scope.tour.modalidad)
                pos = $scope.tour.modalidad.id;
            var precioAdultos = $scope.tour.adultos * $scope.tour.modalidades[pos].precio;
            var precioNinos = $scope.tour.ninos * $scope.tour.modalidades[pos].nino;
            if (precioNinos)
                $scope.tour.precio = precioAdultos + precioNinos;
            else if (precioAdultos)
                $scope.tour.precio = precioAdultos;
            else
                $scope.tour.precio = $scope.tour.modalidades[pos].precio;
        }
        else
            $scope.tour.precio = $scope.tour.modalidades[pos].precio;
    }

    $scope.calcularPrecioVIP = function () {
        if ($scope.VIP.serviceVIP && $scope.VIP.pasajeros) {
            if ($scope.VIP.arrival)
                $scope.VIP.precio = parseFloat($scope.VIP.pasajeros * 75);
            if ($scope.VIP.departure)
                $scope.VIP.precio = $scope.VIP.precio + parseFloat($scope.VIP.pasajeros * 125);
        }
    }

    $scope.VIP = { precio: 0 };
    
    $scope.agregarVIP = function (event) {
        event.preventDefault();
        if ($scope.VIP.serviceVIP && $scope.VIP.pasajeros) {
            $scope.carrito.vip.push($scope.VIP);
            $scope.vip = false;
            $scope.VIP = { precio: 0 };
            $scope.actualizar();
        }
        if ($scope.transfer) {
            $scope.agregarTraslado(event);
            $scope.transfer = false;
        }
        swal({
            title: 'VIP',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
    }

    $scope.eliminarVIP = function (index) {
        $scope.carrito.vip.splice(index, 1);
        $scope.actualizar();
    }

    $scope.cargar = function () {
        $http.get(window.url + '/session').then(function (response) {
            $scope.carrito = response.data;
            $scope.nro_carrito();
        });
    }

    $scope.cargar();

    $scope.actualizar = function () {
        $scope.carrito._token = window._token;
        $scope.nro_carrito();
        $http.post(window.url + '/session', $scope.carrito).then(function (response) {});
        if ($scope.opcion == 'reservar') {
            $window.location.href = window.url + '/shop';
        }
    }

    if (window.pos != null) {
        $scope.tour = $scope.tours.find(tour => {return window.pos == tour.id});
        $scope.tour.precio = $scope.tour.modalidades[0].precio;
        $timeout(function () { $('#tourModel').select2(); }, 500);
    }

    $scope.precioTotal = function () {
        var precio = 0;
        for (var i = 0; i < $scope.carrito.traslados.length; i++) {
            precio += parseFloat($scope.carrito.traslados[i].precio);
        }
        for (var i = 0; i < $scope.carrito.tours.length; i++) {
            precio += parseFloat($scope.carrito.tours[i].precio);
        }
        for (var i = 0; i < $scope.carrito.hoteles.length; i++) {
            precio += parseFloat($scope.carrito.hoteles[i].precio);
        }
        return precio;
    }



    $scope.vipTipos = ['Audi', 'Suburban'];
    $scope.cambiarPasajeros = function () {
        $scope.traslado.vip = "";
        if ($scope.traslado.pasajeros <= 2) {
            $scope.vipTipos = ['Suburban', 'Audi'];
        }
        else {
            $scope.vipTipos = ['Suburban'];
        }
        $timeout(function () { $('.vipSelect,.selectNacionalizacion').select2(); }, 500);
    }





    /* Agregar Wifi */
    
    $scope.wifi = {};
    $scope.agregarWifi = function (event) {        
        event.preventDefault();
        $scope.wifi.dias = $('#dias').val();
        $scope.wifi.precio = $("#precio2").val();
        $scope.carrito.wifi.push($scope.wifi);
        $scope.actualizar();
        swal({
            title: 'Wifi',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
        $("#wifiModal").modal('hide');
        $scope.wifi = {};
        return false;
    }

    $scope.eliminarWifi = function (index) {
        $scope.carrito.wifi.splice(index, 1);
        $scope.actualizar();
    }

    $scope.nro_carrito = function(){
        $scope.nro =  $scope.carrito.tours.length + $scope.carrito.traslados.length + $scope.carrito.hoteles.length;
    }



    $scope.paises = ["Puntacana","Dominican Republic","Mexico","Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo, Republic of the","Congo, Democratic Republic of the","Costa Rica","Cote d'Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar (Burma)","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","St. Kitts and Nevis","St. Lucia","St. Vincent and The Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom (UK)","United States of America (USA)","Uruguay","Uzbekistan","Vanuatu","Vatican City (Holy See)","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"];
    /* Flights */

    $scope.cambiarPasajerosVuelos = function(){
        $timeout(function(){
            $(".selectVuelo").select2();
        },1000);
    }
    $scope.vuelo = {listaPasajeros:[]};
    $scope.vuelos = [
        {
            id:0,
            origen:"Puerto Plata",
            destinos:[
                {
                    id:0,
                    descripcion:"Samana Arroyo Barril",
                    aviones:[
                        {id:0,tiempo:"35 minutes",precio:900,titulo:"Cessna 182 R",foto:"avion1.jpeg",capacidad:3},
                        {id:1,tiempo:"40 minutes",precio:1250,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6}
                    ]
                },
                {
                    id:1,
                    descripcion:"Catey Samana",
                    aviones:[
                        {id:0,tiempo:"30 minutes",precio:900,titulo:"Cessna 182 R",foto:"avion1.jpeg",capacidad:3},
                        {id:1,tiempo:"30 minutes",precio:1250,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6}
                    ]
                },
                {
                    id:2,
                    descripcion:"Romana",
                    aviones:[
                        {id:0,tiempo:"50 minutes",precio:1000,titulo:"Cessna 182 R",foto:"avion1.jpeg",capacidad:3}
                    ]
                },
                {
                    id:3,
                    descripcion:"Santo Domingo",
                    aviones:[
                        {id:0,tiempo:"45 minutes",precio:1300,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"35 minutes",precio:1800,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:4,
                    descripcion:"Higuero",
                    aviones:[
                        {id:0,tiempo:"45 minutes",precio:1300,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"30 minutes",precio:1800,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:5,
                    descripcion:"Romana",
                    aviones:[
                        {id:0,tiempo:"1:15 minutes",precio:1350,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"60 minutes",precio:1900,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                }
            ]
        },
        {
            id:1,
            origen:"Punta cana",
            destinos:[
                {
                    id:0,
                    descripcion:"Samana Arroyo Barril",
                    aviones:[
                        {id:0,tiempo:"40 minutes",precio:650,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"30 minutes",precio:1500,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:1,
                    descripcion:"Puerto Plata",
                    aviones:[
                        {id:0,tiempo:"120 minutes",precio:1300,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"60 minutes",precio:1900,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:2,
                    descripcion:"Santo Domingo",
                    aviones:[
                        {id:0,tiempo:"40 minutes",precio:700,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"30 minutes",precio:1800,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:3,
                    descripcion:"Santiago",
                    aviones:[
                        {id:0,tiempo:"120 minutes",precio:1300,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"60 minutes",precio:1900,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:4,
                    descripcion:"Barahona",
                    aviones:[
                        {id:0,tiempo:"150 minutes",precio:1550,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:0,tiempo:"115 minutes",precio:2200,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:5,
                    descripcion:"Catey Samana",
                    aviones:[
                        {id:0,tiempo:"45 minutes",precio:750,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"35 minutes",precio:16,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:6,
                    descripcion:"Monte Cristi",
                    aviones:[
                        {id:0,tiempo:"120 minutes",precio:1700,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"135 minutes",precio:2500,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:7,
                    descripcion:"Higuero",
                    aviones:[
                        {id:0,tiempo:"50 minutes",precio:700,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"35 minutes",precio:1650,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:8,
                    descripcion:"Cabo Rojo",
                    aviones:[
                        {id:0,tiempo:"220 minutes",precio:1700,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6},
                        {id:1,tiempo:"140 minutes",precio:2400,titulo:"Piper Navajo",foto:"avion3.jpeg",capacidad:9}
                    ]
                },
                {
                    id:9,
                    descripcion:"Romana",
                    aviones:[
                        {id:0,tiempo:"15 minutes",precio:600,titulo:"Cherokee 6",foto:"avion2.jpeg",capacidad:6}
                    ]
                }
            ]
        }
    ]

    $scope.agregarVuelo = function (event) {
        event.preventDefault();
        $scope.carrito.vuelos.push({
            origen:$scope.vuelo.origen.origen,
            destino:$scope.vuelo.destino.descripcion,
            fecha:$scope.vuelo.fecha,
            pasajeros:$scope.vuelo.pasajeros,
            avion:$scope.vuelo.avion.titulo,
            tiempo:$scope.vuelo.avion.tiempo,
            capacidad:$scope.vuelo.avion.capacidad,
            precio:$scope.vuelo.avion.precio,
            listaPasajeros:$scope.vuelo.listaPasajeros
        });
        $scope.vuelo = {listaPasajeros:[]};
        $timeout(function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
        }, 500);
        $scope.actualizar();

        swal({
            title: 'Flight',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
    }

    $scope.eliminarVuelo = function (index) {
        $scope.carrito.vuelos.splice(index, 1);
        $scope.actualizar();
    }


    /* Hoteles */
    $scope.hotelesReservar = $scope.hotelesReservar = [
        {
            descripcion:'Bahia Principe Ambar',
            precios:[
                {tipo:'JS Dlx',sencilla:376, doble:251, triple:238, fechas:['02-01','31-03']},
                {tipo:'JS Dlx',sencilla:332, doble:222, triple:210, fechas:['01-04','30-04']},
                {tipo:'JS Dlx',sencilla:366, doble:245, triple:232, fechas:['17-04','21-04']},
                {tipo:'JS Dlx',sencilla:247, doble:165, triple:156, fechas:['01-05','15-06']},
                {tipo:'JS Dlx',sencilla:274, doble:183, triple:173, fechas:['16-06','31-07']},
                {tipo:'JS Dlx',sencilla:290, doble:194, triple:184, fechas:['01-08','18-08']},
                {tipo:'JS Dlx',sencilla:247, doble:165, triple:156, fechas:['19-08','23-12']},
            ]
        },
        {
            descripcion:'Bahia Principe AQUAMARINE',
            precios:[
                {tipo:'JS Dlx',sencilla:328, doble:218, triple:207, fechas:['02-01','31-03']},
                {tipo:'JS Dlx',sencilla:281, doble:188, triple:179, fechas:['01-04','30-04']},
                {tipo:'JS Dlx',sencilla:318, doble:212, triple:202, fechas:['17-04','21-04']},
                {tipo:'JS Dlx',sencilla:205, doble:137, triple:129, fechas:['01-05','15-06']},
                {tipo:'JS Dlx',sencilla:231, doble:154, triple:147, fechas:['16-06','31-07']},
                {tipo:'JS Dlx',sencilla:247, doble:165, triple:156, fechas:['01-08','17-08']},
                {tipo:'JS Dlx',sencilla:205, doble:137, triple:129, fechas:['18-08','23-12']},
            ]
        },
        {
            descripcion:'Bahia Principe Bavaro / Punta Cana',
            precios:[
                {tipo:'Junior Suite',sencilla:280, doble:187, triple:177, fechas:['02-01','31-03']},
                {tipo:'Junior Suite',sencilla:240, doble:161, triple:152, fechas:['01-04','16-04']},
                {tipo:'Junior Suite',sencilla:271, doble:181, triple:171, fechas:['17-04','21-04']},
                {tipo:'Junior Suite',sencilla:240, doble:161, triple:152, fechas:['22-04','30-04']},
                {tipo:'Junior Suite',sencilla:187, doble:125, triple:119, fechas:['01-05','15-06']},
                {tipo:'Junior Suite',sencilla:192, doble:128, triple:122, fechas:['16-06','31-07']},
                {tipo:'Junior Suite',sencilla:208, doble:139, triple:131, fechas:['01-08','18-08']},
                {tipo:'Junior Suite',sencilla:187, doble:125, triple:119, fechas:['19-08','23-12']},
            ]
        },
        {
            descripcion:'Bahia Principe Esmeralda',
            precios:[
                {tipo:'JS Dlx',sencilla:357, doble:238, triple:226, fechas:['02-01','31-03']},
                {tipo:'JS Dlx',sencilla:313, doble:209, triple:198, fechas:['01-04','30-04']},
                {tipo:'JS Dlx',sencilla:350, doble:233, triple:222, fechas:['17-04','21-04']},
                {tipo:'JS Dlx',sencilla:234, doble:156, triple:148, fechas:['01-05','15-06']},
                {tipo:'JS Dlx',sencilla:263, doble:175, triple:166, fechas:['16-06','31-07']},
                {tipo:'JS Dlx',sencilla:277, doble:185, triple:175, fechas:['01-08','18-08']},
                {tipo:'JS Dlx',sencilla:234, doble:156, triple:148, fechas:['19-08','23-12']},
            ]
        },
        {
            descripcion:'Bahia Principe Fantasia',
            precios:[
                {tipo:'JS Dlx',sencilla:392, doble:261, triple:248, fechas:['02-01','31-03']},
                {tipo:'JS Dlx',sencilla:350, doble:233, triple:221, fechas:['01-04','30-04']},
                {tipo:'JS Dlx',sencilla:384, doble:256, triple:243, fechas:['17-04','21-04']},
                {tipo:'JS Dlx',sencilla:269, doble:180, triple:171, fechas:['01-05','15-06']},
                {tipo:'JS Dlx',sencilla:296, doble:197, triple:188, fechas:['16-06','31-07']},
                {tipo:'JS Dlx',sencilla:312, doble:208, triple:198, fechas:['01-08','18-08']},
                {tipo:'JS Dlx',sencilla:269, doble:180, triple:171, fechas:['19-08','23-12']},
            ]
        },
        {
            descripcion:'Bahia Principe Turquesa',
            precios:[
                {tipo:'JS Dlx',sencilla:280, doble:187, triple:178, fechas:['02-01','31-03']},
                {tipo:'JS Dlx',sencilla:236, doble:158, triple:150, fechas:['01-04','30-04']},
                {tipo:'JS Dlx',sencilla:271, doble:181, triple:172, fechas:['17-04','21-04']},
                {tipo:'JS Dlx',sencilla:173, doble:116, triple:110, fechas:['01-05','15-06']},
                {tipo:'JS Dlx',sencilla:200, doble:133, triple:127, fechas:['16-06','31-07']},
                {tipo:'JS Dlx',sencilla:216, doble:144, triple:137, fechas:['01-08','18-08']},
                {tipo:'JS Dlx',sencilla:173, doble:116, triple:110, fechas:['19-08','23-12']},
                {tipo:'FAMILY M/S',sencilla:0, doble:308, triple:293, fechas:['02-01','31-03']},
                {tipo:'FAMILY M/S',sencilla:0, doble:260, triple:247, fechas:['01-04','30-04']},
                {tipo:'FAMILY M/S',sencilla:0, doble:298, triple:283, fechas:['17-04','21-04']},
                {tipo:'FAMILY M/S',sencilla:0, doble:191, triple:181, fechas:['01-05','15-06']},
                {tipo:'FAMILY M/S',sencilla:0, doble:220, triple:209, fechas:['16-06','31-07']},
                {tipo:'FAMILY M/S',sencilla:0, doble:237, triple:225, fechas:['01-08','18-08']},
                {tipo:'FAMILY M/S',sencilla:0, doble:191, triple:181, fechas:['19-08','23-12']},
            ]
        },
        {
            descripcion:'Barcelo Bavaro Beach',
            precios:[
                {tipo:'SUP',sencilla:512, doble:285, triple:256, fechas:['06-01','31-01']},
                {tipo:'SUP',sencilla:550, doble:306, triple:275, fechas:['01-02','28-02']},
                {tipo:'SUP',sencilla:538, doble:299, triple:270, fechas:['01-03','12-04']},
                {tipo:'SUP',sencilla:459, doble:306, triple:275, fechas:['13-04','20-04']},
                {tipo:'SUP',sencilla:358, doble:238, triple:215, fechas:['21-04','30-04']},
                {tipo:'SUP',sencilla:299, doble:200, triple:180, fechas:['01-05','14-06']},
                {tipo:'SUP',sencilla:358, doble:238, triple:215, fechas:['15-06','17-08']},
                {tipo:'SUP',sencilla:268, doble:179, triple:161, fechas:['18-08','31-10']},
                {tipo:'SUP',sencilla:318, doble:212, triple:191, fechas:['18-08','31-10']},
            ]
        },
    
        {
            descripcion:'Barcelo Bavaro Palace Deluxe',
            precios:[
                {tipo:'Family',sencilla:0, doble:173, triple:156, fechas:['01-01','31-01']},
                {tipo:'JR SUITE',sencilla:268, doble:158, triple:142, fechas:['01-01','31-01']},
                {tipo:'JR SUITE',sencilla:510, doble:300, triple:271, fechas:['06-01','31-01']},
                {tipo:'JR SUITE',sencilla:546, doble:321, triple:290, fechas:['01-02','28-02']},
                {tipo:'JR SUITE',sencilla:534, doble:314, triple:282, fechas:['01-03','12-04']},
                {tipo:'JR SUITE',sencilla:546, doble:321, triple:290, fechas:['13-04','20-04']},
                {tipo:'JR SUITE',sencilla:427, doble:251, triple:224, fechas:['21-04','30-04']},
                {tipo:'JR SUITE',sencilla:356, doble:210, triple:189, fechas:['01-05','14-06']},
                {tipo:'JR SUITE',sencilla:427, doble:251, triple:227, fechas:['15-06','17-08']},
                {tipo:'JR SUITE',sencilla:320, doble:189, triple:170, fechas:['18-08','31-10']},
                {tipo:'Sup',sencilla:460, doble:270, triple:244, fechas:['06-01','31-01']},
                {tipo:'Sup',sencilla:491, doble:289, triple:260, fechas:['01-02','28-02']},
                {tipo:'Sup',sencilla:481, doble:282, triple:255, fechas:['01-03','12-04']},
                {tipo:'Sup',sencilla:491, doble:289, triple:260, fechas:['13-04','20-04']},
                {tipo:'Sup',sencilla:384, doble:226, triple:204, fechas:['21-04','30-04']},
                {tipo:'Sup',sencilla:320, doble:189, triple:170, fechas:['01-05','14-06']},
                {tipo:'Sup',sencilla:384, doble:226, triple:204, fechas:['15-06','17-08']},
                {tipo:'Sup',sencilla:289, doble:170, triple:153, fechas:['18-08','31-10']},
            ]
        },
        {
            descripcion:'Bavaro Princess',
            precios:[
                {tipo:'Junior Suite',sencilla:208, doble:179, triple:164, fechas:['02-01','16-04']},
                {tipo:'Junior Suite',sencilla:217, doble:188, triple:172, fechas:['17-04','20-04']},
                {tipo:'Junior Suite',sencilla:186, doble:156, triple:143, fechas:['21-04','30-04']},
                {tipo:'Junior Suite',sencilla:166, doble:137, triple:125, fechas:['01-05','30-06']},
                {tipo:'Junior Suite',sencilla:176, doble:147, triple:134, fechas:['01-07','31-08']},
                {tipo:'Junior Suite',sencilla:166, doble:137, triple:125, fechas:['01-09','21-12']},
            ]
        },
    
        {
            descripcion:'Be Live Colletion Punta Cana',
            precios:[
                {tipo:'Std',sencilla:175, doble:144, triple:132, fechas:['07-01','31-03']},
                {tipo:'Std',sencilla:160, doble:128, triple:118, fechas:['01-04','17-04']},
                {tipo:'Std',sencilla:186, doble:154, triple:141, fechas:['18-04','21-04']},
                {tipo:'Std',sencilla:160, doble:128, triple:118, fechas:['21-04','26-04']},
                {tipo:'Std',sencilla:186, doble:154, triple:141, fechas:['27-04','29-04']},
                {tipo:'Std',sencilla:149, doble:118, triple:108, fechas:['30-04','30-06']},
                {tipo:'Std',sencilla:160, doble:128, triple:118, fechas:['01-07','22-08']},
                {tipo:'Std',sencilla:149, doble:118, triple:108, fechas:['23-08','01-11']},
                {tipo:'Std',sencilla:186, doble:154, triple:141, fechas:['02-11','04-11']},
                {tipo:'Std',sencilla:149, doble:118, triple:108, fechas:['05-11','21-12']},
                {tipo:'Std',sencilla:207, doble:175, triple:161, fechas:['22-12','07-01-2020']},
            ]
        },
    
        {
            descripcion:'Be Live Colletion Punta Cana',
            adultos:true,
            precios:[
                {tipo:'Std',sencilla:196, doble:165, triple:151, fechas:['07-01','31-03']},
                {tipo:'Std',sencilla:181, doble:149, triple:137, fechas:['01-04','17-04']},
                {tipo:'Std',sencilla:207, doble:175, triple:161, fechas:['18-04','21-04']},
                {tipo:'Std',sencilla:181, doble:149, triple:137, fechas:['21-04','26-04']},
                {tipo:'Std',sencilla:207, doble:175, triple:161, fechas:['27-04','29-04']},
                {tipo:'Std',sencilla:170, doble:139, triple:127, fechas:['30-04','30-06']},
                {tipo:'Std',sencilla:181, doble:149, triple:137, fechas:['01-07','22-08']},
                {tipo:'Std',sencilla:170, doble:139, triple:127, fechas:['23-08','01-11']},
                {tipo:'Std',sencilla:207, doble:175, triple:161, fechas:['02-11','04-11']},
                {tipo:'Std',sencilla:170, doble:139, triple:127, fechas:['05-11','21-12']},
                {tipo:'Std',sencilla:228, doble:196, triple:180, fechas:['22-12','07-01-2020']},
            ]
        },
    
        {
          descripcion:'Breathless Punta Cana',
          precios:[
            {tipo:'JS T/V',sencilla:349, doble:232, triple:231, fechas:['02-01','31-01']},
            {tipo:'JS T/V',sencilla:326, doble:209, triple:208, fechas:['18-01','31-01']},
            {tipo:'JS T/V',sencilla:359, doble:239, triple:238, fechas:['01-02','21-04']},
            {tipo:'JS T/V',sencilla:314, doble:209, triple:208, fechas:['22-04','05-06']},
            {tipo:'JS T/V',sencilla:302, doble:202, triple:201, fechas:['06-06','21-08']},
            {tipo:'JS T/V',sencilla:268, doble:179, triple:177, fechas:['22-08','31-10']},
            {tipo:'JS T/V',sencilla:276, doble:184, triple:183, fechas:['01-11','14-12']},
            {tipo:'JS T/V',sencilla:268, doble:179, triple:177, fechas:['15-12','22-12']},
          ]
        },
    
        {
          descripcion:'Blue Bay Hotels Gran Punta Cana',
          precios: [
            {tipo:'Jr Suites',sencilla:198, doble:152, triple:141, fechas:['07-01','31-01']},
            {tipo:'Jr Suites',sencilla:226, doble:173, triple:160, fechas:['01-02','16-04']},
            {tipo:'Jr Suites',sencilla:259, doble:200, triple:184, fechas:['17-04','20-04']},
            {tipo:'Jr Suites',sencilla:295, doble:227, triple:209, fechas:['03-01','31-01']},
            {tipo:'Jr Suites',sencilla:305, doble:234, triple:216, fechas:['01-02','13-04']},
            {tipo:'Jr Suites',sencilla:322, doble:248, triple:229, fechas:['14-04','20-04']},
            {tipo:'Jr Suites',sencilla:270, doble:208, triple:192, fechas:['21-04','30-06']},
            {tipo:'Jr Suites',sencilla:278, doble:214, triple:198, fechas:['01-07','31-08']},
            {tipo:'Jr Suites',sencilla:254, doble:195, triple:180, fechas:['01-09','31-10']},
            {tipo:'Jr Suites',sencilla:295, doble:227, triple:209, fechas:['01-11','21-12']},
          ]
        },
        {
          descripcion:'Caribe Club Princess',
          precios: [
            {tipo:'Superior',sencilla:166, doble:137, triple:125, fechas:['02-01','16-04']},
            {tipo:'Superior',sencilla:185, doble:155, triple:142, fechas:['17-04','20-04']},
            {tipo:'Superior',sencilla:144, doble:114, triple:105, fechas:['21-04','30-04']},
            {tipo:'Superior',sencilla:132, doble:103, triple:94, fechas:['01-05','30-06']},
            {tipo:'Superior',sencilla:141, doble:112, triple:103, fechas:['01-07','31-08']},
            {tipo:'Superior',sencilla:132, doble:103, triple:94, fechas:['01-09','21-12']},
          ]
        },
    
        {
          descripcion:'Catalonia Bávaro Beach',
          precios:[
            {tipo:'J/S',sencilla:221, doble:147, triple:140, fechas:['03-01','17-01']},
            {tipo:'J/S',sencilla:241, doble:161, triple:153, fechas:['03-01','31-01']},
            {tipo:'J/S',sencilla:271, doble:181, triple:172, fechas:['01-02','31-03']},
            {tipo:'J/S',sencilla:230, doble:153, triple:146, fechas:['01-04','21-04']},
            {tipo:'J/S',sencilla:198, doble:132, triple:126, fechas:['22-04','30-04']},
            {tipo:'J/S',sencilla:161, doble:107, triple:102, fechas:['01-05','30-06']},
            {tipo:'J/S',sencilla:202, doble:134, triple:128, fechas:['01-07','31-08']},
            {tipo:'J/S',sencilla:151, doble:101, triple:96, fechas:['01-09','31-10']},
            {tipo:'J/S',sencilla:167, doble:111, triple:106, fechas:['01-11','23-12']},
          ]
        },
    
        {
          descripcion:'Catalonia Royal Bávaro',
          precios: [
            {tipo:'J/S',sencilla:299, doble:200, triple:190, fechas:['03-01','31-01']},
            {tipo:'J/S',sencilla:331, doble:221, triple:209, fechas:['01-02','31-03']},
            {tipo:'J/S',sencilla:287, doble:191, triple:182, fechas:['01-04','21-04']},
            {tipo:'J/S',sencilla:252, doble:168, triple:160, fechas:['22-04','30-04']},
            {tipo:'J/S',sencilla:214, doble:143, triple:136, fechas:['01-05','30-06']},
            {tipo:'J/S',sencilla:257, doble:171, triple:163, fechas:['01-07','31-08']},
            {tipo:'J/S',sencilla:203, doble:135, triple:129, fechas:['01-09','31-10']},
            {tipo:'J/S',sencilla:219, doble:146, triple:139, fechas:['01-11','23-12']},
          ]
        },
    
    
        {
          descripcion:'Chic Punta Cana By Royalton',
          precios:[
            {tipo:'Luxury',sencilla:239, doble:160, triple:0, fechas:['07-01','31-01']},
            {tipo:'Luxury',sencilla:258, doble:172, triple:0, fechas:['01-02','30-04']},
            {tipo:'Luxury',sencilla:268, doble:179, triple:0, fechas:['27-04','29-04']},
            {tipo:'Luxury',sencilla:205, doble:137, triple:0, fechas:['01-05','23-06']},
            {tipo:'Luxury',sencilla:189, doble:126, triple:0, fechas:['19-08','31-10']},
            {tipo:'Luxury',sencilla:282, doble:188, triple:0, fechas:['07-01','31-01']},
            {tipo:'Luxury',sencilla:304, doble:203, triple:0, fechas:['01-02','30-04']},
            {tipo:'Luxury',sencilla:227, doble:151, triple:0, fechas:['01-05','23-06']},
            {tipo:'Luxury',sencilla:200, doble:133, triple:0, fechas:['24-06','18-08']},
            {tipo:'Luxury',sencilla:209, doble:140, triple:0, fechas:['19-08','31-10']},
            {tipo:'Luxury',sencilla:183, doble:122, triple:0, fechas:['01-11','22-12']},
          ]
        },
    
    
        {
          descripcion:'Chic Punta Cana By Royalton',
          precios:[
            {tipo:'Luxury Jr Suite',sencilla:266, doble:177, triple:163, fechas:['07-01','31-01']},
            {tipo:'Luxury Jr Suite',sencilla:285, doble:190, triple:174, fechas:['01-02','30-04']},
            {tipo:'Luxury Jr Suite',sencilla:296, doble:197, triple:181, fechas:['27-04','29-04']},
            {tipo:'Luxury Jr Suite',sencilla:233, doble:155, triple:142, fechas:['01-05','23-06']},
            {tipo:'Luxury Jr Suite',sencilla:217, doble:145, triple:133, fechas:['19-08','31-10']},
            {tipo:'Luxury Jr Suite',sencilla:313, doble:209, triple:192, fechas:['07-01','31-01']},
            {tipo:'Luxury Jr Suite',sencilla:335, doble:224, triple:205, fechas:['01-02','30-04']},
            {tipo:'Luxury Jr Suite',sencilla:258, doble:172, triple:158, fechas:['01-05','23-06']},
            {tipo:'Luxury Jr Suite',sencilla:232, doble:154, triple:141, fechas:['24-06','18-08']},
            {tipo:'Luxury Jr Suite',sencilla:241, doble:161, triple:147, fechas:['19-08','31-10']},
            {tipo:'Luxury Jr Suite',sencilla:214, doble:143, triple:131, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Dreams Palm Beach',
          precios:[
            {tipo:'Dlx T/V',sencilla:252, doble:163, triple:162, fechas:['18-01','31-01']},
            {tipo:'Dlx T/V',sencilla:268, doble:179, triple:177, fechas:['02-01','31-01']},
            {tipo:'Dlx T/V',sencilla:287, doble:191, triple:190, fechas:['01-02','21-04']},
            {tipo:'Dlx T/V',sencilla:251, doble:167, triple:166, fechas:['22-04','05-06']},
            {tipo:'Dlx T/V',sencilla:265, doble:176, triple:175, fechas:['06-06','21-08']},
            {tipo:'Dlx T/V',sencilla:213, doble:142, triple:141, fechas:['22-08','31-10']},
            {tipo:'Dlx T/V',sencilla:229, doble:152, triple:151, fechas:['01-11','14-12']},
            {tipo:'Dlx T/V',sencilla:213, doble:142, triple:141, fechas:['15-12','22-12']},
            {tipo:'Preferred T/V',sencilla:335, doble:224, triple:223, fechas:['02-01','31-01']},
            {tipo:'Preferred T/V',sencilla:358, doble:239, triple:238, fechas:['01-02','21-04']},
            {tipo:'Preferred T/V',sencilla:313, doble:209, triple:208, fechas:['22-04','05-06']},
            {tipo:'Preferred T/V',sencilla:331, doble:221, triple:219, fechas:['06-06','21-08']},
            {tipo:'Preferred T/V',sencilla:266, doble:177, triple:176, fechas:['22-08','31-10']},
            {tipo:'Preferred T/V',sencilla:254, doble:190, triple:189, fechas:['01-11','14-12']},
            {tipo:'Preferred T/V',sencilla:266, doble:177, triple:176, fechas:['15-12','22-12']},
          ]
        },
    
        {
          descripcion:'Dreams Punta Cana',
          precios:[
            {tipo:'Dlx T/V',sencilla:252, doble:163, triple:162, fechas:['18-01','31-01']},
            {tipo:'Dlx T/V',sencilla:268, doble:179, triple:177, fechas:['02-01','31-01']},
            {tipo:'Dlx T/V',sencilla:287, doble:191, triple:190, fechas:['01-02','21-04']},
            {tipo:'Dlx T/V',sencilla:229, doble:152, triple:151, fechas:['22-04','05-06']},
            {tipo:'Dlx T/V',sencilla:251, doble:167, triple:166, fechas:['06-06','21-08']},
            {tipo:'Dlx T/V',sencilla:213, doble:142, triple:141, fechas:['22-08','31-10']},
            {tipo:'Dlx T/V',sencilla:229, doble:152, triple:151, fechas:['01-11','14-12']},
            {tipo:'Dlx T/V',sencilla:211, doble:141, triple:140, fechas:['15-12','22-12']},
            {tipo:'Preferred T/V',sencilla:335, doble:224, triple:223, fechas:['02-01','31-01']},
            {tipo:'Preferred T/V',sencilla:358, doble:239, triple:238, fechas:['01-02','21-04']},
            {tipo:'Preferred T/V',sencilla:286, doble:190, triple:189, fechas:['22-04','05-06']},
            {tipo:'Preferred T/V',sencilla:313, doble:209, triple:208, fechas:['06-06','21-08']},
            {tipo:'Preferred T/V',sencilla:266, doble:177, triple:176, fechas:['22-08','31-10']},
            {tipo:'Preferred T/V',sencilla:254, doble:190, triple:189, fechas:['01-11','14-12']},
            {tipo:'Preferred T/V',sencilla:264, doble:176, triple:175, fechas:['15-12','22-12']},
          ]
        },
    
        {
          descripcion:'Gran Palladium Punta Cana',
          precios:[
            {tipo:'Dlx',sencilla:272, doble:170, triple:169, fechas:['02-01','02-02']},
            {tipo:'Dlx',sencilla:314, doble:196, triple:195, fechas:['03-02','21-04']},
            {tipo:'Dlx',sencilla:198, doble:124, triple:123, fechas:['22-04','28-06']},
            {tipo:'Dlx',sencilla:215, doble:134, triple:133, fechas:['29-06','17-08']},
            {tipo:'Dlx',sencilla:185, doble:116, triple:114, fechas:['18-08','01-11']},
            {tipo:'Dlx',sencilla:210, doble:131, triple:130, fechas:['02-11','23-12']},
          ]
        },
      
        {
          descripcion:'Gran Palladium Bavaro',
          precios:[
            {tipo:'Sup Jr Suite',sencilla:316, doble:197, triple:196, fechas:['02-01','02-02']},
            {tipo:'Sup Jr Suite',sencilla:356, doble:223, triple:222, fechas:['03-02','21-04']},
            {tipo:'Sup Jr Suite',sencilla:222, doble:139, triple:138, fechas:['22-04','28-06']},
            {tipo:'Sup Jr Suite',sencilla:235, doble:147, triple:146, fechas:['29-06','17-08']},
            {tipo:'Sup Jr Suite',sencilla:212, doble:132, triple:131, fechas:['18-08','01-11']},
            {tipo:'Sup Jr Suite',sencilla:235, doble:147, triple:146, fechas:['02-11','23-12']},
          ]
        },
    
    
        {
          descripcion:'Gran Palladium Palace',
          precios:[
            {tipo:'Dlx',sencilla:289, doble:181, triple:180, fechas:['02-01','02-02']},
            {tipo:'Dlx',sencilla:329, doble:206, triple:205, fechas:['03-02','21-04']},
            {tipo:'Dlx',sencilla:207, doble:129, triple:128, fechas:['22-04','28-06']},
            {tipo:'Dlx',sencilla:218, doble:137, triple:135, fechas:['29-06','17-08']},
            {tipo:'Dlx',sencilla:198, doble:124, triple:123, fechas:['18-08','01-11']},
            {tipo:'Dlx',sencilla:217, doble:135, triple:134, fechas:['02-11','23-12']},
          ]
        },
    
        {
          descripcion:'Gran Palladium Royal Turqueza',
          precios:[
            {tipo:'Jr Suite TRS',sencilla:368, doble:230, triple:229, fechas:['02-01','02-02']},
            {tipo:'Jr Suite TRS',sencilla:400, doble:250, triple:249, fechas:['03-02','21-04']},
            {tipo:'Jr Suite TRS',sencilla:265, doble:166, triple:165, fechas:['22-04','28-06']},
            {tipo:'Jr Suite TRS',sencilla:277, doble:173, triple:172, fechas:['29-06','17-08']},
            {tipo:'Jr Suite TRS',sencilla:259, doble:162, triple:161, fechas:['18-08','01-11']},
            {tipo:'Jr Suite TRS',sencilla:277, doble:173, triple:172, fechas:['02-11','23-12']},
          ]
        },
    
        {
          descripcion:'Hard Rock Hotel',
          precios:[
            {tipo:'C.Suite',sencilla:597, doble:338, triple:311, fechas:['03-01','20-04']},
            {tipo:'C.Suite',sencilla:482, doble:281, triple:273, fechas:['21-04','21-06']},
            {tipo:'C.Suite',sencilla:517, doble:299, triple:284, fechas:['22-06','18-08']},
            {tipo:'C.Suite',sencilla:437, doble:259, triple:258, fechas:['19-08','31-10']},
            {tipo:'C.Suite',sencilla:465, doble:272, triple:267, fechas:['01-11','20-12']},
            {tipo:'I/ JS',sencilla:610, doble:345, triple:316, fechas:['03-01','20-04']},
            {tipo:'I/ JS',sencilla:496, doble:288, triple:277, fechas:['21-04','21-06']},
            {tipo:'I/ JS',sencilla:530, doble:305, triple:289, fechas:['22-06','18-08']},
            {tipo:'I/ JS',sencilla:450, doble:265, triple:262, fechas:['19-08','31-10']},
            {tipo:'I/ JS',sencilla:479, doble:279, triple:271, fechas:['01-11','20-12']},
            {tipo:'C.SAN Suite',sencilla:641, doble:360, triple:326, fechas:['03-01','20-04']},
            {tipo:'C.SAN Suite',sencilla:508, doble:295, triple:282, fechas:['21-04','21-06']},
            {tipo:'C.SAN Suite',sencilla:560, doble:320, triple:299, fechas:['22-06','18-08']},
            {tipo:'C.SAN Suite',sencilla:463, doble:271, triple:266, fechas:['19-08','31-10']},
            {tipo:'C.SAN Suite',sencilla:491, doble:285, triple:276, fechas:['01-11','20-12']},
            {tipo:'SIG FAMILY',sencilla:1218, doble:609, triple:491, fechas:['03-01','20-04']},
            {tipo:'SIG FAMILY',sencilla:1013, doble:507, triple:423, fechas:['21-04','21-06']},
            {tipo:'SIG FAMILY',sencilla:1075, doble:537, triple:444, fechas:['22-06','18-08']},
            {tipo:'SIG FAMILY',sencilla:931, doble:465, triple:396, fechas:['19-08','31-10']},
            {tipo:'SIG FAMILY',sencilla:980, doble:490, triple:412, fechas:['01-11','20-12']},
          ]
        },
    
    
        {
          descripcion:'Hideaway Royalton Punta Cana',
          precios: [
            {tipo:'Luxury Room',sencilla:299, doble:200, triple:183, fechas:['07-01','31-01']},
            {tipo:'Luxury Room',sencilla:331, doble:221, triple:202, fechas:['01-02','30-04']},
            {tipo:'Luxury Room',sencilla:353, doble:235, triple:216, fechas:['27-04','29-04']},
            {tipo:'Luxury Room',sencilla:227, doble:151, triple:139, fechas:['01-05','23-06']},
            {tipo:'Luxury Room',sencilla:227, doble:151, triple:139, fechas:['19-08','31-10']},
            {tipo:'Luxury Room',sencilla:373, doble:249, triple:228, fechas:['07-01','31-01']},
            {tipo:'Luxury Room',sencilla:441, doble:294, triple:270, fechas:['01-02','30-04']},
            {tipo:'Luxury Room',sencilla:301, doble:201, triple:184, fechas:['01-05','23-06']},
            {tipo:'Luxury Room',sencilla:331, doble:221, triple:202, fechas:['24-06','18-08']},
            {tipo:'Luxury Room',sencilla:282, doble:188, triple:172, fechas:['19-08','31-10']},
            {tipo:'Luxury Room',sencilla:299, doble:200, triple:183, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Hotel Nickelodeon Punta Cana',
          precios:[
            {tipo:'Pad Suite',sencilla:419, doble:317, triple:317, fechas:['03-01','22-04']},
            {tipo:'Pad Suite',sencilla:365, doble:262, triple:262, fechas:['23-04','20-08']},
            {tipo:'Pad Suite',sencilla:333, doble:234, triple:234, fechas:['21-08','31-10']},
            {tipo:'Pad Suite',sencilla:346, doble:247, triple:247, fechas:['01-11','22-12']},
            {tipo:'Pad Suite',sencilla:908, doble:738, triple:738, fechas:['23-12','02-01']},
            {tipo:'Pad Suite',sencilla:698, doble:528, triple:423, fechas:['03-01','22-04']},
            {tipo:'Pad Suite',sencilla:608, doble:437, triple:437, fechas:['23-04','20-08']},
            {tipo:'Pad Suite',sencilla:573, doble:403, triple:403, fechas:['21-08','31-10']},
            {tipo:'Pad Suite',sencilla:596, doble:426, triple:426, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Hotel Nickelodeon Punta Cana',
          precios:[
            {tipo:'Flat Suite',sencilla:453, doble:351, triple:351, fechas:['03-01','22-04']},
            {tipo:'Flat Suite',sencilla:398, doble:297, triple:297, fechas:['23-04','20-08']},
            {tipo:'Flat Suite',sencilla:365, doble:267, triple:267, fechas:['21-08','31-10']},
            {tipo:'Flat Suite',sencilla:379, doble:280, triple:280, fechas:['01-11','22-12']},
            {tipo:'Flat Suite',sencilla:966, doble:795, triple:795, fechas:['23-12','02-01']},
            {tipo:'Flat Suite',sencilla:755, doble:585, triple:585, fechas:['03-01','22-04']},
            {tipo:'Flat Suite',sencilla:664, doble:495, triple:495, fechas:['23-04','20-08']},
            {tipo:'Flat Suite',sencilla:630, doble:460, triple:460, fechas:['21-08','31-10']},
            {tipo:'Flat Suite',sencilla:653, doble:482, triple:482, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Iberostar Bavaro',
          precios:[
            {tipo:'Jr Suite',sencilla:249, doble:191, triple:175, fechas:['06-01','28-02']},
            {tipo:'Jr Suite',sencilla:231, doble:178, triple:163, fechas:['01-03','13-04']},
            {tipo:'Jr Suite',sencilla:249, doble:194, triple:178, fechas:['14-04','21-04']},
            {tipo:'Jr Suite',sencilla:168, doble:130, triple:120, fechas:['22-04','30-06']},
            {tipo:'Jr Suite',sencilla:202, doble:157, triple:144, fechas:['01-07','21-08']},
            {tipo:'Jr Suite',sencilla:163, doble:126, triple:115, fechas:['22-08','31-10']},
            {tipo:'Jr Suite Family',sencilla:264, doble:203, triple:186, fechas:['06-01','28-02']},
            {tipo:'Jr Suite Family',sencilla:246, doble:189, triple:173, fechas:['01-03','13-04']},
            {tipo:'Jr Suite Family',sencilla:263, doble:205, triple:188, fechas:['14-04','21-04']},
            {tipo:'Jr Suite Family',sencilla:184, doble:142, triple:130, fechas:['22-04','30-06']},
            {tipo:'Jr Suite Family',sencilla:217, doble:167, triple:153, fechas:['01-07','21-08']},
            {tipo:'Jr Suite Family',sencilla:176, doble:136, triple:125, fechas:['22-08','31-10']},
          ]
        },
        {
          descripcion:'Iberostar Punta Cana / Dominicana',
          precios: [
            {tipo:'Std',sencilla:205, doble:158, triple:145, fechas:['06-01','28-02']},
            {tipo:'STD V/JAR',sencilla:211, doble:162, triple:149, fechas:['06-01','28-02']},
            {tipo:'Std',sencilla:192, doble:148, triple:135, fechas:['01-03','13-04']},
            {tipo:'STD V/JAR',sencilla:199, doble:153, triple:140, fechas:['01-03','13-04']},
            {tipo:'Std',sencilla:211, doble:162, triple:149, fechas:['14-04','21-04']},
            {tipo:'STD V/JAR',sencilla:216, doble:166, triple:152, fechas:['14-04','21-04']},
            {tipo:'Std',sencilla:138, doble:106, triple:97, fechas:['22-04','30-06']},
            {tipo:'STD V/JAR',sencilla:143, doble:110, triple:101, fechas:['22-04','30-06']},
            {tipo:'Std',sencilla:169, doble:130, triple:119, fechas:['01-07','21-08']},
            {tipo:'STD V/JAR',sencilla:174, doble:134, triple:123, fechas:['01-07','21-08']},
            {tipo:'Std',sencilla:137, doble:105, triple:96, fechas:['22-08','31-10']},
            {tipo:'STD V/JAR',sencilla:142, doble:109, triple:100, fechas:['22-08','31-10']},
          ]
        },
    
        {
          descripcion:'Iberostar Dominicana',
          precios:[
            {tipo:'Jr Suite',sencilla:232, doble:179, triple:164, fechas:['06-01','28-02']},
            {tipo:'Jr Suite',sencilla:219, doble:168, triple:154, fechas:['01-03','13-04']},
            {tipo:'Jr Suite',sencilla:238, doble:183, triple:168, fechas:['14-04','21-04']},
            {tipo:'Jr Suite',sencilla:165, doble:127, triple:116, fechas:['22-04','30-06']},
            {tipo:'Jr Suite',sencilla:196, doble:151, triple:138, fechas:['01-07','21-08']},
            {tipo:'Jr Suite',sencilla:164, doble:126, triple:115, fechas:['22-08','31-10']},
          ]
        },
    
        {
          descripcion:'Iberostar Grand Bavaro',
          precios: [
            {tipo:'Suite',sencilla:490, doble:350, triple:0, fechas:['06-01','28-02']},
            {tipo:'Suite',sencilla:458, doble:327, triple:0, fechas:['01-03','13-04']},
            {tipo:'Suite',sencilla:501, doble:358, triple:0, fechas:['14-04','21-04']},
            {tipo:'Suite',sencilla:336, doble:240, triple:0, fechas:['22-04','30-06']},
            {tipo:'Suite',sencilla:403, doble:288, triple:0, fechas:['01-07','21-08']},
            {tipo:'Suite',sencilla:323, doble:231, triple:0, fechas:['22-08','31-10']},
            {tipo:'Suite V/ Lago',sencilla:508, doble:363, triple:0, fechas:['06-01','28-02']},
            {tipo:'Suite V/ Lago',sencilla:473, doble:338, triple:0, fechas:['01-03','13-04']},
            {tipo:'Suite V/ Lago',sencilla:515, doble:368, triple:0, fechas:['14-04','21-04']},
            {tipo:'Suite V/ Lago',sencilla:351, doble:251, triple:0, fechas:['22-04','30-06']},
            {tipo:'Suite V/ Lago',sencilla:418, doble:298, triple:0, fechas:['01-07','21-08']},
            {tipo:'Suite V/ Lago',sencilla:338, doble:241, triple:0, fechas:['22-08','31-10']},
          ]
        },
    
        {
          descripcion:'Impressive Resort & Spa PUJ (ant. Sunscape)',
          precios: [
            {tipo:'Deluxe T/V',sencilla:176, doble:104, triple:93, fechas:['11-01','17-01']},
            {tipo:'Deluxe T/V',sencilla:292, doble:172, triple:155, fechas:['11-01','31-01']},
            {tipo:'Deluxe T/V',sencilla:318, doble:187, triple:168, fechas:['01-02','28-02']},
            {tipo:'Deluxe T/V',sencilla:311, doble:183, triple:165, fechas:['01-03','12-04']},
            {tipo:'Deluxe T/V',sencilla:318, doble:187, triple:168, fechas:['13-04','20-04']},
            {tipo:'Deluxe T/V',sencilla:218, doble:128, triple:116, fechas:['21-04','30-04']},
            {tipo:'Deluxe T/V',sencilla:211, doble:124, triple:112, fechas:['01-05','14-06']},
            {tipo:'Deluxe T/V',sencilla:254, doble:149, triple:134, fechas:['15-06','17-08']},
            {tipo:'Deluxe T/V',sencilla:211, doble:124, triple:112, fechas:['18-08','31-10']},
            {tipo:'Deluxe T/V',sencilla:230, doble:135, triple:122, fechas:['01-11','20-12']},
          ]
        },
    
        {
          descripcion:'Lopesan Costa Bavaro (ant. Ifa Villas Bavaro)',
          precios:[
            {tipo:'Jr Suite',sencilla:217, doble:145, triple:130, fechas:['01-05','30-06']},
            {tipo:'Jr Suite',sencilla:264, doble:176, triple:159, fechas:['01-07','31-08']},
            {tipo:'Jr Suite',sencilla:217, doble:145, triple:130, fechas:['01-09','31-10']},
          ]
        },
        {
          descripcion:'Majestic Colonial',
          precios:[
            {tipo:'Jr. Suite c/J',sencilla:365, doble:267, triple:253, fechas:['05-01','31-01']},
            {tipo:'Jr. Suite c/J',sencilla:393, doble:285, triple:272, fechas:['01-02','30-04']},
            {tipo:'Jr. Suite c/J',sencilla:278, doble:201, triple:190, fechas:['01-05','16-08']},
            {tipo:'Jr. Suite c/J',sencilla:255, doble:174, triple:162, fechas:['17-08','31-10']},
            {tipo:'Jr. Suite c/J',sencilla:266, doble:193, triple:181, fechas:['01-11','23-12']},
          ]
        },
    
        {
          descripcion:'Majestic Elegance',
          precios: [
            {tipo:'Jr. Suite c/J',sencilla:395, doble:294, triple:277, fechas:['05-01','31-01']},
            {tipo:'Jr. Suite c/J',sencilla:423, doble:313, triple:296, fechas:['01-02','30-04']},
            {tipo:'Jr. Suite c/J',sencilla:309, doble:229, triple:212, fechas:['01-05','16-08']},
            {tipo:'Jr. Suite c/J',sencilla:272, doble:193, triple:182, fechas:['17-08','31-10']},
            {tipo:'Jr. Suite c/J',sencilla:289, doble:213, triple:197, fechas:['01-11','23-12']},
          ]
        },
    
        {
          descripcion:'Majestic Mirage',
          precios: [
            {tipo:'One Bedroom',sencilla:467, doble:335, triple:322, fechas:['05-01','31-01']},
            {tipo:'One Bedroom',sencilla:500, doble:355, triple:340, fechas:['01-02','30-04']},
            {tipo:'One Bedroom',sencilla:384, doble:284, triple:262, fechas:['01-05','16-08']},
            {tipo:'One Bedroom',sencilla:351, doble:252, triple:234, fechas:['17-08','31-10']},
            {tipo:'One Bedroom',sencilla:378, doble:277, triple:258, fechas:['01-11','23-12']},
          ]
        },
        {
          descripcion:'Meliá Caribe Beach',
          precios: [
            {tipo:'Dlx Room',sencilla:311, doble:194, triple:178, fechas:['02-01','19-01']},
            {tipo:'Dlx Room',sencilla:286, doble:179, triple:164, fechas:['20-01','02-02']},
            {tipo:'Dlx Room',sencilla:311, doble:194, triple:178, fechas:['03-02','31-03']},
            {tipo:'Dlx Room',sencilla:236, doble:148, triple:136, fechas:['01-04','12-04']},
            {tipo:'Dlx Room',sencilla:311, doble:194, triple:179, fechas:['13-04','21-04']},
            {tipo:'Dlx Room',sencilla:222, doble:139, triple:127, fechas:['22-04','14-06']},
            {tipo:'Dlx Room',sencilla:261, doble:163, triple:149, fechas:['15-06','17-08']},
            {tipo:'Dlx Room',sencilla:196, doble:123, triple:113, fechas:['18-08','31-10']},
            {tipo:'Dlx Room',sencilla:222, doble:139, triple:127, fechas:['01-11','20-12']},
          ]
        },
        {
          descripcion:'Meliá Punta Cana Beach',
          precios:[
            {tipo:'Dlx Room',sencilla:390, doble:244, triple:201, fechas:['02-01','19-01']},
            {tipo:'Dlx Room',sencilla:363, doble:227, triple:187, fechas:['20-01','02-02']},
            {tipo:'Dlx Room',sencilla:390, doble:244, triple:201, fechas:['03-02','31-03']},
            {tipo:'Dlx Room',sencilla:309, doble:193, triple:159, fechas:['01-04','12-04']},
            {tipo:'Dlx Room',sencilla:377, doble:235, triple:195, fechas:['13-04','21-04']},
            {tipo:'Dlx Room',sencilla:269, doble:168, triple:141, fechas:['22-04','14-06']},
            {tipo:'Dlx Room',sencilla:307, doble:191, triple:160, fechas:['15-06','17-08']},
            {tipo:'Dlx Room',sencilla:245, doble:153, triple:128, fechas:['18-08','31-10']},
            {tipo:'Dlx Room',sencilla:269, doble:168, triple:141, fechas:['01-11','20-12']},
          ]
        },
    
        {
          descripcion:'Memories Splash',
          precios:[
            {tipo:'DLX',sencilla:214, doble:143, triple:131, fechas:['07-01','31-01']},
            {tipo:'DLX',sencilla:233, doble:155, triple:142, fechas:['01-02','30-04']},
            {tipo:'DLX',sencilla:249, doble:166, triple:152, fechas:['27-04','29-04']},
            {tipo:'DLX',sencilla:178, doble:119, triple:109, fechas:['01-05','23-06']},
            {tipo:'DLX',sencilla:172, doble:114, triple:105, fechas:['19-08','31-10']},
            {tipo:'DLX',sencilla:252, doble:168, triple:154, fechas:['07-01','31-01']},
            {tipo:'DLX',sencilla:291, doble:194, triple:178, fechas:['01-02','30-04']},
            {tipo:'DLX',sencilla:208, doble:139, triple:127, fechas:['01-05','23-06']},
            {tipo:'DLX',sencilla:233, doble:155, triple:142, fechas:['24-06','18-08']},
            {tipo:'DLX',sencilla:202, doble:134, triple:123, fechas:['19-08','31-10']},
            {tipo:'DLX',sencilla:221, doble:147, triple:135, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Now Larimar',
          precios:[
            {tipo:'Dlx G/V',sencilla:243, doble:154, triple:153, fechas:['18-01','31-01']},
            {tipo:'Dlx G/V',sencilla:264, doble:175, triple:174, fechas:['02-01','31-01']},
            {tipo:'Dlx T/V',sencilla:276, doble:184, triple:183, fechas:['02-01','31-01']},
            {tipo:'Dlx G/V',sencilla:280, doble:187, triple:186, fechas:['01-02','21-04']},
            {tipo:'Dlx T/V',sencilla:294, doble:196, triple:195, fechas:['01-02','21-04']},
            {tipo:'Dlx G/V',sencilla:224, doble:149, triple:148, fechas:['22-04','05-06']},
            {tipo:'Dlx T/V',sencilla:235, doble:156, triple:155, fechas:['22-04','05-06']},
            {tipo:'Dlx G/V',sencilla:246, doble:164, triple:163, fechas:['06-06','21-08']},
            {tipo:'Dlx T/V',sencilla:258, doble:172, triple:171, fechas:['06-06','21-08']},
            {tipo:'Dlx G/V',sencilla:208, doble:139, triple:138, fechas:['22-08','31-10']},
            {tipo:'Dlx T/V',sencilla:218, doble:146, triple:145, fechas:['22-08','31-10']},
            {tipo:'Dlx G/V',sencilla:224, doble:149, triple:148, fechas:['01-11','14-12']},
            {tipo:'Dlx T/V',sencilla:235, doble:156, triple:155, fechas:['01-11','14-12']},
            {tipo:'Dlx G/V',sencilla:208, doble:139, triple:138, fechas:['15-12','22-12']},
            {tipo:'Dlx T/V',sencilla:218, doble:146, triple:145, fechas:['15-12','22-12']},
          ]
        },
    
        {
          descripcion:'Now Onyx Punta Cana',
          precios:[
            {tipo:'JS/VJ',sencilla:314, doble:198, triple:197, fechas:['18-01','31-01']},
            {tipo:'JS/VJ',sencilla:331, doble:221, triple:219, fechas:['02-01','31-01']},
            {tipo:'JS/VJ',sencilla:342, doble:228, triple:227, fechas:['01-02','21-04']},
            {tipo:'JS/VJ',sencilla:298, doble:198, triple:197, fechas:['22-04','05-06']},
            {tipo:'JS/VJ',sencilla:287, doble:191, triple:190, fechas:['06-06','21-08']},
            {tipo:'JS/VJ',sencilla:255, doble:170, triple:169, fechas:['22-08','31-10']},
            {tipo:'JS/VJ',sencilla:261, doble:174, triple:173, fechas:['01-11','14-12']},
            {tipo:'JS/VJ',sencilla:255, doble:170, triple:169, fechas:['15-12','22-12']},
          ]
        },
    
        {
          descripcion:'Occidental Caribe',
          precios:[
            {tipo:'Estandar',sencilla:208, doble:116, triple:104, fechas:['01-01','31-01']},
            {tipo:'Estandar',sencilla:348, doble:193, triple:174, fechas:['04-01','31-03']},
            {tipo:'Estandar',sencilla:250, doble:139, triple:125, fechas:['01-04','12-04']},
            {tipo:'Estandar',sencilla:348, doble:193, triple:174, fechas:['13-04','20-04']},
            {tipo:'Estandar',sencilla:182, doble:121, triple:109, fechas:['21-04','31-05']},
            {tipo:'Estandar',sencilla:198, doble:132, triple:119, fechas:['01-06','30-06']},
            {tipo:'Estandar',sencilla:207, doble:138, triple:124, fechas:['01-07','17-08']},
            {tipo:'Estandar',sencilla:172, doble:114, triple:103, fechas:['18-08','31-10']},
            {tipo:'Estandar',sencilla:194, doble:129, triple:116, fechas:['01-11','20-12']},
          ]
        },
    
        {
          descripcion:'Occidental Punta Cana',
          precios:[
            { tipo:'Superior',sencilla:198, doble:110, triple:99, fechas:['04-01','31-01']},
            { tipo:'Superior',sencilla:284, doble:158, triple:142, fechas:['01-02','31-03']},
            { tipo:'Superior',sencilla:255, doble:142, triple:128, fechas:['01-04','12-04']},
            { tipo:'Superior',sencilla:284, doble:158, triple:142, fechas:['13-04','20-04']},
            { tipo:'Superior',sencilla:182, doble:121, triple:109, fechas:['21-04','30-04']},
          ]
        },
    
        {
          descripcion:'Occidental Punta Cana',
          precios: [
            {tipo:'Family Jr Suite',sencilla:499, doble:277, triple:250, fechas:['04-01','31-03']},
            {tipo:'Family Jr Suite',sencilla:383, doble:213, triple:192, fechas:['01-04','12-04']},
            {tipo:'Family Jr Suite',sencilla:499, doble:277, triple:250, fechas:['13-04','20-04']},
            {tipo:'Family Jr Suite',sencilla:244, doble:163, triple:147, fechas:['21-04','30-04']},
            {tipo:'Family Jr Suite',sencilla:244, doble:163, triple:147, fechas:['01-05','31-05']},
            {tipo:'Family Jr Suite',sencilla:263, doble:175, triple:158, fechas:['01-06','30-06']},
            {tipo:'Family Jr Suite',sencilla:274, doble:183, triple:165, fechas:['01-07','17-08']},
            {tipo:'Family Jr Suite',sencilla:238, doble:159, triple:143, fechas:['18-08','31-10']},
            {tipo:'Family Jr Suite',sencilla:263, doble:175, triple:158, fechas:['01-11','20-12']},
          ]
        },
    
        {
          descripcion:'Ocean Blue & Sand',
          precios:[
            {tipo:'Junior Suite',sencilla:234, doble:192, triple:180, fechas:['02-01','31-03']},
            {tipo:'Junior Suite',sencilla:195, doble:153, triple:144, fechas:['01-04','30-04']},
            {tipo:'Junior Suite',sencilla:173, doble:131, triple:123, fechas:['01-05','30-06']},
            {tipo:'Junior Suite',sencilla:195, doble:153, triple:144, fechas:['01-07','20-08']},
            {tipo:'Junior Suite',sencilla:173, doble:131, triple:123, fechas:['21-08','31-10']},
            {tipo:'Junior Suite',sencilla:195, doble:153, triple:144, fechas:['01-11','23-12']},
          ]
        },
    
        {
          descripcion:'Ocean El Faro',
          precios:[
            {tipo:'Junior Suite',sencilla:208, doble:166, triple:155, fechas:['02-01','14-01']},
            {tipo:'Junior Suite',sencilla:218, doble:176, triple:165, fechas:['15-01','31-01']},
          ]
        },
    
        {
          descripcion:'Paradisus Palma Real',
          precios:[
            {tipo:'P.JR SUITE',sencilla:455, doble:285, triple:261, fechas:['02-01','19-01']},
            {tipo:'P.JR SUITE',sencilla:428, doble:268, triple:246, fechas:['20-01','2-02']},
            {tipo:'P.JR SUITE',sencilla:455, doble:285, triple:261, fechas:['03-02','31-03']},
            {tipo:'P.JR SUITE',sencilla:352, doble:219, triple:201, fechas:['01-04','12-04']},
            {tipo:'P.JR SUITE',sencilla:467, doble:293, triple:268, fechas:['13-04','21-04']},
            {tipo:'P.JR SUITE',sencilla:321, doble:201, triple:184, fechas:['22-04','14-06']},
            {tipo:'P.JR SUITE',sencilla:371, doble:232, triple:213, fechas:['15-06','17-08']},
            {tipo:'P.JR SUITE',sencilla:309, doble:193, triple:177, fechas:['18-08','31-10']},
            {tipo:'P.JR SUITE',sencilla:334, doble:208, triple:191, fechas:['01-11','20-12']},
          ]
        },
    
    
        {
          descripcion:'Paradisus Punta Cana',
          precios:[
            {tipo:'P.JR SUITE',sencilla:370, doble:231, triple:212, fechas:['02-01','19-01']},
            {tipo:'P.JR SUITE',sencilla:334, doble:209, triple:191, fechas:['20-01','2-02']},
            {tipo:'P.JR SUITE',sencilla:370, doble:231, triple:212, fechas:['03-02','31-03']},
            {tipo:'P.JR SUITE',sencilla:284, doble:177, triple:163, fechas:['01-04','12-04']},
            {tipo:'P.JR SUITE',sencilla:370, doble:231, triple:212, fechas:['13-04','21-04']},
            {tipo:'P.JR SUITE',sencilla:248, doble:154, triple:141, fechas:['22-04','14-06']},
            {tipo:'P.JR SUITE',sencilla:309, doble:193, triple:177, fechas:['15-06','17-08']},
            {tipo:'P.JR SUITE',sencilla:248, doble:154, triple:141, fechas:['18-08','31-10']},
            {tipo:'P.JR SUITE',sencilla:248, doble:154, triple:141, fechas:['01-11','20-12']},
          ]
        },
    
    
        {
          descripcion:'Presidential Suites PUJ by LifeStyle',
          precios:[
            {tipo:'Apto 1 Y 2 Hb',sencilla:144, doble:126, triple:105, fechas:['03-01','16-04']},
            {tipo:'Apto 1 Y 2 Hb',sencilla:158, doble:143, triple:121, fechas:['17-04','21-04']},
            {tipo:'Apto 1 Hb',sencilla:107, doble:95, triple:0, fechas:['22-04','20-12']},
            {tipo:'Apto 2 Hb',sencilla:125, doble:107, triple:103, fechas:['22-04','20-12']},
          ]
        },
    
        {
            descripcion:'Punta Cana Princess',
            precios:[
              {tipo:'Junior Suite',sencilla:208, doble:179, triple:164, fechas:['02-01','16-04']},
              {tipo:'Junior Suite',sencilla:217, doble:188, triple:172, fechas:['17-04','20-04']},
              {tipo:'Junior Suite',sencilla:186, doble:156, triple:143, fechas:['21-04','30-04']},
              {tipo:'Junior Suite',sencilla:166, doble:137, triple:125, fechas:['01-05','30-06']},
              {tipo:'Junior Suite',sencilla:176, doble:147, triple:134, fechas:['01-07','31-08']},
              {tipo:'Junior Suite',sencilla:166, doble:137, triple:125, fechas:['01-09','21-12']},
            ]
        },
    
        {
          descripcion:'Riu Bambu',
          precios:[
            {tipo:'Std',sencilla:194, doble:134, triple:127, fechas:['02-01','20-01']},
            {tipo:'Std',sencilla:206, doble:142, triple:135, fechas:['21-01','31-03']},
            {tipo:'Std',sencilla:163, doble:112, triple:107, fechas:['01-04','13-04']},
            {tipo:'Std',sencilla:206, doble:142, triple:135, fechas:['14-04','20-04']},
            {tipo:'Std',sencilla:163, doble:112, triple:107, fechas:['21-04','30-04']},
            {tipo:'Std',sencilla:136, doble:94, triple:89, fechas:['01-05','22-06']},
            {tipo:'Std',sencilla:158, doble:109, triple:104, fechas:['23-06','17-08']},
            {tipo:'Std',sencilla:130, doble:90, triple:85, fechas:['18-08','26-10']},
            {tipo:'Std',sencilla:142, doble:98, triple:93, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Riu Naiboa',
          precios:[
            {tipo:'Std',sencilla:148, doble:102, triple:97, fechas:['02-01','20-01']},
            {tipo:'Std',sencilla:160, doble:110, triple:105, fechas:['21-01','31-03']},
            {tipo:'Std',sencilla:131, doble:91, triple:86, fechas:['01-04','13-04']},
            {tipo:'Std',sencilla:160, doble:110, triple:105, fechas:['14-04','20-04']},
            {tipo:'Std',sencilla:131, doble:91, triple:86, fechas:['21-04','30-04']},
            {tipo:'Std',sencilla:106, doble:73, triple:69, fechas:['01-05','22-06']},
            {tipo:'Std',sencilla:133, doble:92, triple:87, fechas:['23-06','17-08']},
            {tipo:'Std',sencilla:100, doble:69, triple:65, fechas:['18-08','26-10']},
            {tipo:'Std',sencilla:118, doble:81, triple:77, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Riu Palace Bavaro',
          precios:[
            {tipo:'Jr Suite - V/J',sencilla:248, doble:171, triple:162, fechas:['02-01','20-01']},
            {tipo:'Jr Suite - V/J',sencilla:261, doble:180, triple:171, fechas:['21-01','31-03']},
            {tipo:'Jr Suite - V/J',sencilla:204, doble:141, triple:134, fechas:['01-04','13-04']},
            {tipo:'Jr Suite - V/J',sencilla:261, doble:180, triple:171, fechas:['14-04','20-04']},
            {tipo:'Jr Suite - V/J',sencilla:204, doble:141, triple:134, fechas:['21-04','30-04']},
            {tipo:'Jr Suite - V/J',sencilla:200, doble:138, triple:131, fechas:['01-05','22-06']},
            {tipo:'Jr Suite - V/J',sencilla:228, doble:157, triple:150, fechas:['23-06','17-08']},
            {tipo:'Jr Suite - V/J',sencilla:192, doble:133, triple:126, fechas:['18-08','26-10']},
            {tipo:'Jr Suite - V/J',sencilla:224, doble:154, triple:147, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Riu Palace Macao',
          precios:[
            {tipo:'Jr Suite - V/J',sencilla:246, doble:170, triple:161, fechas:['02-01','20-01']},
            {tipo:'Jr Suite - V/J',sencilla:257, doble:177, triple:168, fechas:['21-01','31-03']},
            {tipo:'Jr Suite - V/J',sencilla:178, doble:122, triple:116, fechas:['01-04','13-04']},
            {tipo:'Jr Suite - V/J',sencilla:257, doble:177, triple:168, fechas:['14-04','20-04']},
            {tipo:'Jr Suite - V/J',sencilla:178, doble:122, triple:116, fechas:['21-04','30-04']},
            {tipo:'Jr Suite - V/J',sencilla:172, doble:118, triple:112, fechas:['01-05','22-06']},
            {tipo:'Jr Suite - V/J',sencilla:200, doble:138, triple:131, fechas:['23-06','17-08']},
            {tipo:'Jr Suite - V/J',sencilla:166, doble:114, triple:109, fechas:['18-08','26-10']},
            {tipo:'Jr Suite - V/J',sencilla:195, doble:135, triple:128, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Riu Palace Punta Cana',
          precios:[
            {tipo:'Jr Suite - V/J',sencilla:239, doble:165, triple:156, fechas:['02-01','20-01']},
            {tipo:'Jr Suite - V/J',sencilla:251, doble:173, triple:164, fechas:['21-01','31-03']},
            {tipo:'Jr Suite - V/J',sencilla:191, doble:132, triple:125, fechas:['01-04','13-04']},
            {tipo:'Jr Suite - V/J',sencilla:251, doble:173, triple:164, fechas:['14-04','20-04']},
            {tipo:'Jr Suite - V/J',sencilla:191, doble:132, triple:125, fechas:['21-04','30-04']},
            {tipo:'Jr Suite - V/J',sencilla:192, doble:133, triple:126, fechas:['01-05','22-06']},
            {tipo:'Jr Suite - V/J',sencilla:216, doble:149, triple:142, fechas:['23-06','17-08']},
            {tipo:'Jr Suite - V/J',sencilla:181, doble:125, triple:118, fechas:['18-08','26-10']},
            {tipo:'Jr Suite - V/J',sencilla:212, doble:146, triple:139, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Riu Republica',
          precios:[
            {tipo:'Std - V/J',sencilla:204, doble:141, triple:141, fechas:['02-01','20-01']},
            {tipo:'Std - V/J',sencilla:215, doble:148, triple:148, fechas:['21-01','31-03']},
            {tipo:'Std - V/J',sencilla:173, doble:119, triple:119, fechas:['01-04','13-04']},
            {tipo:'Std - V/J',sencilla:215, doble:148, triple:148, fechas:['14-04','20-04']},
            {tipo:'Std - V/J',sencilla:173, doble:119, triple:119, fechas:['21-04','30-04']},
            {tipo:'Std - V/J',sencilla:155, doble:107, triple:107, fechas:['01-05','22-06']},
            {tipo:'Std - V/J',sencilla:169, doble:116, triple:116, fechas:['23-06','17-08']},
            {tipo:'Std - V/J',sencilla:139, doble:96, triple:96, fechas:['18-08','26-10']},
            {tipo:'Std - V/J',sencilla:154, doble:106, triple:106, fechas:['27-10','23-12']},
          ]
        },
    
        {
          descripcion:'Royalton Bavaro',
          precios:[
            {tipo:'Luxury JS',sencilla:312, doble:208, triple:191, fechas:['07-01','31-01']},
            {tipo:'Luxury JS',sencilla:365, doble:244, triple:223, fechas:['01-02','30-04']},
            {tipo:'Luxury JS',sencilla:389, doble:259, triple:238, fechas:['27-04','29-04']},
            {tipo:'Luxury JS',sencilla:247, doble:165, triple:151, fechas:['01-05','23-06']},
            {tipo:'Luxury JS',sencilla:235, doble:156, triple:143, fechas:['19-08','31-10']},
            {tipo:'Luxury JS',sencilla:389, doble:259, triple:238, fechas:['07-01','31-01']},
            {tipo:'Luxury Family',sencilla:424, doble:282, triple:259, fechas:['07-01','31-01']},
            {tipo:'Luxury JS',sencilla:457, doble:305, triple:279, fechas:['01-02','30-04']},
            {tipo:'Luxury Family',sencilla:491, doble:328, triple:300, fechas:['01-02','30-04']},
            {tipo:'Luxury JS',sencilla:309, doble:206, triple:189, fechas:['01-05','23-06']},
            {tipo:'Luxury Family',sencilla:343, doble:229, triple:210, fechas:['01-05','23-06']},
            {tipo:'Luxury JS',sencilla:339, doble:226, triple:207, fechas:['24-06','18-08']},
            {tipo:'Luxury Family',sencilla:373, doble:249, triple:228, fechas:['24-06','18-08']},
            {tipo:'Luxury JS',sencilla:293, doble:195, triple:179, fechas:['19-08','31-10']},
            {tipo:'Luxury Family',sencilla:328, doble:218, triple:200, fechas:['19-08','31-10']},
            {tipo:'Luxury JS',sencilla:315, doble:210, triple:193, fechas:['01-11','22-12']},
            {tipo:'Luxury Family',sencilla:350, doble:233, triple:214, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Royalton Punta Cana',
          precios:[
            {tipo:'Luxury',sencilla:304, doble:203, triple:186, fechas:['07-01','31-01']},
            {tipo:'Luxury',sencilla:362, doble:242, triple:221, fechas:['01-02','30-04']},
            {tipo:'Luxury',sencilla:383, doble:255, triple:234, fechas:['27-04','29-04']},
            {tipo:'Luxury',sencilla:236, doble:158, triple:144, fechas:['01-05','23-06']},
            {tipo:'Luxury',sencilla:222, doble:148, triple:136, fechas:['19-08','31-10']},
            {tipo:'Luxury',sencilla:358, doble:238, triple:218, fechas:['07-01','31-01']},
            {tipo:'Luxury',sencilla:425, doble:284, triple:260, fechas:['01-02','30-04']},
            {tipo:'Luxury',sencilla:277, doble:185, triple:169, fechas:['01-05','23-06']},
            {tipo:'Luxury',sencilla:307, doble:205, triple:188, fechas:['24-06','18-08']},
            {tipo:'Luxury',sencilla:261, doble:174, triple:160, fechas:['19-08','31-10']},
            {tipo:'Luxury',sencilla:284, doble:189, triple:173, fechas:['01-11','22-12']},
          ]
        },
    
        {
          descripcion:'Santuary Cap Cana',
          precios:[
            {tipo:'Jr S O/V',sencilla:351, doble:218, triple:205, fechas:['03-01','31-01']}
          ]
        },
    
        {
          descripcion:'Secrets Cap Cana',
          precios:[
            {tipo:'JS T/V',sencilla:423, doble:260, triple:259, fechas:['18-01','31-01']},
            {tipo:'JS T/V',sencilla:488, doble:326, triple:324, fechas:['02-01','31-01']},
            {tipo:'JS T/V',sencilla:488, doble:326, triple:324, fechas:['01-02','21-04']},
            {tipo:'JS T/V',sencilla:418, doble:278, triple:277, fechas:['22-04','05-06']},
            {tipo:'JS T/V',sencilla:418, doble:278, triple:277, fechas:['06-06','21-08']},
            {tipo:'JS T/V',sencilla:371, doble:247, triple:246, fechas:['22-08','31-10']},
            {tipo:'JS T/V',sencilla:418, doble:278, triple:277, fechas:['01-11','14-12']},
            {tipo:'JS T/V',sencilla:371, doble:247, triple:246, fechas:['15-12','22-12']},
          ]
        },
    
    
        {
          descripcion:'Secrets Royal Beach',
          precios:[
            {tipo:'JS T/V',sencilla:311, doble:207, triple:206, fechas:['18-01','31-01']},
            {tipo:'JS T/V',sencilla:353, doble:235, triple:234, fechas:['02-01','31-01']},
            {tipo:'JS T/V',sencilla:371, doble:247, triple:246, fechas:['01-02','21-04']},
            {tipo:'JS T/V',sencilla:318, doble:212, triple:211, fechas:['22-04','05-06']},
            {tipo:'JS T/V',sencilla:308, doble:205, triple:204, fechas:['06-06','21-08']},
            {tipo:'JS T/V',sencilla:284, doble:189, triple:188, fechas:['22-08','31-10']},
            {tipo:'JS T/V',sencilla:284, doble:189, triple:188, fechas:['01-11','14-12']},
            {tipo:'JS T/V',sencilla:292, doble:194, triple:193, fechas:['15-12','22-12']},
          ]
        },
    
    
        {
          descripcion:'Sirenis Punta Cana',
          precios:[
            {tipo:'STD',sencilla:198, doble:146, triple:134, fechas:['04-01','31-01']},
            {tipo:'STD',sencilla:204, doble:151, triple:139, fechas:['01-02','21-04']},
            {tipo:'STD',sencilla:148, doble:106, triple:97, fechas:['22-04','30-04']},
            {tipo:'STD',sencilla:119, doble:77, triple:70, fechas:['01-05','30-06']},
            {tipo:'STD',sencilla:144, doble:91, triple:84, fechas:['01-07','24-08']},
            {tipo:'STD',sencilla:119, doble:77, triple:70, fechas:['25-08','31-10']},
            {tipo:'Jr Suite/Family',sencilla:206, doble:153, triple:141, fechas:['04-01','31-01']},
            {tipo:'Jr Suite/Family',sencilla:214, doble:162, triple:148, fechas:['01-02','21-04']},
            {tipo:'Jr Suite/Family',sencilla:160, doble:118, triple:108, fechas:['22-04','30-04']},
            {tipo:'Jr Suite/Family',sencilla:129, doble:87, triple:80, fechas:['01-05','30-06']},
            {tipo:'Jr Suite/Family',sencilla:159, doble:106, triple:97, fechas:['01-07','24-08']},
            {tipo:'Jr Suite/Family',sencilla:129, doble:87, triple:80, fechas:['25-08','31-10']},
          ]
        },
    
    
        {
          descripcion:'Tropical Princess',
          precios:[
            {tipo:'Std',sencilla:153, doble:123, triple:113, fechas:['02-01','16-04']},
            {tipo:'Std',sencilla:170, doble:140, triple:129, fechas:['17-04','20-04']},
            {tipo:'Std',sencilla:131, doble:101, triple:93, fechas:['21-04','30-04']},
            {tipo:'Std',sencilla:123, doble:94, triple:86, fechas:['01-05','30-06']},
            {tipo:'Std',sencilla:131, doble:102, triple:93, fechas:['01-07','31-08']},
            {tipo:'Std',sencilla:123, doble:94, triple:86, fechas:['01-09','21-12']},
          ]
        },
    
    
        {
          descripcion:'Whala Bavaro',
          precios:[
            {tipo:'Std',sencilla:211, doble:111, triple:103, fechas:['02-01','15-01']},
            {tipo:'Superior',sencilla:227, doble:120, triple:111, fechas:['02-01','15-01']},
            {tipo:'Std',sencilla:231, doble:122, triple:112, fechas:['16-01','31-03']},
            {tipo:'Superior',sencilla:249, doble:131, triple:121, fechas:['16-01','31-03']},
            {tipo:'Std',sencilla:136, doble:71, triple:66, fechas:['01-04','30-04']},
            {tipo:'Superior',sencilla:148, doble:78, triple:72, fechas:['01-04','30-04']},
            {tipo:'Std',sencilla:124, doble:65, triple:60, fechas:['01-05','30-06']},
            {tipo:'Superior',sencilla:136, doble:71, triple:66, fechas:['01-05','30-06']},
            {tipo:'Std',sencilla:144, doble:76, triple:70, fechas:['01-07','31-08']},
            {tipo:'Superior',sencilla:154, doble:81, triple:75, fechas:['01-07','31-08']},
            {tipo:'Std',sencilla:124, doble:65, triple:60, fechas:['01-09','31-10']},
            {tipo:'Superior',sencilla:136, doble:71, triple:66, fechas:['01-09','31-10']},
          ]
        },
    
    
        {
          descripcion:'Vista Sol Punta Cana',
          precios:[
            {tipo:'Confort',sencilla:205, doble:137, triple:123, fechas:['03-01','31-01']},
            {tipo:'Confort',sencilla:229, doble:152, triple:137, fechas:['01-02','31-03']},
            {tipo:'Confort',sencilla:173, doble:116, triple:104, fechas:['01-04','30-04']},
            {tipo:'Confort',sencilla:142, doble:95, triple:85, fechas:['01-05','13-07']},
            {tipo:'Confort',sencilla:150, doble:100, triple:90, fechas:['14-07','24-08']},
            {tipo:'Confort',sencilla:142, doble:95, triple:85, fechas:['25-08','31-10']},
          ]
        },
    
    
        {
          descripcion:'Zoetry Agua Punta Cana',
          precios:[
            {tipo:'ROMANTIC',sencilla:491, doble:298, triple:0, fechas:['01-01','31-01']},
            {tipo:'Jr suite T / V',sencilla:545, doble:340, triple:339, fechas:['01-01','31-01']},
            {tipo:'Jr suite T / V',sencilla:590, doble:369, triple:368, fechas:['01-02','21-04']},
            {tipo:'Jr suite T / V',sencilla:494, doble:309, triple:308, fechas:['22-04','05-06']},
            {tipo:'Jr suite T / V',sencilla:465, doble:291, triple:290, fechas:['06-06','21-08']},
            {tipo:'Jr suite T / V',sencilla:414, doble:258, triple:257, fechas:['22-08','31-10']},
            {tipo:'Jr suite T / V',sencilla:465, doble:291, triple:290, fechas:['01-11','14-12']},
            {tipo:'Jr suite T / V',sencilla:414, doble:258, triple:257, fechas:['15-12','22-12']},
          ]
        },
];
    $scope.hotel = {};

    $scope.calcularPrecioHotel = function(){

        /** Confirmar tema de sencilla, doble, triple, y confirmar tema sobre cambio entre fechas. */
        var start = $('#hotelInicio').datepicker('getDate');
        var end   = $('#hotelFin').datepicker('getDate');
        var currentYear = '2019';
        //console.log($scope.hotel.adultos);
        //console.log($scope.hotel.ninos);

        var temporalPrice = 0;

        if(start && end && $scope.hotel.hotel && $scope.hotel.adultos){
            var datePerDay = start;
            var days  = (end - start)/1000/60/60/24;
            for(i=1;i<=days;i++) {
                $scope.hotel.hotel.precios.forEach(function (element) {
                    var date1 = (element.fechas[0]+'-'+currentYear).split('-');
                    var date2 = (element.fechas[1]+'-'+currentYear).split('-');
                    date1 = new Date(date1[2], date1[1]-1, date1[0]);
                    date2 = new Date(date2[2], date2[1]-1, date2[0]);
    
                    if(datePerDay >= date1 && datePerDay <= date2) {
                        var people = $scope.hotel.adultos + (($scope.hotel.ninos==undefined) ? 0 : $scope.hotel.ninos);
                        if(people == 1) {
                            temporalPrice = temporalPrice + (element.sencilla*people);
                        } else if (people % 2 == 0) {
                            temporalPrice = temporalPrice + (element.doble*people);
                        } else if (people % 3 == 0) {
                            temporalPrice = temporalPrice + (element.triple*people);
                        } else if (people % 3 == 2) {
                            temporalPrice = temporalPrice + (element.triple*(people-2)) + (element.doble*2);
                        } else if (people % 2 == 1) {
                            temporalPrice = temporalPrice + (element.doble*(people-1)) + (element.sencilla*1);
                        } else if (people % 3 == 1) {
                            temporalPrice = temporalPrice + (element.triple*(people-1)) + (element.sencilla*1);
                        }
                    }
                }); 
                datePerDay.setDate(datePerDay.getDate() + 1);
            } 
            
            $scope.hotel.precio = temporalPrice;
        }
    }

    $scope.agregarHotel = function (event) {
        event.preventDefault();
        $scope.carrito.hoteles.push({
            fecha_inicio:$scope.hotel.fecha_inicio,
            fecha_fin:$scope.hotel.fecha_fin,
            hotel:$scope.hotel.hotel.descripcion,
            adultos:$scope.hotel.adultos,
            ninos:$scope.hotel.ninos,
            precio:$scope.hotel.precio,
        });
        $scope.hotel = {};
        $timeout(function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
            $('#formHotel select').select2();
        }, 500);
        $scope.actualizar();

        swal({
            title: 'Hotel',
            text: 'added successfully',
            type: 'success',
            confirmButtonColor: '#1576c8',
        });
    }

    $scope.eliminarHotel = function (index) {
        $scope.carrito.hoteles.splice(index, 1);
        $scope.actualizar();
    }
});