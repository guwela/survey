<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Our Lifestyle Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: Red;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .checkbox-group, .radio-group {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .checkbox-group label, .radio-group label {
            display: block;
            margin-bottom: 5px;
        }

        .checkbox-group input[type="checkbox"], .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        .submit-button {
            text-align: center;
        }

        .result-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 100px;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .result-container h2 {
            margin-bottom: 10px;
        }

        .result-item {
            margin-bottom: 5px;
        }

        .result-item strong {
            font-weight: bold;
        }

        .ok-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Code for Main Menu - Screen 1
        if (!isset($_POST['fill_survey']) && !isset($_POST['view_results'])) {
            ?>
            <h1>WeLcome To Our Lifestyle Survey</h1>
            <form action="" method="post">
                <button type="submit" name="fill_survey">Fill out survey</button>
                <button type="submit" name="view_results">View survey results</button>
            </form>
            <?php
        } elseif (isset($_POST['fill_survey'])) {
            //Code For Screen 2 - Take the Survey
            ?>
            <h2>Take Our Survey</h2>
            <h2>Personal Details:</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label">Surname:</label>
                    <input type="text" name="surname" required>
                </div>
                <div class="form-group">
                    <label class="form-label">First Names:</label>
                    <input type="text" name="first_names" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Contact number:</label>
                    <input type="text" name="contact_number" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Date:</label>
                    <input type="text" name="date" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Age:</label>
                    <input type="number" name="age" required>
                </div>
                <div class="form-group">
                    <label class="form-label">What is your favourite food?(You can choose more than 1 answer)</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="favorite_food[]" value="Pizza">Pizza</label>
                        <label><input type="checkbox" name="favorite_food[]" value="Pasta">Pasta</label>
                        <label><input type="checkbox" name="favorite_food[]" value="Pap and Wors">Pap and Wors</label>
                        <label><input type="checkbox" name="favorite_food[]" value="Chicken stir fry">Chicken stir fry</label>
                        <label><input type="checkbox" name="favorite_food[]" value="Beef stir fry">Beef stir fry</label>
                        <label><input type="checkbox" name="favorite_food[]" value="Other">Other</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</label>
                 </div>
                <div class="form-group">
                    <label class="form-label">I like to eat out:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="rating_eat_out" value="1">Strongly Agree(1)</label>
                        <label><input type="radio" name="rating_eat_out" value="2">Agree(2)</label>
                        <label><input type="radio" name="rating_eat_out" value="3">Neutral(3)</label>
                        <label><input type="radio" name="rating_eat_out" value="4">Disagree(4)</label>
                        <label><input type="radio" name="rating_eat_out" value="5">Strongly Disagree(5)</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">I like to watch movies:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="rating_movies" value="1">Strongly Agree(1)</label>
                        <label><input type="radio" name="rating_movies" value="2">Agree(2)</label>
                        <label><input type="radio" name="rating_movies" value="3">Neutral(3)</label>
                        <label><input type="radio" name="rating_movies" value="4">Disagree(4)</label>
                        <label><input type="radio" name="rating_movies" value="5">Strongly Disagree(5)</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">I like to watch TV:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="rating_tv" value="1">Strongly Agree(1)</label>
                        <label><input type="radio" name="rating_tv" value="2">Agree(2)</label>
                        <label><input type="radio" name="rating_tv" value="3">Neutral(3)</label>
                        <label><input type="radio" name="rating_tv" value="4">Disagree(4)</label>
                        <label><input type="radio" name="rating_tv" value="5">Strongly Disagree(5)</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">I like to listen to the radio:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="rating_radio" value="1">Strongly Agree(1)</label>
                        <label><input type="radio" name="rating_radio" value="2">Agree(2)</label>
                        <label><input type="radio" name="rating_radio" value="3">Neutral(3)</label>
                        <label><input type="radio" name="rating_radio" value="4">Disagree(4)</label>
                        <label><input type="radio" name="rating_radio" value="5">Strongly Disagree(5)</label>
                    </div>
                </div>
                <div class="submit-button">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
            <?php
        } elseif (isset($_POST['view_results'])) {
            // Screen 3 - Show Survey Results
            ?>
            <div class="result-container">
                
                <?php
                // Database Connection
                $servername = "";
                $username = "root";
                $password = "";
                $dbname = "survey_db";

                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Total number of surveys
                $sql = "SELECT COUNT(*) AS total FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_surveys = $row['total'];

                echo "<div class='result-item'><strong>Total number of surveys:</strong> $total_surveys</div>";

                // Average age
                $sql = "SELECT AVG(age) AS average_age FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $average_age = round($row['average_age'], 1);

                echo "<div class='result-item'><strong>Average age:</strong> $average_age</div>";

                // Oldest person
                $sql = "SELECT MAX(age) AS max_age FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $max_age = $row['max_age'];

                echo "<div class='result-item'><strong>Oldest person who participated:</strong> $max_age</div>";

                // Youngest person
                $sql = "SELECT MIN(age) AS min_age FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $min_age = $row['min_age'];

                echo "<div class='result-item'><strong>Youngest person who participated:</strong> $min_age</div>";

                // Percentage of people who like Pizza
                $sql = "SELECT COUNT(*) AS count FROM survey WHERE FIND_IN_SET('Pizza', favorite_food) > 0";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $count_pizza = $row['count'];
                $percentage_pizza = round(($count_pizza / $total_surveys) * 100, 1);

                echo "<div class='result-item'><strong>Percentage of people who like Pizza:</strong> $percentage_pizza%</div>";

                // Percentage of people who like Pasta
                $sql = "SELECT COUNT(*) AS count FROM survey WHERE FIND_IN_SET('Pasta', favorite_food) > 0";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $count_pasta = $row['count'];
                $percentage_pasta = round(($count_pasta / $total_surveys) * 100, 1);
        

                echo "<div class='result-item'><strong>Percentage of people who like Pasta:</strong> $percentage_pizza%</div>";



                // People like to eat out
                $sql = "SELECT AVG(rating_eat_out) AS avg_eat_out FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $avg_eat_out = round($row['avg_eat_out'], 1);

                echo "<div class='result-item'><strong>People like to eat out:</strong> $avg_eat_out</div>";

                // People like to watch movies
                $sql = "SELECT AVG(rating_movies) AS avg_movies FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $avg_movies = round($row['avg_movies'], 1);

                echo "<div class='result-item'><strong>People like to watch movies:</strong> $avg_movies</div>";

                // People like to watch TV
                $sql = "SELECT AVG(rating_tv) AS avg_tv FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $avg_tv = round($row['avg_tv'], 1);

                echo "<div class='result-item'><strong>People like to watch TV:</strong> $avg_tv</div>";

                // People like to listen to the radio
                $sql = "SELECT AVG(rating_radio) AS avg_radio FROM survey";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $avg_radio = round($row['avg_radio'], 1);

                echo "<div class='result-item'><strong>People like to listen to the radio:</strong> $avg_radio</div>";

                $conn->close();
                ?>
                <div class="ok-button">
                    <form action="" method="post">
                        <button type="submit" name="ok">OK</button>
                    </form>
                </div>
            </div>
            <?php
        }
        ?>

        <?php
        // Save data to database - Screen 2
        if (isset($_POST['submit'])) {
            // Database Connection
            $servername = "";
            $username = "root";
            $password = "";
            $dbname = "survey_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind statements
            $stmt = $conn->prepare("INSERT INTO survey (surname, first_names, contact_number, date, age, favorite_food, rating_eat_out, rating_movies, rating_tv, rating_radio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssisiiii", $surname, $first_names, $contact_number, $date, $age, $favorite_food, $rating_eat_out, $rating_movies, $rating_tv, $rating_radio);

            // Set parameters
            $surname = $_POST['surname'];
            $first_names = $_POST['first_names'];
            $contact_number = $_POST['contact_number'];
            $date = $_POST['date'];
            $age = $_POST['age'];
            $favorite_food = implode(", ", $_POST['favorite_food']);
            $rating_eat_out = $_POST['rating_eat_out'];
            $rating_movies = $_POST['rating_movies'];
            $rating_tv = $_POST['rating_tv'];
            $rating_radio = $_POST['rating_radio'];

            // Execute statement
            $stmt->execute();

            echo "<p>Data submitted successfully!</p>";

            $stmt->close();
            $conn->close();
        }

        // Return to Main Menu - Screen 3
        if (isset($_POST['ok'])) {
            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
