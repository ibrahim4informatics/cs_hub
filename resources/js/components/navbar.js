const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");
const menu = document.getElementById("menu");

openBtn.addEventListener("click", ()=>{
    menu.style.right = 0;
})

closeBtn.addEventListener("click", ()=>{
    menu.style.right="-100%";
})