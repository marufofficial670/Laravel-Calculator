// resources/js/app.js

let input = "";
let result = "";

function updateDisplay() {
    document.getElementById("input").innerText = input;
    document.getElementById("result").innerText = result;
}

function clearDisplay() {
    input = "";
    result = "";
    updateDisplay();
}

function appendToDisplay(value) {
    input += value;
    updateDisplay();
}

function setOperator(op) {
    input += " " + op + " ";
    updateDisplay();
}

function calculateSquareRoot() {
    let num = parseFloat(input);
    result = Math.sqrt(num);
    updateDisplay();
}

function calculateResult() {
    try {
        result = eval(input);
        updateDisplay();
    } catch (error) {
        result = "Error";
        updateDisplay();
    }
}

function togglePlusMinus() {
    let num = parseFloat(input);
    if (num >= 0) {
        input = "-" + input;
    } else {
        input = input.slice(1);
    }
    updateDisplay();
}

updateDisplay();
