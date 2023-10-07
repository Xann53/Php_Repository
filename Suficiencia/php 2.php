<!DOCTYPE html>
<html>
    <form method = "POST">
        <input name="sequenceNum" type="number">
        <button type="submit">SUBMIT</button>
    </form>
    <body>
        <?php
            $sequenceNum = 1;

            if(!empty($_POST['sequenceNum'])) {
                $sequenceNum = intval($_POST['sequenceNum']);
            }

            $array = [];
            
            function Geometric($n) {
                for($i = 0; $i < $n; $i++) {
                    $array[$i] = pow(2, $i);
                    echo $array[$i], " ";
                }
            }

            echo "<br>Here is the full geometric sequence: ", Geometric($sequenceNum);
        ?>
    </body>
</html>