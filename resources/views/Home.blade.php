@extends('layouts.navigationBar')

@section('tittle','Pagina blog')

@section('contenido')
<img src="C:\projectLaravel\app-blog2\resources\views\img\restUno.jpg" alt="imagen" style="width: 200px; height: 200px; border: 2px solid red">

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
        <img src="resources\views\img\restUno.jpg" class="card-img-top" alt="imagen">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="resources\views\img\restUno.jpg" class="card-img-top" alt="imagen">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="C:\Users\xavie\Downloads\restUno.png" class="card-img-top" alt="imagen">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="C:\Users\xavie\Downloads\restUno.png" class="card-img-top" alt="imagen">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
</div>
@stop

