@extends('layout.app')

@section('main-content')

   <div class="container-image my_banner">
      <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="">
   </div>

   <div class="comics">
      <div class="container-fluid my_container bg-dark p-5 ">
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

   <div class="container-fluid my_bluecontainer d-flex">
      <ul class="d-flex ul-list">
         <li class="d-flex text-light list-itemfooter">
            <img src="{{ Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="">
            <h4 class="text-uppercase">
               Digital Comics
            </h4>
         </li>
         <li class="d-flex text-light list-itemfooter">
            <img src="{{ Vite::asset('resources/assets/img/buy-comics-merchandise.png') }}" alt="">
            <h4 class="text-uppercase">
               DC merchandise
            </h4>
         </li>
         <li class="d-flex text-light list-itemfooter">
            <img src="{{ Vite::asset('resources/assets/img/buy-comics-subscriptions.png') }}" alt="">
            <h4 class="text-uppercase">
               Subscription
            </h4>
         </li>
         <li class="d-flex text-light list-itemfooter">
            <img src="{{ Vite::asset('resources/assets/img/buy-comics-shop-locator.png') }}" alt="">
            <h4 class="text-uppercase">
               Comic shop locator
            </h4>
         </li>
         <li class="d-flex text-light list-itemfooter">
            <img src="{{ Vite::asset('resources/assets/img/buy-dc-power-visa.svg') }}" alt="">
            <h4 class="text-uppercase">
               DC Power visa
            </h4>
         </li>
      </ul>
   </div>

   

@endsection
