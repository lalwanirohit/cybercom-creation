<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auto Suggest App</title>
    <script type="text/javascript">
        function findMatch() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.status == 200 && this.readyState == 4) {
                    document.getElementById('results').innerHTML = this.responseText;
                }
            }

            xmlhttp.open('GET' , 'include_suggest.php?search_text='+document.search.search_text.value , true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form id="search" name="search">
        Type a name : <br><br>
        <input type="text" name="search_text" onkeyup="findMatch();"> <br> <br>

        <div id="results"></div>
    </form>
</body>
</html>