<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Student Portal - Home </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    

    <script>
        // Make functioning a Search Field

        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-search tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</head>


<body>

<?php
    include('nav.php');
    ?>



    <!-- About our System -->

    <p class="about" style=" 
    position: absolute;
    
    font-family: Verdana, 'Courier New', Tahoma, sans-serif;
    top: 100px;
    left: 10%;
    font-weight: 400;
    font-size: 22px;"> We enable students to explore all <br>
        their study option in one place and <br>
        find the best and suitable study <br>
        program that fit their needs, <br>
        preference and goals.
    </p>




    <!-- Theme pictures -->

    <img src="image/Group 304.png" alt="Italian Trulli" style="width: 1550px; margin-top: 130px;  position:relative;">
   


    
        <rect width="944" height="698" fill="url(#pattern0)" />
        <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_300_30" transform="translate(-0.308726) scale(0.00115532 0.0015625)" />
            </pattern>

            <img src="image/Rectangle 24.png" alt="Italian Trulli" style="width: 600px; margin-top: 10px;  position:relative;">
            

    <!-- <img src="//s3-alpha-sig.figma.com/img/1808/efe9/e02d03550213f7a51dbd8a1c9acfe436?Expires=1674432000&Signature=jNbLb6WWH8b5tC~ihZMJKtaMQPDp54H7~ueUQUBpsUbeibA545Z6BB1duCV97YSoh1hyTa~utKYU4URVKR72i0VaJySIFt0HCUh31xbvYSwuVF3ivZ3~CL5Pw8ZkXm9LQxrqoKlzLwDKDg~EP~yr2KfywvEG40yI9aFhWo2Olk4i1v7Fy6WWlxkEA5b1v5fesKI~MulDE2~a5GqW2crT1IsmLxMhaQlyvzsdJlS7ClVr2Su7wz2ddYBJJpT83NrIPoKN72qfeJPPfZw~3~GAOeBk0ftFT4mV7cDwXZwCGedpS1F1oqq4WzMh4-iICUTsI8Wgh6ERnZ6VCM70FGBG0g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="theme4" /> -->



    <!-- Form Heading  -->

    <p class="form-heading"> Tap Here To See  Eligible List </p>

    <!-- Form for select stream, subject and grade  -->

    <form action="connect_home.php" method="post">

        <input type="submit" class="button1" id="button" value="Eligible List" style="position: absolute;
    left: 55%;
    top: 1152px;
    width:500px;
    padding: 20px 60px 20px 33px;
    color: white;
    font-size: 25px;
    cursor: pointer;
    background: #407AFE;
    border: 2px solid #DBE6FF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 50px;">
        
    </form>

    <br><br><br>

    <!-- Get space at bottom -->
    <p style="margin-top: 200px;"></p>


</body>

</html>