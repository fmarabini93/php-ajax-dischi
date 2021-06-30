<?php
    ini_set( 'error_reporting', E_ALL );
    ini_set( 'display_errors', true );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="style.css">
        <title>PHP Discs</title>
    </head>
    <body>
        <main id="app">
            <div v-for="disc in discs">
                <h2>{{disc.title}}</h2>
                <p>{{disc.author}}</p>
                <img :src="disc.poster" :alt="disc.title">
                <p>{{disc.year}}</p>
                <p>{{disc.genre}}</p>
            </div>
        </main>
        <script src="script.js"></script>
    </body>
</html>