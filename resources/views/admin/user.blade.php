@extends('layouts.admin')

@section('titulo')
    Usuarios
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
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Tipo</th>
                                        <th>F. Creacion</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dataUser">
                                    @if( count($users) > 0 )
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->type }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                @if($user->type != 1)
                                                    <td>
                                                        <span class="small material-icons" id="upu-{{ $user->id }}">loop</span>
                                                        <span class="small material-icons" id="delu-{{ $user->id }}">delete_forever</span>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn-small modal-trigger" href="#modalu">Crear Usuario</a>
            </div>

        </div>
    </div>
    <!-- modal usuarios admin-->
    <div id="modalu" class="modal">
        <div class="modal-content">
            <h4>Crear Usuario</h4>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name-ad" type="text">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="email-ad" type="text">
                        <label for="email">Email</label>
                    </div>
                </div>
                <input type="hidden" id="token_usu" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password-ad" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <a class="waves-effect waves-light btn" id="saveUsu">Guardar Usuario</a>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar Modal</a>
        </div>
    </div>
    <!--fin-->
    <!-- Modal Structure -->
    <div id="modalUsu" class="modal">
        <div class="modal-content">
            <h4>Actualizar Datos del Usuario</h4>
            <form>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" name="name" type="text">
                                <label for="name">Nombre</label>
                            </div>
                            <input type="hidden" id="token" value="{{ csrf_token() }}">
                            <div class="input-field col s6">
                                <input name="email" type="text" id="email">
                                <label for="email">Email</label>
                            </div>
                            <input type="hidden" id="idUsu">
                            <div class="input-field col s12">
                                <select id="type">
                                    <option value="0" disabled selected>Choose your option</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Colaborador</option>
                                </select>
                                <label>Tipo de Usuario</label>
                            </div>

                        </div>
                        <a class="waves-effect waves-light btn" id="upusu">Guardar</a>
                    </form>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar Modal</a>
        </div>
    </div>
    <!--Fin Modal-->
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
    <script src="{{ asset('js/user.js') }}"></script>
@endsection
