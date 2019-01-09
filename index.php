<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="" id="div1">
      Hello
  </div>
  <button type="button" name="button">Click Me</button>
  <script type="text/javascript">
  $("button").click(function(){
      console.log("click");
      $.ajax({
       url: "commentAPI.php",
       type: "POST",
       data : {
           msg : "Dou you in Home?"
       },
       success: function(result){
          $("#div1").html(result);
      },
      error: function (jqXHR, textStatus, errorThrown) {
                 if (jqXHR.status == 500) {
                     alert('Internal error: ' + jqXHR.responseText);
                 } else {
                     alert('Unexpected error.');
                 }
             }
      });
    });
  </script>
</body>
</html>
