<!DOCTYPE html>
<html>
<head>
    <title>Contador de tempo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contador de tempo</h1>
        <form id="countdown-form" method="post" action="">
            <label for="end-date">Data do término:</label>
            <input type="datetime-local" id="end-date" name="end_date" required>
            <br>
            <input type="submit" value="Start Countdown">
        </form>

        <div id="countdown-timer">
            <h2>Tempo restante:</h2>
            <div id="countdown"></div>
        </div>
    </div>

    <script>
        document.getElementById("countdown-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const endDate = new Date(document.getElementById("end-date").value);
            const currentDate = new Date();

            if (endDate <= currentDate) {
                alert("End date must be greater than the current date.");
                return;
            }

            const countdownInterval = setInterval(function() {
                const currentTime = new Date();
                const timeDifference = endDate - currentTime;

                if (timeDifference <= 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("countdown").textContent = "Countdown completed!";
                } else {
                    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    document.getElementById("countdown").textContent = `${days} days, ${hours} hours, ${minutes} minutes, ${seconds} seconds`;
                }
            }, 1000);
        });
    </script>
</body>
</html>
