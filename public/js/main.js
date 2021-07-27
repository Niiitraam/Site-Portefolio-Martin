// cursor

var cursor = document.querySelector('.cursor')

document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:'+(e.pageY -20) + 'px; left:'+ (e.pageX - 20)+'px;')
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