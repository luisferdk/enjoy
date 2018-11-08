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
                        <td width="17%" data-title="'Nombre'" filter="{ nombre: 'text'}" sortable="'nombre'">
                            @{{aux.nombre}}
                        </td>
                        <td width="17%" data-title="'Apellido'" filter="{ apellido: 'text'}" sortable="'apellido'">
                            @{{aux.apellido}}
                        </td>
                        <td width="15%" data-title="'Correo'" filter="{ correo: 'text'}" sortable="'correo'">
                            @{{aux.correo}}
                        </td>
                        <td width="15%" data-title="'Teléfono'" filter="{ telefono: 'text'}" sortable="'telefono'">
                            @{{aux.telefono}}
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
                        <td width="17%" data-title="'Nombre'" filter="{ nombre: 'text'}" sortable="'nombre'">
                            @{{aux.nombre}}
                        </td>
                        <td width="17%" data-title="'Apellido'" filter="{ apellido: 'text'}" sortable="'apellido'">
                            @{{aux.apellido}}
                        </td>
                        <td width="15%" data-title="'Correo'" filter="{ correo: 'text'}" sortable="'correo'">
                            @{{aux.correo}}
                        </td>
                        <td width="15%" data-title="'Teléfono'" filter="{ telefono: 'text'}" sortable="'telefono'">
                            @{{aux.telefono}}
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
                        <td width="17%" data-title="'Nombre'" filter="{ nombre: 'text'}" sortable="'nombre'">
                            @{{aux.nombre}}
                        </td>
                        <td width="17%" data-title="'Apellido'" filter="{ apellido: 'text'}" sortable="'apellido'">
                            @{{aux.apellido}}
                        </td>
                        <td width="15%" data-title="'Correo'" filter="{ correo: 'text'}" sortable="'correo'">
                            @{{aux.correo}}
                        </td>
                        <td width="15%" data-title="'Teléfono'" filter="{ telefono: 'text'}" sortable="'telefono'">
                            @{{aux.telefono}}
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
                    <p class="col s6 right-align negrita" style="font-weight:bold">
                        Nombre:
                        <br>Apellido:
                        <br>Correo:
                        <span ng-if='reserva.telefono'><br>Telefono:</span>
                        <span ng-if='reserva.hotel'><br>Hotel:</span>

                        <br><br>Precio:
                        <br>ID de Págo:
                        <span ng-if='reserva.comentarios'><br><br>Comentarios:</span>
                    </p>
                    <p class="col s6">
                        @{{ reserva.nombre }}
                        <br>@{{ reserva.apellido }}
                        <br>@{{ reserva.correo }}
                        <span ng-if='reserva.telefono'><br>@{{ reserva.telefono }}</span>
                        <span ng-if='reserva.hotel'><br>@{{ reserva.hotel }}</span>

                        <br><br>@{{ reserva.precio | currency:'$ ' }}
                        <br>@{{ reserva.id_pago }}
                        <span ng-if='reserva.comentarios'><br><br>@{{ reserva.comentarios }}</span>
                    </p>
                    
                    
                    <h5 ng-if="reserva.tours.length>0" class="col s12 center-align cyan-text m-t-lg">Excursiones</h5>
                    <table class="col s12" ng-if="reserva.transfers.length>0">
                        <thead>
                            <tr>
                                <th class="center-align">Excursión</th>
                                <th class="center-align">Modalidad</th>
                                <th class="center-align">Fecha</th>
                                <th class="center-align">Horario</th>
                                <th class="center-align">Adultos</th>
                                <th class="center-align">Ninos</th>
                                <th class="center-align">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="aux in reserva.tours">
                                <td class="center-align">@{{ aux.tour }}</td>
                                <td class="center-align">@{{ aux.modalidad?aux.modalidad:'-' }}</td>
                                <td class="center-align">@{{ aux.fecha }}</td>
                                <td class="center-align">@{{ aux.horario?aux.horario:'-' }}</td>
                                <td class="center-align">@{{ aux.adultos }}</td>
                                <td class="center-align">@{{ aux.ninos?aux.ninos:'-' }}</td>
                                <td class="center-align">@{{ aux.precio | currency:'$ ' }}</td>
                            </tr>
                        </tbody>
                    </table>


                    <h5 ng-if="reserva.transfers.length>0" class="col s12 center-align cyan-text m-t-lg">Traslados</h5>

                    <div class="col s12" ng-repeat="(key,aux) in reserva.transfers">
                        <div class="row">
                            <p class="center-align" style="margin:0">
                                <strong style="font-weight: bold">TRASLADO @{{key+1}}</strong>
                            </p>
                            <p class="col s6 right-align" style="font-wight:bold;margin:15px 0 0 0;">
                                    De:
                                <br>Para:
                                <br>Pasajeros:
                                <br>Tipo:
                                <br>Precio:
                            </p>

                            <p class="col s6" style="margin:15px 0 0 0;">
                                    @{{ aux.de }}
                                <br>@{{ aux.para }}
                                <br>@{{ aux.pasajeros }}
                                <br>@{{ aux.tipo==1?'One Way':'Round Trip' }}
                                <br>@{{ aux.precio | currency:'$ ' }}
                            </p>

                            <p class="col s12 center-align" style="margin:15px 0 0 0;" ng-if="aux.llegada_fecha">
                                <strong style="font-weight: bold">LLEGADA</strong>
                                <br>@{{ aux.llegada_fecha }}
                                <br>@{{ aux.llegada_hora }}
                                <br>@{{ aux.llegada_aerolinea }}
                                <br>@{{ aux.llegada_vuelo }}
                            </p>

                            <p class="col s12 center-align" style="margin:15px 0 0 0;" ng-if="aux.salida_fecha">
                                    <strong style="font-weight: bold">SALIDA</strong>
                                    <br>@{{ aux.salida_fecha }}
                                    <br>@{{ aux.salida_hora }}
                                    <br>@{{ aux.salida_aerolinea }}
                                    <br>@{{ aux.salida_vuelo }}
                                </p>
                        </div>
                    </div>



                    <h5 ng-if="reserva.vips.length>0" class="col s12 center-align m-t-lg cyan-text">VIPS</h5>

                    <div class="col s12" ng-repeat="(key,aux) in reserva.vips">
                        <div class="row">
                            <p class="center-align" style="margin:0">
                                <strong style="font-weight: bold">VIP @{{key+1}}</strong>
                            </p>
                            <p class="col s6 right-align" style="font-wight:bold;margin:15px 0 0 0;">
                                    Precio:
                                <br>Pasajeros:
                            </p>

                            <p class="col s6" style="margin:15px 0 0 0;">
                                    @{{ aux.precio | currency:'$ ' }}
                                <br>@{{ aux.pasajeros }}
                            </p>

                            <p class="col s12 center-align" style="margin:15px 0 0 0;" ng-if="aux.llegada_fecha">
                                <strong style="font-weight: bold">LLEGADA</strong>
                                <br>@{{ aux.llegada_fecha }}
                                <br>@{{ aux.llegada_hora }}
                                <br>@{{ aux.llegada_aerolinea }}
                                <br>@{{ aux.llegada_vuelo }}
                            </p>

                            <p class="col s12 center-align" style="margin:15px 0 0 0;" ng-if="aux.salida_fecha">
                                    <strong style="font-weight: bold">SALIDA</strong>
                                    <br>@{{ aux.salida_fecha }}
                                    <br>@{{ aux.salida_hora }}
                                    <br>@{{ aux.salida_aerolinea }}
                                    <br>@{{ aux.salida_vuelo }}
                                </p>
                        </div>
                    </div>



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
                    $http.put('{{ url("/api/reservation") }}/'+id,{_token:'{{ csrf_token() }}',estado:2})
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
                    $http.put('{{ url("/api/reservation") }}/'+id,{_token:'{{ csrf_token() }}',estado:3})
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