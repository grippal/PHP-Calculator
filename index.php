<?php
	/**
	 * HTML skeleton for the webpage.
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://github.com/grippal?tab=repositories
	 * @license GNU General Public License 2.0+
	 */

	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calculator</title>
</head>
<body>
<div>
	<h1>Calculator</h1>
</div>
<main>
	<form class="calc-form" action="index.php" method="post">
		<input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator" id="">
            <option value="">None</option>
            <option value="">Add</option>
            <option value="">Subtract</option>
            <option value="">Multiply</option>
            <option value="">Divide</option>
        </select>
        <br>
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>

    <p>The answer is:</p>

    <?php
        if (isset($_POST['submit'])) {
            $results1 = $_POST['num1'];
	        $results2 = $_POST['num2'];
	        $operator = $_POST['operator'];

	        switch ($operator) {
                case "None":
                    echo "You need to select an operator!";
                break;
		        case "Add":
			        echo $results1 + $results2;
			    break;
		        case "Subtract":
			        echo $results1 - $results2;
			    break;
		        case "Multiply":
			        echo $results1 * $results2;
			    break;
		        case "Divide":
			        echo $results1 / $results2;
			    break;
	        }
        }
    ?>
</main>

</body>
</html>