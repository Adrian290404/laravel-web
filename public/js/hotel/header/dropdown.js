let dropdownOpen = document.getElementById("dropdownOpen")
let dropdownClose = document.getElementById("dropdownClose")
let navbar = document.getElementById("navBar")
function toggleNavbar() {
    console.log("toggleNavbar")
    navbar.classList.toggle("is-visible")
    dropdownOpen.classList.toggle("hidden")
    dropdownClose.classList.toggle("hidden")
}

dropdownOpen.addEventListener("click", toggleNavbar)
dropdownClose.addEventListener("click", toggleNavbar)