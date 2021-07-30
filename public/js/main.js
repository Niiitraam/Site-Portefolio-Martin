// cursor

var cursor = document.querySelector('.cursor')
var cursor2 = document.querySelector('.cursor2')

document.addEventListener('mousemove', e => {
    cursor2.setAttribute('style', 'top:' + (e.pageY) + 'px; left:' + (e.pageX) + 'px;')
})


document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:' + (e.pageY - 35) + 'px; left:' + (e.pageX - 35) + 'px;')
})

document.addEventListener('click', () => {
    cursor.classList.add('expand')

    setTimeout(() => {
        cursor.classList.remove('expand')
    }, 500)
})

// Loader

var loader = document.querySelector('.loader')
var accueil = document.querySelector('.accueil')

window.addEventListener('click', () => {

    loader.classList.add('fondu-out')
    accueil.classList.remove('d-none')

})

// Section one by one
var ratio = 0.7

var options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
  }

var handleIntersect = function(entries, observer){
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
    });
}

var observer = new IntersectionObserver(handleIntersect, options)

document.querySelectorAll('[class*="reveal-"]').forEach(function(r){
    observer.observe(r)
})

// scrollbar

var progressBar = document.querySelector('.scrollbar')

window.addEventListener('scroll', () => {
    let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
    let progress = (document.documentElement.scrollTop / totalHeight) * 100
    progressBar.style.height = `${progress}%`
    progressBar.style.opacity = `${progress}%`
})

var progressBarClick = document.querySelector('.clickScrollbar')

progressBarClick.addEventListener('click', (e) => {
    let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
    let newPageScroll = e.clientX / progressBarClick.offsetHeight * totalHeight
    window.scrollTo({
        top: newPageScroll,
        behavior: 'smooth'
    })
})

var boxAll = document.getElementsByClassName('w-box')
var pAll = document.getElementsByClassName('text')

var tableauBox = Array.from(boxAll)
var tableauP = Array.from(pAll)

tableauBox.forEach((element, index) => {
    element.addEventListener('mouseover', function () {
        opacityOne(index)
    });
    element.addEventListener('mouseout', function () {
        opacityNone(index)
    });
});

function opacityOne(i){
    tableauP[i].classList.add('text-one')
    tableauP[i].classList.remove('text')
}

function opacityNone(i){
    tableauP[i].classList.remove('text-one')
    tableauP[i].classList.add('text')
}


// Projet

var box1 = document.querySelector('.js-modal-1')
var box2 = document.querySelector('.js-modal-2')
var box3 = document.querySelector('.js-modal-3')
var positionBox1 = document.querySelector('.position-box-1')
var positionBox2 = document.querySelector('.position-box-2')
var positionBox3 = document.querySelector('.position-box-3')
var ouverture = document.querySelector('.ouverture')

box1.addEventListener('click', test1)
box2.addEventListener('click', test2)
box3.addEventListener('click', test3)

function test1(){
    positionBox1.style.display = 'flex';
    positionBox1.style.justifyContent = "space-around"
    ouverture.style.display = 'flex';
    ouverture.classList.add('ouverture-box')
}

function test2()
{
    positionBox2.style.display = 'flex';
    positionBox2.style.justifyContent = "space-around"
    ouverture.style.display = 'flex';
    ouverture.classList.add('ouverture-box')
}

function test3(){
    positionBox3.style.display = 'flex';
    positionBox3.style.justifyContent = "space-around"
    ouverture.style.display = 'flex';
    ouverture.classList.add('ouverture-box')
}

var closeBox = document.querySelector('.fermeture-modal')
var closeBox2 = document.querySelector('.fermeture-modal-1')
var closebox3 = document.querySelector('.fermeture-modal-2')

closeBox.addEventListener('click', close)
closeBox2.addEventListener('click', close)
closebox3.addEventListener('click', close)

function close(){
    positionBox1.style.display = 'none'
    positionBox2.style.display = 'none'
    positionBox3.style.display = 'none' 
    ouverture.style.display = 'none'
    ouverture.classList.remove('ouverture-box')
}
