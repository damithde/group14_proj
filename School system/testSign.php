<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<label class="radio inline">
    <input id="up_radio" type="radio" name="optionsRadios" value="update" checked>
    Update
</label>
<label class="radio inline">
    <input id="ov_radio" type="radio" name="optionsRadios" value="overwritten">  
    Overwritten
</label>
    
<p id="cont">
    sth. here
</p>

	<script>
	$('input[name="optionsRadios"]').on('change', function(){
    if ($(this).val()=='update') {
         
        //change to "show update"
         $("#cont").text("show update");
        
    } else  {
       
        $("#cont").text("show Overwritten");
    }
});
</script>

	</body>
</html>