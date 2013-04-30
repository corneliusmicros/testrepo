<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/includes/parts/reservation.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/includes/parts/reservation.tpl
// Timestamp: 1350023902 (Fri Oct 12 1:38:22 CDT 2012)
$oldSetArray_2037c3c05e403cf9934bbb0044263c86 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$text .= '<form action="/reservation_redirector.php" method="GET" name="omni_reservation_form" id="reservation_form" target="_blank">
<div ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'id="reservation"';
}
else
{
$text .= 'id="reservation-int"';
}
unset( $if_cond );
// if ends

$text .= ' class="reswidget">
	<ul>
		<li><h2>Book Online</h2></li>
		<li>						
			<div id="check-in">
				<ul>
					<li class="check">Check In</li>
					<li>
						<div id="check-in-box">
							<ul>
								<li><input name="indate" type="text" class="date indate" value="mm/dd/yy" /></li>
							</ul>										
						</div>
					</li>					
				</ul>
			</div>
		</li>
		<li>						
			<div id="check-out">
				<ul>
					<li class="check">Check Out</li>
					<li>
						<div id="check-out-box">
							<ul>
								<li><input name="outdate" type="text" class="date outdate" value="mm/dd/yy" /></li>
							</ul>										
						</div>
					</li>					
				</ul>
			</div>
		</li>
		<li>
			<div id="rooms">
				<ul>
					<li>Rooms</li>
					<li><select name="numberOfRooms" class="rooms styled"> 
						<option value="1">1</option> 
						<option value="2">2</option> 
						<option value="3">3</option> 
						<option value="4">4</option> 
						<option value="5">5</option> 
                        <option value="6">6</option> 
                        <option value="7">7</option> 
                        <option value="8">8</option> 
                        <option value="9">9</option>
					</select></li>
				</ul>
			</div>
		</li>
		<li>
			<div id="adults">
				<ul>
					<li>Adults</li>
					<li><select name="numberOfAdults" id="selmonth" class="adults styled"> 
						<option value="1">1</option> 
						<option value="2">2</option> 
						<option value="3">3</option> 
						<option value="4">4</option> 
						<option value="5">5</option> 
                        <option value="6">6</option> 
                        <option value="7">7</option> 
                        <option value="8">8</option> 
                        <option value="9">9</option> 
                        <option value="10">10</option> 
                        <option value="11">11</option> 
                        <option value="12">12</option> 
                        <option value="13">13</option> 
                        <option value="14">14</option> 
                        <option value="15">15</option> 
                        <option value="16">16</option> 
                        <option value="17">17</option> 
                        <option value="18">18</option> 
                        <option value="19">19</option> 
                        <option value="20">20</option>
					</select></li>
				</ul>
			</div>
		</li>
		<li>
			<div id="children">
				<ul>
					<li>Children</li>
					<li><select name="numberOfChildren" class="child styled"> 
						<option value="0">0</option>
	   					<option value="1">1</option> 
						<option value="2">2</option> 
						<option value="3">3</option> 
						<option value="4">4</option> 
						<option value="5">5</option> 
                        <option value="6">6</option> 
                        <option value="7">7</option> 
                        <option value="8">8</option> 
                        <option value="9">9</option> 
                        <option value="10">10</option> 
                        <option value="11">11</option> 
                        <option value="12">12</option> 
                        <option value="13">13</option> 
                        <option value="14">14</option> 
                        <option value="15">15</option> 
                        <option value="16">16</option> 
                        <option value="17">17</option> 
                        <option value="18">18</option> 
                        <option value="19">19</option> 
                        <option value="20">20</option>
					</select></li>
				</ul>
			</div>
		</li>
		<li><a href="javascript:void(0);" title="check rate" class="btncheckrate" id="check_rate">check rate</a></li>
	</ul>
</div>
	<input type="hidden" name="_IATAno" value="99502222">
	<input type="hidden" name="hotelCode" value="wassm">
	<input type="hidden" name="path" value="asearch">
	<input type="hidden" name="checkInMonthYear" value="">
	<input type="hidden" name="checkInDate" value="">
	<input type="hidden" name="checkOutDate" value="">
	<input type="hidden" name="checkOutMonthYear" value="">
</form>
';

$setArray = $oldSetArray_2037c3c05e403cf9934bbb0044263c86;
$tpl->Level--;
?>
