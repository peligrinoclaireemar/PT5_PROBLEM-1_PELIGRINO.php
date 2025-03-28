<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #A888B5;
                color: #143D60;
                text-align: center;
                padding: 50px;
            }

            h2 {
                color: #27667B;
                background-color: #A888B5;
                border: 0px solid #213555;
                padding: 5px;
                width: 50%;
                margin-left: 25%;
                box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.2);

            }

            input[type="number"] {
                padding: 10px;
                width: 100%;
                margin: 10px 0;
                border: 2px solid #213555;
                border-radius: 4px;
            }

            button {
                font-size: 1.0em;
                padding: 10px 20px;
                background-color: #A888B5;
                color: #18230F;
                border: 213555;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #A888B5;
            }

            result {
                font-size: 1.2em;
                margin-top: 20px;
                font-weight: bold;
                color: #2D336B;
                border: 0px solid;
                background-color: #A888B5;
                padding: 10px;
                border-radius: 4px;
                box-shadow: 0 5px 4px rgba(0, 0, 0, 0.1);
            }
    </style>

</head>
<body>
    <h2>BMI Calculator</h2>
    <form method="post">
        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" step="0.01" required><br><br>

        <label for="height">Height (m):</label>
        <input type="number" name="height" step="0.01" required><br><br>

        <input type="submit" name="calculate" value="Calculate BMI">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];

            $bmi = $weight / (($height /100)**2);
            echo "<h3>Your BMI: " . number_format($bmi, 2) . "</h3>";

            if ($bmi <= 18.5) {
                echo "<p>Classification: Underweight</p>";
                echo "<p>Risk of Comorbidities: Low</p>";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                echo "<p>Classification: Normal</p>";
                echo "<p>Risk of Comorbidities: Average</p>";
            } elseif ($bmi >= 25 && $bmi <= 29.9) {
                echo "<p>Classification: Overweight</p>";
                 echo "<p>Risk of Comorbidities: Mildly increase</p>";
            } elseif ($bmi >= 30 && $bmi <= 34.9) {
                echo "<p>Classification: Class 1 </p>";
                echo "<p>Risk of Comorbidities: Moderate</p>";
            } elseif ($bmi >= 35 && $bmi <= 39.9) {
                echo "<p>Classification: Class 2</p>";
                echo "<p>Risk of Comorbidities: Severe</p>";
            } elseif ($bmi >=40.0){
                echo "<p>Classification: Class 3</p>";
                echo "<p>Risk of Comorbidities: Very Severe</p>";
            }
         else {
            echo "<p>Please enter a valid height.</p>";
        }
    }
    ?>
</body>
</html>