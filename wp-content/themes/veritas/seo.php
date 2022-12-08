<?php

$baseurl = $_SERVER['HTTP_HOST'];
$pageurl = $_SERVER['REQUEST_URI'];



$title = "";
	$description = "";
	$canonical = "";
	$keywords = "";

/*-----------------------------*/
if ($pageurl == "/" || $pageurl == "https://healthhyy5ive.com/index.php" || $pageurl == "/index.php" || $pageurl == "/" ) {
	$title = "Pure Manuka Honey | Organic Smoothie Outlet | Healthhyy5ive";
	$description = "Come and get a taste of pure organic Manuka Honey in an array of delectable dishes like smoothies, juices, fruit bowls and pastries! Now in India and Australia.";
 
} 

else if ($pageurl == "/our-story.php" || $pageurl == "https://healthhyy5ive.com/our-story.php" ) {
	$title = "Our Story | Healthhyy5ive";
	$description = "As the leading manufacturer and supplier of raw Manuka Honey in India & Australia, we aim to promote a healthy lifestyle while running a sustainable business. Visit our outlets in India & Australia to enjoy our healthy menu.";
}

else if ($pageurl == "/location.php" || $pageurl == "https://healthhyy5ive.com/location.php" ) {
	$title = "Locate our Manuka Honey store near you | Healthhyy5ive";
	$description = "Visit our organic Manuka Honey outlets at India & Australia and get a taste of this sweet delicacy in your choice of healthy smoothies and juices!";
}

else if ($pageurl == "/contact.php" || $pageurl == "https://healthhyy5ive.com/contact.php" ) {
	$title = "Contact us | Buy Pure Manuka Honey | Buy healthy smoothies | Healthhyy5ive";
	$description = "Leading wholesale supplier of organic Manuka Honey. Enjoy smoothies, juices, pastries and brunch at our outlets in India and Australia. Contact us for more enquiries.";
}
else if ($pageurl == "/blog.php" || $pageurl == "https://healthhyy5ive.com/blog.php" ) {
	$title = "Blog Posts | Latest news about Manuka Honey";
	$description = "Check out our blogs for the latest research and news about Manuka Honey!";
}
else if ($pageurl == "/honeyproduced.php" || $pageurl == "https://healthhyy5ive.com/honeyproduced.php" ) {
	$title = "How Is Manuka Honey Produced? | Blog Post";
	$description = "Manuka honey is produced by bees collecting nectar from the mānuka plant (Leptospermum scoparium). You may have heard about the potential benefits of Manuka. It contains special health properties used to support digestion, health, and healing.";
}
else if ($pageurl == "/versussugarhoney.php" || $pageurl == "https://healthhyy5ive.com/versussugarhoney.php" ) {
	$title = "Manuka Honey Versus Sugar. What Is Healthier? | Blog Post";
	$description = "Keeping ourselves healthy is always on our mind no matter what. Choosing natural, organic or fresh produce is one way to ensure our body and mind stay in the best shape and health.";
}
else if ($pageurl == "/honeyvirusaway.php" || $pageurl == "https://healthhyy5ive.com/honeyvirusaway.php" ) {
	$title = "Can Manuka Honey Keep The Virus Away? Find Out. | Blog Post";
	$description = "Viruses don’t just cause illness in winter but all through the year. However, we see the increasingly fast spread of COVID-19 throughout the world. The World Health Organisation (WHO) and various government organisations are taking drastic steps to protect people from the virus.";
}
else if ($pageurl == "/manuka-honey.php" || $pageurl == "https://healthhyy5ive.com/manuka-honey.php" ) {
	$title = "What Separates Manuka Honey From Your Regular Honey? | Blog Post";
	$description = "Right from the Australian farms to your teaspoon, this nature’s gold is one of the finest honey in the world. The Australian farms grow shrubs that bear white and pink flowers. These flowers are known to be Manuka or Leptospermum scoparium.";
}

else if ($pageurl == "/products-honey.php" || $pageurl == "https://healthhyy5ive.com/products-honey.php" ) {
	$title = "Pure Manuka Honey  | Healthhyy5ive";
	$description = "Our Manuka Honey is extracted from the Manuka flowers by bees and is 100% natural and pure. Check out our outlets at India & Australia to buy organic Manuka Honey & enjoy our healthy menu of smoothies, juices, pastries and much more!";
}

