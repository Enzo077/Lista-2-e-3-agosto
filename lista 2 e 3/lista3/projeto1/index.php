<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de tempo</h1>
        <form id="time-calculator-form" method="post" action="calculate.php">
            <label for="start-date">Data de início:</label>
            <input type="datetime-local" id="start-date" name="start_date" required>
            <br>

            <label for="end-date">Data de término:</label>
            <input type="datetime-local" id="end-date" name="end_date" required>
            <br>

            <input type="submit" value="Calculate">
        </form>

        <div id="result" style="display:none;">
            <h2>Resultado:</h2>
            <p id="time-difference"></p>
        </div>
    </div>

    <script>
        document.getElementById("time-calculator-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const startDate = new Date(document.getElementById("start-date").value);
            const endDate = new Date(document.getElementById("end-date").value);

            if (startDate >= endDate) {
                alert("End date must be greater than the start date.");
            } else {
                const timeDifference = endDate - startDate;
                const seconds = Math.floor(timeDifference / 1000);
                const minutes = Math.floor(seconds / 60);
                const hours = Math.floor(minutes / 60);
                const days = Math.floor(hours / 24);

                const resultText = `${days} days, ${hours % 24} hours, ${minutes % 60} minutes, ${seconds % 60} seconds`;
                document.getElementById("time-difference").textContent = resultText;

                document.getElementById("result").style.display = "block";
            }
        });
    </script>
</body>
</html>
