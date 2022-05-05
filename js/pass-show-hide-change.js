const old_pswrdField = document.querySelector(".form input[type='password']"),
    toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () => {
    if (old_pswrdField.type === "password") {
        old_pswrdField.type = "text";
        toggleIcon.classList.add("active");
    } else {
        old_pswrdField.type = "password";
        toggleIcon.classList.remove("active");
    }
}

const new_pswrdField = document.querySelector("#password2"),
    toggleIcon2 = document.querySelector("#confirm_eye");

toggleIcon2.onclick = () => {
    if (new_pswrdField.type === "password") {
        new_pswrdField.type = "text";
        toggleIcon2.classList.add("active");
    } else {
        new_pswrdField.type = "password";
        toggleIcon2.classList.remove("active");
    }
}

const new_pswrdField2 = document.querySelector("#password3"),
    toggleIcon3 = document.querySelector("#confirm_eye2");

toggleIcon3.onclick = () => {
    if (new_pswrdField2.type === "password") {
        new_pswrdField2.type = "text";
        toggleIcon3.classList.add("active");
    } else {
        new_pswrdField2.type = "password";
        toggleIcon3.classList.remove("active");
    }
}