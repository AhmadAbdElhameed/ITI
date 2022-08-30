/*
Calculate the Sum and average Of the user entered values
Ask the user to enter how many number he wants to get the sum of
Save the number in array
Show him the sum and average of the entered values
*/

function sumAndAverage() {
    var numbersArr = []
    var sum = 0
    var avg = 0
    var numOfNumbers = Number(prompt("Enter the number of the numbers you want to add :"))
    if (isNaN(numOfNumbers)) {
        alert("Please enter a number!")
        sumAndAverage()
    } else {
        for (var i = 0; i < numOfNumbers; i++) {
            numbersArr[i] = Number(prompt(`Please enter number ${eval(i + 1)}`))
            sum += numbersArr[i];
            avg = sum / numOfNumbers;
        }
        alert(`Sum = ${sum}\nAverage = ${avg}`)
    }

}
sumAndAverage()