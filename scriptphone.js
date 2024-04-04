const myForm = document.querySelector('.address-form-click');
const aclose = document.querySelector('.address-close');

myForm.addEventListener('click', function() {
    document.querySelector('.address-form').style.display = "flex";
});
aclose.addEventListener('click', function() {
    document.querySelector('.address-form').style.display = "none";
});