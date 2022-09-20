const page=document.querySelectorAll('.page')
const img=document.querySelectorAll('.img')

img[1].style.display='none'
img[2].style.display='none'
img[3].style.display='none'
img[4].style.display='none'

page[0].addEventListener('click', function() {
    img[0].style.display='block'
    img[1].style.display='none'
    img[2].style.display='none'
    img[3].style.display='none'
    img[4].style.display='none'
})

page[1].addEventListener('click', function() {
    img[0].style.display='none'
    img[1].style.display='inline'
    img[2].style.display='none'
    img[3].style.display='none'
    img[4].style.display='none'
})

page[2].addEventListener('click', function() {
    img[0].style.display='none'
    img[1].style.display='none'
    img[2].style.display='inline'
    img[3].style.display='none'
    img[4].style.display='none'
})

page[3].addEventListener('click', function() {
    img[0].style.display='none'
    img[1].style.display='none'
    img[2].style.display='none'
    img[3].style.display='inline'
    img[4].style.display='none'
})

page[4].addEventListener('click', function() {
    img[0].style.display='none'
    img[1].style.display='none'
    img[2].style.display='none'
    img[3].style.display='none'
    img[4].style.display='inline'
})