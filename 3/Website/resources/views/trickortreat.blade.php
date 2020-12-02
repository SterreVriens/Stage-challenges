@extends('layout.main')

@section('title')
    Opdracht 4
@endsection

@section('content')
<div class="container pt-5">
    <h4>Trick or treat</h4>
    <button class="btn btn-primary btn-block mb-4" onclick="trickortreat()">Click me please:)</button>
    <p>Je kan de antwoorden in de console vinden</p>
</div>
@endsection

<style>
    .container button{
        background-color: darksalmon;
        border-style: none;
    }
    .container button:hover{
        background-color: coral;
        border-style: none;
    }
    .container button:active{
        background-color: darksalmon;
        border-style: none;
    }
</style>

<script>
     var witchCandy = 5;
     var zombieCandy = 4;
     var vampireCandy = 3;
    function trickortreat(){

        fetch('{{asset('txt/input4.txt') }}')
          .then(response => response.text())
          .then((txt) => {
            // console.log(txt)

            var nonString = txt;
            // console.log(txt);
            var parts = nonString.split("\n")

            // console.log(parts);
            parts.forEach(part => {
                
                var oneThing = part.split(", ");
                
                var vampire= parseInt(oneThing[0].split(" ")[1]);
                var zombie= parseInt(oneThing[1].split(" ")[1]);
                var witch= parseInt(oneThing[2].split(" ")[1]);
                var house= parseInt(oneThing[3].split(" ")[1]);

                var firstcalculation = (vampire * vampireCandy) + (zombie * zombieCandy )+ (witch* witchCandy);
                var monstersamount=  (vampire + zombie + witch)
                var finalcalculation = (firstcalculation * house) / monstersamount;
                var result = finalcalculation.toFixed(0);
                console.log(result);

                // for(var i = 0; i < result.length ; i++){
                //     console.log(result[i])
                // }

                
                
            });
          })
    }
</script>

