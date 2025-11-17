<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Countdown</title>

    <!-- Link to the global CSS file -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
     <header>
        <?php include "menu.php"; ?>
        <h1>Mars Countdown</h1>
    </header>
 
    <main>
        <div id="divCountdown">Countdown</div>
        <div id="divCountdownMessage"></div>
    </main>

    <?php
        // php variable to hold the time I have determined for our next launch
        $launchDateTime = strtotime("November 22, 2025 14:00:00");

        // format the date we just made in a more JavaScript friendly way
        $jsDateTime = date("Y-m-d H:i:s", $launchDateTime);

    ?>

    <!--TODo: move to an external JS File -->
 <script>
        // Ensure the countdown code runs only after the HTML elements are loaded
        document.addEventListener("DOMContentLoaded", function() {

            // Use the PHP-generated launch time in JavaScript
            let countdownTimer = new Date("<?php echo $jsDateTime; ?>").getTime();

            // setInterval repeats the code at the specified interval (every second)
            // Returns an interval ID so we can stop it later
            let intervalId = setInterval(function() {

                // Grab the current time in milliseconds
                let currentTime = new Date().getTime();

                // Constants: number of milliseconds in each time unit
                const MS_IN_A_SECOND = 1000;
                const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
                const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
                const MS_IN_A_DAY = MS_IN_AN_HOUR * 24;

                // Calculate the difference between the launch time and now
                let timeDiff = countdownTimer - currentTime;

                // Countdown calculations
                // How many full days are left
                let days = Math.floor(timeDiff / MS_IN_A_DAY);
                // How many hours left after removing full days
                let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
                // How many minutes left after removing full hours
                let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
                // How many seconds left after removing full minutes
                let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);

                // Shortcut / pointer to the countdown div
                let divCountdown = document.getElementById("divCountdown");

                // Shortcut / pointer to the message div
                let divCountdownMessage = document.getElementById("divCountdownMessage");

                // Control structure: show different messages depending on time left
                if (timeDiff < 0){
                    // The launch time has passed
                    clearInterval(intervalId); // Stop the countdown
                    divCountdown.textContent = ""; // Clear the numbers
                    divCountdownMessage.textContent = "You missed the launch!";
                }
                else if (days < 7){
                    // Launch is less than a week away
                    divCountdownMessage.textContent = "Less than a week until launch! Pack your bags!";
                }
                else{
                    // Launch is more than a week away
                    divCountdownMessage.textContent = "Launch will be happening soon!";
                }

                // Display the countdown in the same format professor wants
                divCountdown.textContent = days + " Days : " + hours + " Hours : " + minutes + " Minutes : " + seconds + " Seconds";

            }, 1000); // 1000 milliseconds = 1 second interval

        });
    </script>
</body>
</html>
