<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f44336; /* Vermelho */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #fff;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #c62828; /* Vermelho escuro */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            margin: 0 10px;
        }

        .button:hover {
            background-color: #b71c1c; /* Vermelho mais escuro no hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bem-vindo à Nossa Landing Page</h1>
    <div class="button-container">
        <a href="https://www.link1.com" class="button">Link 1</a>
        <a href="https://www.link2.com" class="button">Link 2</a>
        <a href="https://www.link3.com" class="button">Link 3</a>
    </div>
</div>

</body>
</html>
