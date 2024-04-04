const rightbtn = document.querySelector('.fa-chevron-right')
const leftbtn = document.querySelector('.fa-chevron-left')
const imgNumber = document.querySelectorAll('.slider-container-left-top img')

let index = 0;
rightbtn.addEventListener("click", function() {
    index = index + 1;
    if (index > imgNumber.length - 1) {
        index = 0;
    }
    document.querySelector(".slider-container-left-top").style.right = index * 100 + "%";
});
leftbtn.addEventListener("click", function() {
    index = index - 1;
    if (index <= 0) {
        index = imgNumber.length - 1;
    }
    document.querySelector(".slider-container-left-top").style.right = index * 100 + "%";
});
//-----------------------------------------slider 1
const imgNumberLi = document.querySelectorAll('.slider-container-left-bottom li')
imgNumberLi.forEach(function(image, index) {
    image.addEventListener("click", function() {
        removeative();
        document.querySelector(".slider-container-left-top").style.right = index * 100 + "%";
        image.classList.add("active");
    })
})


//---------------------------------------slider 2
function imgAuto() {
    index = index + 1;
    if (index > imgNumber.length - 1) {
        index = 0;
    }

    document.querySelector(".slider-container-left-top").style.right = index * 100 + "%";
    imgNumberLi[index].classList.add("active");
}
setInterval(imgAuto, 3000);