<html>

<head>    
    <title>Meu primeiro site em PHP! WOohoo</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  <!-- Bibliotecas Site https://code.jquery.com  -->

    <style type="text/css">          /* Tag CSS*/ 
        .linha {
            font-weight: bold;
            color: green;
            padding-left: 10px;
            line-height: 50px;
        }
    </style>

</head>

<body>

    <?php      /* Tag php*/ 

        for ( $i = 0 ; $i <10 ; $i++) {
            print( "<span class=\"Linha\">Linha número " . $i . "</span><br />");
        }

    ?>

</body>

<script type="text/javascript">   /* Tag JavaScript */
    $ (document) .ready(function() {
        alert("WOohoo");
    });   

</script>

</html>