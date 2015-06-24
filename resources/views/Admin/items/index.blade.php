@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Items</div>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-info" href="{{ route('admin.items.create') }}" role="button">
                            Nuevo Item
                        </a>
                    </p>
                    @include('admin.items.partials.table')
                    {!! $items->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
