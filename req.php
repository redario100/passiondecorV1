<?php
header('Access-Control-Allow-Origin: *');


function aurore($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/caaurore?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}


function capaypal($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/capaypal?date1='.$date1.'&date2='.$date2;
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}

function cacarteb($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacartebancaire?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}

function cacartec($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacartecadeau?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}



function cacetelem($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacetelem?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}


function cafidplus($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cafidplus?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->MNT;
}
}
else
{
echo '0';
}
}


function cmdaurore($date1,$date2)
{
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdaurore?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}


function cmdpaypal($date1,$date2)
{
	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdpaypal?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}


function cmdcartebancaire($date1,$date2)
{
	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcartebancaire?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}


function cmdcetelem($date1,$date2)
{
	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcetelem?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}


function cmdcartecadeau($date1,$date2)
{
	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcartecadeau?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}

function cmdfidplus($date1,$date2)
{
	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdfidplus?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

if(count($characters) > 0){
foreach ($characters as $character)
{
echo $character->NOMBRE;
}
}
else
{
echo '0';
}
}

if (isset($_GET['caglobaljour']))
{
$date1=$_GET['date1'];
$date2=$_GET['date2'];
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/detailall?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url);
$characters = json_decode($data);
foreach ($characters as $character)
{
echo '<span class="chiffre">'.$character->CA_GLOBAL.'</span>';
}
}


else if (isset($_GET['camarge']))
{
$date1=$_GET['date1'];
$date2=$_GET['date2'];
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/detailall?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url);
$characters = json_decode($data);
foreach ($characters as $character)
{
echo '<span class="chiffre">'.$character->MARGE_PRC.'%</span>';
}
}
else if (isset($_GET['nbrcmdjour']))
{
$date1=$_GET['date1'];
$date2=$_GET['date2'];	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/detailall?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url);
$characters = json_decode($data);
foreach ($characters as $character)
{
echo '<span class="chiffre">'.$character->NOMBRE_CMD.'</span>';
}
}

else if (isset($_GET['nbrannulationjour']))
{
$date1=$_GET['date1'];
$date2=$_GET['date2'];	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/annulationdetail?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);
	if(count($characters) > 0){
	foreach ($characters as $character)
{
echo '<span class="chiffre">'.$character->NOMBRE_CMD.'</span>';
}
	}	
else
{
echo '<span class="chiffre">0</span>';
}

}


else if (isset($_GET['caannulationjour']))
{
$date1=$_GET['date1'];
$date2=$_GET['date2'];	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/annulationdetail?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);
	if(count($characters) > 0){
	foreach ($characters as $character)
{
echo '<span class="chiffre">'.$character->CA_GLOBAL.'</span>';
}
	}	
else
{
echo '<span class="chiffre">0</span>';
}

}

else if (isset($_GET['mtpparjour']))
{
	$date1=$_GET['date1'];
$date2=$_GET['date2'];
$code=$_GET['code'];	
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdaurore?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);
?>
<table class="table">
    <thead>
      <tr>
        <th>Methode</th>
        <th>Nbr CMD</th>
      </tr>
    </thead>
    <tbody>
