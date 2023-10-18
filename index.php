<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery_Ajax </title>
    <link rel="stylesheet" href="css/main.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" data-page="home">Home</a></li>
            <li><a href="#" data-page="download">Downloads</a></li>
            <li><a href="#" data-page="tutorials">Tutorials</a></li>
        </ul>
    </nav>
    <!-- <section id="main">Hello</section>
        <h1>Hellooooo</h1> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->   
    <script>
        var app = {
            nav: $('nav ul li a')
        };
        app.putContent = function() {

        }
        app.init =function() {
            app.nav.on('click', function() {
                var page = $(this).data('page');
                   console.log(page);

            });
        }();
    </script>
</body>
</html>


