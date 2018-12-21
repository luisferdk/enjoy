@extends('layouts.admin')

@section('titulo')
    Agencias
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
                                        <th>Nombre de Agencia</th>
                                        <th>Tipo</th>
                                        <th>Ciudad</th>
                                        <th>Pais</th>
                                        <th>Email</th>
                                        <th>Estatus</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dataAgency">

                                    </tbody>
                                </table>
                            </div>

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
    <script src="{{ asset('js/agency.js') }}"></script>
@endsection
