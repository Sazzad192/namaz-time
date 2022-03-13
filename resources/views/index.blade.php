<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <input id="toggleVisibilityButton" type="button" value="Button1"/>
    <input id="toggleVisibilityButton" type="button" value="Button2"/>


    <table  id="displaytable" style="display:none" width="100%" cellpadding="1" cellspacing="0" border="3">
    <tr align="center">
            <td class="lbl">column1</td>
            <td class="lbl">column2</td>
            <td class="lbl">column3</td>
            </tr>
    <tr>
            <td align="center">1</td>
            <td align="center">2</td>
             <td align="center">33</td>
            </tr>
            <tr>
            <td align="center">4</td>
            <td align="center">5</td>
           <td align="center">6</td>
            </tr>
</table>
<script>
document.getElementById("toggleVisibilityButton").addEventListener("click", function(button) 
{    
   if (document.getElementById("displaytable").style.display === "none")             
   document.getElementById("displaytable").style.display = "block";
   else document.getElementById("displaytable").style.display = "none";
});
</script>
</body>
</html>