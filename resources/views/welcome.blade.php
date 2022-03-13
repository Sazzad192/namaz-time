<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="antialiased">
       

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <button onclick="get_data('jan')">January</button>

                <button onclick="get_data('feb')">February</button>

                <table id="myTable" border="1">
                    <tr>
                        <td>Date</td>
                        <td>1st</td>
                        <td>2nd</td>
                        <td>3rd</td>
                        <td>4th</td>
                        <td>5th</td>
                    </tr>
                </table>

            </div>
        </div>


<script type="text/javascript">
   var SITE_URL = "<?= url('/') ?>";

    function get_data(argument) {
        $.get(SITE_URL+"/get_data?month="+argument, function(data, status)
            {  
                data = JSON.parse(data);
                //console.log(data);
              var table = document.getElementById("myTable");

 $("#myTable").find("tr:not(:first)").remove();

$('#myTable tr:last').after(data);

            });
    }
</script>

    </body>
</html>
