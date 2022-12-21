import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
let modalCollection = document.getElementsByClassName("myModal");

let btnCollection = document.getElementsByClassName("myBtn");

let spanColllection = document.getElementsByClassName("close");

for(let i=0; i<btnCollection.length; i++){

    btnCollection[i].onclick = function(e) {
        e.preventDefault();
        modalCollection[i].style.display = "block";
    }

    spanColllection[i].onclick = function() {
        modalCollection[i].style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modalCollection) {
        for(let element of modalCollection){
            element.style.display = "none";
        }
    }
}