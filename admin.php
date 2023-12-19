<?php
// daca metoda de transmitere a datelor este ""POST
//     if ($_SERVER["REQUEST_METHOD"] === "POST") {
//         // afisam "Good
//         echo "Good";
//     } else {
//         // afisam eroarea
//         die("Something went wrong");
//     }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        print_r($_POST);

        $title = $_POST["title"];
        $category = $_POST["category"];
        $options = $_POST["options"];
        $location = $_POST["location"];

        // Validarea
        if (!isset($title) || empty($title) || strlen($title) < 3 || strlen($title) > 50) {
            die("Title field is required");
        } 

        $acceptedCategories = ["gadgets", "clothes", "cars"];
        if (!isset($category) || !in_array($category, $acceptedCategories)) {
            die("Category field is required or does not exist");
        }

        $accepdetOptions = ["new", "sh", "sale"];
        if (!isset($options)) {
            die("Option field is required");
        }

        foreach ($options as $option) {
            if (!in_array($option, $accepdetOptions)) {
                die ("Option does not exist");
            }
        }

        $acceptedLocations = ["worldwide", "moldova", "chisinu"];
        if (!isset($location) || !in_array($location, $acceptedLocations)) {
            die ("Location is required or does not exist");
        }

        echo "<ul>
            <li>Title: $title</li>
            <li>Category: $category</li>
            <li>Location: $location</li>
        </ul>";

        foreach ($options as $option) {
            echo "<p>$option</p>";
        }
    } else {
        die("Something went wrong");
    }

    
?>