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


<!-- 2nd Part -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <p id="name"></p>
    <div id="names"></div> -->
    <p id="count"></p>
    <div id="results"></div>

    <script>
        // $.ajax({
        //     url: 'json.php',
        //     dataType: 'json',
        //     success: function(data) {
        //         var name = $('#name'),
        //             names = $('#names');

        //         if (data.name) {
        //             name.text('Your search returned ' + data.name + ' results.');


        //             $(data.names).each(function(index, value) {
        //                 names.append($('<p></p>').text(value));
        //             });
        //         } else {
        //             name.text('No results.');
        //         }
        //     }
        // });

        $.ajax({
            url: 'json.php',
            dataType: 'json',
            success: function(data) {
                var count = $('#count'),
                    results = $('#results');

                if (data.count) {
                    count.text('Your search returned ' + data.count.toString() + ' results.');


                    $(data.results).each(function(index, value) {
                        results.append($('<p></p>').text(value));
                    });
                } else {
                    count.text('No results.');
                }
            }
        });
        
        // $.ajax({
        //     url: 'json.php',
        //     dataType: 'json',
        //     success: function(data) {
        //         $('#count').text('Your search returned ' + data.count + ' results.');
        //         // console.log(data.names);
        //     }
        // });
    </script>
</body>
</html>


