
function calculator() {
    var operations = ["+", "-", "*", "/", "%", "^"];

    var firstNum = Number(prompt("Enter first number :"))

    if (isNaN(firstNum)) {
        alert("Please enter a number!")
        calc();
    } else {
        var operation = prompt("Enter the operation (' + | - | * | / | % | ^ |')")
        if (!operations.includes(operation)) {
            alert("Invalid operation!")
            calc()
        } else {
            var secondNum = Number(prompt("Enter second number"))
            if (isNaN(secondNum)) {
                alert("Please enter a number!")
                calc()
            } else {
                result = eval(`${firstNum} ${operation} ${secondNum}`)
                alert(`Result = ${result}`)
            }
        }
    }
}
calculator()