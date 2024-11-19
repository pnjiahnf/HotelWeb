document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault(); 

  
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  
  if (validateLogin(email, password)) {
    alert("Login berhasil! Anda akan diarahkan ke homepage.");
    window.location.href = "homepage.html"; 
  } else {
    alert("Email atau password salah! Silakan coba lagi.");
  }
});

function validateLogin(email, password) {
  
  const validEmail = "panji@gmail.com";
  const validPassword = "silit";

  
  return email === validEmail && password === validPassword;
}
