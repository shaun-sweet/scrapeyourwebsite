<?php include('./header.php') ?>
<main>
		<h1> Contact </h1>
	<div id="home-contact">
		<form id="home-contact-form" action="/form-mailer.php" method="post">
			<label for="name">Name:</label>
			<input id="name" name="name" placeholder="Name:" type="text">

			<label for="email">Email:</label>
			<input id="email" name="email" placeholder="info@scrapeyour.website" type="text">

			<label for="message">Contact Us:</label>
			<textarea name="message" id="message" placeholder="Ask us a question!" cols="30" rows="10"></textarea>
			<input name="submit" type="submit">
		</form>
	</div>
</main>
<?php include('./footer.php') ?>