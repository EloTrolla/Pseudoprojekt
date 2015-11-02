<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <title>Pseudoprojekt_VS15_EloTrolla</title>

</head>
<body>

<button type="button" onclick="alert('Tere maailm!')">Tere maailm!</button>
<br>
<br>

<a href="http://www.khk.ee" target="_blank" onclick="alert('Tere maailm!')">Tere maailm!</a><br>
<br>

<a href="http://www.khk.ee" onclick="alert('Jääme siia!'); return false;">Jääme siia!</a><br>
<br>

<div>

    <img id="minupilt" onclick="changeImage()" src="kama/kass.png">

    <p>Vajuta kassi pildile, et ilmuks koera pilt. Või vastupidi.</p>


    <!-- --   Ylesanne_5  Kass koeraks javascript -- --


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
-->


    <!-- -- Ylesanne_6  Kass koeraks jquery -- -->

    <script>


        $(document).ready(function () {
            $("#minupilt").click(function () {
                if ($("#minupilt").attr("src") == "kama/kass.png") {
                    $("#minupilt").attr("src", "kama/koer.png");
                } else {
                    $("#minupilt").attr("src", "kama/kass.png");
                }
            });
        });

    </script>

</div>


    <!-- -- Ylesanne_7  Taustav2rv -- -->

<p>Vali lemmik taustavärv:</p>

<!--
    <input type="button" id="change_background_blue" value="blue" />
    <input type="button" id="change_background_red" value="red" />
    <input type="button" id="change_background_green" value="green" />
    <input type="button" id="change_background_white" value="white" />

    <script>

        $( "#change_background_blue" ).on( "click", function() {
            $("body").first().css("background-color","blue");
        });

        $( "#change_background_red" ).on( "click", function() {
            $("body").first().css("background-color","red");
        });

        $( "#change_background_green" ).on( "click", function() {
            $("body").first().css("background-color","green");
        });

        $( "#change_background_white" ).on( "click", function() {
            $("body").first().css("background-color","white");
        });

    </script>

-->



    <!-- Ylesanne_8  Taustav2rv revisited -->



<button id="blue">Blue</button>
<button id="red">Red</button>
<button id="green">Green</button>
<button id="white">White</button>

<script>

    $('#blue').click(function () {
        $('body').css('backgroundColor', $('#blue').text());
    });

    $('#red').click(function () {
        $('body').css('backgroundColor', $('#red').text());
    });

    $('#green').click(function () {
        $('body').css('backgroundColor', $('#green').text());
    });

    $('#white').click(function () {
        $('body').css('backgroundColor', $('#white').text());
    });

</script>



<!-- -- Ylesanne_9   Paremkliki keelamine veebilehel -- -->

<script>

    $(document).contextmenu( function() {
        return false;
    });

</script>

</body>
</html>