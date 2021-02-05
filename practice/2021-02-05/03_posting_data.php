<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posting data</title>
    <script type="text/javascript">

    function insert() {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('message').innerHTML = xmlhttp.responseText;
            }
        }

        var parameters = 'text='+document.getElementById('text').value;

        xmlhttp.open('POST', 'post_include.php', true);
        xmlhttp.setRequestHeader('Content-type' ,'application/x-www-form-urlencoded');
        xmlhttp.send(parameters);
    }

    </script>
</head>
<body>
    
Insert :  <input type="text" id="text">  <input type="submit" value="Insert" onclick="insert();"> <br><br>

<div id="message"></div>

</body>
</html>