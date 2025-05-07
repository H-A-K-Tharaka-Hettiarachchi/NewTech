function changeView() {


    var registerBox = document.getElementById("registerBox");
    var loginBox = document.getElementById("loginBox");


    registerBox.classList.toggle("d-none");
    loginBox.classList.toggle("d-none");



}

function home() {

    window.location = "home.php";

}

function login() {

    window.location = "home.php";

}


function gotocart() {

    window.location = "cart.php";

}



function changeproduct(id) {



    if (id == "con") {
        window.location = "consolegaming.php";
    } else if (id == "lap") {
        window.location = "laptops.php";
    } else if (id == "dek") {
        window.location = "dekstopworktations.php";
    } else if (id == "gam") {
        window.location = "gamingdekstops.php";
    } else if (id == "bdc") {
        window.location = "budgetdekstopcomputers.php";
    } else if (id == "cpu") {
        window.location = "processors.php";
    } else if (id == "gtab") {
        window.location = "graphictablettab.php";
    } else if (id == "mb") {
        window.location = "motherboards.php";
    } else if (id == "ram") {
        window.location = "memoryram.php";
    } else if (id == "gpu") {
        window.location = "graphiccards.php";
    } else if (id == "psu") {
        window.location = "powersupply.php";
    } else if (id == "cool") {
        window.location = "coolingandlighting.php";
    } else if (id == "sto") {
        window.location = "storage.php";
    } else if (id == "cas") {
        window.location = "casing.php";
    } else if (id == "rom") {
        window.location = "opticaldrives.php";
    } else if (id == "moni") {
        window.location = "monitors.php";
    } else if (id == "shp") {
        window.location = "speakersandheadphones.php";
    } else if (id == "kmg") {
        window.location = "keyboardsmicandgamepads.php";
    } else if (id == "gch") {
        window.location = "gamingchairs.php";
    } else if (id == "cc") {
        window.location = "cablesandconnectors.php";
    } else if (id == "exs") {
        window.location = "externalstorage.php";
    } else if (id == "lsr") {
        window.location = "livestreamingandrecording.php";
    }



}


function changeproduct2() {

    var select = document.getElementById("category");

    // alert(select.value);

    if (select.value == "1") {
        window.location = "consolegaming.php";
    } else if (select.value == "2") {
        window.location = "laptops.php";
    }


}