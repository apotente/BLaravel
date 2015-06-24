@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Item {{ $item->descripcion }}</div>
                 <div class="panel-body">
                     {!! Form::model($item,['route' => ['admin.items.update',$item], 'method' => 'PUT']) !!}
                        @include('admin.items.partials.fields');
                         <button type="submit" class="btn btn-default">Actualizar Item</button>
                     {!! Form::close() !!}
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
