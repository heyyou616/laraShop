@extends('admin.admin-panel')

@section ('title', 'Продукт доданий')

@section('content')
<div class="alert alert-success">
    <p><center><strong>Good!</strong> Продукт доданий</center></p>
</div>

<h1>{{ $product->title}}</h1>
<p>{{$product->content}}</p>
<p>{{$product->price}}</p>
<p>{{$product->photo}}</p>
<p>{{$product->size}}</p>
<p>{{$product->color}}</p>
<p>{{$product->brand}}</p>

@endsection