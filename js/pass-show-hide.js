const pswrdField = document.querySelector(".form input[type='password']"),
    toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () => {
    if (pswrdField.type === "password") {
        pswrdField.type = "text";
        toggleIcon.classList.add("active");
    } else {
        pswrdField.type = "password";
        toggleIcon.classList.remove("active");
    }
}

const confirm_pswrdField = document.querySelector("#password2"),
    toggleIcon2 = document.querySelector("#confirm_eye");

toggleIcon2.onclick = () => {
    if (confirm_pswrdField.type === "password") {
        confirm_pswrdField.type = "text";
        toggleIcon2.classList.add("active");
    } else {
        confirm_pswrdField.type = "password";
        toggleIcon2.classList.remove("active");
    }
}