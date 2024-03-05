const showPasswordIcon = document.getElementById('showPassword');
const passwordInput = document.getElementById('password');
const confirmpassword = document.getElementById('confirm-password');
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
const confirmPasswordInput = document.getElementById('confirm-password');
const eyeIconConfirm = showConfirmPasswordIcon.querySelector('#eyeIcon');
const eyeSlashIconConfirm = showConfirmPasswordIcon.querySelector('#eyeSlashIcon');

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

import DataTable from 'datatables.net-dt';

$(document).ready(function () {
    let table = new DataTable('#myTable', {
        "dom": '<"flex flex-row justify-between items-center mb-4"<"flex-shrink-0"f><"flex-shrink-0"l><"flex-shrink-0"B>><t><"flex justify-between items-center mt-4"p>',
        "language": {
            "search": '<input type="text" class="px-3 py-1 border rounded focus:outline-none focus:border-blue-500 dark:bg-gray-100 dark:border-gray-400 dark:text-gray-900" placeholder="Search...">',
            "paginate": {
                "first": '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"><path d="M12 2L3 9h5v12h4V9h5z"/></svg>',
                "last": '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"><path d="M3 9h5v12h4V9h5l-7-7z"/></svg>',
                "next": '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"><path d="M8 5v14l11-7z"/></svg>',
                "previous": '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"><path d="M14 19l-11-7 11-7v14z"/></svg>'
            }
        }
    });
});