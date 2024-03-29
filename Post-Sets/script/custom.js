const showPasswordIcon = document.getElementById('showPassword');
const passwordInput = document.getElementById('password');
const confirmpassword = document.getElementById('confirm_password');
const eyeIcon = document.getElementById('eyeIcon');
const eyeSlashIcon = document.getElementById('eyeSlashIcon');

showPasswordIcon.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.style.display = 'none';
        eyeSlashIcon.style.display = 'block';
        console.log("Bruh one");
    } else {
        passwordInput.type = 'password';
        eyeIcon.style.display = 'block';
        eyeSlashIcon.style.display = 'none';
        console.log("Bruh two");
    }
});

const showConfirmPasswordIcon = document.getElementById('showConfirmPassword');
const confirmPasswordInput = document.getElementById('confirm_password');
const eyeIconConfirm = showConfirmPasswordIcon.getElementById('#eyeIcon');
const eyeSlashIconConfirm = showConfirmPasswordIcon.getElementById('#eyeSlashIcon');

showConfirmPasswordIcon.addEventListener('click', function () {
    if (confirmPasswordInput.type === 'password') {
        confirmPasswordInput.type = 'text';
        eyeIconConfirm.style.display = 'none';
        eyeSlashIconConfirm.style.display = 'block';
        console.log("bruh bro");
    } else {
        confirmPasswordInput.type = 'password';
        eyeIconConfirm.style.display = 'block';
        eyeSlashIconConfirm.style.display = 'none';
        console.log("bruh hoi");
    }
});



