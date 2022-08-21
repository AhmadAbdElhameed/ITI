

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