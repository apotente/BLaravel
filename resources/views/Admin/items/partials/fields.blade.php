<div class="form-group">
    {!!  Form::label('tipo', 'Tipo') !!}
    {!!  Form::select('tipo',['1'=>'Especie','2'=>'Variedad','3'=>'Tamaño'],null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('descripcion', 'Descripcion') !!}
    {!!  Form::text('descripcion',null,['class' => 'form-control']) !!}
</div>
