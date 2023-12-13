<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Contact Us </title>

    <link rel="stylesheet" type="text/css" href="contact_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body><?php
        include('nav.php');
        ?>


<hr>

    <!-- Feedback Form  -->


    <form action="contact_form.php" method="POST" class="contact">

        <!-- Feedback Heading 1 -->

        <h1>Student Feedback</h1>

        <!-- Feedback Heading 2 -->

        <h2>Leave us any comment about our service</h2>
        <div class="fields">


            <!-- rating stars -->


            <input id="rating" name="rating" type="hidden" />
            <ul>
                <Label class="star-label">Rate Us:</Label>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
            </ul>
            <div id="msg" name="msg"></div>


            <label for="name">
                <i class="fas fa-user"></i>
                <input type="text" name="title" placeholder="Your Name" required>

                <textarea name="comment" placeholder="Message" required></textarea>

                <input type="submit">

    </form>




    <p style="margin-top: 700px;"></p>


    <script type="text/javascript">
        $(document).ready(function() {
            $('li').mouseover(function() {
                obj = $(this);
                $('li').removeClass('highlight-stars');
                $('li').each(function(index) {
                    $(this).addClass('highlight-stars');
                    if (index == $('li').index(obj)) {
                        return false;
                    }
                });
            });

            $('li').mouseleave(function() {
                $('li').removeClass('highlight-stars');
            });

            $('li').click(function() {
                obj = $(this);
                $('li').each(function(index) {
                    $(this).addClass('highlight-stars');
                    $('input[name="rating"]').val(index + 1);
                    $('#msg').html('Thanks! You have rated this ' + (index + 1) + ' stars.');
                    if (index == $('li').index(obj)) {
                        return false;
                    }
                });
            });

            $('ul').mouseleave(function() {
                if ($('input[name="rating"]').val()) {
                    $('li').each(function(index) {
                        $(this).addClass('highlight-stars');
                        if ((index + 1) == $('input[name="rating"]').val()) {
                            return false;
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>