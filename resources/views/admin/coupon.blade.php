@extends('layouts.admin')

@section('titulo')
    Cupones
@endsection

@section('content')
    <div class="col s12">
        <div class="row">
            <!--div class="col s12">
                <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
                    <li class="tab col s3"><a href="#pendientes">Pendientes</a></li>
                    <li class="tab col s3"><a href="#procesadas">Procesadas</a></li>
                    <li class="tab col s3"><a href="#canceladas">Canceladas</a></li>
                </ul>
            </div-->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <table class="centered striped" id="tableCou">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Name</th>
                                            <th>Porcentaje</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Culminacion</th>
                                            <th>Fecha de Creacion</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataCoupon">

                                    </tbody>
                                </table>
                                <br>
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo Cupon</a>
                            </div>
                            <!--Modal-->
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <h4>Crear Nuevo Cupon</h4>
                                    <form>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input id="code" type="text">
                                                        <label for="code">Code</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input id="percentage" type="text">
                                                        <label for="percentage">Percentage</label>
                                                    </div>
                                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                    <div class="input-field col s6">
                                                        <input name="dti" type="text" id="dti"  class="datepicker">
                                                        <label for="dti">Fecha de Inicio</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input name="dte" type="text" id="dte" class="datepicker">
                                                        <label for="dte">Fecha de Culminacion</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="name" type="text">
                                                        <label for="name">Name</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <select id="status">
                                                            <option value="" disabled selected>Choose your option</option>
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>
                                                        <label>Status del Cupon</label>
                                                    </div>

                                                </div>
                                                <a class="waves-effect waves-light btn" onClick="validSendCoupon()" id="sendCoupon">Guardar</a>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar Modal</a>
                                </div>
                            </div>
                            <!--Fin Modal-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="ver" class="modal modal-fixed-footer" style="width:80%">
        <div class="modal-content">
            <div class="row"></div>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect cyan-text waves-blue btn-flat ">Cerrar</a>
        </div>
    </div>

@endsection
@section('js')
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script-->
    <script src="{{ asset('js/coupon.js') }}"></script>
@endsection
