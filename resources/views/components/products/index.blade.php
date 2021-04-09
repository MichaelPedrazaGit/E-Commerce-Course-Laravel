@extends('layouts.default')
@section('content')
<h1>Products</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name And Image</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            @if ($product->available == 1)
                <td> {{$product->id}}</td>
                @if (count($product->images)>0)
                    <td> {{$product->name}} <br> <img style="max-width:50px" src="{{$product->images[0]['url']}}"></td>
                @else
                    <td> {{$product->name}} <br> Product without photo</td>
                @endif
            <td> {{$product->description}}</td>
            <td>${{$product->price}}</td>
            <td>{{$product->score}}</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

@endsection