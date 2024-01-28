<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <button id="btn-parent">Click here</button>
</body>
<script>
    let btn = document.getElementById('btn-parent');
    btn.addEventListener('click', () => {
        alert("hello, fuck you!");
    })
</script>
</html>