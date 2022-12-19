@extends('master')
@section('content')   
<div class="custom-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="carousel-inner">
            @foreach ($product as $item)
                <div class="searched-item" >
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['image']}}" class="search-img d-block w-100 h-50" alt="...">
                        <div class="">
                          <h5>{{$item['name']}}</h5>
                          <p>{{$item['desc']}}</p>
                        </div>
                    </a>
                </div>             
            @endforeach           
        </div>
    </div>
</div>
@endsection
