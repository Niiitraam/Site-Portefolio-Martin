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

let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight

window.addEventListener('scroll', () => {

    let progress = (document.documentElement.scrollTop / totalHeight) * 100
    progressBar.style.height = `${progress}%`
    progressBar.style.opacity = `${progress}%`
})

var progressBarClick = document.querySelector('.clickScrollbar')

progressBarClick.addEventListener('click', (e) => {
    let newPageScroll = e.clientY / progressBarClick.offsetHeight * totalHeight
    window.scrollTo({
        top: newPageScroll,
        behavior: 'smooth'
    })
})