<?php

	$page = "project";
	$project_name = "stevemadden";
	require "../../lib/header.php";

?>



	<img src="stevemadden_banner_1.jpg" alt="" class="banner" />

	<section class="section">

		<h4>The Idea</h4>

		<p>We were commissioned to develop a Facebook Page app where users could upload their photos, edit and decorate them, and then submit them to a galley, for both desktop and mobile devices.</p>

		<h4 class="spacer">Result</h4>

		<?php project_image("stevemadden_image_1.jpg", "The home page of the Steve Madden Facebook app."); ?>

		<?php project_image("stevemadden_image_2.jpg", "Users could upload an image and provide contact details."); ?>

		<p>We used a number of client-side JavaScript and server-side PHP checks for field data and image requirements. We previewed the selected image in browsers by using a combination of the <code>new FileReader()</code> function and <code>FileReader.readAsDataURL</code> method.</p>

		<?php project_image("stevemadden_image_3.jpg", "Uploaded photos could be edited and decorated before submission."); ?>

		<p>Once a user submitted an image, the page would save the coordinates of the image from the JavaScript cropping interface and calculate the necessary dimensions for the cropped/adjusted image. It would then pass the variables into a PHP script which would convert it to base64 data and pass it through a number of PHP image functions along with the selected image frame. We used alpha blending functions such as <code>imagealphablending()</code> and <code>imagefill()</code> in order to overlay the selected frame from on top of and around the submitted image. The server would then create an image file from the processed base64 data and append it to a database along with the user-submitted data.</p>

		<p>On mobile devices, the cropping interface would be difficult to use as the dragging method would not work as on some devices the page would scroll (Facebook Page apps are sized to 810px by 810px on desktop, however don't have a fixed height on mobile devices). Therefore, a set of four arrows would be used to adjust the image instead of dragging it.</p>

		<?php project_image("stevemadden_image_4.jpg", "The gallery shows all of the uploaded and edited images. Users could 'Like' and share the images using the Facebook Graph API."); ?>

		<p></p>

		<h5>Conclusion</h5>

		<p>It was quite a difficult and tense project given the very short time limit (just under a week), however I was really happy with what was produced. Exploring the use of PHP image functions was a key point, as initially it seemed quite difficult to create an application that could manipulate and decorate images, however the functions proved to be quite powerful and easy to use.</p>

	</div>



<?php require "../../lib/footer.php"; ?>