<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function()
        {

            $.get("get_data?month=jan", function(data, status)
            {  
                data = JSON.parse(data);
                 var table = document.getElementById("myTable");
            });
        
        });

        function get_month('feb')
	    {
            $.get("get_data?month= feb", function(data, status)
            {
                data = JSON.parse(data);
                var table = document.getElementById("myTable");
		    });
        }
    </script>

</head>
<body>

    <h1>Hello Bangal JS</h1>

    <button onclick="get_month('feb')">Februaray</button>
    {{-- <button onclick="get_month('april')">April</button> --}}

    <table id="myTable" style="1px solid black">
        <tr>
            <td>D</td>
            <td>F</td>
            <td>J</td>
            <td>A</td>
            <td>M</td>
            <td>E</td>
            <td>S</td>
            <td>E</td>
        </tr>
    </table>

</body>
</html>