<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is a form</h1>
    <form>
        <input type="text"> <br><br>

        <input type="radio" id="x">
        <label for="x">label 1</label> <br><br>

        <input type="checkbox" id="y">
        <label for="y">label 2</label><br><br>

        <input type="button" value="Hello"> <br><br>

        <input type="submit"> <br><br>


        <form action="/fileName.php">
            <label for="x">Something</label>       <br>
            <input type="text" id="x" name="a" value="some value">        <br>

            <label for="y">Something eles</label>         <br>
            <input type="text" id="y" name="b" value="">        <br><br>

            <input type="submit" value="Whatever">
        </form>

    </form>
</body>
</html>
