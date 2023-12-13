<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni_results</title>
    <link rel="stylesheet" href="uni_styles.css">
</head>
<body>
<div class='container'>
    <?php
    

    //Results for university buttons
    if (isset($_GET['university_id'])) {
        // Display University Details
        echo "<div class='university-details'>";
        echo "<h1>{$university_data['university_name']}</h1>";

        // Path of banner image for the university
        $universityId = $university_data['university_id'];
        $jpgImagePath = "banner/{$universityId}.jpg";
        $pngImagePath = "banner/{$universityId}.png";
        
        if (file_exists($jpgImagePath)) {
            echo "<img src='{$jpgImagePath}' alt='{$university_data['university_name']} Banner' width='400' height='150'>";
        } elseif (file_exists($pngImagePath)) {
            echo "<img src='{$pngImagePath}' alt='{$university_data['university_name']} Banner' width='400' height='150'>";
        } else {
            echo "<p>Banner image is not available</p>";
        }
        echo "<p>Contact Details:</p>";
        echo "<p>Address: {$university_data['address']}</p>";
        echo "<p>Website: {$university_data['website']}</p>";
        echo "<p>Contact No: {$university_data['contact_no']}</p>";
        echo "</div>";

        // Display Curriculum Details
        echo "<div class='curriculum-details'>";
        foreach ($curriculum_result as $row) {
            echo "<div class='card'>";
            echo "<h4>Curriculum Name: {$row['curriculum_name']}</h4>";
            echo "<p>Degree: {$row['degree']}</p>";
            echo "<p>Minimum Requirement: {$row['min_requirement']}</p>";
            echo "<p>Duration: {$row['duration']}</p>";
            echo "<p>Aptitude: {$row['aptitude']}</p>";
            echo "<p>Language: {$row['language']}</p>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";

    //Results for university search bar
    } elseif (isset($_GET['universitySearch'])) {
        // Display University Details
        echo "<div class='university-details'>";
        foreach ($universityResult as $row) {
            echo "<div class='scard'>";
            echo "<h1>{$row['university_name']}</h1>";

            // Path of banner image for the university
            $universityId = $row['university_id'];
            $jpgImagePath = "banner/{$universityId}.jpg";
            $pngImagePath = "banner/{$universityId}.png";
            
            if (file_exists($jpgImagePath)) {
                echo "<img src='{$jpgImagePath}' alt='{$row['university_name']} Banner' width='400' height='150'>";
            } elseif (file_exists($pngImagePath)) {
                echo "<img src='{$pngImagePath}' alt='{$row['university_name']} Banner' width='400' height='150'>";
            } else {
                echo "<p>Banner image is not available</p>";
            }

            echo "<p>Contact Details:</p>";
            echo "<p>Address: {$row['address']}</p>";
            echo "<p>Website: {$row['website']}</p>";
            echo "<p>Contact No: {$row['contact_no']}</p>";
            echo "</hr>";
            echo "</div>";
            
        }
        
        echo "</div>";

        // Display Curriculum Details
        echo "<div class='curriculum-details'>";
        foreach ($curriculumResult as $row) {
            echo "<div class='card'>";
            echo "<h4>Curriculum Name: {$row['curriculum_name']}</h4>";
            echo "<p>Degree: {$row['degree']}</p>";
            echo "<p>Minimum Requirement: {$row['min_requirement']}</p>";
            echo "<p>Duration: {$row['duration']}</p>";
            echo "<p>Aptitude: {$row['aptitude']}</p>";
            echo "<p>Language: {$row['language']}</p>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";

    } else {
        // If there are no university or search query is set
        echo "Please select a university or enter a search query.";
    }
    ?>
</div>

</body>
</html>
