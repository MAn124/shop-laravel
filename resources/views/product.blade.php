@extends('master')
@section('content')   
<div class="">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1 ? 'active': ''}}">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['image']}}" class="slider-img d-block w-100" alt="...">
                        <div class="slider-text carousel-caption d-none d-md-block">
                          <h5>{{$item['name']}}</h5>
                          <p>{{$item['desc']}}</p>
                        </div>
                    </a>
                </div>    
            
            @endforeach
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
@endsection
