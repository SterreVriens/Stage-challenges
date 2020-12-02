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
                <img height="46%" class="card-img-top" src="{{asset('img/fizzbuzz.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Fizz Buzz</h5>
                    <p class="card-text">Spelers tellen om de beurt incrementeel, waarbij elk getal deelbaar door drie wordt vervangen door het woord "fizz", en elk getal dat door vijf kan worden gedeeld door het woord "buzz".</p>
                    <a class="card-text" href="{{route('fizzbuzz')}}" ><small class="text-muted">Ga nu naar de pagina></small></a>

                  </div>
                </div>
                <div class="card">
                  <img height="46%" class="card-img-top" src="{{asset('img/cleaningup.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Cleaning up</h5>
                    <p class="card-text">Het is altijd vervelend als je tekst een rommel is, met deze functie hoop ik het probleem toch wat te verminderen:)</p>
                    <a class="card-text" href="{{route('cleanup')}}" ><small class="text-muted">Ga nu naar de pagina></small></a>
                  </div>
                </div>
                <div class="card">
                  <img  height="46%" class="card-img-top" src="{{asset('img/tot.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Trick or Treat</h5>
                    <p class="card-text">Met halloween is het altijd een gedoe om alle opgehaalde eerlijk tussen iedereen te verdelen, daarom is er nu deze functie!
                                          Nu zijn alle snoepjes altijd eerlijk te verdelen.
                    </p>
                    <a class="card-text" href="{{route('trickortreat')}}" ><small class="text-muted">Ga nu naar de pagina></small></a>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
  