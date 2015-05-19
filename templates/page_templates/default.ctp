<!DOCTYPE html>
<html lang="en">
<?php echo $this->element('head') ?>
<body>
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- Mobile Menu Button -->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /Mobile Menu Button -->

				<a class="brand" href="#">Project name</a>
				<div class="nav-collapse collapse">
<!-- DELETE menu -->
				<div id="template_link_1" class="plugin_bootstrap_navigation">
					<ul id="" class="ullevel_1 nav nav-pills pull-right">
						<li id="_home" class="navigation_active activenavigation_first ">
							<a href="/home">Home</a>
						</li>
						<li id="_about" class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
							<ul id="" class="ullevel_2 dropdown-menu">
								<li id="_about-staff" class="navigation_first ">
									<a href="/about-staff">Staff</a>
								</li>
								<li id="_about-history" class="navigation_last ">
									<a href="/about-history">History</a>
								</li>
							</ul>
						</li>
						<li id="_resources" class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
							<ul id="" class="ullevel_2 dropdown-menu">
								<li id="_resources-downloads" class="navigation_first ">
									<a href="/resources-downloads">Downloads</a>
								</li>
								<li id="_resources-news" class="navigation_last ">
									<a href="/resources-news">News</a>
								</li>
							</ul>
						</li>
						<li id="_contact" class="navigation_last ">
							<a href="/contact">Contact</a>
						</li>
					</ul>
				</div>
<!-- END DELETE menu -->			
					###MENU###
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12" id="banner">
			<img src="http://placehold.it/1200x300">
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				###CONTENT###
<!-- DELETE content -->
				<div>
					<h1>Header 1</h1>
					<p>Against earthworm jay apart aardvark aside goodness ironically above glanced oh forward far one bore a regarding contemplated below artfully falcon leopard while interbred much one the fanatically iguanodon wow much where the less up beyond regardless much excluding yawned obdurately as like since while sold alas.</p>
					<h2>Header 2</h2>
					<p>Fed less this scornfully much much reindeer the that and more alas hence steadfastly opposite hatchet approvingly off swam sank eel some gosh piquant said around kookaburra ecstatically this much surreptitiously insufferably overslept infinitesimal much tortoise unhopeful more.</p>
					<h3>Header 3</h3>
					<p>Far much considering octopus more thus goodness one the decisively widely hello much fallaciously indirect faultily because less owing flashy goodness dog where licentious infinitesimal blubbered one when hey this the.</p>
					<h4>Header 4</h4>
					<p>Following tamarin scowled much dear groggily and that dear labrador and goodness one ladybug indiscreet therefore and hey darn yet in normally much that flamingo and and hello apart and much much opposite a more babbled the persistently some upon smirked the much jeepers and.</p>
					<ul>
						<li>Unordered List</li>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item
							<ul>
								<li>Unordered List</li>
								<li>List Item</li>
								<li>List Item</li>
								<li>List Item</li>
							</ul>
						</li>
					</ul>
					<ol>
						<li>Ordered List</li>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item</li>
						<li>List Item
							<ol>
								<li>Ordered List</li>
								<li>List Item</li>
								<li>List Item</li>
								<li>List Item</li>
							</ol>
						</li>
					</ol>

				</div>
<!-- END DELETE content -->
			</div>
			<div class="span4">
				<img src="http://placehold.it/350x150">
				<h4>Navigation</h4>
				###SIDEBAR###
<!-- DELETE submenu-->
				<div id="template_link_1" class="plugin_page_site_navigation">
					<ul id="sub_nav" class="ullevel_1">
						<li id="sub_nav_home" class="navigation_active navigation_first ">
							<a href="/greyback_razor/home">Home</a>
						</li>
						<li id="sub_nav_about" class="">
							<a href="/greyback_razor/about">About</a>
							<ul id="" class="ullevel_2">
								<li id="_about-staff" class="navigation_first ">
									<a href="/greyback_razor/about-staff">Staff</a>
								</li>
								<li id="_about-history" class="navigation_last ">
									<a href="/greyback_razor/about-history">History</a>
								</li>
							</ul>
						</li>
						<li id="sub_nav_resources" class="">
							<a href="/greyback_razor/resources">Resources</a>
							<ul id="" class="ullevel_2">
								<li id="_resources-downloads" class="navigation_first ">
									<a href="/greyback_razor/resources-downloads">Downloads</a>
								</li>
								<li id="_resources-news" class="navigation_last ">
									<a href="/greyback_razor/resources-news">News</a>
								</li>
							</ul>
						</li>
						<li id="sub_nav_contact" class="navigation_last ">
							<a href="/greyback_razor/contact">Contact</a>
						</li>
					</ul>
				</div>
<!-- END DELETE submenu-->
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h4>Footer</h4>
				</div>
				<div class="span6 text-right">
					Copyright
				</div>
			</div>
		</div>
	</div>
</body>
</html>