//logout
$("#logout").click(function() {

	$.ajax({
	  type: "POST",
	  url: "logout.php",
	  data:$("#formloginadmin").serialize(),
	  success: function(data)
			   {
				   window.location = "index.php";
				}
	});
 
	return false;
});
