<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
if(empty ($_POST) === false)
{
	$error = array();
}

$Name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];

if( empty($Name) == true || empty ($email) == true || empty($phone) == true)
{
	$error[] = 'Name , email and phone are required';
}



?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/view.css" media="all">
<link href="view.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body id="main body">
<div id="form_container">

<h1><a>Taxi Booking System</a></h1>
		<form id="Taxi Booking system" class="appnitro" method="post" action="">
					<div class="form_description">
			<h2>Dash Taxi</h2>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="Name">Name </label>
		<div>
			<input id="Name" name="Name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="Pick_Up_Address" class="element text large">Pick Up Address </label>
		
		<div>
			<input id="Street_Address" name="Street_Address" class="element text large" value="" type="text">
			<label for="Street_Address">Street Address</label>
		</div>
	
		<div>
			<input id="Address_Line_2" name="element_2_2"  value="" class="element text large" type="text">
			<label for="Address">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id=	"City" name="City" class="element text medium" value="" type="text">
			<label for="City">City</label>
		</div>
	
		<div class="right">
			<input id="County" name="County" class="element text medium" value="" type="text">
			<label for="County">County</label>
		</div>
	
		</li>
        <li id="li_2" >
		<label class="description" for="Drop_of_Address">Drop Of Address </label>
		
		<div>
			<input id="Street_Address" name="Street_Address"  class="element text large"  value="" type="text">
			<label for="Street_Address">Street Address</label>
		</div>
	
		<div>
			<input id="Address_Line_2" name="Address Line 2"  class="element text large" value="" type="text">
			<label for="Address">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id=	"City" name="City" value="" type="text">
			<label for="City">City</label>
		</div>
	
		<div class="right">
			<input id="County" name="County" class="element text medium" value="" type="text">
			<label for="County">County</label>
		</div>
	
		</li>
        
       <li id="li_4" >
		<label class="description" for="Date">Date  </label>
		<input id="Date" name="element_4_1" class="element text medium" size="2" maxlength="6" value="" type="date"> 
        </li> 
        
        		<li id="li_5" >
		<label class="description"  class="element text medium"for="Time">Time </label>
		<span class="medium"> 
            <select id="time">
    	<option value="0">00.00</option>
        <option value="1">01.00</option>
	    <option value="2">02.00</option>
        <option value="3">03.00</option>
        <option value="4">04.00</option>
        <option value="5">05.00</option>
        <option value="6">06.00</option>
        <option value="7">07.00</option>
    	<option value="8">08.00</option>
        <option value="9">09.00</option>
        <option value="10">10.00</option>
	    <option value="11">11.00</option>
    	<option value="12">12.00</option>
        <option value="13">13.00</option>
	    <option value="14">14.00</option>
        <option value="15">15.00</option>
        <option value="16">16.00</option>
        <option value="17">17.00</option>
        <option value="18">18.00</option>
        <option value="19">19.00</option>
    	<option value="20">20.00</option>
        <option value="21">21.00</option>
        <option value="22">22.00</option>
	    <option value="23">23.00</option>
		</select>
        </span>
        </li>
        <li id="li_6" >
		<label class="description" class="element text medium" for="AmtOfPassenger">Amount Of Passengers: </label>
        <span>
	
        <select id='amtofpassenger'>
        <option value="1">01</option>
	    <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
    	<option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option
        ></select>
	</span>
		</li>
        </br>
		
        <li id="li_7" >
		<label class="description" for="Email">Email </label>
		<div>
		  <input id="Email" name="E-mail" class="element text medium" type="email" maxlength="255" value=""/>
		</div> 
        </li>
        
        <li id="li_8" >
		<label class="description" for="Phone">Phone </label>
		<span>
			<input id="Phone" name="Phone" class="element text medium" size="255" maxlength="255" value="" type="text"> 
			
		</span>
        </li>
        
        
       	<li id="li_8" >
		<label class="description" for="Comment">Additional Comments </label>
		<div>
			<textarea id="Comment" name="Comment"class="element textarea medium" maxlength="244" ></textarea> 
		</div> 
        
        
		<li class="buttons">
	    <input type="hidden" name="form_id" value="800652" />			    
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
        

</body>
</html>