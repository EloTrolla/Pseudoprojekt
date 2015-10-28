<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprjekt_VS15_EloTrolla</title>
</head>
<body>

<button type="button" onclick="alert('Tere maailm!')">Tere maailm!</button><br>
<br>

<a href="http://www.khk.ee" target="_blank" onclick="alert('Tere maailm!')">Tere maailm!</a><br>
<br>

<a href="khk.ee" onclick="alert('Jääme siia!'); return false;">Jääme siia!</a><br>
<br>

<div>

    <img id="minupilt" onclick="changeImage()" src="kama/kass.png">

    <p>Vajuta kassi pildile, et ilmuks koera pilt. Või vastupidi.</p>

    <script>
        function changeImage() {
            var image = document.getElementById('minupilt');
            if (image.src.match("kass")) {
                image.src = "kama/koer.png";
            } else {
                image.src = "kama/kass.png";
            }
        }
    </script>

</div>


</body>
</html>