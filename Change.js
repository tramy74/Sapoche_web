   // Get the login button and login status element
   var loginButton = document.getElementById('login-button');
   var loginStatus = document.getElementById('login-status');
   var login = document.getElementById('login');
   var Status = document.getElementById('status');
   // Update login status based on login success and username
   if (isLoginSuccess && username) {
       loginStatus.textContent = username;
       window.location.href = "index.php";
       Status.textContent = username;

   }