const tablinks = document.querySelectorAll('.tablinks');
tablinks.forEach((link, idx) => {
    link.addEventListener('click', (e) => {
        // if(e.target === tablinks[idx]){
        //     e.target.classList.add("active");
        // }else{
        //     link.classList.remove("active");
        // }
        e.target.parentElement.parentElement.style.backgroundImage = `url(/wp-content/themes/easyprofessional/assets/images/service_${idx+1}.png)`;
    })
})

const hamburger = document.querySelector('.hamburger');
const pseudonavdropdown = document.querySelector('.navbar-menu-mb');
const pseudocontactBtn = document.querySelector('.btn-contact-us-mb');

const navdropdown = document.querySelector('.navbar-menu');
const contactBtn = document.querySelector('.btn-contact-us');

window.addEventListener('resize', (e) => {
    let w = document.documentElement.clientWidth;
    if(w > 1000){
        pseudonavdropdown.classList.remove('show');
        pseudocontactBtn.classList.remove('show');
    }
    // if(w < 1000){
    //     navdropdown.classList.add('hide');
    //     contactBtn.classList.add('hide');
    // }
})

hamburger.addEventListener('click', (e) => {
    pseudonavdropdown.classList.toggle('show');
    pseudocontactBtn.classList.toggle('show');
})