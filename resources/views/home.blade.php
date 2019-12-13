@extends('header-footer')

@section('content')

    <div class="mt-5">
        <div style="font-size: 30px; font-weight: bold; color: #1b1e21">Ưu đãi độc quyền</div>
        <div>Chỉ có tại Luxstay, hấp dẫn và hữu hạn, book ngay!</div>
        <div class="mt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 400px;">
                    <div class="carousel-item active">
                        <img src="{{asset('storage/images/event/event-1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/images/event/event-2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/images/event/event-4.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/images/event/event-5.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div style="font-size: 30px; font-weight: bold; color: #1b1e21">Địa điểm nổi bật</div>
        <div>Cùng Luxury Rent House bắt đầu chuyến hành trình chinh phục thế giới của bạn</div>
        <div class="">
            <section class="regular slider mt-4" style="width: 100%">
                @foreach($cities as $city)
                    <a href="#">
                        <div style="position: relative">
                            <img height="300px" width="440px" src="{{asset('storage/'.$city->image)}}">
                            <div style="position: absolute; left: 50px; bottom: 50px">
                                <p style=" font-family: 'Arial Black' ;color: white; font-weight: bolder; font-size: 20px">{{$city->name}}</p>
                                <p style=" color: white; font-weight: bolder">Chỗ ở</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        </div>
    </div>

    <div class="mt-5">
        <div style="font-size: 30px; font-weight: bold; color: #1b1e21">Top Chỗ ở hot 10000 độ</div>
        <div>Khám phá chỗ ở nổi tiếng đã xuất hiện trong các bộ phim & MV</div>
        <div class="mt-4">
            <div class="row">
                @foreach($houses as $house)
                    <div class="col-lg-3">
                        <div class="card" style="width: 100%">
                            <img src="{{asset('storage/'.$house->images[0]->path)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{route('totalHouse', $house->id)}}">{{$house->title}}</a>
                                </h5>
                                <h5 class="card-title">{{$house->price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
