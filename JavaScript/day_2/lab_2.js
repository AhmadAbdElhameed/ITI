


// Q1
// Ask user for age
var age = parseInt(prompt("Enter your age?"));

while(1){

    if (age <= 0 ){
        alert( 'Not Valid, Please enter age greater than 0' );
        }
    else if(age == null){
            alert("User Cancel"); 
         }
    else if(age > 0 && age <= 10){
                alert( 'Child' );
            }
    else if(age > 10 && age < 19){
                alert( 'Teenager' );
            }
    else if(age > 18 && age < 50){
                alert( 'Grown up' );
            }
    else if(age => 50){
                alert( 'Old' );
            }
    else if (age == null || "null" || NaN){
        alert("User Cancel");
        break;
    }
}




//Q2
// Function to count vowels in words

function check_vowels(char){
    char = char.toUpperCase();
    return char == "A" || char == "O" || char == "E" || char == "I" || char == "U";
}

function vowel_counter(sent){
    var counter = 0
    for (var i = 0; i < sent.length;i++){
        if (check_vowels(sent[i])){
            ++counter
        }
    }
    return counter
}

var your_name = prompt("Enter your name?");
alert(vowel_counter(your_name) + " Vowels");


// Q3
// Function to convert time from 24 to 12 Such 15:23 ---> 3:23

function convertTo12Hour(oldFormatTime) {
    console.log("oldFormatTime: " + oldFormatTime);
    var oldFormatTimeArray = oldFormatTime.split(":");

    var HH = parseInt(oldFormatTimeArray[0]);
    var min = oldFormatTimeArray[1];

    var AMPM = HH >= 12 ? "PM" : "AM";
    var hours;
    if(HH == 0){
      hours = HH + 12;
    } else if (HH > 12) {
      hours = HH - 12;
    } else {
      hours = HH;
    }
    var newFormatTime = hours + ":" + min + " " + AMPM;
    return newFormatTime;
}

var time = prompt("Enter your time?");
alert(convertTo12Hour(time));










