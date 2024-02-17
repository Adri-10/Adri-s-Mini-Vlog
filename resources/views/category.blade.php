@extends('master')

@section('title')
    Category Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{asset('/')}}img/{{$product['image']}}" alt="" height="250" width="250" class="card-img-top"/>
                            <div class="card-body">
                                <h3>{{$product['title']}}</h3>
                                <p>{{$product['price']}}</p>
                                <hr/>
                                <a href="{{route('detail', ['id'=> $product['id']])}}" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

