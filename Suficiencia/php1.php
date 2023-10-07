<!DOCTYPE html>
<html>
    <body>
        <?php
            $name = "Xannetz Vega Suficiencia";
            echo $name;
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $counter = 0;

            for($i = 0; $i < strlen($name); $i++) {
                if(in_array(strtoLower($name[$i]), $vowels)) {
                    $counter++;
                }
            }

            echo "<br><br>The number of vowels in my name is: ", $counter;
        ?>
    </body>
</html>