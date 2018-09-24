<template>	
	<div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>Find Food !</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-compass"></i> City</label>
            <input class="w3-input w3-border" type="text" placeholder="Islamabad" name="city" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-circle"></i> Food Category</label>
            <input class="w3-input w3-border" type="text" placeholder="Pizza" name="food" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-at"></i> Resturant</label>
            <input class="w3-input w3-border" type="text" placeholder="KFC" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-map-marker"></i> Near Resturants ( km )</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
      </form>
    </div>
  </div>
</template>

<script>
	export default{
		mounted(){
			console.log("Header Search Component mounted");
		}
	}
</script>