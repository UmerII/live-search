<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>PHP Live MySQL Database Search</h1>
<style>
    .search-box{
        width: 500px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
     height: 32px;
     padding: 5px;
     border: 1px solid #cccccc;
     font-size: 14px;
    }
</style>
<script>
function displayEmploye(){
    var ajaxHttpRequest = new XMLHttpRequest();
    var name = document.getElementById('name').value;
    if(name == ""){
        document.getElementById("result").innerHTML = "";
        return;

    }   
    ajaxHttpRequest.onreadystatechange = function(){
        if(ajaxHttpRequest.readyState == 4){
            var displayResponse = document.getElementById('result');
            displayResponse.innerHTML = ajaxHttpRequest.responseText;

        }
        {
            var query = "?name=" + name ;
            ajaxHttpRequest.open("GET","getEmployee.php" + query, true );
            ajaxHttpRequest.send(null);
             
        }
    } 
}
     </script>
    <div class="search-box">
    <input type=" text" id="name" autocomplete="off" placeholder="search employee" onkeyup="displayEmployee()"/>
    <br><br>

    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function displayEmployee() {
        var ajaxHttpRequest = new XMLHttpRequest();
        var name = document.getElementById('name').value;
        if (name == "") {
            document.getElementById("result").innerHTML = "";
            return;
        }
        ajaxHttpRequest.onreadystatechange = function () {
            if (ajaxHttpRequest.readyState == 4) {
                var displayResponse = document.getElementById('result');
                displayResponse.innerHTML = ajaxHttpRequest.responseText;
            }
        }
        var query = "?name=" + name;
        ajaxHttpRequest.open("Get", "getEmployee.php" + query, true);
        ajaxHttpRequest.send(null);
    }
</script>

<body>
    <div class="search-box">
        <input type="text" id="name" autocomplete="off" placeholder="Seach Employee" onkeyup="displayEmployee()">
        <br><br>
        <div id="result">Results will be displayed here...</div>
    </div>


</body>

</html>