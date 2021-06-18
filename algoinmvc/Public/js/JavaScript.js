// let modal_spawn = document.querySelector('button[data-toggle="modal-login"]');
// let modal_spawn2 = document.querySelectorAll('button[data-toggle="modal-login"]')[1];
// let login_set = document.querySelector('.cover');
// let login_set2 = document.querySelectorAll('.cover')[1];
// let login_card = login_set.querySelector('.cover-container');
// let login_card2 = login_set2.querySelector('.cover-container');
// let login_ready_button = login_set.querySelector('.cover-container-tombol-login');
// let login_verdict = login_set.querySelector('.cover-verdict');
// let regist = document.getElementById('daftar-s');
// let login = document.getElementById('masuk-s');

// body_page = document.querySelector('.halaman-utama-container');

// regist.addEventListener("click", function() {
//     login_set.classList.remove('show');
//     login_set2.classList.add('show');
// });

// login.addEventListener("click", function() {
//     login_set2.classList.remove('show');
//     login_set.classList.add('show');
// });

// modal_spawn2.addEventListener("click", function() {
//     login_set2.classList.add('show');
// });

// modal_spawn.addEventListener("click", function() {
//     login_set.classList.add('show');
// });

// login_set2.addEventListener('click', function() {
//     login_set2.classList.remove('show');
// });

// login_set.addEventListener('click', function() {
//     login_set.classList.remove('show');
// });

// login_card2.addEventListener('click', function(holds) {
//     holds.stopPropagation();
// });

// login_card.addEventListener('click', function(holds) {
//     holds.stopPropagation();
// });


// login_ready_button.addEventListener('click', function(event) {
//     let username_input = document.forms['form-login']['username'].value;
//     let password_input = document.forms['form-login']['password'].value;
//     event.preventDefault();
//     if (username_input == "raras" && password_input == "abc123") {
//         login_verdict.style.backgroundColor = "#c6e686";
//         login_verdict.style.borderColor = "#446418";
//         login_verdict.classList.add('show');
//         login_verdict.innerHTML = "Login berhasil.";
//         var myVar = setInterval(function myTimer() {
//             login_set.classList.remove('show');
//             location.assign("../halamanakun/");
//             clearInterval(myVar);
//         }, 1500);
//     } else {
//         login_verdict.style.backgroundColor = "#FFE3E6";
//         login_verdict.style.borderColor = "#ECBCC0";
//         login_verdict.classList.add('show');
//         login_verdict.innerHTML = "Incorrect username or password.";
//     }
// });

// function userDropdown() {
//     let dropdown = document.getElementById("dropdown-ready");
//     dropdown.classList.toggle("show");
// }