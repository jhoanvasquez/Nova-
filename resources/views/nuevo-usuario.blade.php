@extends("../layout/app")
@section('title') Crear usuario @stop

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />

@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card mt-5">
        <div class="card-header h3">Crear Usuario</div>
            <div class="card-body">
                <div id="error"></div>
                <form id="form">
                @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nombre de usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control" required>
                    </div>
                    
                    <div class="col-sm-13  form-group">
                    <label for="tipo_usuario">Tipo de usuario</label>
                        <select id="tipo_usuario" name="tipo_usuario" class="form-control selectpicker">
                            <option class="form-control" value="Administrador">Administrador</option>
                            <option class="form-control" value="Usuario">Usuario</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email"  name="email" placeholder="Dirección electronica" class="form-control" required>
                    </div>
                    <div class="form-group">       
                        <label for="password">Constraseña</label>
                        <input type="password" id="contraseña"  name="password" placeholder="Constraseña" class="form-control" required>
                    </div>
                    <div class="form-group">       
                        <label for="password">Saldo</label>
                        <input type="number" id="saldo"  name="saldo" placeholder="Saldo" class="form-control" required>
                    </div>
                    <input type="" name="avatar" id="avatar" class="d-none" value="{{asset('img/users.png')}}" required>
                    
                    <input id="modal" class="btn btn-primary btn-round mt-2 float-right" type="reset" value="Enviar">                    
                </form>
            </div>
        </div>
    </div>
</div>
<!--script-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/newUser.js')}}"></script>

@stop