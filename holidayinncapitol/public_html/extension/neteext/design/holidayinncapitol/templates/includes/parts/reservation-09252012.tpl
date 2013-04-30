<form action="http://www.holidayinn.com/redirect?" method="post" name="omni_reservation_form" target="_blank">
	
<div {if eq($node.node_id,2)}id="reservation"{else}id="reservation-int"{/if} class="reswidget">
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
                        <option value="20">10</option> 
                        <option value="21">21</option> 
                        <option value="22">22</option> 
                        <option value="23">23</option> 
                        <option value="24">24</option> 
                        <option value="25">25</option> 
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
                        <option value="20">10</option> 
                        <option value="21">21</option> 
                        <option value="22">22</option> 
                        <option value="23">23</option> 
                        <option value="24">24</option> 
                        <option value="25">25</option> 
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
                        <option value="20">10</option> 
                        <option value="21">21</option> 
                        <option value="22">22</option> 
                        <option value="23">23</option> 
                        <option value="24">24</option> 
                        <option value="25">25</option> 
					</select></li>
				</ul>
			</div>
		</li>
		<li><a href="#" title="check rate" class="btncheckrate">check rate</a></li>
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