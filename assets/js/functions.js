const tablinks = document.querySelectorAll('.tablinks');
console.log('are we loaded on wp engine???')
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
console.log(hamburger,'here...')
const navdropdown = document.querySelector('.navbar-menu');
const contactBtn = document.querySelector('.btn-contact-us');

console.log(navdropdown,'dropdown nav')
hamburger.addEventListener('click', () => {
    navdropdown.classList.toggle('hide');
    contactBtn.classList.toggle('hide');
})