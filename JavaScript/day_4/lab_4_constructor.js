// Constructor function method
function Person(fullName) {
    this.fullName = fullName
    this.money = 100
    this.sleepMood = 'Happy'
    this.healthRate = 100
    // sleep function
    this.sleep = function (hours) {
        if (hours == 7) {
            this.sleepMood = 'Happy'
            console.log(this.sleepMood)
        } else if (hours > 7) {
            this.sleepMood = 'Lazy'
            console.log(this.sleepMood)
        }
        else if (hours < 7) {
            this.sleepMood = 'Tired'
            console.log(this.sleepMood)
        }
    }
    // eat function
    this.eat = function (meals) {
        if (meals == 1) {
            this.healthRate = 50
            console.log(this.healthRate)
        } else if (meals == 2) {
            this.healthRate = 75
            console.log(this.healthRate)
        }
        else if (meals == 3) {
            this.healthRate = 100
            console.log(this.healthRate)
        }
    }
    // buy function
    this.buy = function (items) {
        for (i = 1; i <= items; i++) {
            this.money -= 10;
        }
        console.log(this.money)
    }

}

var p1 = new Person("Aly")
p1.sleep(9)
p1.eat(2)
p1.buy(5)
