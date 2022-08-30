// class method
class Person {
    constructor(fullName) {
        this.fullName = fullName
        this.money = 100
        this.sleepMode = 'Happy'
        this.healthRate = 100
    }
    // sleep function
    sleep(hours) {
        if (hours == 7) {
            this.sleepMode = "Happy"
            console.log(this.sleepMode)
        } else if (hours > 7) {
            this.sleepMode = "Lazy"
            console.log(this.sleepMode)
        } else if (hours < 7) {
            this.sleepMode = "Tired"
            console.log(this.sleepMode)
        }
    }
    // eat function
    eat(meals) {
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
    buy(items) {
        for (var i = 1; i <= items; i++) {
            this.money -= 10;
        }
        console.log(this.money)
    }
}

var p2 = new Person("aly")
p2.sleep(9)
p2.eat(2)
p2.buy(5)