<?php
	if(count($characters) > 0){
foreach ($characters as $character)
{
	?>
	
      <tr>
        <td>AURORE</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
	}
	else
	{
		?>
        <tr>
        <td>AURORE</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url2 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdpaypal?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data2 = file_get_contents($url2); // put the contents of the file into a variable
$characters2 = json_decode($data2);
if(count($characters2) > 0){
foreach ($characters2 as $character)
{
	?>
	
      <tr>
        <td>PAYPAL</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>PAYPAL</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url3 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcartebancaire?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data3 = file_get_contents($url3); // put the contents of the file into a variable
$characters3 = json_decode($data3);
if(count($characters3) > 0){
foreach ($characters3 as $character)
{
	?>
	
      <tr>
        <td>CARTE B</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>CARTE B</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url4 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcartecadeau?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data4 = file_get_contents($url4); // put the contents of the file into a variable
$characters4 = json_decode($data4);
if(count($characters4) > 0){
foreach ($characters4 as $character)
{
	?>
	
      <tr>
        <td>CARTE CAD</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
}
	else
	{
		?>
        <tr>
        <td>CARTE CAD</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}


$url5 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdcetelem?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data5 = file_get_contents($url5); // put the contents of the file into a variable
$characters5 = json_decode($data5);
if(count($characters5) > 0) {
foreach ($characters5 as $character)
{
	?>
	
      <tr>
        <td>CETELEM</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>CETELEM</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}
	
	
$url6 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cmdfidplus?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data6 = file_get_contents($url6); // put the contents of the file into a variable
$characters6 = json_decode($data6);
if(count($characters6) > 0) {
foreach ($characters6 as $character)
{
	?>
	
      <tr>
        <td>FID PLUS</td>
        <td><?php echo '<span class="chiffrep">'.$character->NOMBRE.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>FID PLUS</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

	?>
	
	<script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart<?php echo $code;?>);
	  
      function drawChart<?php echo $code;?>() {
      
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['AURORE', <?php cmdaurore($date1,$date2); ?>],
          ['PAYPAL', <?php cmdpaypal($date1,$date2); ?>],
          ['CARTE B',  <?php cmdcartebancaire($date1,$date2); ?>],
          ['CARTE CAD', <?php cmdcartecadeau($date1,$date2); ?>],
          ['CETELEM',    <?php cmdcetelem($date1,$date2); ?>],
		  ['FID PLUS',    <?php cmdfidplus($date1,$date2); ?>]
        ]);

        var options = {
          title: 'Statistiques'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart<?php echo $code;?>'));

        chart.draw(data, options);
      }
	  
	  
	  $(window).resize(function() {
	  drawChart<?php echo $code;?>();
	  });
</script>

<div class="col-md-6">
	<div id="piechart<?php echo $code;?>" class="chart"></div></div>
	<?php

}










else if (isset($_GET['camtpparjour']))
{
$code=$_GET['code'];
	$date1=$_GET['date1'];
$date2=$_GET['date2'];
$url = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/caaurore?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);
?>
<table class="table">
    <thead>
      <tr>
        <th>Methode</th>
        <th>CA</th>
      </tr>
    </thead>
    <tbody>
<?php
	if(count($characters) > 0){
foreach ($characters as $character)
{
	?>
	
      <tr>
        <td>AURORE</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
	}
	else
	{
		?>
        <tr>
        <td>AURORE</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url2 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/capaypal?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data2 = file_get_contents($url2); // put the contents of the file into a variable
$characters2 = json_decode($data2);
if(count($characters2) > 0){
foreach ($characters2 as $character)
{
	?>
	
      <tr>
        <td>PAYPAL</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>PAYPAL</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url3 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacartebancaire?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data3 = file_get_contents($url3); // put the contents of the file into a variable
$characters3 = json_decode($data3);
if(count($characters3) > 0){
foreach ($characters3 as $character)
{
	?>
	
      <tr>
        <td>CARTE B</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>CARTE B</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}

$url4 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacartecadeau?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data4 = file_get_contents($url4); // put the contents of the file into a variable
$characters4 = json_decode($data4);
if(count($characters4) > 0){
foreach ($characters4 as $character)
{
	?>
	
      <tr>
        <td>CARTE CAD</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
}
	else
	{
		?>
        <tr>
        <td>CARTE CAD</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}


$url5 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cacetelem?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data5 = file_get_contents($url5); // put the contents of the file into a variable
$characters5 = json_decode($data5);
if(count($characters5) > 0) {
foreach ($characters5 as $character)
{
	?>
	
      <tr>
        <td>CETELEM</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>CETELEM</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}
	
	
$url6 = 'http://mytest.fly.fr/wscommon/list/mag21/exploit/cafidplus?date1='.$date1.'&date2='.$date2; // path to your JSON file
$data6 = file_get_contents($url6); // put the contents of the file into a variable
$characters6 = json_decode($data6);
if(count($characters6) > 0) {
foreach ($characters6 as $character)
{
	?>
	
      <tr>
        <td>FID PLUS</td>
        <td><?php echo '<span class="chiffrep">'.$character->MNT.'</span>'; ?></td>
      </tr>
      
	<?php

}
}

	else
	{
		?>
        <tr>
        <td>FID PLUS</td>
        <td><?php echo '<span class="chiffrep">0</span>'; ?></td>
        </tr>
	  <?php
	}
?>
	<script>
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart<?php echo $code;?>);
	  
      function drawChart<?php echo $code;?>() {
      
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['AURORE', <?php aurore($date1,$date2); ?>],
          ['PAYPAL', <?php capaypal($date1,$date2); ?>],
          ['CARTE B',  <?php cacarteb($date1,$date2); ?>],
          ['CARTE CAD', <?php cacartec($date1,$date2); ?>],
          ['CETELEM',    <?php cacetelem($date1,$date2); ?>],
		  ['FID PLUS',    <?php cafidplus($date1,$date2); ?>]
        ]);

        var options = {
          title: 'Statistiques'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart<?php echo $code;?>'));

        chart.draw(data, options);
      }
	  
	  
	  $(window).resize(function() {
	  drawChart<?php echo $code;?>();
	  });
</script>

<div class="col-md-6">
	<div id="piechart<?php echo $code;?>" class="chart"></div></div>
<?php
}
?>