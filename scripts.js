 const myForm = document.querySelector('.address-form-click');
 const aclose = document.querySelector('.address-close');


 myForm.addEventListener('click', function() {
     document.querySelector('.address-form').style.display = "flex";
 });
 aclose.addEventListener('click', function() {
     document.querySelector('.address-form').style.display = "none";
 });
 // ------------------------------------------slider 0
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

 function removeative() {
     let imgactive = document.querySelector('.active');
     imgactive.classList.remove("active");
 }
 //---------------------------------------slider 2
 function imgAuto() {
     index = index + 1;
     if (index > imgNumber.length - 1) {
         index = 0;
     }
     removeative();
     document.querySelector(".slider-container-left-top").style.right = index * 100 + "%";
     imgNumberLi[index].classList.add("active");
 }
 setInterval(imgAuto, 3000);
 //------------------------------------slider-product
 const rightbtntwo = document.querySelector('.fa-chevron-right-two')
 const leftbtntwo = document.querySelector('.fa-chevron-left-two')
 const imgNumbertwo = document.querySelectorAll('.slider-product-one-content-items')

 rightbtntwo.addEventListener("click", function() {
     index = index + 1;
     if (index > imgNumbertwo.length - 1) {
         index = 0;
     }
     document.querySelector(".slider-product-one-content-items-content").style.right = index * 100 + "%";
 });
 leftbtntwo.addEventListener("click", function() {
     index = index - 1;
     if (index <= 0) {
         index = imgNumbertwo.length - 1;
     }
     document.querySelector(".slider-product-one-content-items-content").style.right = index * 100 + "%";
 });
 // -----------------------------------------Search
 let recomentlist = [
         "Iphone 14 Pro Max 128GB | Chính hãng VN/A ",
         "SamSung Galaxy S23 Ultra 256GB",
         "Iphone 13 128GB | Chính hãng VN/A",
         "Iphone 13 128GB Pro Max | Chính hãng VN/A ",
         "SamSung Galaxy Z Flip4 128GB",
         "Iphone 13 Pro Max 256GB | Chính hãng VN/A",
         "Đồng hồ thông minh Xiaomi Watch S1 Active"

     ]
     //dăng nhập
 document.getElementById("login").addEventListener("click", function() {
     var status = document.getElementById("status").textContent;
     if (status !== "Đăng nhập") {
         // The username is not "Đăng nhập", so perform the desired action
         var xhr = new XMLHttpRequest();
         xhr.open("POST", "update.php", true);
         xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhr.onreadystatechange = function() {
             //  if (xhr.readyState === 4 && xhr.status === 200) {
             //      // Update the UI or perform any other necessary actions
             //  }
         };
         xhr.send("username=đăng nhập&mật khẩu=12346");
     }
 });