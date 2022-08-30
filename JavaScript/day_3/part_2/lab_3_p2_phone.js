
let contacts = []
function phonebook() {

    let choice = Number(prompt("Welcome to phonebook app\n===================\nChoose the operation you wish to make?\n1>Add\n2>Search"))
    if (isNaN(choice)) {
        alert("Invalid entry!")
        phonebook()
    } else {
        switch (choice) {
            case 1:
                addUser()
            case 2:
                searchUser()
        }
    }
}

function addUser() {

    let contactName = prompt("Contact name :")
    if (!isNaN(contactName)) {
        alert("Invalid entry!")
        addUser()
    } else {
        let phoneNum = prompt("Phone number :")
        contact = {
            name: contactName,
            phone: phoneNum
        }
        contacts.push(contact)
        // console.log(contacts)
        newOperation = confirm("Do you want to make a new operation?")
        if (newOperation == true) {
            phonebook()
        }
        else {
            return 0
        }
    }

}
function searchUser() {
    let scope = Number(prompt("Search by :\n1>Name\n2>Phone"))
    if (isNaN(scope)) {
        alert("Invalid entry!")
        searchUser()
    } else {
        switch (scope) {
            case 1:
                let nameQuery = prompt("Enter name :");
                for (const contact of contacts) {
                    if (contact.name == nameQuery) {
                        alert(`Contact Info\n============\nName : ${contact.name}\nPhone : ${contact.phone}`)
                        break;
                    }

                }
                newOperation = confirm("Do you want to make a new operation?")
                if (newOperation == true) {
                    phonebook()
                }
                else {
                    return 0
                }
                break;
            case 2:
                let phoneQuery = prompt("Enter phone :");
                for (const contact of contacts) {
                    if (contact.phone == phoneQuery) {
                        alert(`Contact Info\n============\nName : ${contact.name}\nPhone : ${contact.phone}`)
                        break;
                    }
                }
                newOperation = confirm("Do you want to make a new operation?")
                if (newOperation == true) {
                    phonebook()
                }
                else {
                    return 0
                }
                break;
            default:
                break;
        }
    }

}

phonebook()