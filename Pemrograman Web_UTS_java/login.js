function validateLogin(event) {
    console.log("Fungsi validateLogin dipanggil"); 

    event.preventDefault();

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    console.log("Email:", email); 
    console.log("Password:", password); 

    if (email === "" || password === "") {
        alert("Email dan password tidak boleh kosong!");
        return false;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Masukkan email yang valid!");
        return false;
    }

    if (email === "nendamaulinkurniati@gmail.com" && password === "123456") {
        console.log("Login berhasil!"); 
        sessionStorage.setItem('username', 'Nenda89');
        window.location.href = "menu.html";
        return false; 
    } else {
        alert("Email atau password salah!");
        console.log("Login gagal - Email atau password salah."); 
        return false;
    }
}
