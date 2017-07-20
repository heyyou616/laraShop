@extends('admin.admin-panel')

@section('title', 'Добавить продукт')

@section ('content')

<h2>Додати продукт</h2>
    {!! Form::open(['route' => 'adminPanel.store', 'files' => true]) !!}
    
  <div class="form-group">
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('title', 'Назва') }}
      </div>
      <div class="col-md-9">
   {{ Form::Text('title', null, ['class' => 'form-control']) }}
      </div>
      </div>

        <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('code', 'Код товара') }}
      </div>
      <div class="col-md-9">
   {{ Form::number('code', null, ['class' => 'form-control']) }}
      </div>
      </div>
  
      
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('price', 'Ціна') }}
      </div>
      <div class="col-md-9">
   {{ Form::number('price', null, ['class' => 'form-control']) }}
      </div>
      </div>
      
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('photo', 'Фото') }}
      </div>
      <div class="col-md-9">
   {{ Form::file('photo', null, ['class' => 'form-control']) }}
      </div>
      </div>
      
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('size', 'Розмір') }}
      </div>
      <div class="col-md-9">
   {{ Form::select('size', ['L' => 'Large', 'S' => 'Small'],['class' => 'form-control']) }}
      </div>
      </div>
      
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('color', 'Колір') }}
      </div>
      <div class="col-md-9">
   {{ Form::Text('color', null, ['class' => 'form-control']) }}
      </div>
      </div>
      
      <div class="col-md-7">
           <div class="col-md-3">
   {{ Form::label('brand', 'Бренд') }}
      </div>
      <div class="col-md-9">
   {{ Form::Text('brand', null, ['class' => 'form-control']) }}
      </div>
      </div>
      
      <div class="col-md-9 col-md-offset">
          {{ Form::submit('Опубликовать', ['class' => 'btn btn-primary']) }}
      </div>
      
      
      
  </div>
  

{!! Form::close() !!}
@endsection