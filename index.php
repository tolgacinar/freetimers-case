<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 1200px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .input {
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
        }

        button {
            margin-top: 5px;
        }

        .result-area {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Calculate Bag Cost by Meters</h3>
        <div class="input">
            <label for="meters">Meters</label>
            <input id="meters" type="number" />
        </div>
        <button id="button">Calculate</button>
        <div class="result-area">
            Result: <span id="result">0</span>
        </div>
    </div>
</body>
<script>
    const button = document.querySelector("#button");
    const input = document.querySelector("#meters");
    const result = document.querySelector("#result");

    button.addEventListener("click", async function(e) {
        e.preventDefault()
        if (input.value) {
            let response = await fetch(`query.php?meter=${input.value}`)
            if (response.ok) {
                let json = await response.json()
                result.innerHTML = `<br />Price: £${json.price}<br />Bags: ${json.bags}`;
            } else {
                alert("ERROR: " + response.status)
            }
        }
    });
</script>

</html>