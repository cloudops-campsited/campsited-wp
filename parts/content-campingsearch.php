<?php
/**
 * The template part for displaying the camping search
 */
?>

<form id="campsite-search">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="small-12 medium-3 cell">
        <label for="csf_query">Where do you want to go?</label>
          <input id="csf_query" name="csf[query]" type="text" placeholder="Country, region, town or campsite" required>	
      </div>
      <div class="small-12 medium-3 cell">
        <label for="dates">Your Dates</label>
          <input id="dates" for="checkin" name="dates" type="text" placeholder="Check-in" required>     
          <input id="end" type="date" placeholder="Check-out" required>
      </div>
      <div class="small-12 medium-1 cell">
      	<label for="Adults">Adults</label>	
		<select id="Adults">
		<option value="1">1</option>
		<option value="2" selected>2</option>
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
		</select>
      </div>
      <div class="small-12 medium-1 cell">
      	<label for="children">Children</label>	
		<select id="children">
		<option value="0" selected>0</option>
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
		</select>

      </div>

      <div class="small-12 medium-3 cell">
		<label for="accomodation">Accomodation type
		  <select id="accomodation" required>
		    <option value="Rent on-site" selected>Rent on-site (e.g. mobile, chalet)</option>
		    <option value="Bring your own">Bring your own (e.g. tent, camper)</option>
		  </select>
		</label>
      </div>

	  <div class="small-12 medium-1 cell">
	  	<input id="submit" name="Search" type="submit" class="button expanded" placeholder="Search"></input>
	  </div>
    </div>
  </div>
</form>