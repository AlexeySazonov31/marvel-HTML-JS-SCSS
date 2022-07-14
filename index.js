let menuOpen = document.getElementById("menuOpen");
let menuClose = document.getElementById("menuClose");
let menu = document.getElementById('menu');

menuOpen.addEventListener("click", function openMenu(){
    menu.classList.add('active');
});
menuClose.addEventListener("click",function closeMenu(){
    menu.classList.remove('active');
});


let links = document.querySelectorAll('.mainMenuMobile a');

for( let link of links ){
    link.addEventListener('click', function closeMenu(){
        menu.classList.remove('active');
    })
}



const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};

const mobContact = document.getElementById('mobContact');

mobContact.addEventListener('click',  function closeMenu(){
    menu.classList.remove('active');
})




