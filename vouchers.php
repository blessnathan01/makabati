<?php include_once "header-2.php"; ?>
<body style="background: #f7f7f7;">
    <div class="main-container">
    <div class="wrapper2" style="margin-top: 0px; background-color: #f7f7f7;">
    <section class="form voucher">
      <header>Accounting Vouchers</header>
      <form action="#" id="voucher_form" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Doc. Date<span style="color: red;">*</span></label>
          <input type="date" id="doc_date" name="doc_date" required>
        </div>
        <div class="field input">
          <label>Posting Date<span style="color: red;">*</span></label>
          <input type="date" name="posting_date" id="posting_data" required>
        </div>
        <div class="field input">
          <label>Reference Number<span style="color: red;">*</span></label>
          <input type="number" name="ref_no" id="ref_no" required>
        </div>
        <div class="field input">
          <label>General Ledger Accounts<span style="color: red;">*</span></label>
          <select name="gen_ledger_acc" id="gl_accs" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="None">select your option</option>
          </select> 
        </div>
        <div class="field input">
          <label>Debit/Credit<span style="color: red;">*</span></label>
          <select name="debit_credit" id="dr_cr" style="border-color: #dcdcdc; border-radius: 5px; padding: 2%; font-size: 16px; border: 1px solid rgb(150, 147, 147);">
                <option value="None">select your option</option>
          </select> 
        </div>
        <div class="field input">
          <label>Debit Amount<span style="color: red;">*</span></label>
          <input type="number" id="debit_amount" name="debit_amount" placeholder="Amount in Tshs">
        </div>
        <div class="field input">
          <label>Credit Amount<span style="color: red;">*</span></label>
          <input type="number" id="credit_amount" name="credit_amount" placeholder="Amount in Tshs">
        </div>
        <div class="field input">
          <label>Short Description<span style="color: red;">*</span></label>
          <input type="text" id="short_desc" name="short_desc" required>
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
  <script src="js/vouchers.js"></script>
</body>