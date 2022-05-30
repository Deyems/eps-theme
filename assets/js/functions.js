const tablinks = document.querySelectorAll('.tablinks');

tablinks.forEach((link, idx) => {
    link.addEventListener('click', (e) => {
        // if(e.target === tablinks[idx]){
        //     e.target.classList.add("active");
        // }else{
        //     link.classList.remove("active");
        // }
        e.target.parentElement.parentElement.style.backgroundImage = `url(./public/assets/images/service_${idx+1}.png)`;
    })
})
