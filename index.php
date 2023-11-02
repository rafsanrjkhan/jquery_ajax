<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery_Ajax </title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
</head>

<body>
    <label>
        Name:
        <input type="text" id="name">
    </label>
    <input type="submit" id="fetch">

    <dl>
        <dt>Age</dt>
        <dd class="age">-</dd>

        <dt>Location</dt>
        <dd class="location">-</dd>

        <dt>Job</dt>
        <dd class="job">-</dd>
    </dl>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('#fetch').on('click', function() {
            var name = $('#name').val();
            $.ajax({
                url: 'lookup.php',
                dataType: 'json',
                type: 'GET',
                data: {name: name},
                cache: false,
                success: function(data) {
                    if(data.exists) {
                        // do something useful
                        console.log(data.information);
                    } else {
                        alert('Not found.')
                    }
                    // console.log(data);
                }

            });
        });
    </script>
</body>

</html>