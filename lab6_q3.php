<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

    <?php
        function calculateArea($width, $length) {
            return $width * $length;
        }

        $width = 6;
        $length = 2;

        $area = calculateArea($width, $length);
    ?>

    <p>
        <b>
            The area of a rectangle with a width of
            <?php echo $width; ?> and
            <?php echo $length; ?> is
            <?php echo $area; ?>
        </b>
    </p>

</body>
</html>