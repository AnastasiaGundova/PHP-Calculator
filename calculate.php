<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num01" placeholder="Number 1">

            <select name="oper">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
            </select>

            <input type="number" name="num02" placeholder="Number 2">
            <button type="submit">Calculate</button>
        </form>

        <br>

        <?php
        function myCalculator($num01, $oper, $num02) {
            if (!is_numeric($num01) || !is_numeric($num02)) {
            return "Error! Please enter valid numbers.";
            }

            $result = null;
            $operation = "";
            switch ($oper) {
                case 'add':
                    $result = $num01 + $num02;
                    $operation = "+";
                    break;
                case 'sub':
                    $result = $num01 - $num02;
                    $operation = "-";
                    break;
                case 'mul':
                    $result = $num01 * $num02;
                    $operation = "*";
                    break;
                case 'div':
                    if ($num02 != 0) {
                        $result = $num01 / $num02;
                        $operation = "/";}
                    else {
                        return "Error! Division by zero.";
                    }
                    break;
                default:
                    $result = "There was an error!";
                    break;
            }
            return "Result: $num01 $operation $num02 = $result";
        }

        if (isset($_GET["num01"]) && isset($_GET["oper"]) && isset($_GET["num02"])) {
            $num01 = $_GET["num01"];
            $oper = $_GET["oper"];
            $num02 = $_GET["num02"];

            echo myCalculator($num01, $oper, $num02);
        }
        ?>
    </body>
</html>