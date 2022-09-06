// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDhJN4hQdfYME4oBOB2kqVT6v-MQNli9KE",
  authDomain: "portfolio-yanni.firebaseapp.com",
  projectId: "portfolio-yanni",
  storageBucket: "portfolio-yanni.appspot.com",
  messagingSenderId: "650592291815",
  appId: "1:650592291815:web:f94d9259a52c38c89fcb42",
  measurementId: "G-0K5C37S4SM"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

/* Menu déroulant */
$('.navTrigger').click(function () {
    $(this).toggleClass("active");
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();
});
if (window.matchMedia("(max-width: 768px)").matches) {
    console.log("True");
    $('.fermer').click(function(){
        $('.navTrigger').toggleClass("active");
        $("#mainListDiv").toggleClass("show_list");
        console.log("Clicked menu shut down");
        $("#mainListDiv").fadeIn();
    });
}
/* Disparition du chargement de la page */
document.documentElement.style.overflow = 'hidden';
let loader = document.querySelector('.load');
window.addEventListener('load', () => { 
    setTimeout(function() {
    loader.style.opacity = '0';
    loader.style.transition = 'opacity 1s ease';
    loader.style.position = 'absolute';
    loader.style.zIndex = '-1';
    document.documentElement.style.overflow = 'visible';
    document.querySelector('.nav').style.zIndex ='1';
    document.querySelector('.rotate').style.zIndex ='2';
    }, 0);
});
/* Fond noir pour la barre de navigation quand on scroll */
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
    } else {
        $('.nav').removeClass('affix');
    }
});

/* Affichage des projets dans Works*/
function getId(monId) {
    let nomodal = '#modal' + monId;
    document.querySelector(nomodal).style.display = null;
    document.querySelector(nomodal).style.overflow = 'scroll';
    document.documentElement.style.overflow = 'hidden';
    
    $(nomodal).click(function(evt){    
        if(evt.target.id == "wrapper")
        return;
        //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
        if($(evt.target).closest('#wrapper').length)
        return;             

    //Do processing of click event here for every element except with modal wrapper
        document.querySelector(nomodal).style.display = 'none';
        document.documentElement.style.overflow = 'visible';
    });
}

/*Changement d'images dans Works*/
let slides = document.querySelectorAll('.slide');
let currentSlide = 1;
displaySlides(currentSlide);

function setSlides (num) {
    displaySlides(currentSlide += num);
}

function displaySlides (num) {
    if (num > slides.length) {
        currentSlide = 1;
    }
    if (num < 1) {
        currentSlide = slides.length;
    }
    for (let x=0; x < slides.length; x++) {
        slides[x].style.display = "none";
    }
    slides[currentSlide-1].style.display = "block";
}


/*Validation des champs du formulaire*/
function validate() {
    var isValid = true;

    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();

    if (name == "") {
        $("#name").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (email == "") {
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#info").html("(Adresse email non valide)");
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (subject == "") {
        $("#subject").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (message == "") {
        $("#message").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
}