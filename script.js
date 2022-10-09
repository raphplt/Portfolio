let cpt = 0;
const items = document.querySelectorAll('h4');
const nbSlide = items.length;
const last = document.querySelector('.left');
const next = document.querySelector('.right');

function nextSlide(){
    items[cpt].classList.remove('active');
    if(cpt < nbSlide - 1){
        cpt++;
    } else {
        cpt = 0;
    }
    items[cpt].classList.add('active')
    console.log(cpt);
}
next.addEventListener('click', nextSlide)

function lastSlide(){
    items[cpt].classList.remove('active');
    if(cpt > 0){
        cpt--;
    } else {
        cpt = nbSlide - 1;
    }
    items[cpt].classList.add('active')    
}
last.addEventListener('click', lastSlide)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        lastSlide();
    } else if(e.keyCode === 39){
        nextSlide();
    }
}

document.addEventListener('keydown', keyPress)