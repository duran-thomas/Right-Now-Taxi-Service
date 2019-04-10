<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/confirmationPage.css">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
		$('#pickUp').on('keyup',function(){
           var charCount = $(this).val().replace(/[\s,-]/g, '',).length;
           $('.result').text(350+(charCount*20));
        });
	});
</script>

    <title>Confirm Taxi</title>
</head>
<body>
    <div class="container">  
        <form id="contact" action="/testInfo" method="post">
            @csrf
            <h3>Confirm Taxi</h3>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Customer Email</label>
                <input  type="text" name="customerEmail" id="customerEmail" class="form-control" placeholder="Your Email">
            </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Driver ID</label>
                    <input type="text" name="driverID" id="driverID" class="form-control" value="{{$driver->driverID}}" disabled>
                </div>
                <div class="form-group col-sm-6">
                    <label>Driver Name</label>
                    <input type="text" name="driverName" id="driverName" class="form-control" value="{{$driver->name}}" disabled>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Journey (Format: From - To)</label>
                    <input  type="text" name="pickUp" id="pickUp" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>Cost (JMD)</label>
                    <div id="result" class="result">Cost: $0</div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <button type="submit" onclick="getValue()" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function getValue(){
            var cost = document.getElementsByClassName('result').item(0).innerHTML;
        }
    </script> 
</body>
</html>