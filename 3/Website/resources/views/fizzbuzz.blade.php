@extends('layout.main')

@section('title')
    Opdracht 2
@endsection

@section('content')
<div class="container pt-4">
    <h4>Fizz & Buzz game</h4>
    <label for="input">Choose the two dividers here(between 1 and 10):</label>
    <input type="number" id="input1" name="input1" min="1" max="10">
    <input type="number" id="input2" name="input2" min="1" max="10">
 <button type="button" onclick="getInputValue()">Play</button>
 <p>Je kan de antwoorden vinden in de console</p>
</div>
@endsection

<script>
    function getInputValue(){
      // Selecting the input element and get its value 
      var inputVal1 = document.getElementById("input1").value;
      var inputVal2 = document.getElementById("input2").value;
      
      game(inputVal1 ,inputVal2);
      // Displaying the value
      

  }
  function game(x ,y) {
          // console.log($x);
       //    console.log($y);
          for (var i =1; i <= 101; i++) {
              if (i % x == 0 && i % y == 0) {
                   console.log('FizzBuzz');
              }
              else if (i % x == 0) {
                  console.log('Fizz');
              }
              else if(i % y == 0){
                  console.log('Buzz');
              }

              else{
                  console.log(i);
              }
          }
      }
</script>
  