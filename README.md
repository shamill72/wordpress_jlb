# wordpress_jlb

Assessment Completion Outline

1. First install XAMPP on local machine (Mac OS X)
	a. Start localhost Apache server, ProFTPD, and MySQL DB Server
2. Started WordPress
	a. Installed Woocommerce plugin
	b. Selected 2021 Theme and created Child Theme using Child Theme Configurator under Tools
3. Added some products to Woocommerce shop
	a. Did not finish Woocommerce set-up for the sake of this project
	b. Added custom attributes for each product to be displayed below product image
4. Added to the function.php an ‘add_action’ function to add product attributes to the woocommerce_shop_loop_item_title
	a. Created a function to be callback to add_action function to grab the products, make sure they are a product object, get the id of each product and get the associated custom attributes and print them under the product
5. Also added to function.php a function to check if the user is logged in before displaying the add to cart button.
	a. If user is not logged in then the add to cart button is removed and a link stating that they must log in to add to cart is displayed and linked to My Account page
	b. Else if user is logged in, then the add to cart button is displayed and functioning
6. Tweed CSS a little for aesthetics, but left Twenty Twenty-one theme alone
