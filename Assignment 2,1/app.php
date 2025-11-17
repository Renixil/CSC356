<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ares LLC Mars Tourism</title>

    <!-- link to the global css files -->
    <link rel="stylesheet" href="main.css">

    <!-- link to the JavaScript file with the form validation -->
    <script src="index.js"></script>
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Ares LLC|Pilot Application</h1>
    </header>
  <main>
        <section class="form-section">
            <h2>Join the Ares Command Crew</h2>
            <p>Be our next pilot for the Ares Mars Tourism Program!  
            Complete the application below to be considered for our next voyage to the Red Planet.</p>

            <!-- Message output -->
            <div id="divMessage"></div>

            <!-- Pilot Application Form -->
            <form method="post" id="frmApp" name="frmApp" action="post.php" onsubmit="return validateForm();">

                <!-- Full Name Form -->
                <label for="txtFullName">Full Name:</label>
                <input type="text" id="txtFullName" name="txtFullName" placeholder="Your Full Name">

                <!-- Age. Minimum is 18 and cannot go down for legal purposes. -->
                <label for="txtAge">Age:</label>
                <input type="number" id="txtAge" name="txtAge" min="18" max="70" placeholder="Your Age">

                <!-- Pilot's flight experience -->
                <label for="txtExperience">Flight Hours Logged:</label>
                <input type="number" id="txtExperience" name="txtExperience" placeholder="Total Flight Hours">

                <!-- Textarea for applicant's motivation; larger input for detailed response -->
                <label for="txtReason">Why do you want to pilot to Mars?</label>
                <textarea id="txtReason" name="txtReason" placeholder="Your motivation and goals"></textarea>
               
                <!-- Dropdown to select US citizenship status -->
                <label for="selcitizenship">Are you a US Citizen?</label>
                <select id="selcitizenship" name="selcitizenship">
                    <option value="">-- Select One --</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <!-- Submit button; centered and visually separated -->
                <div style="text-align:center; margin-top:20px;">
                    <input type="submit" value="Submit Application">
                </div>
            </form>
        </section>
    </main>
</body>
</html>