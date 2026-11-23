<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q3</title>
    </head>
    <body>
        <?php
            function calculateArea($width,$height){
                return $width*$height;
            }

            $width=4;
            $height=2;
            $area=calculateArea($width,$height);
        ?>

        <p>
            <strong>
                The area of a rectangle with a width of <?php echo htmlspecialchars((string)$width); ?>
                and <?php echo htmlspecialchars((string)$height);?> is <?php echo htmlspecialchars((string)$area);?>
            </strong>    
        </p>
    </body>
</html>