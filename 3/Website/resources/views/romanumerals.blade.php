
@extends('layout.main')

@section('title')
    Opdracht 5
@endsection

@section('content')
<div class="container pt-4">
    <h4>Roman numerals</h4>
    <label for="input">Pick your number here:</label>
    <input type="number" id="input1" name="input1" min="1" max="10000">
 <button type="button" onclick="getInputValue()">Play</button>
 <textarea class="pt-3 form-control rounded-1" name="output" id="cleanedUpText" cols="30" rows="10" disabled></textarea>
</div>
@endsection
<script>
    function getInputValue(){
      // Selecting the input element and get its value 
      var inputVal = document.getElementById("input1").value;
      
      convertnumbers(inputVal);
    }
    function convertnumbers(x){
        var decimals = [1000, 500, 100, 50, 10, 5, 1];
        var romanNumbers = ["M","D","C","L","X","V","I"];

  var results = "";

  for (var i = 0; i < decimals.length; i++) {
      //terwijl decimals kleiner of gelijk aan input is voert hij iets uit
    while (decimals[i] <= x) {
        //zet de juiste roman numbers in de goede var
      results += romanNumbers[i];
      //haalt de cijfers van de input af als het past
      x -= decimals[i];
    }
  }

  document.getElementById("cleanedUpText").innerHTML = results;

};

</script>

