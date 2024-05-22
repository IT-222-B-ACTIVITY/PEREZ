<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Formula</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <style>
            .toink {
                width: auto;
                height: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 40px;
            }
            .container {
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 50px;
                border: 5px solid #404040;
                background: #f1f1f11a;
                height: 85vh;
                -webkit-backdrop-filter: blur(100px);
                backdrop-filter: blur(5px);
            }

            h1 {
                font-size: 70px;
            }
            input[type="number"] {
                appearance: none;
                border: none;
                outline: none;
                border-bottom: 0.2em solid #404040;
                background: transparent;
                border-radius: 0.2em 0.2em 0 0;
                padding: 0.4em;
                color: #404040;
                text-align: center;
                font-size: 20px;
                font-weight: 700;
                transition: all 0.2s ease;
            }
            input[type="number"]:focus {
                appearance: none;
                border: none;
                outline: none;
                border-bottom: 0.2em solid #404040;
                background: transparent;
                font-weight: 700;
                color: #404040;
                font-size: 21px;
            }

            .btn-cal {
                height: 100px;
                width: auto;
                justify-content: center;
                display: flex;
                align-items: center;
            }

            .form-select {
                background-color: lightgray;
                font-weight: 600;
                color: black;
                border: 2px solid #404040;
                transition: all 0.5s ease;
            }
            .form-select:hover {
                background-color: #404040;
                border: 2px solid black;
                color: hsl(0, 0%, 100%);
                box-shadow: #404040 0px 7px 29px 0px;
            }
            .form-select:focus {
                background-color: #404040;
                border: 2px solid black;
                color: hsl(0, 0%, 100%);
                box-shadow: #404040 0px 7px 29px 0px;
            }

            button {
                background-color: darkgray;
                color: black;
                font-weight: 700;
                width: 200px;
                padding: 17px 40px;
                
                cursor: pointer;
                border: 0;
                box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                font-size: 15px;
                transition: all 0.5s ease;
                border: 2px solid #404040;
            }

            button:hover {
                letter-spacing: 3px;
                background-color: #404040;
                color: hsl(0, 0%, 100%);
                box-shadow: #404040 0px 7px 29px 0px;
            }

            button:active {
                letter-spacing: 3px;
                background-color: #404040;
                color: hsl(0, 0%, 100%);
                box-shadow: #404040 0px 0px 0px 0px;
                transform: translateY(10px);
                transition: 100ms;
            }
            .containers {
                display: flex;
                flex-direction: row;
                position: relative;
                justify-content: baseline;
                align-items: baseline;
                gap: 20px;
            }

            .para {
                display: flex;
                position: relative;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="container flex mt-5">
            <h1 class="text-center";>Formula</h1>
            <div class="toink">
                
                <?php if (isset($_GET["result"])): ?>
                <p id="p1"><?php echo $_GET["result"]; ?></p>
                <?php endif; ?>
                    
            </div>
            <div class="row justify-content-center">
                <!-- Center the form -->
                <form action="form.php" method="POST" class="col-md-8">
                    <div id="container" class="containers">
                        <!-- Align textboxes and button in a row -->
                        <div class="col">
                            <label for="num1Inserted" class="visually-hidden"
                                >Number 1</label
                            >
                            <input
                            type="number"
                                class="form-control"
                                id="num1Inserted"
                                name="num1Inserted"
                                placeholder=""
                            />
                        </div>
                        <div class="col">
                            <label for="num2Inserted" class="visually-hidden"
                                >Number 2</label    
                            >
                            <input
                            type="number"
                                class="form-control"
                                id="num2Inserted"
                                name="num2Inserted"
                                placeholder=""
                            />
                        </div>
                        <div class="col">
                            <label for="unit1" class="visually-hidden"
                                >Operation</label
                            >
                            <select
                                id="unit1"
                                class="form-select"
                                name="unit1"
                                onchange="getSelectedValue();"
                            >
                                <option selected value>-- select an option --</option>
                                <option value="square">Area of Square</option>
                                <option value="rectangle">Area of Rectangle</option>
                                <option value="circle">Area of Circle</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-cal">
                        <button type="submit" onclick="btnFunction();">Calculate</button>
                    </div>
                </form>
        

        <script>    

        // Variables
    
        function getSelectedValue(){
          
        var selectedValue = document.getElementById("unit1").value;
        var num1 = document.getElementById("num1Inserted");
        var num2 = document.getElementById("num2Inserted");


        // Square
        
        if(selectedValue === "square"){
            document.getElementById('num2Inserted').placeholder = "a²";
            num1.style.display = "none"


        }



        // Rectangle

        if(selectedValue === "rectangle"){
            document.getElementById('num1Inserted').placeholder = "L";
            document.getElementById('num2Inserted').placeholder = "W";
            num1.style.display = "flex"


        }


                  // circle

        if(selectedValue === "circle"){
            document.getElementById('num2Inserted').placeholder = "πr²";
            num1.style.display = "none"

        }
    
    }



</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>