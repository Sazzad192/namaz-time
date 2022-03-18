<html>
    <head>

    </head>
    <body>
        <h1>Schedule view</h1>



<select id="location" onchange="updateTime()" >
    <option value="Dhaka">Dhaka</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Sylhet">Sylhet</option>
</select><br>

<a href="{{url('/schedule/2022/january')}}">jan</a>
<a href="{{url('/schedule/2022/february')}}">feb</a>

<div id="demo">
    <table>
        <tr>
            <td>Date</td>
            <td>Fazar</td>
            <td>Johar</td>
            <td>Magrib</td>
        </tr>
        
            @foreach ($schedule as $item)
            <tr>
               <td> {{$item['date']}}</td>
                <div>
                    <td id="times" data-time="{{$item['fazar']}}"> {{$item['fazar']}} </td>
                    {{-- <td data-time="{{$item['johar']}}"> {{$item['johar']}}</td>
                     <td data-time="{{$item['magrib']}}"> {{$item['magrib']}}</td> --}}
                </div>
            </tr>
            @endforeach
        </div>
       
            
        
    </table>
        {{-- <a href="{{url('/schedule/'.date('year').'/'.$month)}}"></a> --}}
        {{-- <a href="{{url('/schedule?month=').$month}}"></a> --}}
       
        <script>

                const mydiv =document.getElementById('times');
                var dataset=mydiv.getAttribute("data-time");
                // var data=document.getElementById("demo").textContent;
                // console.log(dataset);

                function updateTime()
                {
                    var loc = document.getElementById("location").value;
                    // console.log(loc);
                    if(loc=="Rajshahi")
                    {
                        var hour = dataset.substr(0, 1);
                        var minute = dataset.substr(2, 3);

                        minute = parseInt(minute) + 5;
                        mydiv.setAttribute("data-time",hour+":"+minute);
                        // console.log(mydiv.getAttribute("data-time"))
                        mydiv.getAttribute("data-time");
                        // const myAnchor = document.getElementById("myAnchor");
                        let text = mydiv.getAttribute("data-time");
                        document.getElementById("times").innerHTML = text;
                    }
                    if(loc=="Sylhet")
                    {
                        var hour = dataset.substr(0, 1);
                        var minute = dataset.substr(2, 3);

                        minute = parseInt(minute) - 4;
                        mydiv.setAttribute("data-time",hour+":"+minute);
                        // console.log(mydiv.getAttribute("data-time"))
                        mydiv.getAttribute("data-time");
                        let text = mydiv.getAttribute("data-time");
                        document.getElementById("times").innerHTML = text;
                    }
                    if(loc=="Dhaka"){
                        mydiv.setAttribute("data-time",dataset);
                        // console.log(mydiv.getAttribute("data-time"))
                        mydiv.getAttribute("data-time");
                        let text = mydiv.getAttribute("data-time");
                        document.getElementById("times").innerHTML = text;
                    }
                }
            
        </script>

    </body>
</html>