<div class="form-group">
    {!!  Form::label('email', 'Correo Electronico') !!}
    {!!  Form::text('email',null,['class' => 'form-control', 'placeholder'=>'Ingrese su email']) !!}
</div>
<div class="form-group">
    {!!  Form::label('password', 'Contraseña') !!}
    {!!  Form::password('password',['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('name', 'Nombre') !!}
    {!!  Form::text('name',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('type', 'Tipo') !!}
    {!!  Form::select('type',['user'=>'usuario','admin'=>'administrador'],null,['class' => 'form-control']) !!}
</div>
<div class="checkbox">
    <label>
        <input type="checkbox"> Check me out
    </label>
</div>