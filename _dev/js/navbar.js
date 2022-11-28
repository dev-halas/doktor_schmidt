

const navSlide = () => {
    const burger = document.querySelector('.hamburger');
    const nav = document.querySelector('.header');
    const navLinks = document.querySelectorAll('.headerLinks li');

    // you can use forEach here too
    [].forEach.call(navLinks, link => {
        link.addEventListener('click', btnClick, false)
    })
    
    function btnClick() {
        // use Array function for lexical this
        [].forEach.call(navLinks, link => {
            // except for the element clicked, remove --active class
            if (link !== nav) link.classList.remove('--active');
        });
    
        // toggle active on the clicked button
        nav.classList.toggle('--active');
    }

    burger.addEventListener('click', () => {
        nav.classList.toggle('--active');
    });

    navLinks.forEach((link) => {
        link.classList.remove('current_page_item');
        link.addEventListener('click', () => {
            for (let index = 0; index < navLinks.length; index++) {
                navLinks[index].classList.remove('current_page_item');
            }
            link.classList.add('current_page_item');
        });
    });


}

navSlide();





const headerScroll = document.querySelector('.header');

window.onscroll = function() {
    let top = window.scrollY; 
    if (top >= 300) {
        headerScroll.classList.add('scrolled')
    }
    else {
        headerScroll.classList.remove('scrolled')
    }
}

