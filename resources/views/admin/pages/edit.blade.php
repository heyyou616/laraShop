@extends('admin.admin-index')

@section('title', 'Добавить пост')

@section('content')

    <div class="col-md-7">
        {!! Form::model($product, array('route' => array('admin-panel.update', $product->id), 'method' => 'PUT')) !!}
        <div class="form-group">
            <div class="col-md-3">
                {{ Form::label('title', 'Заголовок') }}
            </div>
            <div class="col-md-9">
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3">
                {{ Form::label('slug', 'Ярлык') }}
            </div>
            <div class="col-md-9">
                {{ Form::text('slug', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3">
                {{ Form::label('content', 'Текст поста') }}
            </div>
            <div class="col-md-9">
                {{ Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                {{ Form::submit('Опубликовать', ['class' => 'btn btn-primary']) }}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
