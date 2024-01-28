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
<script defer>
    let btn = document.getElementById('btn-parent');
    let text = document.querySelector('h1');
    btn.addEventListener('click', () => {
        if (text.innerText == 'hello') {
        text.innerText = '';
        }
        else {
            text.innerText = 'hello';
        }
    })
    
</script>
</html>