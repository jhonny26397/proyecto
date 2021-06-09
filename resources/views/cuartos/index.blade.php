@extends('layouts.app')

@section('content')
<header class="bg-image text-center p-5" style="background-image: url('assets/images/2.jpg');
            background-size: cover;"
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Inmuebles</h1>
            <p class="lead fw-normal text-white-50 mb-0">Encuentra el mas adecuado segun tus necesidades</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-12 justify-content-center">
            @foreach($cuartos as $cuarto)
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset("storage/img/" . $cuarto->fotos )}}" alt="..." />
                    <div class="card-body p-4">
                        <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div> -->
                        
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">{{$cuarto->titulo}}</h5>
                        </a>
                        <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                        <p class="card-text mb-0">{{$cuarto->descripcion}}</p>
                        <div class="row">
                            <div class="col-md-6 text-muted text-end">Departamento:</div>
                            <div class="col-md-6 fw-bold text-start">{{$cuarto->ciudad}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-muted text-end">Calle:</div>
                            <div class="col-md-6 fw-bold text-start">{{$cuarto->calle}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-muted text-end">Precio:</div>
                            <div class="col-md-6 fw-bold text-start">{{$cuarto->precio}} Bs</div>
                        </div>
                        
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Mas Detalles</a></div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection