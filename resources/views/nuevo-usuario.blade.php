@extends("../layout/app")
@section('title') Crear usuario @stop

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card mt-5">
        <div class="card-header h3">Crear Usuario</div>
            <div class="card-body">
                <form id="formulario" action="{{route('user.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nombre de usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                    </div>
                    
                    <div class="col-sm-13  form-group">
                    <label for="tipo_usuario">Tipo de usuario</label>
                        <select name="tipo_usuario" class="form-control selectpicker">
                            <option class="form-control" value="Administrador">Administrador</option>
                            <option class="form-control" value="Usuario">Usuario</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Dirección electronica" class="form-control" required>
                    </div>
                    <div class="form-group">       
                        <label for="password">Constraseña</label>
                        <input type="password" name="password" placeholder="Constraseña" class="form-control" required>
                    </div>
                    <div class="form-group">       
                        <label for="password">Saldo</label>
                        <input type="number" name="saldo" placeholder="Saldo" class="form-control" required>
                    </div>
                    <input type="" name="avatar"  class="d-none" value="{{asset('img/users.png')}}" required>
                    
                    <input id="modal" class="btn btn-primary btn-round mt-2 float-right" type="submit" value="Enviar">                    
                </form>
            </div>
        </div>
    </div>
</div>
<!--script-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/newUser.js')}}"></script>
@stop