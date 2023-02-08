@extends('layout.app')

@section('main-content')

   <div class="container-image my_banner">
      <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="">
   </div>

   <div class="comics">
      <div class="container-fluid bg-dark p-5">
         <div class="row">
            @foreach ($comics as $comics)
            <div class="col-4">
               <div class="card my_card">
                  <img src="{{ $comics['thumb'] }}" alt="">
                  <div class="description-card">
                     <h1>{{ $comics['title'] }}</h1>
                     <h2>{{ $comics['description'] }}</h2>
                     <h4>Serie: {{ $comics['series'] }}</h4>
                     <h4>Data di uscita: {{ $comics['sale_date'] }}</h4>
                     <h4>Prezzo: {{ $comics['price'] }}</h4>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>

   

@endsection
