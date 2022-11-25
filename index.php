<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styleIndex.css">
    <title>Document</title>
</head>
<body>
    <form action="./result.php" method="post">
        <h1>Censuratore Boolean</h1>
        <label for="text">Inserisci il testo da censurare</label>
        <div class="input-group">
  <textarea class="form-control widthtext" aria-label="With textarea" name="testo"></textarea>
</div>
        <label for="word">Inserisci la parola da censurare</label>
        <input type="text" name="parolaCensurata">
    <button type="submit">Invia</button>


    </form>
</body>
</html>