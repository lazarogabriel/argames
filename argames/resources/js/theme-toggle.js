var body = document.querySelectorAll('body');
var bodyClass = body.classList;
var themeToggle = document.querySelector('#theme-toggle');
var footer = document.querySelectorAll('.footer');
var light = document.querySelectorAll('.light');
var dark = document.querySelectorAll('.dark');
var flight = document.querySelectorAll('.footer-light');
var fdark = document.querySelectorAll('.footer-dark');


themeToggle.addEventListener('click', () => {
    light.forEach((elemento)=> 
        elemento.classList.toggle("light")
    );
    dark.forEach((elemento)=> 
        elemento.classList.toggle("dark"));
    body.classList.toggle("light");
    body.classList.toggle("dark");
    themeToggle.classList.toggle("btn-light");
    themeToggle.classList.toggle("btn-dark");
    footer.classList.toggle("footer-light");
    footer.classList.toggle("footer-dark");
    flight.forEach((elemento)=> 
        elemento.classList.toggle("footer-light")
    );
    fdark.forEach((elemento)=> 
        elemento.classList.toggle("footer-dark"));
});