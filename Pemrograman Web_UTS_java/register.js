function validateRegister(event) {
    event.preventDefault();

    const fullname = document.getElementById('fullname').value.trim();
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('error-message');

    errorMessage.innerText = "";

 
    if (!fullname || !username || !email || !password) {
        errorMessage.innerText = "Semua field harus diisi!";
        return false;
    }

    if (username.length < 3 || username.length > 15) {
        errorMessage.innerText = "Username harus antara 3-15 karakter!";
        return false;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        errorMessage.innerText = "Masukkan email yang valid!";
        return false;
    }

    if (password.length < 6) {
        errorMessage.innerText = "Password harus minimal 6 karakter!";
        return false;
    }

    alert("Registrasi berhasil! Anda akan diarahkan ke halaman login.");
    window.location.href = "login.html"; 

    return false;
}
