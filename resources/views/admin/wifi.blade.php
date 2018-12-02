@extends('layouts.admin')

@section('titulo')
Reservas
@endsection

@section('content')
    <div class="col s12">
        <div class="row">
            <div class="col s12">
                <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
                    <li class="tab col s3"><a href="#pendientes">Pendientes</a></li>
                    <li class="tab col s3"><a href="#procesadas">Procesadas</a></li>
                    <li class="tab col s3"><a href="#canceladas">Canceladas</a></li>
                </ul>
            </div>
            <div id="pendientes" class="col s12">               
                <table ng-table="tabla" class="table m-t-lg" show-filter="true">
                    <tr ng-repeat="(index,aux) in $data" ng-if='aux.estado==1'>
                        <td width="10%" data-title="'ID'" filter="{ id: 'number'}" sortable="'id'">
                            @{{aux.id}}
                        </td>
                        <td width="15%" data-title="'Fecha LLegada'" sortable="'llegada_fecha'">
                            @{{aux.llegada_fecha}}
                        </td>
                        <td width="15%" data-title="'Fecha Salida'" sortable="'salida_fecha'">
                            @{{aux.salida_fecha}}
                        </td>
                        <td width="17%" data-title="'Dispositivos'" filter="{ dispositivos: 'number'}" sortable="'dispositivos'">
                            @{{aux.dispositivos}}
                        </td>
                        <td width="17%" data-title="'Dias'" filter="{ dias: 'number'}" sortable="'dias'">
                            @{{aux.dias}}
                        </td>
                        <td width="10%" data-title="'precio'" sortable="'precio'">
                            @{{ aux.precio | currency:"$ " }}
                        </td>
                        <td width="15%" data-title="'Opciones'">
                            <a ng-click="ver(aux.id)" class="cyan-text text-darken-1 m-r-sm tooltipped" data-position="top" data-tooltip="Ver reserva">
                                <i class="material-icons">receipt</i>
                            </a>
                            
                            <a ng-click="procesar(aux.id)" class="green-text text-darken-1 m-r-sm tooltipped" data-position="top" data-tooltip="Procesar reserva">
                                <i class="material-icons">check</i>
                            </a>
                            <a ng-click="cancelar(aux.id)" class="red-text tooltipped" data-position="top" data-tooltip="Cancelar reserva">
                                <i class="material-icons">delete_forever</i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="procesadas" class="col s12">
                <table ng-table="tabla" class="table m-t-lg" show-filter="true">
                    <tr ng-repeat="(index,aux) in $data" ng-if='aux.estado==2'>
                    <td width="10%" data-title="'ID'" filter="{ id: 'number'}" sortable="'id'">
                            @{{aux.id}}
                        </td>
                        <td width="15%" data-title="'Fecha LLegada'" sortable="'llegada_fecha'">
                            @{{aux.llegada_fecha}}
                        </td>
                        <td width="15%" data-title="'Fecha Salida'" sortable="'salida_fecha'">
                            @{{aux.salida_fecha}}
                        </td>
                        <td width="17%" data-title="'Dispositivos'" filter="{ dispositivos: 'number'}" sortable="'dispositivos'">
                            @{{aux.dispositivos}}
                        </td>
                        <td width="17%" data-title="'Dias'" filter="{ dias: 'number'}" sortable="'dias'">
                            @{{aux.dias}}
                        </td>
                        <td width="10%" data-title="'precio'" sortable="'precio'">
                            @{{ aux.precio | currency:"$ " }}
                        </td>
                        <td width="15%" data-title="'Opciones'">
                            <a ng-click="ver(aux.id)" class="cyan-text text-darken-1 m-r-sm tooltipped" data-position="top" data-tooltip="Ver reserva">
                                <i class="material-icons">receipt</i>
                            </a>
                            <a ng-click="cancelar(aux.id)" class="red-text tooltipped" data-position="top" data-tooltip="Cancelar reserva">
                                <i class="material-icons">delete_forever</i>
                            </a>
                    </tr>
                </table>
            </div>
            <div id="canceladas" class="col s12">
                <table ng-table="tabla" class="table m-t-lg" show-filter="true">
                    <tr ng-repeat="(index,aux) in $data" ng-if='aux.estado==3'>
                    <td width="10%" data-title="'ID'" filter="{ id: 'number'}" sortable="'id'">
                            @{{aux.id}}
                        </td>
                        <td width="15%" data-title="'Fecha LLegada'" sortable="'llegada_fecha'">
                            @{{aux.llegada_fecha}}
                        </td>
                        <td width="15%" data-title="'Fecha Salida'" sortable="'salida_fecha'">
                            @{{aux.salida_fecha}}
                        </td>
                        <td width="17%" data-title="'Dispositivos'" filter="{ dispositivos: 'number'}" sortable="'dispositivos'">
                            @{{aux.dispositivos}}
                        </td>
                        <td width="17%" data-title="'Dias'" filter="{ dias: 'number'}" sortable="'dias'">
                            @{{aux.dias}}
                        </td>
                        <td width="10%" data-title="'precio'" sortable="'precio'">
                            @{{ aux.precio | currency:"$ " }}
                        </td>
                        <td width="15%" data-title="'Opciones'">
                            <a ng-click="ver(aux.id)" class="cyan-text text-darken-1 m-r-sm tooltipped" data-position="top" data-tooltip="Ver reserva">
                                <i class="material-icons">receipt</i>
                            </a>
                            
                            <a ng-click="procesar(aux.id)" class="green-text text-darken-1 m-r-sm tooltipped" data-position="top" data-tooltip="Procesar reserva">
                                <i class="material-icons">check</i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="ver" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="row">
                    <h3 class="col s12 center-align cyan-text" style="font-size:2.2em;">Reserva nro @{{ reserva.id }}</h3>
                    <h5 class="col s12 center-align cyan-text">Datos de la Reserva</h5>
                    <div class="col s12">
                        <div class="row">
                            <p class="col s6 right-align" style="font-weight:bold;margin:0;">
                                    Precio:
                                <br>Dispositivos:
                            </p>

                            <p class="col s6" style="margin:0;">
                                    @{{ reserva.precio | currency:'$ ' }}
                                <br>@{{ reserva.dispositivos }}
                            </p>

                            <div class="col s12" style="margin:15px 0 0 0;" ng-if="reserva.llegada_fecha">
                                <div class="row">
                                    <strong class="col s12 center-align" style="font-weight: bold">LLEGADA</strong>
                                    <p class="col s6 right-align" style="font-weight: bold;margin:0;">
                                        Fecha:
                                        <br>Hora:
                                        <br>Aerolinea:
                                        <br>Vuelo:
                                    </p>
                                    <p class="col s6" style="margin:0;">
                                        @{{ reserva.llegada_fecha }}
                                        <br>@{{ reserva.llegada_hora }}
                                        <br>@{{ reserva.llegada_aerolinea }}
                                        <br>@{{ reserva.llegada_vuelo }}
                                    </p>
                                </div>
                            </div>
                            <div class="col s12" style="margin:0;" ng-if="reserva.salida_fecha">
                                <div class="row">
                                    <strong class="col s12 center-align" style="font-weight: bold">SALIDA</strong>
                                    <p class="col s6 right-align" style="font-weight: bold;margin:0;">
                                        Fecha:
                                        <br>Hora:
                                        <br>Aerolinea:
                                        <br>Vuelo:
                                    </p>
                                    <p class="col s6" style="margin:0;">
                                        @{{ reserva.salida_fecha }}
                                        <br>@{{ reserva.salida_hora }}
                                        <br>@{{ reserva.salida_aerolinea }}
                                        <br>@{{ reserva.salida_vuelo }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>   
                    
                    
                    <h5 class="col s12 center-align cyan-text">Datos del Cliente</h5>
                    <p class="col s6 right-align negrita" style="font-weight:bold">
                        Nombre:
                        <br>Apellido:
                        <br>Correo:
                        <span ng-if='reserva.reservation.telefono'><br>Telefono:</span>
                        <span ng-if='reserva.reservation.hotel'><br>Hotel:</span>

                        <br><br>Precio Reserva:
                        <br>ID de Págo:
                        <span ng-if='reserva.reservation.comentarios'><br><br>Comentarios:</span>
                    </p>
                    <p class="col s6">
                        @{{ reserva.reservation.nombre }}
                        <br>@{{ reserva.reservation.apellido }}
                        <br>@{{ reserva.reservation.correo }}
                        <span ng-if='reserva.reservation.telefono'><br>@{{ reserva.reservation.telefono }}</span>
                        <span ng-if='reserva.reservation.hotel'><br>@{{ reserva.reservation.hotel }}</span>

                        <br><br>@{{ reserva.reservation.precio | currency:'$ ' }}
                        <br>@{{ reserva.reservation.id_pago }}
                        <span ng-if='reserva.reservation.comentarios'><br><br>@{{ reserva.reservation.comentarios }}</span>
                    </p>

                </div>
            </div>
            <div class="modal-footer">
                <a class="modal-action modal-close waves-effect cyan-text waves-blue btn-flat ">Cerrar</a>
            </div>
        </div>
@endsection



@section('angular')
    <script>
        var app = angular.module('app', ['ngTable']);
        app.controller('ctrl', function ($scope,$http,$timeout,NgTableParams) {
            $scope.reservas = {!! $reservas !!};
            console.log($scope.reservas);
            $scope.reserva = {};
            $scope.index = -1;

            /*CRUD*/
            $scope.getIndex = function(id){
                var reservas = $scope.reservas;
                var index = reservas.map(function(e) { return e.id; }).indexOf(id);
                return index;
            }
            
            
            $scope.ver = function(id){
                $scope.index = $scope.getIndex(id);
                $scope.reserva = JSON.parse(JSON.stringify($scope.reservas[$scope.index]));
                $('#ver').openModal();
            }

            $scope.procesar = function(id){
                swal({   
                    title: "Procesar Reserva",   
                    text: "Esta seguro que desea procesar la reservas",
                    type: "warning",   
                    showCancelButton: true,
                    confirmButtonColor: "#43A047",   
                    confirmButtonText: "Procesar", 
                    closeOnConfirm: false 
                }, function(){  
                    $http.put('{{ url("/api/wifi") }}/'+id,{_token:'{{ csrf_token() }}',estado:2})
                    .then(function(response){
                        $scope.index = $scope.getIndex(id);
                        $scope.reservas[$scope.index] = response.data;
                        $scope.tabla.reload();
                    })
                    swal("Procesada!", "Reserva Procesada con éxito", "success"); 
                });
            }

            $scope.cancelar = function(id){
                swal({   
                    title: "Cancelar Reserva",   
                    text: "Esta seguro que desea procesar la reservas",
                    type: "warning",   
                    showCancelButton: true,
                    confirmButtonColor: "#F44336",   
                    confirmButtonText: "Cancelar", 
                    closeOnConfirm: false 
                }, function(){  
                    $http.put('{{ url("/api/wifi") }}/'+id,{_token:'{{ csrf_token() }}',estado:3})
                    .then(function(response){
                        $scope.index = $scope.getIndex(id);
                        $scope.reservas[$scope.index] = response.data;
                        $scope.tabla.reload();
                    })
                    swal("Cancelada!", "Reserva Cancelada con éxito", "success"); 
                });
            }
        
            var initialParams = {
                count: 10, // initial page size
                sorting: {
                    id: 'desc'
                },
                filter: {
                    id: ''
                }
            };
            var initialSettings = {
                // page size buttons (right set of buttons in demo)
                counts: [10,20,50],
                // determines the pager buttons (left set of buttons in demo)
                paginationMaxBlocks: 5,
                paginationMinBlocks: 2,
                dataset: $scope.reservas
            };            
            $scope.tabla = new NgTableParams(initialParams,initialSettings);
        });
    </script>
@endsection