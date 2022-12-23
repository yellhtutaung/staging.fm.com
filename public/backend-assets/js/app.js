const menu = document.querySelector(".menu");
const sidebar = document.querySelector(".sidebar");
const main = document.querySelector(".main");
// const body = document.querySelector(".body");

menu.addEventListener("click", () => {
    if (window.screen.width > 992) {
        if (menu.classList.contains("clicked")) {
            sidebar.classList.remove("sidebar-change-1");
            main.classList.remove("main-change-1");
            menu.classList.remove("clicked");
        } else {
            sidebar.classList.add("sidebar-change-1");
            main.classList.add("main-change-1");
            menu.classList.add("clicked");
        }
    } else {
        sidebar.classList.add("sidebar-change-2");
        menu.classList.add("clicked");
    }
});

main.addEventListener("click", () => {
    if (window.screen.width < 992) {
        sidebar.classList.remove("sidebar-change-2");
        menu.classList.remove("clicked");
    }
});

var inputBoxs = document.querySelectorAll(".inputBox");
var invalidChars = ["-", "+", "e"];

for (let i = 0; i < inputBoxs.length; i++) {
    let inputBox = inputBoxs[i];
    inputBox.addEventListener("keydown", function (e) {
        if (invalidChars.includes(e.key)) {
            e.preventDefault();
        }
    });
}



let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementsByClassName("preview-img-container")[0];

function preview(){
    imageContainer.innerHTML = "";

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        // figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.classList.add('preview-img')
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
