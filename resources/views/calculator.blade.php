<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="/public">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel Calculator</title>
    </head>
</head>
<body>
        <div class="calculator">
            <div class="display" id="input"></div>
            <div class="display" id="result"></div>
            <button class="clear" onclick="clearDisplay()">C</button>
            <button class="btn-brr" onclick="appendToDisplay('(')">(</button>
            <button class="btn-brr" onclick="appendToDisplay(')')">)</button>
            <button class="btn-brr" onclick="calculateSquareRoot()">√</button> </br>
            <button class="btn-cal" onclick="appendToDisplay('%')">%</button>
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button></br>
            <button class="btn-cal" onclick="setOperator('/')">/</button>
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button></br>
            <button class="btn-cal" onclick="setOperator('*')">*</button>
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button></br>
            <button class="btn-cal" onclick="setOperator('-')">-</button>
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="togglePlusMinus()">+/-</button>
            <button class="btn-cal" onclick="setOperator('+')">+</button>
            <button class="btn-eql" onclick="calculateResult()">=</button></br>
        </div>

   <script src = {{ asset('js/app.js') }} defer ></script>
   <script src = {{ asset('js/bootstrap.js') }} defer ></script>
</body>
</html>
