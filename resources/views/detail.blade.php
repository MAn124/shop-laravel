@extends('master')
@section('content')   
<div class="container ">
    <div class="row">        
        <div class="col-sm-6 mb-12">
            <img class="detail-img" src="{{$product['image']}}" alt="">
        </div>
        <div class="col-sm-6 mb-12">
            <a href="">Go back</a>
            <h3>{{$product['name']}}</h3>
            <h4>Price: {{$product['price']}}</h4>
            <p>Price: {{$product['desc']}}</p>
            <br>
            <form action="/add_cart" method="post">
                @csrf
                <input name="product_id" type="hidden" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to cart</button>
            </form>
            <button class="btn btn-warning ml-4">Buy now</button>
            <br>
        </div>

    </div>
</div>
@endsection
