<?php

	$page = "work";

	require "lib/header.php";

?>



	<div id="work-menu">

		<ul id="work-filters">
			<li class="current" data-filter="all"><a href="#">All</a></li>
			<li id="filter-webdesign" data-filter="webdesign"><a href="#">Web Design</a></li>
			<li id="filter-album" data-filter="album"><a href="#">Photography</a></li>
		</ul>

		<input type="text" id="work-search" placeholder="Search projects, keywords, technologies..." />

		<div class="cf"></div>

	</div>



	<div id="work-list">

		<?php

			$work_list = array(

				array(
					"work",
					"img/index/featured_work_joyce.jpg",
					"Joyce",
					"Revamping the online identity of Hong Kong's most famous and respected boutique from the ground-up.",
					"Visual &amp System Design, Frontend &amp; Backend Development, UAT",
					"HTML5, CSS3, JavaScript, jQuery, PHP, Wordpress, MySQL, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"work",
					"img/index/featured_work_k11.jpg",
					"K11",
					"Creating an inter-connected photobooth solution using a 360° panoramic camera.",
					"Visual &amp Systems Design, Frontend &amp; Backend Development, UAT",
					"HTML5, CSS3, JavaScript, jQuery, REST API, Instagram API, Graph API, Twitter API, Flash, PHP, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"work",
					"img/index/featured_work_enicar.jpg",
					"Enicar",
					"Complete website re-design for the 100th anniversary of Asia's prominent and longest-lasting timepiece designers.",
					"Visual &amp; System Design, Frontend & Backend Development, Multilingual Mapping, UAT",
					"HTML5, CSS3, JavaScript, jQuery, PHP, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"work",
					"img/index/featured_work_k11.jpg",
					"Yung's Club",
					"Creating an inter-connected photobooth solution using a 360° panoramic camera.",
					"Frontend & Backend Development, PhoneGap/Cordava, REST API",
					"HTML5, CSS3, JavaScript, jQuery, PHP, Wordpress, MySQL, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"album",
					"img/album/hongkong/hongkong_2_full.jpg",
					"Portfolio",
					"Landscapes, Nature, Foxes, Lions",
					"album.php?album=portfolio"
				),

				array(
					"album",
					"img/album/yunnan/yunnan_1_full.jpg",
					"云南 (Yúnnán), China",
					"Landscapes, Nature",
					"album.php?album=yunnan"
				),

				array(
					"work",
					"img/index/featured_work_enicar.jpg",
					"Enicar",
					"Complete website re-design for the 100th anniversary of Asia's prominent and longest-lasting timepiece designers.",
					"Visual &amp; System Design, Frontend & Backend Development, Multilingual Mapping, UAT",
					"HTML5, CSS3, JavaScript, jQuery, PHP, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"work",
					"img/index/featured_work_k11.jpg",
					"Yung's Club",
					"Creating an inter-connected photobooth solution using a 360° panoramic camera.",
					"Frontend & Backend Development, PhoneGap/Cordava, REST API",
					"HTML5, CSS3, JavaScript, jQuery, PHP, Wordpress, MySQL, Photoshop, Illustrator",
					"21st September 2014 - 21st September 2014",
					"project.php"
				),

				array(
					"album",
					"img/album/kenya/kenya_1_full.jpg",
					"Kenya, Africa",
					"Nature, Animals, Lions",
					"album.php?album=kenya"
				),

				array(
					"album",
					"img/album/hongkong/hongkong_1_full.jpg",
					"Hong Kong",
					"Landscapes, Animals",
					"album.php?album=hongkong"
				)

			);

			work_list($work_list);

		?>

		<div class="cf"></div>

	</div>



<?php require "lib/footer.php"; ?>