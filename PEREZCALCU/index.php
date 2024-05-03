<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: black; /* Light gray background */
            padding-top: 220px; /* Add some padding to the top */
        }
        .calculator {
            background-color: gray; /* White background */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 20px; /* Rounded corners */
            height:15em;
            padding: 50px; /* Add some padding */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator" style="transform:translateY(-2em)">
            <h1 class="text-center" style="color: black," ;>OOP CALCULATOR PHP</h1>
            <form action="calc.php" method="POST">
                <div class="row g-3 align-items-center" style="margin-left:6.5em";>
                    <div class="col">
                        <label for="num1Inserted" class="visually-hidden">Number 1</label>
                        <input type="text" class="form-control" id="num1Inserted" name="num1Inserted" placeholder="Enter Number 1">
                    </div>
                    <div class="col">
                        <label for="num2Inserted" class="visually-hidden">Number 2</label>
                        <input type="text" class="form-control" id="num2Inserted" name="num2Inserted" placeholder="Enter Number 2">
                    </div>
                    <div class="col">
                        <label for="calInserted" class="visually-hidden">Operation</label>
                        <select id="calInserted" class="form-select" name="calInserted">
                            <option value="add">Add</option>
                            <option value="sub">Subtract</option>
                            <option value="mul">Multiply</option>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary" style="background-color: black";>Calculate</button>
                    </div>
                </div>
            </form>

            <?php if (isset($_GET["result"])): ?>
                <p class="mt-3" style="margin-left:120px"; ><b>Result: <?php echo $_GET["result"]; ?></b></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
