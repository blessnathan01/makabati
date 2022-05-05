<?php include_once "header-2.php"; ?>
<body style="background: #f7f7f7;">
    <div class="main-container">
    <div class="wrapper2" style="margin-top: 0px; background-color: #f7f7f7;">
    <section class="form change_pswd">
      <header>Financial Statement</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Doc. Date<span style="color: red;">*</span></label>
          <input type="date" name="doc_date" required>
        </div>
        <div class="field input">
          <label>Posting Date<span style="color: red;">*</span></label>
          <input type="date" name="posting_date" required>
        </div>
        <div class="field input">
          <label>Reference Number<span style="color: red;">*</span></label>
          <input type="number" name="reference" required>
        </div>
        <div class="field input">
          <label>General Ledger Accounts<span style="color: red;">*</span></label>
          <select name="gl_accs" id="gl_accs" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="None">select your option</option>
          </select> 
        </div>
        <div class="field input">
          <label>Debit/Credit<span style="color: red;">*</span></label>
          <select name="dr_cr" id="dr_cr" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="None">select your option</option>
          </select> 
        </div>
        <div class="field input">
          <label>Debit Amount<span style="color: red;">*</span></label>
          <input type="number" name="debit_amount" placeholder="Amount in Tshs" required>
        </div>
        <div class="field input">
          <label>Credit Amount<span style="color: red;">*</span></label>
          <input type="number" name="credit_amount" placeholder="Amount in Tshs" required>
        </div>
        <div class="field input">
          <label>Short Description<span style="color: red;">*</span></label>
          <input type="text" name="short_desc" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="SAVE">
        </div>  
      </form>
    </section>
  </div>
    </div>
  </section>

  <script src="js/finance.js"></script>
</body>