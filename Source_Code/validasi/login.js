document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent form refresh

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  fetch("../data/users.json")
    .then((response) => response.json())
    .then((users) => {
      const user = users.find((u) => u.email === email && u.password === password);

      if (user) {
        if (user.role === "user") {
          alert("Login berhasil sebagai User!");
          window.location.href = "homepage_user.html";
        } else if (user.role === "admin") {
          alert("Login berhasil sebagai Admin!");
          window.location.href = "homepage_admin.html";
        }
      } else {
        alert("Email atau password salah! Silakan coba lagi.");
      }
    })
    .catch((error) => console.error("Error loading users.json:", error));
});
