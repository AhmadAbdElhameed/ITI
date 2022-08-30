
// factory functions method
function Person(fullName) {
    return {
        fullName,
        money: 100,
        sleepMood: "Happy",
        healthRate: 100,
        // sleep function
        sleep: (hours) => {
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
        eat: (meals) => {
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
        buy: (items) => {
            for (var i = 1; i <= items; i++) {
                this.money -= 10;
            }
            console.log(this.money)
        }
    }
}

const p4 = Person("Aly")
p4.sleep(10)
p4.eat(2)
p4.buy(1)