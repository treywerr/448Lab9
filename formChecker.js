function checkForms() {
    // Check quantity fields
    let a = document.getElementById('apple').value;
    let b = document.getElementById('banana').value;
    let o = document.getElementById('orange').value;

    if (a == "" || b == "" || o == "") {
        alert("Cannot leave quantity fields blank.");
        return false;
    }
    if (a < 0 || b < 0 || o < 0) {
        alert("Quantities cannot be negative.");
        return false;
    }

    // Check username and password
    let user = document.getElementById('username').value;
    let pass = document.getElementById('password').value;

    if (user == "") {
        alert("Username cannot be left blank.");
        return false;
    } else {
        let regex = /(\w|\s)+@(\w|\s)+.com/;
        let n = user.search(regex);
        if (n == -1) {
            alert("Invalid email.");
            return false;
        }
    }
    if (pass == "") {
        alert("Password cannot be left blank.");
        return false;
    }

    // Check shipping method
    let shipping = document.getElementsByName('shipping');

    for (var i = 0; i < shipping.length; i++) {
        if (shipping[i].checked) {
            return true;
        }
    }
    alert("Must select a shipping method.");
    return false;
}