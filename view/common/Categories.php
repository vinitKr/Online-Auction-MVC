<div class="col-md-2">
	<div class="list-group">
		<a class="list-group-item"><h1>Category</h1></a>
		<a href="products.php?op=list&cat=1" class='list-group-item'>Antique
			<span class='badge'>1</span></a>
		<a href="products.php?op=list&cat=2" class='list-group-item'>Art
			<span class='badge'>2</span></a>
		<a href="products.php?op=list&cat=3" class='list-group-item'>Cars
			<span class='badge'>3</span></a>
		<a href="products.php?op=list&cat=4" class='list-group-item'>Bikes
			<span class='badge'>4</span></a>
		<a href="products.php?op=list&cat=5" class='list-group-item'>Coins
			<span class='badge'>5</span></a>
		<a href="products.php?op=list&cat=6" class='list-group-item'>Instruments
			<span class='badge'>6</span></a>
		<a href="products.php?op=list&cat=7" class='list-group-item'>Sports
			<span class='badge'>7</span></a>
		<a href="products.php?op=list&cat=8" class='list-group-item'>Mobiles
			<span class='badge'>8</span></a>
		<!-- // <?php
		// $menu;
		// // Menu builder function, parentId 0 is the root
		// function buildMenu($parent, $menu) {
			// $html = "";
// 
			// foreach ($menu['parents'][$parent] as $itemId) {
				// if (!isset($menu['parents'][$itemId])) {
					// $html .= "<a href='products.php?op=list&cat=" . $menu['items'][$itemId]['id'] . "' class='list-group-item'><span class='badge'>" . $itemId . "</span>" . $menu['items'][$itemId]['label'] . "</a>";
				// }
				// if (isset($menu['parents'][$itemId])) {
					// $html .= "
             // <a href='products.php?op=list&cat=" . $menu['items'][$itemId]['id'] . "' class='list-group-item'><span class='badge'>" . $itemId . "</span>" . $menu['items'][$itemId]['label'] . "</a>";
					// $html .= buildMenu($itemId, $menu);
// 
				// }
			// }
// 
			// return $html;
		// }
// 
		// echo buildMenu(0, $menu);
		// ?>
		

		//<?php

		/*
		 // Menu builder function, parentId 0 is the root
		 function buildMenu($parent, $menu) {
		 $html = "";
		 if (isset($menu['parents'][$parent])) {
		 $html .= "
		 <ul>\n";
		 foreach ($menu['parents'][$parent] as $itemId) {
		 if (!isset($menu['parents'][$itemId])) {
		 $html .= "<li>\n  <a href='" . $menu['items'][$itemId]['link'] . "'>" . $menu['items'][$itemId]['label'] . "</a>\n</li> \n";
		 }
		 if (isset($menu['parents'][$itemId])) {
		 $html .= "
		 <li>\n  <a href='" . $menu['items'][$itemId]['link'] . "'>" . $menu['items'][$itemId]['label'] . "</a> \n";
		 $html .= buildMenu($itemId, $menu);
		 $html .= "</li> \n";
		 }
		 }
		 $html .= "</ul> \n";
		 }
		 return $html;
		 }

		 echo buildMenu(0, $menu);

		 *
		 */
		//?> -->
	</div>
</div>