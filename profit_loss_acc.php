<?php include_once "header-2.php"; ?>
<body style="background: #f7f7f7;">
    <div class="main-container">
    <div class="wrapper2" style="margin-top: 0px; background-color: #f7f7f7;">
    <section class="form profit_loss">
      <header>Profit and Loss Account</header>
      <form action="#" id="profit_loss_form" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Dr./Cr.<span style="color: red;">*</span></label>
          <select name="dr_cr_2" id="dr_cr_2" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="None">select your option</option>
          </select> 
        </div>
        <div class="field input">
          <label>Particular<span style="color: red;">*</span></label>
          <input type="text" name="particular" required>
        </div>
        <div class="field input">
          <label>Amount<span style="color: red;">*</span></label>
          <input type="number" name="amount" placeholder="Amount in Tshs" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="SAVE">
        </div>  
      </form>
    </section>
  </div>
    </div>
  </section>

  <script>
    // Dr / Cr dropdown
    var dr_cr_2 = document.querySelector("#dr_cr_2");
    var dr_cr_2_list = [
        { dr_cr_2: "Dr.", value: "Dr." },
        { dr_cr_2: "Cr.", value: "Cr." }
    ];

    for (let index = 0; index < dr_cr_2_list.length; index++) {
        var new_option = document.createElement("option");
        new_option.value = dr_cr_2_list[index].value;
        new_option.innerHTML = dr_cr_2_list[index].dr_cr_2;
        dr_cr_2.appendChild(new_option);
    }

    const form = document.querySelector(".profit_loss form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();

    document.getElementById("profit_loss_form").reset();

}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/profit_loss_acc.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "profit_loss_acc.php";
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
  </script>
</body>