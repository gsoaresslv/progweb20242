<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dia e Noite</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="center">
        <?php
            $dateTime = new DateTime("now", new DateTimeZone('Asia/Tokyo'));
            $hora = $dateTime->format('H');
            if ($hora >= 6 && $hora < 12) {
                echo "<h1>Bom dia!</h1>";
                echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrzj-QJPs6bQFFc4jewx1gQj3KlEWXx3y6nEQNmCQfwEyRb91LjTnF2Z8eu6kJEOTWZus&usqp=CAU'>";
            } 
            else {
                if ($hora >= 12 && $hora < 18) {
                    echo "<h1>Boa tarde!</h1>";
                    echo "<img src='https://pm1.aminoapps.com/6598/0776f6f8fb185a6c748a8f43e4a93885cf1250f6_hq.jpg'>";
                } 
                else {
                    echo "<h1>Boa noite!</h1>";
                    echo "<img src='https://i.pinimg.com/474x/f0/fb/9a/f0fb9a793a63fa9ebb98f46d95fc9759.jpg'>";
                }
            }
        ?>
        </div>
    </body>
</html>