@extends('layout.main')

@section('title')
    Opdracht 1
@endsection

@section('content')
<div class="container pt-5">
    <button class="btn btn-primary btn-block mb-4" onclick="cleanUp()">Click me please:)</button>
    <textarea class="pt-3 form-control rounded-1" name="output" id="cleanedUpText" cols="30" rows="10" disabled></textarea>
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
    var txt;

    // function load() {
    // 	txt = loadString("input.txt");
    // 	console.log(txt);
    // }
    function cleanUp() {
        // txt = loadString("input.txt");
        // console.log(txt);

        fetch('{{asset('txt/input.txt') }}')
          .then(response => response.text())
          .then((txt) => {
            // console.log(txt)

            txt = txt.replace(/[^a-zA-Z0-9]/g , ' ');
            txt = txt.replace(/[0-9]/g, ' ');
            
            document.getElementById("cleanedUpText").innerHTML = txt;
          })
    }
</script>
