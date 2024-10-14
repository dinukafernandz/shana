<?php
$name = $_POST['name'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Training Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            background-color: #ADD8E6;
            color: #000;
            padding: 20px 0;
            text-align: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-itmes: center;
            width: 100%;
        }
        .menu {
            display: inline-block;
            margin: 0 15px;
        }
        .shopping-cart {
            position: absolute;
            right: 20px;
        }
        .courses {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 20px;
        }
        .course-item {
            border: 1px solid #ADD8E6;
            padding: 10px;
            text-align: center;
        }
        .date-time {
            text-align: center;
            margin-top: 20px;
        }
        #cart-div{
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            width:40px;
        }
        @media screen and (min-width: 768px){
            .courses {
            grid-template-columns: repeat(3, 1fr);
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <a href="#"><li class="menu">HOME</li></a>
            <a href="#"><li class="menu">COURSES</li></a>
            <a href="#"><li class="menu">AFFILIATIONS</li></a>
            <a href="#"><li class="menu">HOW TO JOIN</li></a>
            <a href="#"><li class="menu">TESTIMONIALS</li></a>
        </ul>
        <img src="cart.png" alt="Shopping Cart" class="shopping-cart" width="30px">
    </div>

    <h2>Welcome, <?php echo $name; ?> (<?php echo $email; ?>)</h2>
        <!-- Live Date/Time -->
    <div class="date-time">
        <p>Current Date/Time: <span id="dateTime"></span></p>
    </div>

    <!-- Courses Grid -->
    <div class="courses">
        <?php
        $courses = [
            ["code" => "EC0001", "title" => "Quantitative Analysis in Business", "hours" => "45H", "price" => "Rs. 35,000"],
            ["code" => "EC0002", "title" => "Information Technology in Retailing", "hours" => "45H", "price" => "Rs. 35,000"],
            ["code" => "EC0003", "title" => "Brand Innovation & Development", "hours" => "30H", "price" => "Rs. 25,000"],
            ["code" => "EC0004", "title" => "Packaging & Logistic Management", "hours" => "30H", "price" => "Rs. 25,000"],
            ["code" => "EC0005", "title" => "Service Marketing", "hours" => "40H", "price" => "Rs. 30,000"],
            ["code" => "EC0006", "title" => "E-Commerce", "hours" => "45H", "price" => "Rs. 35,000"]
        ];

        foreach ($courses as $course) {
            echo "<div class='course-item'>";
            echo "<p>{$course['code']}</p>";
            echo "<h3>{$course['title']}</h3>";
            echo "<p>({$course['hours']})</p>";
            echo "<p>{$course['price']}/-</p>";
            echo "</div>";
        }
        ?>
    </div>

    <script>
        function updateTime() {
            const dateTimeElement = document.getElementById("dateTime");
            const now = new Date();
            const formattedTime = now.toLocaleString();
            dateTimeElement.innerText = formattedTime;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>
