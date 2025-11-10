<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ares LLC | Application Received</title>
    
    <!-- link to the global css files -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Ares LLC | Application Received</h1>
    </header>

    <main>
        <section class="confirmation">
            <!-- Confirmation message for the applicant -->
            <h2>Thank you for applying, future Mars Pilot!</h2>
            <p>Your application has been successfully submitted.  
               Here's a summary of the data we received:</p>

               <!-- Display the submitted form data in a styled summary box -->
            <div class="summary-box">
                <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_POST["txtFullName"]); ?></p>
                <p><strong>Age:</strong> <?php echo htmlspecialchars($_POST["txtAge"]); ?></p>
                <p><strong>Flight Hours:</strong> <?php echo htmlspecialchars($_POST["txtExperience"]); ?></p>
                <p><strong>Motivation:</strong> <?php echo htmlspecialchars($_POST["txtReason"]); ?></p>
                <p><strong>US Citizen:</strong> <?php echo htmlspecialchars($_POST["selcitizenship"]); ?></p>
            </div>

            <!-- Additional confirmation message -->
            <p>Our team will review your application and contact you during the next launch window.  
               Prepare for liftoff — you're one step closer to Mars!</p>
            </div>
        </section>
    </main>
</body>
</html>
