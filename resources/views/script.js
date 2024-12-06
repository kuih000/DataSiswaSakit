let modal = document.querySelector('.modal')
let overlay = document.querySelector(".overlay")
let btnOpen = document.querySelectorAll(".show-modal")
let btnClose = document.querySelector('.close-modal')
let text = document.getElementById("text")


for (let i = 0; i < btnOpen.length; i++)
    btnOpen[i].addEventListener('click', function() {
        console.info("button clicked")
        modal.classList.remove("hidden")
        overlay.classList.remove("hidden")
    })
    
    
    btnClose.addEventListener('click', function() {
        modal.classList.add("hidden")
        overlay.classList.add("hidden")
    })