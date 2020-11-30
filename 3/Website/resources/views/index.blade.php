@extends('layout.main')

@section('title')
    homepage
@endsection

@section('content')
    <div class=" banner mw-100 text-white" style="background-color: #fa4b4bc4;">
        <div class=" p-5 bannertext container">
            <h1 class="p-5 text-center">Dit is mijn <span class="font-weight-light font-italic">stage</span> site:D</h1>
        </div>
    </div>
    <div class="maincontent" style="padding: 5% 0">
        <div class="container">
            <div class="card-group">
                <div class="card">
                <img height="43%" class="card-img-top" src="{{asset('img/fizzbuzz.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Fizz Buzz</h5>
                    <p class="card-text">Fizz buzz is een woordspel voor kinderen om hen te leren over verdeeldheid . Spelers tellen om de beurt incrementeel, waarbij elk getal deelbaar door drie wordt vervangen door het woord "fizz", en elk getal dat door vijf kan worden gedeeld door het woord "buzz".</p>
                  </div>
                </div>
                <div class="card">
                  <img height="43%" class="card-img-top" src="{{asset('img/cleaningup.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Cleaning up</h5>
                    <p class="card-text">Het is altijd vervelend als je tekst een rommel is, met deze functie hoop ik het probleem toch wat te verminderen:)</p>
                  </div>
                </div>
                <div class="card">
                  <img  height="43%" class="card-img-top" src="{{asset('img/tot.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Trick or Treat</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
  