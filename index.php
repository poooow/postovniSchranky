<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mapa poštovních schránek v České Republice</title>
    <script type="text/javascript" src="https://api.mapy.cz/loader.js"></script>
    <script type="text/javascript">Loader.load();</script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #info {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: #00000066;
            border-radius: 5px;
            z-index: 99;
            color: #ffffff;
            padding: 5px;
            font-family: Verdana, sans-serif;
            font-size: 10px;
        }

        #info a {
            color: #ffffff;
        }

        #m {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="m"></div>
<div id="info">Poslední aktulaizace 30. 12. 2018; <a href="https://www.ceskaposta.cz/ke-stazeni/zakaznicke-vystupy">Zdroj dat</a> <a href="https://github.com/poooow/postovniSchranky">GitHub</a></div>
</body>
<script type="text/javascript" src="import.js"></script>
</html>