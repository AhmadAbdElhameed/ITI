// oloo method

const Person = {
    init(fullName) {
        this.fullName = fullName
        this.money = 100
        this.sleepMood = 'Happy'
        this.healthRate = 100
    },

    // sleep function
    sleep: function (hours) {
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
    },
    // eat function
    eat: function (meals) {
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
    },
    // buy function
    buy: function (items) {
        for (var i = 1; i <= items; i++) {
            this.money -= 10;
        }
        console.log(this.money)
    }

}

const p3 = Object.create(Person)

p3.init("Aly")
p3.sleep(5)
p3.eat(2)
p3.buy(5)