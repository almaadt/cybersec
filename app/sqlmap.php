<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento Codice Utente</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .form-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .form-container input[type="text"] {
            padding: 10px;
            width: 50%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <img src="login.jpg" alt="">
    <h2>Inserisci il tuo Codice Utente</h2>
    <form action="sqlmapunsafe.php" method="get">
        <input type="text" name="id" placeholder="Codice Utente" required>
        <input type="submit" value="Invia (Unsafe)">
    </form>

    <form action="sqlmapsafe.php" method="get">
        <input type="text" name="id" placeholder="Codice Utente" required>
        <input type="submit" value="Invia (Safe)">
    </form>
</div>

</body>
</html>