else if ($pageurl == "/products-usuals.php" || $pageurl == "https://healthhyy5ive.com/products-usuals.php" ) {
	$title = "Usual Suspects | Breakfast with Manuka Honey Healthhyy5ive";
	$description = "Get a taste of your favourite breakfast foods and beverages, now made better with Manuka Honey! The rich, earthy taste of Manuka Honey enhances any food and provides and unbelievable flavour.";
}

else if ($pageurl == "/products-brunch.php" || $pageurl == "https://healthhyy5ive.com/products-brunch.php" ) {
	$title = "Brunch Made Special With Manuka Honey | Savoury Brunch";
	$description = "Brunch is the best time to catch up with friends and family.Now enjoy a sweet brunch drizzled with Manuka Honey. Visit our store in India to get a taste of your favourite brunch food.";
}


else if ($pageurl == "/products-smoothies.php" || $pageurl == "https://healthhyy5ive.com/products-smoothies.php" ) {
	$title = "Signature Smoothies | Healthy, organic smoothies infused with Manuka Honey";
	$description = "Healthhyy5ive is best known for its delicious, all-natural smoothies, naturally sweetened with a dollop of Manuka Honey. Beeline to our store for a sip of refreshingly sweet smoothies!";
}

else if ($pageurl == "/franchise.php" || $pageurl == "https://healthhyy5ive.com/franchise.php" ) {
	$title = "Become a Franchise Owner | Healthhyy5ive";
	$description = "Spread the good word about the luxurious benefits of Manuka Honey by becoming a Healthhyy5ive franchise.";
}

else if ($pageurl == "/recipes.php" || $pageurl == "https://healthhyy5ive.com/recipes.php" ) {
	$title = "Latest Recipes | Healthy and Delicious Recipes with Manuka Honey";
	$description = "Step into the world of Manuka Honey with these flavourful recipes, featuring Manuka Honey.";
}


else if ($pageurl == "/overnight-oats.php" || $pageurl == "https://healthhyy5ive.com/overnight-oats.php" ) {
	$title = "Overnight Oats with Manuka Honey | Recipe";
	$description = "Creamy and mildly sweet, overnight oats is a quick, easy and breezy way to prep your breakfast for the next day.";
}

else if ($pageurl == "/honeydress.php" || $pageurl == "https://healthhyy5ive.com/honeydress.php" ) {
	$title = "Roasted Vegetable Salad with Manuka Honey Dressing | Recipe";
	$description = "A great choice for feeding a crowd or making lunch much more exciting. Our honey features in both the marinade and the dressing, adding richness and an earthy sweetness that is utterly delicious.";
}

else if ($pageurl == "/spicypanner.php" || $pageurl == "https://healthhyy5ive.com/spicypanner.php" ) {
	$title = "Sweet and Spicy Paneer | Recipe";
	$description = "This crispy-delicious sweet and spicy paneer dish is perfect for popping in a bowl, on a sandwich or straight into your mouth.";
}

else if ($pageurl == "/proteintruffles.php" || $pageurl == "https://healthhyy5ive.com/proteintruffles.php" ) {
	$title = "Trail Mix Protein Truffles | Recipe";
	$description = "Protein-packed bites that are perfect for when you’re out on the town or need a quick snack. These no-bake truffles can easily be prepped and assembled in a few minutes of your time.";
}

else if ($pageurl == "/datesmuffin.php" || $pageurl == "https://healthhyy5ive.com/datesmuffin.php" ) {
	$title = "Banana and Dates Muffin | Recipe";
	$description = "Ascend into sweet heaven with this naturally sweetened, freshly baked goodness, which is best served right from the oven.";
}

else if ($pageurl == "/honey-pancake.php" || $pageurl == "https://healthhyy5ive.com/honey-pancake.php" ) {
	$title = "Honey Pancakes | Recipe";
	$description = "Delicious, hearty pancakes that are sure to bee sweet! The best way to unwind after a long week is by indulging in a classic breakfast go-to. So, stay home and sweeten your weekend with a batch of honey pancakes.";
}

session_start();

$_SESSION['title'] = $title;
$_SESSION['description'] = $description;

?>