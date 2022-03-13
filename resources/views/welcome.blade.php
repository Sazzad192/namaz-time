<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ramadancorner</title>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Ajax Connection -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="antialiased">
       
        <div class="container-fluid">

            <!-- first headr -->
            <div class="row">
                <div class="col-sm-12 text-center">
                    
                    <h4 style="padding: 10px 0px 5px 0px "><b>নামাজ, সেহরি ও ইফতার এর সময়সূচি</b></h4>
                    
                </div>
            </div>

            <!-- header banner -->
            <div class="row">
                <div class="col-sm-12">
                    <img src="picture/Namaz.png" alt="" class="d-block w-100">
                </div>
            </div> <br>
            
             <!-- main body part -->
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{-- <h2>নামাজ, সেহরি ও ইফতার এর সময়সূচি</h2> <br> --}}
                    <h4>ঢাকা সহ দেশের সব কয়টি জেলার সারা বছরের নামাজ, সেহরি ও ইফতারের সময় দেখুন এই পাতায়।</h4>
                </div>
            </div> <br>

             <!-- Drop-down :: জেলা খুঁজুন -->
            <div class="row">
                <div class="col-sm-6 text-right">
                    <h5>আপনার জেলা খুঁজুন:</h5>
                </div>
                <div class="col-sm-6">
                <form >
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="district">
                            <option selected> বিভাগ খুঁজুন </option>
                            <option value="dhaka">ঢাকা</option>
                            <option value="bogura">বগুড়া</option>
                        </select>
                </form>
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-sm-12" style="text-align: center;">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        
                        <button class="btn btn-info" onclick="get_data('jan')">জানুয়ারি</button>
                        <button class="btn btn-info" onclick="get_data('feb')">ফেব্রুয়ারি</button>
                        <button class="btn btn-info" onclick="get_data('mar')">মার্চ</button>
                        <button class="btn btn-info" onclick="get_data('apr')">এপ্রিল</button>
                        <button class="btn btn-info" onclick="get_data('may')">মে</button>
                        <button class="btn btn-info" onclick="get_data('jun')">জুন</button>
                        <button class="btn btn-info" onclick="get_data('jul')">জুলাই</button>
                        <button class="btn btn-info" onclick="get_data('aug')">আগস্ট</button>
                        <button class="btn btn-info" onclick="get_data('sep')">সেপ্টেম্বর</button>
                        <button class="btn btn-info" onclick="get_data('oct')">অক্টোবর</button>
                        <button class="btn btn-info" onclick="get_data('nov')">নভেম্বর</button>
                        <button class="btn btn-info" onclick="get_data('dec')">ডিসেম্বর</button>

                    </div> <br> <br>
                </div>
                <div class="container-fluid"  style="text-align: center;">
                    <div class="col-sm-12"  style=" width: 100%; overflow-y: hidden;" >
                        <table class="table table-striped text-center" id="myTable" style=" border:1px solid #dee2e6; width: 100%; ">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col"> তারিখ </th>
                                    <th scope="col">ফজর</th>
                                    <th scope="col">যোহর</th>
                                    <th scope="col">আছর</th>
                                    <th scope="col">মাগরিব</th>
                                    <th scope="col">ইশা</th>
                                    <th scope="col">সাহরি</th>
                                    <th scope="col">ইফতার</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
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