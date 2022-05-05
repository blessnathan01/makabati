const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "home.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

var gender = document.querySelector("#gender");
var gender_list = [
    { gender: "Male", value: "male" },
    { gender: "Female", value: "female" }
];

for (let index = 0; index < gender_list.length; index++) {
    var new_option = document.createElement("option");
    new_option.value = gender_list[index].value;
    new_option.innerHTML = gender_list[index].gender;
    gender.appendChild(new_option);
}