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
const navdropdown = document.querySelector('.navbar-menu');
const contactBtn = document.querySelector('.btn-contact-us');

window.addEventListener('resize', (e) => {
    let w = document.documentElement.clientWidth;
    if(w > 1000){
        navdropdown.classList.remove('hide');
        contactBtn.classList.remove('hide');
    }
})

hamburger.addEventListener('click', (e) => {
    navdropdown.classList.toggle('hide');
    contactBtn.classList.toggle('hide');
})