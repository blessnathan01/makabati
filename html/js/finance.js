// General Ledger Accounts dropdown
var gl_accs = document.querySelector("#gl_accs");
var gl_accs_list = [
    { gl_accs: "Capital Accounts", value: "Capital Accounts" },
    { gl_accs: "Cash", value: "Cash" },
    { gl_accs: "Bank", value: "Bank" },
    { gl_accs: "Bank Charges", value: "Bank Charges" },
    { gl_accs: "Bank Commission", value: "Bank Commission" },
    { gl_accs: "Commission (Dr.)", value: "Commission (Dr.)" },
    { gl_accs: "Commission (Cr.)", value: "Commission (Cr.)" },
    { gl_accs: "Purchase", value: "Purchase" },
    { gl_accs: "Purchase Return", value: "Purchase Return" },
    { gl_accs: "Sales", value: "Sales" },
    { gl_accs: "Sales Return", value: "Sales Return" },
    { gl_accs: "Building", value: "Building" },
    { gl_accs: "Air Conditioner", value: "Air Conditioner" },
    { gl_accs: "Furniture and Fixture", value: "Furniture and Fixture" },
    { gl_accs: "Plant and Machine", value: "Plant and Machine" },
    { gl_accs: "Advertisement Expenses", value: "Advertisement Expenses" },
    { gl_accs: "Carriage on Sales", value: "Carriage on Sales" },
    { gl_accs: "Electricity Expenses", value: "Electricity Expenses" },
    { gl_accs: "Drawings", value: "Drawings" },
    { gl_accs: "Private Company", value: "Private Company" },
    { gl_accs: "Public Company", value: "Public Company" },
    { gl_accs: "Organization", value: "Organization" },
    { gl_accs: "Institution", value: "Institution" }
];

for (let index = 0; index < gl_accs_list.length; index++) {
    var new_option = document.createElement("option");
    new_option.value = gl_accs_list[index].value;
    new_option.innerHTML = gl_accs_list[index].gl_accs;
    gl_accs.appendChild(new_option);
}

// Debit / Credit dropdown
var dr_cr = document.querySelector("#dr_cr");
var dr_cr_list = [
    { dr_cr: "Debit", value: "Debit" },
    { dr_cr: "Credit", value: "Credit" }
];

for (let index = 0; index < dr_cr_list.length; index++) {
    var new_option = document.createElement("option");
    new_option.value = dr_cr_list[index].value;
    new_option.innerHTML = dr_cr_list[index].dr_cr;
    dr_cr.appendChild(new_option);
}