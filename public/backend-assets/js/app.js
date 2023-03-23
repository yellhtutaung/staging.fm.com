const menu = document.querySelector(".menu");
const sidebar = document.querySelector(".sidebar");
const main = document.querySelector(".main");
const content =document.querySelector(".content-section")
const footer = document.querySelector('footer')
// const body = document.querySelector(".body");

menu.addEventListener("click", () => {
    if (window.screen.width > 992) {
        if (menu.classList.contains("clicked")) {
            sidebar.classList.remove("sidebar-change-1");
            main.classList.remove("main-change-1");
            menu.classList.remove("clicked");
            footer.classList.remove("footer-toggle");
        } else {
            sidebar.classList.add("sidebar-change-1");
            main.classList.add("main-change-1");
            menu.classList.add("clicked");
            footer.classList.add("footer-toggle");
        }
    } else {
        console.log(sidebar)
        sidebar.classList.add("sidebar-change-2");
        menu.classList.add("clicked");
    }
});

content.addEventListener("click", () => {
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
let fileTypes = ['jpg', 'png', 'jpeg', 'webp'];
function preview(){

    let extension = fileInput.files[0].name.split('.').pop().toLowerCase()
    let isSuccess = fileTypes.indexOf(extension) > -1;
    if(!isSuccess){
        document.querySelector('.file-invalid-feedback').classList.remove('d-none')
        setTimeout(() => {
            document.querySelector('.file-invalid-feedback').classList.add('d-none')
        }, 3000)
        return false;
    }

    if(fileInput.files.length > 0) {
        imageContainer.innerHTML = "";
        for(i of fileInput.files){
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            // figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload=()=>{
                let img = document.createElement("img");
                img.addEventListener('click', function () { document.getElementById('file-input').click() })
                img.classList.add('preview-img')
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);
            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }

    return;

}


// sidebar inner data

let dropTags = document.getElementsByClassName('dropNav')
let asideIconTags = document.getElementsByClassName('aside-icon')

let dropTagAction = (dropId) => {
    let dropIdTag = document.getElementById(`${dropId}`)
    let asideIconTag = document.getElementById(`${dropId}`+'-icon')
    if (dropIdTag.classList.contains('open-drop')){
        asideIconTag.classList.remove('aside-icon-action')
        dropIdTag.classList.remove('open-drop')
    }else {
        for(let i = 0; i < dropTags.length ; i++) {
            dropTags[i].classList.remove('open-drop')
        }
        for(let i = 0; i < asideIconTags.length ; i++) {
            asideIconTags[i].classList.remove('aside-icon-action')
        }
        setTimeout(()=>{
            dropIdTag.classList.add('open-drop')
            asideIconTag.classList.add('aside-icon-action')
        }, 100)
    }
}



