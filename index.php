<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery_Ajax </title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <p id="count"></p> -->
    <p id="count"></p>
    <div id="results"></div>

    <script>
        $.ajax({
            url: 'json.php',
            dataType: 'json',
            success: function(data) {
                var count = $('#count'),
                    results = $('#results');

                if (data.count) {
                    count.text('Your search returned ' + data.count + ' results.');


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