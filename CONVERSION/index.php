
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>

    <style>
        .text-center {
            text-align: center;
            margin-top: 20%;
        }
        .flex {
            display: flex;
        }
        .mt-5 {
            margin-top: 5rem;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .justify-content-center {
            justify-content: center;
        }
        .align-items-center {
            align-items: center;
        }
        .col1, .col2, .col3 {
            margin: 0 10px;
        }
        .background {
            background-image: url('photos/toink.gif');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="background">
    <div class="container mt-5">
        <h1 class="text-center">Converter</h1>
        <div class="row justify-content-center"> <!-- Center the form -->
            <form action="calc.php" method="POST" class="flex">
                <div class="row g-3 align-items-center"> <!-- Align textboxes and button in a row -->
                    <div class="col1">
                        <label for="num1Inserted" class="visually-hidden">Number 1</label>
                        <input type="text" class="form-control" id="num1Inserted" name="num1Inserted" placeholder="Enter Number 1">
                    </div>

                    <div class="col2">
                        <label for="calInserted" class="visually-hidden">Operation</label>
                        <select id="calInserted" class="form-select" name="calInserted">
                            <option value="ounces">ounces to grams</option>
                            <option value="grams">grams to ounces</option>                       
                        </select>
                    </div>

                    <div class="col3">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                </div>
            </form>
        </div>

        <?php if (isset($result)): ?>
            <p class="mt-3">Result: <?php echo $calculator->getResult(); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
