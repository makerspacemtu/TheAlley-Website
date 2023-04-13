<!DOCTYPE html>
<html>
<?php include '/app/_includes/head.php'; ?>
<body onload="loadLibrary()">
<?php include '/app/_includes/headerMain.php'; ?>
<script type="text/javascript" src="/js/Wiki_Library.js"></script>
<script src="https://apis.google.com/js/client.js?onload=load"></script>
<script type="text/javascript" src="https://apis.google.com/js/client.js?onload=init"></script>

<!-- The implentation for the functionality of this page can be found in /js/Wiki_Library.js
     onlick functions are not the best way to do this, so listeners should be introduced in
		 the future.
		 TODO: update the following section to use listeners and preload any videos.
-->

<div class="row" >
	<h3 class="header">
		Makerspace Wiki
	</h3>
	<div class="wiki">
		<h4 onclick="wikiDropDownWoodWorking()" class="wiki__archivebtn" >
			WoodWorking
		</h4>

		<div id="WoodWorkingDropDown" class="wikiContent">
			<div id="WWDisplay" class="row small-up-1 medium-up-2 large-up-3">
			</div>
		</div>

		<h4 onclick="wikiDropDownCrafting()" class="wiki__archivebtn">
			Crafting
		</h4>

		<div id="CraftingDropDown" class="wikiContent">
			<div id="CraftingDisplay" class="row small-up-1 medium-up-2 large-up-3">
			</div>
		</div>

		<h4 onclick="wikiDropDownPrinting()" class="wiki__archivebtn">
			3D Printing
		</h4>

		<div id="PrintingDropDown" class="wikiContent">
			<div id="PrintingDisplay" class="row small-up-1 medium-up-2 large-up-3">
			</div>
		</div>

		<h4 onclick="wikiDropDownElectronics()" class="wiki__archivebtn">
			Electronics
		</h4>

		<div id="ElectronicsDropDown" class="wikiContent">
			<div id="ElectronicsDisplay" class="row small-up-1 medium-up-2 large-up-3">
			</div>
		</div>
</div>

</div>
</div>
<!--section required for every layout-->
<?php require '/app/_includes/call_to_action.php';
      include '/app/_includes/footer.php';
?>
</body>
</html>
