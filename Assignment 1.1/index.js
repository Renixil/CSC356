// This script validates all fields before submission and displays errors or success messages.

function validateForm() {
    // shortcut to the form
    let form = document.frmApp;

    // grab all relevant inputs
    let fullName = form.txtFullName.value.trim();
    let age = form.txtAge.value.trim();
    let experience = form.txtExperience.value.trim();
    let reason = form.txtReason.value.trim();
    let citizenship = form.selcitizenship.value;

    // shortcut to the message div
    let message = document.getElementById("divMessage");
    message.innerHTML = ""; // clear previous messages

    // hold all validation errors
    let errors = [];

    // Validation Rules 

    // 1. Full Name
    if (fullName.length < 3) {
        errors.push("Please enter your full name (at least 3 characters).");
    }

    // 2. Age
    if (age === "" || isNaN(age) || age < 21) {
        errors.push("You must be at least 21 years old to apply.");
    }

    // 3. Flight Hours
    if (experience === "" || isNaN(experience) || experience < 100) {
        errors.push("Applicants must have at least 100 flight hours.");
    }

    // 4. Reason for applying
    if (reason.length < 10) {
        errors.push("Tell us why you want to pilot to Mars in at least 20 characters.");
    }

    // 5. Citizenship
    if (citizenship === "") {
        errors.push("Please select whether you are a US Citizen");
    }

    //Display Results
    if (errors.length > 0) {
        message.className = "error";
        message.innerHTML = "Errors found:<br>" + errors.join("<br>");
        return false; // stop form submission
    } else {
        message.className = "success";
        message.innerHTML = "Application validated successfully! Preparing for launch...";
        return true; // allow form to submit
    }
}
