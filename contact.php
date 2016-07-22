<?php include('./header.php') ?>
<main>
		<h1> Contact </h1>
	<div id="home-contact">
		<form id="home-contact-form" action="/form-mailer.php" method="post">
			<label for="name">Name:</label>
			<input id="name" name="name" placeholder="Name:" type="text">

			<label for="email">Email:</label>
			<input id="email" name="email" placeholder="info@scrapeyour.website" type="text">

			<label for="quantity">Number of Websites to Scrape:</label>
			<input id="quantity" name="quantity" type="text" placeholder="1">

			<label for="data-sets">What data do you want scraped?</label>
			<input id="data-sets" name="data-sets" type="text" placeholder="Product name, Category, Product ID, Address etc..">

			<label for="payment">Preferred payment method?</label>
			<input id="payment" name="payment" type="text" placeholder="Visa, Mastercard, Paypal, Bitcoin, Venmo">

			<label for="message">Additional thoughts:</label>
			<input id="message" name="message" placeholder="Ask us a question!" type="text">
			<input name="submit" type="submit">
		</form>
	</div>
</main>
<?php include('./footer.php') ?>