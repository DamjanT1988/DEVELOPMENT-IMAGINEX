//menu mobile
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

//new page - objekct marking
let nameCurrPage = document.querySelector('[aria-current="page"]');
let CurrPage = nameCurrPage.firstChild.nodeValue;
document.getElementById("currentPage").innerHTML = CurrPage;