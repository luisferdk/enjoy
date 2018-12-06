var app = angular.module("app", ['ngSanitize']);

app.controller("ctrl", function ($scope, $http, $timeout, $window) {


    $scope.carrito = {
        traslados: [],
        tours: [],
        vip: [],
        wifi:[]
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
            confirmButtonColor: '#8cc640',
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
                confirmButtonColor: '#8cc640',
            });
            return false;
        }
        if ($scope.carrito.tours)
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
            confirmButtonColor: '#8cc640',
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
    $scope.tour = { precio: 0 };

    var tours = [
        {
            id: 0,
            mostrar: true,
            partyBoat: true,
            titulo: "Sabina del Mar VIP Party Boat",
            descripcion: 'Youll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. While onboard youll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean.',
            descripcion_completa:
                `
            <h2 class="col-xs-12">Overview</h2>
            <p class="col-xs-12">
                Youll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. 
                <br>While onboard youll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. 
                
                <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. 
                <br>Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
            </p>
            
            <h2 class="col-xs-12">Know More about this tour</h2>
            <p class="col-xs-12">
                Youll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area.
                <br>While onboard youll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. 
            
                <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers.
                <br>Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
            </p>
            
            <div class="col-xs-12 col-md-4">
                <div class="row">
                    <h2 class="col-xs-12">Inclusions</h2>
                    <ul class="col-xs-12 incluye">
                        <li>Local taxes</li>
                        <li>Entrance fees</li>
                        <li>Fuel surcharge</li>
                        <li>National Park fees</li>
                    </ul>
                </div>	
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="row">
                    <h2 class="col-xs-12">Exclusions</h2>
                    <ul class="col-xs-12 excluye">
                        <li>Gratuities (recommended)</li>
                        <li>DVD (available to purchase)</li>
                        <li>Souvenir photos (available to purchase)</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="row">
                    <h2 class="col-xs-12">Additional Info</h2>
                    <ul class="col-xs-12">
                        <li>Confirmation will be received at time of booking</li>
                        <li>Children must be accompanied by an adult</li>
                    </ul>
                </div>	
            </div>

            <p class="col-xs-12 text-center">
                <a class="btn btn-primary" target="_blank" href="/pdf/SabinadelMar.pdf">Download PDF</a>
            </p>

          `,
            horarios: ['9-12 PM', '12-3 PM', '3-6 PM'],
            modalidades: [
                { id: 0, precio: 45, nino: 25, descripcion: 'VIP Hotdog menu' },
                { id: 1, precio: 53, nino: 28, descripcion: 'VIP Chicken menu' },
                { id: 2, precio: 59, nino: 30, descripcion: 'VIP Beef Brochettes menu' },
                { id: 3, precio: 65, nino: 33, descripcion: 'VIP Shrimp menu' },
                { id: 4, precio: 75, nino: 55, descripcion: 'VIP Lobster menu' },
            ]
        },
        {
            id: 1,
            mostrar: false,
            titulo: "Mini Coopers",
            descripcion: '',
            modalidades: [
                { id: 0, precio: 159, nino: 70, descripcion: 'Básico' }
            ]
        },
        {
            id: 2,
            mostrar: true,
            titulo: "Buggys Adventure Terracross",
            descripcion: `After we pick you up from your Resort, you'll receive on the spot a brief safety instructions from our professional guide. Then, jump inside your dune buggy and get ready to start the adventure of a lifetime. Starts as you head out into the Dominican countryside, passing colorful Caribbean houses along the way. Your first stop will be for a real Dominican coffee and chocolate taste. We’ll follow the natural path, passing by palm trees, tobacco and banana plantations. The excursion takes a Half Day, and you can be 2 people by BUGGY. Enthusiasts for big thrills, come and join us!`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    After we pick you up from your Resort, you'll receive on the spot a brief safety instructions from our professional guide.
                    <br><br>Then, jump inside your dune buggy and get ready to start the adventure of a lifetime.
                    <br><br>Starts as you head out into the Dominican countryside, passing colorful Caribbean houses along the way.
                    <br><br>Your first stop will be for a real Dominican coffee and chocolate taste. We’ll follow the natural path, passing by palm trees, tobacco and banana plantations.
                    <br><br>The excursion takes a Half Day, and you can be 2 people by BUGGY. Enthusiasts for big thrills, come and join us!
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/BuggysAdventure.pdf">Download PDF</a>
                </p>                
            `,
            modalidades: [
                { id: 0, precio: 80, nino: 45, descripcion: 'Doble' },
                { id: 1, precio: 120, nino: 70, descripcion: 'Individual' },
            ]
        },
        {
            id: 3,
            mostrar: true,
            titulo: "Buggys Adventure",
            descripcion: `Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic. Get to know a Tobacco Plantation, a Wild Ranch, the Nature Cave and finally the beautiful Macao Beach.This adventure includes profesional guides that will be with you the entire road trip to help you find the beauty Dominican Republic has to offer. Book with us this amazing adventure a live an unforgettable experience`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic.
                    <br><br>Get to know a Tobacco Plantation, a Wild Ranch, the Nature Cave and finally the beautiful Macao Beach.
                    <br><br>This adventure includes profesional guides that will be with you the entire road trip to help you find the beauty Dominican Republic has to offer.
                    <br><br>Book with us this amazing adventure a live an unforgettable experience
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/BuggysAdventure.pdf">Download PDF</a>
                </p>                
            `,
            modalidades: [
                { id: 0, precio: 65, nino: 35, descripcion: 'Doble' },
                { id: 1, precio: 90, nino: 45, descripcion: 'Individual' },
            ]
        },
        {
            id: 4,
            mostrar: true,
            titulo: "Helicopter Tour",
            descripcion: `Bird's eye view of the entire area giving you amazing photo opportunities of your hotel and the surrounding area. Discover new sensations. Fly over the beautiful Dominican landscape, and admire the exuberant flora and fauna`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Bird's eye view of the entire area giving you amazing photo opportunities of your hotel and the surrounding area.
                    <br><br>Discover new sensations. Fly over the beautiful Dominican landscape, and admire the exuberant flora and fauna
                </p>

                <p class="col-xs-12 text-center">
				    <a class="btn btn-primary" target="_blank" href="/pdf/HelicopterTour.pdf">Download PDF</a>
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
            titulo: "Zip Line Adventure",
            descripcion: `Visit the first of the Dominican Republic’s Zip-Line Tour. The exhilarating adventure takes you flying across the magnificent Anamuya pond. Your naturalist guides will show you the way, helping you make the most of the adventure. Your tour consists of 15 towers and 11 Zip Lines stretched across the length of the mountain range more than 1 mile. The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean. Requirements: Min age 6 years old, max weight 250lbs (46’ waist), no pregnant women or guests with heart conditions can participate.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Visit the first of the Dominican Republic’s Zip-Line Tour.
                    <br><br>The exhilarating adventure takes you flying across the magnificent Anamuya pond.
                    <br><br>Your naturalist guides will show you the way, helping you make the most of the adventure. Your tour consists of 15 towers and 11 Zip Lines stretched across the length of the mountain range more than 1 mile.
                    <br><br>The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean.
                    <br><br><strong>Requirements:</strong> Min age 6 years old, max weight 250lbs (46’ waist), no pregnant women or guests with heart conditions can participate.
                </p>
				<p class="col-xs-12 text-center">
				    <a class="btn btn-primary" target="_blank" href="/pdf/ZipLineAdventure.pdf">Download PDF</a>
				</p>                
            `,
            modalidades: [
                { id: 0, precio: 90, nino: 75, descripcion: 'Day' },
                { id: 1, precio: 99, nino: 60, descripcion: 'Night' }
            ]
        },
        {
            id: 6,
            mostrar: true,
            titulo: "Monkey Land",
            descripcion: `At Monkey land, a natural habitat located deep in the Dominican Republic’s jungle, you can interact with playful squirrel monkeys. On this 5-hour guided tour aboard a safari-style truck, you'll also explore the habitat's on-site botanical garden, as well as a coffee and cacao plantation. Chat it up with local farmers, learn about their organic methods and taste tropical fruit just plucked from a tree. Travel with your knowledgeable guide to a typical Dominican country house and plantation. Meet the farmer residents and learn about their organic methods processing cacao, coffee, vanilla, cinnamon and other products grown on their land. Taste some of these delights and fresh tropical fruits, and feel free to purchase any products to take back with you to your hotel. Back in your vehicle, rumble up a mountain road and deep in the jungle, disembark at Monkey land, a squirrel monkey habitat spanning 5 acres (2 hectares), managed by a Canadian couple with more than 35 years of experience caring for wildlife. Take a 45-minute tour of the grounds, including the onsite botanical garden home to native flowers and plants, and get to know the curious and intelligent monkeys that bound about cage-free. These small simians are accustomed to human contact, so don’t be (too) surprised if they swing down from a tree onto your shoulder and eat right from your hands. Not camera-shy either, they might just strike a pose when you snap photos.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
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
                </p>
                <p class="col-xs-12 text-center">
				    <a class="btn btn-primary" target="_blank" href="/pdf/MonkeyLand.pdf">Download PDF</a>
				</p>
            `,
            modalidades: [
                { id: 0, precio: 75, nino: 55, descripcion: 'Básico' }
            ]
        },
        {
            id: 7,
            mostrar: true,
            titulo: "Caribbean VIP Safari",
            descripcion: `Thop on the back of one of our safari-style trucks, other eager pioneers at your side. A zealous tourist guide eagerly waits to sweep you through the most hidden space of this mystical destination.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">Thop on the back of one of our safari-style trucks, other eager pioneers at your side. A zealous tourist guide eagerly waits to sweep you through the most hidden space of this mystical destination.</p>
            `,
            modalidades: [
                { id: 0, precio: 89, nino: 60, descripcion: 'Básico' }
            ]
        },
        {
            id: 8,
            mostrar: true,
            titulo: "Hot Air Balloning Rides",
            descripcion: `Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.</p>
                <p class="col-xs-12 text-center">
				    <a class="btn btn-primary" target="_blank" href="/pdf/HotAirBalloningRides.pdf">Download PDF</a>
				</p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">Floats silently above the trees and into a world where silence is priceless while enjoying the sunrise over Punta Cana.</p>
                <p class="col-xs-12 text-center">
				    <a class="btn btn-primary" target="_blank" href="/pdf/DeepSeaFishing.pdf">Download PDF</a>
				</p>
            `,
            modalidades: [
                { id: 0, precio: 110, nino: 110, descripcion: "Invidual" },
                { id: 1, precio: 800, nino: 0, descripcion: "Charter Boat (Max 6 people Fishing Boat and Max 2 Companions Watching)" }
            ]
        },
        {
            id: 10,
            mostrar: false,
            titulo: "Marina Caribe Party Boat",
            descripcion: ``,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12"><p>
            `,
            modalidades: [
                { id: 0, precio: 59, nino: 35, descripcion: 'Marina Caribe' },
                { id: 1, precio: 75, nino: 50, descripcion: 'Caribbean Paradise' },
                { id: 2, precio: 99, nino: 60, descripcion: 'Platinum VIP' },
            ]
        },
        {
            id: 11,
            mostrar: false,
            titulo: "Panchanga Party Boat",
            descripcion: ``,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12"><p>
            `,
            modalidades: [
                { id: 0, precio: 40, nino: 25, descripcion: 'Básico' }
            ]
        },
        {
            id: 12,
            mostrar: false,
            titulo: "Party Boat Bebe",
            descripcion: ``,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12"></p>
            `,
            modalidades: [
                { id: 0, precio: 59, nino: 30, descripcion: 'Básico' }
            ]
        },
        {
            id: 13,
            mostrar: true,
            partyBoat: true,
            titulo: "Pirate Boat",
            descripcion: `Enjoy the most original combination with Caribbean Pirates! Mix fun and education with a thoroughly entertainment pirate adventure! Get on our huge pirate boat and admire the most amazing scenery sailing along the Bavaro coastline. Get an adrenaline shot by swimming with our nurse sharks at our private and exclusive floating aquarium “Stingray Bay”, and even get up close with our stingrays, with the safest interaction program in the world.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Enjoy a day of stunning reefs and beaches in Catalina Island.
                    <br><br>In this tour you will explore the "The Wall" and "Aquarium," two reefs excellent for all levels of diving.
                    <br><br>The Wall is an impressive drop-off that stretches to the Caribbean Sea.
                    <br><br>Inhabited by corals and vibrant fish, it is a must for divers and snorkelers alike.
                    <br><br>Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attractid
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/DivingatCatalinaIsland.pdf">Download PDF</a>
                </p>
            `,
            modalidades: [
                { id: 0, precio: 110, nino: 55, descripcion: 'Basic' },
                { id: 1, precio: 135, nino: 70, descripcion: 'With lobster' }
            ]
        },
        {
            id: 15,
            mostrar: true,
            partyBoat: true,
            titulo: "Discover Saona Island",
            descripcion: `The tour starts taking the bus to Bayahibe beach, where the boats or catamaran will address to start the sea path that will lead to Saona Island. A beautiful beach, virtually untouched, where you can enjoy the sun, swim and have fun with recreational activities carried out there: Volleyball, music to dance merengue, salsa, bachata, among others. At noon Lunch will offer a delicious buffet. National drinks (soft drinks, rum, Free Cuba, water) during the time on the island. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool and then transfer by bus back to the hotels.`,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    The tour starts taking the bus to Bayahibe beach, where the boats or catamaran will address to start the sea path that will lead to Saona Island.
                    <br><br>A beautiful beach, virtually untouched, where you can enjoy the sun, swim and have fun with recreational activities carried out there: Volleyball, music to dance merengue, salsa, bachata, among others.
                    <br><br>At noon Lunch will offer a delicious buffet. National drinks (soft drinks, rum, Free Cuba, water) during the time on the island. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool and then transfer by bus back to the hotels.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/DiscoverSaonaIsland.pdf">Download PDF</a>
                </p>                
            `,
            modalidades: [
                { id: 0, precio: 75, nino: 45, descripcion: 'Basic' },
                { id: 1, precio: 129, nino: 129, descripcion: 'Saona VIP Lobster & premium drinks' },
                { id: 2, precio: 179, nino: 179, descripcion: 'Saona VIP Lobster & premium drinks and private VIP area' },
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
                <h2 class="col-xs-12 text-center">ZipLine</h2>
                <p class="col-xs-12">Visit the first of the Dominican Republic’s Zip—Line Tour.
                    <br><br>The exhilarating adventure takes you flying across the magnificent Anamuya pond.
                    <br><br>Your naturalist guides will show you the way, helping you make the most of the adventure.
                    <br><br>Your tour consists of 15 towers and 11 Zip Lines stretche across the length of the mountain range more than 1 mile.
                    <br><br>The final line at 900 meters is the longest in the Dominican Republic as well as the entire Caribbean.
                </p>

                <h2 class="col-xs-12 text-center">Monkey Land</h2>
                <p class="col-xs-12">
                    At Monkey land, a natural habitat located deep in the Dominican Republic’s jungle, you can interact with playful squirrel monkeys.
                    <br><br>On this 5 hour guided tour aboard a safari—style truck, you'll also explore the habitat's on—site botanical garden, as well as a coffee and cacao plantation. Chat it up with local farmers, learn about their organic methods and taste tropical fruit just plucked from a tree.
                </p>

                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/ZipLineandMonkeyLand.pdf">Download PDF</a>
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
                  You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
                  440 HP of power at more than 90 km/h on the sea 360 turns, fly over the waves, incredible pirouettes  The Jet Boat is an aquatic attraction and a maritime excursion that allows you to download pure adrenaline. It is an incredible boat with a powerful brake, which is capable of performing and braking at high speeds, skidding over the Caribbean Sea and flying over the waves. Jet Boat is a fun in the sea and an unforgettable experience, besides being the only Jet Boat in Punta Cana, but throughout the Dominican Repub—lic. Are you going to miss it?
          `,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Party Boat</h2>
                <p class="col-xs-12">
                    You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area.
                    <br><br>While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean.
                    <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers.
                    <br><br>Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
                </p>

                <h2 class="col-xs-12 text-center">Jet Boat</h2>
                <p class="col-xs-12">
                    440 HP of power at more than 90 km/h on the sea 360 turns, fly over the waves, incredible pirouettes.
                    <br><br>The Jet Boat is an aquatic attraction and a maritime excursion that allows you to download pure adrenaline.
                    <br><br>It is an incredible boat with a powerful brake, which is capable of performing and braking at high speeds, skidding over the Caribbean Sea and flying over the waves.
                    <br><br>Jet Boat is a fun in the sea and an unforgettable experience, besides being the only Jet Boat in Punta Cana, but throughout the Dominican Repub—lic. Are you going to miss it?
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/PartyBoatandJetBoat.pdf">Download PDF</a>
                </p>
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
                You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
                From our ranch in Macao, we go tearing through the remote farmland of northern Punta Cana, passing palm trees and tobacco plantations with the Ori—ental Mountain Range deep in the background. These narrow, secluded country roads offer a safe haven but be ready to get dirty!
            `,
            descripcion_completa: `
                <h2 class="col-xs-12 text-center">Buggy</h2>
                <p class="col-xs-12">
                    You’ll have a spectacular view of the entire caribbean coast while getting to know the hotels of the area. 
                    <br><br>While onboard you’ll enjoy different activities like; snorkel (all equipment are supplied), choreographic dancing and the warming waters of the natural pool in the middle of the ocean. 
                    <br><br>A bar will be at disposal for you and your friends where you can drink all national beverages and enjoy tropical fruits and appetizers. 
                    <br><br>Enjoy this excursion with the Renny Travel crew and make your vacations an unforgettable adventure.
                </p>

                <h2 class="col-xs-12 text-center">Jet Boat</h2>
                <p class="col-xs-12">
                    From our ranch in Macao, we go tearing through the remote farmland of northern Punta Cana, passing palm trees and tobacco plantations with the Ori—ental Mountain Range deep in the background.
                    <br>
                    <br>These narrow, secluded country roads offer a safe haven but be ready to get dirty!
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/PartyBoatandBuggy.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    The Coco Bongo Punta Cana Disco & Show is a wonderful place to spend the night after a great day of sun on the beautiful beaches of Punta Cana.
                    <br><br>Undoubtedly the nightlife of Punta Cana has changed with the arrival of Coco Bongo! Coco Bongo is a nightclub and entertainment combined.
                    <br><br>In addition to the atmosphere excitement and the music playing, people are left with wonder seeing the theatrics and perfect samples of music reminiscent of Broadway or Las Vegas.
                    <br><br><br>
                    Coco Bongo provides several shows each night, in between which contemporary music plays.
                    <br><br> Coco Bongo is known for the music, theme and that which mimics the stars of international music or are related to "soundtrack" of famous films.
                    <br><br>'The Mask", "Moulin Rouge", "Chicago', "The Phantom of the Opera"," Batman, “" Spiden'nan, "" Tron, "" Saturday Night Fever "are fantastically recreated by combining talents live, videos and other technological resources.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/CocoBongoDiscoEtShow.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Experience the real thing! Yes, we have cowboys in the Dominican too! Come and live it up at our local authentic ranch, with well-kept and cared for Paso Higueyano horses. 
                    <br><br>The Real Countryside Adventure is the ultimate riding experience.
                    <br><br>Experienced guides will show you a glimpse of the day-to-day life of the Dominican Cowboy, walking through the beautiful trails, hills, lagoons and green pastures.
                    <br><br>You will participate in the daily quest, completing the tasks assigned and become an honorary Cana Tequila rancher. 

                    <br><br><br><strong>Includes:</strong>
                    Transportation, welcome hot beverages and pastries, soft drinks, a cowboy lunch and a tequila shot. (Snacks, hamburgers, hot dogs and alcoholic beverages are available at an extra cost.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/DominicanCowboyAdventure.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Enjoy a day of stunning reefs and beaches in Catalina Island.
                    <br><br>In this tour you will explore the "The Wall" and "Aquarium,' two reefs excellent for all levels of diving.
                    <br><br>The Wall is an impressive drop-off that stretches to the Caribbean Sea.
                    <br><br>lnhabited by corals and vibrant ﬁsh, it is a must for divers and snorkelers alike.
                    <br><br>
                    <br><br>Our second dive spot, the Aquarium, is an enjoyable dive where lobster, yellow stingrays and moray eels are part of the attraction.
                    <br><br>After diving and snorkeling, you will relax with a tropical cocktail in our beach club while we prepare a delicious Dominican style barbecue.
                    <br><br>You will have free time in the afternoon to swim in the turquoise beaches of Catalina Island, enjoy unlimited drinks by the beach bar or simply relax in the sun.
                <br><br>
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/DivingatCatalinaIsland.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Dolphin Discovery is home of the most loved dolphins, our parks and staff are certified to give them the best care.
                    <br><br>We can offer you the experience of a lifetime! For over 20 years, Dolphin Discovery has contributed to the study and conservation of marine mammals, creating a bond of love of re-spect through the best interaction experience in unique habitats around the world.
                    <br><br>Children up to 5 years Free.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/DolphinsDiscovery.pdf">Download PDF</a>
                </p>
            `,
            modalidades: [
                { id: 0, precio: 99, nino: 0, descripcion: "Encounter" },
                { id: 1, precio: 149, nino: 99, descripcion: "Swim Adventure" },
                { id: 2, precio: 199, nino: 99, descripcion: "Royal Swim" },
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    This multi roomed, actually, multi-CAVED castle, will leave you breathless from the moment you lay your eyes on her majestic stature. 
                    <br><br>After passing through our grand entrance, and being greeted by our superb staff, you will feel like royalty as you descend down into one of three progressiver larger caves. 
                    <br><br>Each as magniﬁcent and astounding as the previous! Each cave comes complete with its own prominent Dj playing only the hottest tracks, rhythms and beats the Dominican Republic, and the world, has to offer! 
                    <br><br>You’ll dance the night away, savoring one of our signature cocktails, all the while being entertained by our ﬁre breathing, ﬂare bartenders. 
                    <br><br>And when the time comes to return to the “real world”, you’ll wish your fairy godmother would wave her magic wand and turn the clock back to mid-night, so you could do it all over again!
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/ImagineDisco.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    After its launch in November 2011, 0R0 Nightclub Punta Cana became the gem of the Caribbean and at the moment is ranked as the Best Nightclub in Dominican Republic.
                    <br><br>Located inside the Hard Rock Hotel & Casino Punta Cana, ORO is modeled to rival Las Vegas and Miami’s finest nightclubs, boasting over 14,000 square feet of space across two levels and features intelligent show lighting, Kryogenifex and award win-ning Funktion One sound.
                    <br><br>Adding to the dramatics is its signature 2 story tall LED wall consisting of over 300 individual LED screens and the ﬁrst ever inﬁnitive edge bar.
                    <br><br>Imagined by Francois Frossard and inspired by the sensuality of the Dominican Republic, ORO Nightclub Punta Cana is designed to maximize the nightclub experience, elevating & seducing its guests into uninhibited euphoria.
                    <br><br><br>
                    <strong>0R0 Nightclub</strong> Punta Cana has been the scene of great DJs such as Steve Angelo, Erick Morillo, Bob Sinclar, Chris Lake, Dimitri Vegas & Like Mike, Hook n Sling, Pauly D, Shermanology, Roger Sanchez, Wolfgang Gartner, DJ Chuckie and world-renowned artists such as Inna, Akon,Daddy Yankee, Don Omar, Wisin y Yandel, Snoop Dogg aka Snoop Lion, La Formula de Pina Records, among many others.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/OroNightclub.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Samaria continues to attract visitors for the joy of one of the world’s best sites for watching the enormous humpback whales as they frolic offshore.
                    <br><br>The whale-watching season runs from 15 January to 30 March. Punta Balandra, on the road from Samana City to Las Galeras, is a vantage point for watching the whales without having to get on a boat.
                    <br><br>If you don’t get the chance to go whale watching, the small Museo de las Ballenas has interesting information on the whales that pass close to Samana. 
                    <br><br><br><strong>Included:</strong> Tour guide, whale watch, buffet, nacional drinks, transportation.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/SamanaWhaleWatching.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
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
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/Samana.pdf">Download PDF</a>
                </p>
            `,
            modalidades: [
                { id: 0, precio: 177, nino: 90, descripcion: "Cayo levantado & Cascada Limón" }
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
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
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/SantoDomingo.pdf">Download PDF</a>
                </p>
            `,
            modalidades: [
                { id: 0, precio: 95, nino: 50, descripcion: "City Tour" }
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    <strong>Have fun, feel the adventure!</strong>
                    <br><br>This is a three-in-one fun-filled half day tour!
                    <br><br>Snorkel the crystal clear water of a protected reef, drive a speed boat. and explore the bottom of the ocean with SNUBA® excursion (you don’t need to be a certiﬁed diver) 
                    <br><br>Drive your own speedboat like James Bond!!! While you drive you will also enjoy the most beautiful beaches of Bavaro - Punta Cana while experiencing this exciting adventurell 
                    <br><br>You will meet professional guides and experience an unforgettable adventure known as ‘SNUBA®’. Thanks to this new technology you don’t need a diving license to explore the underwater world. SNUBA® is without a doubt the best combination between diving and snorkeling.
                    <br><br>Our SNUBA® equipment consists of a floating RAFT and an air hose of 20 feet.
                    <br><br>This will give you the freedom to choose the level of depth that you are comfortable with. 
                    <br><br>Certiﬁed guides will assist you in small groups of 4 persons per RAFT.
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/SnubaSnorkelEtSpeedboat.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    This unique 3 hour excursion is designed to provide extreme relaxation in a very exclusive setting. This double decker boat, designed to be a sailing spa, has restricted capacity in order to provide personalized attention. Let us get you involved in bio-Pilates stretching exercises to help you relax while you cruise the calm and colorful waters of Punta Cana. 
                    <br><br>You will reach maximum relaxation while participating in our Individual massage treatment. This massage is offered in private cubicles with ocean view, and includes head massage, and full back massage. 
                    <br><br>Enjoy a relaxation session on our floating mattresses in the natural pool. Let us introduce you to our wor1d famous Doctor Fish where you will be treated to the most amazing natural feet exfoliation treatment. Also you will enjoy our Detox treatments; a therapy aimed to improve, among other things, your liver and kidney function, through an electromagnetic detoxiﬁcation process carried out on the feet.  
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/RennySpaBoat.pdf">Download PDF</a>
                </p>
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
                <h2 class="col-xs-12 text-center">Description</h2>
                <p class="col-xs-12">
                    Enjoy our brand new catamaran “Caribbean Sea ll”.
                    <br><br>Starting from the Punta Cana Marina we will sail along the coast until a reef area where we will have time for snorkelling.
                    <br><br>After that we will go to the submarine museum. something new in the area. From there we will make a stop at Playa Blanca to enjoy a delicious meal with lobster.
                    <br><br>Boarding again the catamaran we will sail to the natural pool, having time for swim and a drink. Coming back to the marina we will do our last stop at the ecological reserve “Ojos lndigenas” for a chance to swim in the natural fresh water of the lagoons.
                    <br><br>A full day VIP catamaran adventure!
                </p>
                <p class="col-xs-12 text-center">
                    <a class="btn btn-primary" target="_blank" href="/pdf/ExclusiveVIPCatamaran.pdf">Download PDF</a>
                </p>
            `,
            modalidades: [
                { id: 0, precio: 169, nino: 0, descripcion: "Exclusive VIP Catamaran" }
            ]
        }
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
            confirmButtonColor: '#8cc640',
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
        $http.post(window.url + '/session', $scope.carrito).then(function (response) {});
        if ($scope.opcion == 'reservar') {
            $window.location.href = window.url + '/shop';
        }
    }

    if (window.pos != null) {
        $scope.tour = $scope.tours[window.pos];
        $scope.tour.precio = $scope.tours[window.pos].modalidades[0].precio;
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
        for (var i = 0; i < $scope.carrito.vip.length; i++) {
            precio += parseFloat($scope.carrito.vip[i].precio);
        }
        for (var i = 0; i < $scope.carrito.wifi.length; i++) {
            precio += parseFloat($scope.carrito.wifi[i].precio);
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
        $timeout(function () { $('.vipSelect').select2(); }, 500);
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
            confirmButtonColor: '#8cc640',
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
        $scope.nro =  $scope.carrito.tours.length + $scope.carrito.traslados.length + $scope.carrito.vip.length + $scope.carrito.wifi.length;
    }
});