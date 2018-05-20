	function totalca1()
{
	var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
  $.ajax({
         data: "caglobaljour=ok&date1="+date1+"&date2="+date2,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setca1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setca1').hide();
        $('#setca1').html(data);
		$('#setca1').fadeIn();
		
    },
    error: function()
    {
        $('#setca1').html('error');
    }
});

}


	function camarge()
{
	
	var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
  $.ajax({
         data: "camarge=ok&date1="+date1+"&date2="+date2,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#camarge').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#camarge').hide();
        $('#camarge').html(data);
		$('#camarge').fadeIn();
		
    },
    error: function()
    {
        $('#camarge').html('error');
    }
});

}





function nbrcmd1()
{
	
		var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
 $.ajax({
         data: "nbrcmdjour=ok&date1="+date1+"&date2="+date2,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setnbrcmd1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setnbrcmd1').hide();
        $('#setnbrcmd1').html(data);
		$('#setnbrcmd1').fadeIn();
		
    },
    error: function()
    {
        $('#setnbrcmd1').html('error');
    }
});
  
	  
	   }
	   
	   function nbrann1()
{
	
		var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
 $.ajax({
         data: "nbrannulationjour=ok&date1="+date1+"&date2="+date2,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setnbrann1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setnbrann1').hide();
        $('#setnbrann1').html(data);
		$('#setnbrann1').fadeIn();
		
    },
    error: function()
    {
        $('#setnbrann1').html('error');
    }
});
  
	  
	   }
	   
	   
	   	   function caann1()
{
	
		var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
 $.ajax({
         data: "caannulationjour=ok&date1="+date1+"&date2="+date2,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setcaann1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setcaann1').hide();
        $('#setcaann1').html(data);
		$('#setcaann1').fadeIn();
		
    },
    error: function()
    {
        $('#setcaann1').html('error');
    }
});
  
	  
	   }
	   
	   	   function mtp1(code)
{
	
		var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
 $.ajax({
         data: "mtpparjour=ok&date1="+date1+"&date2="+date2+"&code="+code,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setmtp1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setmtp1').hide();
        $('#setmtp1').html(data);
		$('#setmtp1').fadeIn();
		
    },
    error: function()
    {
        $('#setmtp1').html('error');
    }
});
  
	  
	   }
	   
	   	   	   function camtp1(code)
{
	
		var date1= document.getElementById("date1").value;
	var date2=document.getElementById("date2").value;
 $.ajax({
         data: "camtpparjour=ok&date1="+date1+"&date2="+date2+"&code="+code,
         type: "get",
         url: "http://labseo.net/flydigital/appfly/req.php",
		
   beforeSend: function()
    {
$('#setmtpca1').html('<img style="width:50px;" src="load.gif">');
    },
    success: function(data)
    {
		$('#setmtpca1').hide();
        $('#setmtpca1').html(data);
		$('#setmtpca1').fadeIn();
		
    },
    error: function()
    {
        $('#setmtpca1').html('error');
    }
});
  
	  
	   }
	   


	

	  
	  
	  