let close_js = document.querySelector(".close");
let big_popup = document.querySelector(".bg_popup");
let signup_btn = document.querySelector("#signup_btn");

//EVENT LISTENERS
close_js.addEventListener("click", closefn);
signup_btn.addEventListener("click", openfn);

//FUNCTIONS
function closefn() {
    big_popup.style.visibility = 'hidden';
}

function openfn() {
    big_popup.style.visibility = 'visible';
}