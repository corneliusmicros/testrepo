<?php

function generateEnDate($oldDate){
	$MonthArr = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");	
	$date = explode("-", $oldDate);
	$d = intval($date[0])-1;
	//echo $d;
	$newDate = $MonthArr[$d] . "-". $date[1] . "-" . $date[2];
	//echo $newDate;exit;
	return $newDate;
}

$checkin  = isset($_GET["indate"]) ? $_GET["indate"] : "";
$checkin = str_replace("/", "-", $checkin); //10-11-2012
$checkin = generateEnDate($checkin);

$checkout = isset($_GET["outdate"]) ? $_GET["outdate"] : "";
$checkout = str_replace("/", "-", $checkout); //10-13-2012
$checkout = generateEnDate($checkout);

$roomsCount = (int)$_GET["numberOfRooms"];
$adults = (int)$_GET["numberOfAdults"];
$kids = (int)$_GET["numberOfChildren"];
?>
<html>
<head></head>
<body>
<form id="bookThisHotelBean" name="bookThisHotelForm" action="http://www.holidayinn.com/hotels/us/en/washington/wassm/bookthishotel" method="post">
	<input type="hidden" name="parentController" value="/hotels/us/en/washington/wassm/hoteldetail" />
	<input type="hidden" name="includedView" value="bookthishotel"/>			
	<input id="checkInDate" name="checkInDate" type="hidden" value="<?php echo $checkin; ?>" maxlength="20"/> 	
	<input id="checkOutDate" name="checkOutDate" type="hidden" value="<?php echo $checkout; ?>" maxlength="20"/>
	<input id="adultsCount" name="adultsCount" type="hidden" value="<?php echo $adults; ?>" maxlength="20"/>
	<input id="childrenCount" name="childrenCount" type="hidden" value="<?php echo $kids; ?>" maxlength="20"/>
    <input id="roomsCount" name="roomsCount" type="hidden" value="<?php echo $roomsCount;?>" maxlength="20"/>
	<input id="groupCode" name="groupCode" class="hdGroupCode" type="hidden" value="" maxlength="3"/>							
	<input id="corporateId" name="corporateId" class="hdCorpCode" type="hidden" value=""/>
	<input type="hidden" name="_IATAno" value="99502222">
	<input type="hidden" name="hotelCode" value="wassm">
	<input type="hidden" name="path" value="asearch">	
</form>
<script type='text/javascript'>
	document.getElementById('bookThisHotelBean').submit();
</script>
</body>
</html>