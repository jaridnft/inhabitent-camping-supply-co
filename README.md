# 'Inhabitent Camping Supply Co.' powered by WordPress

#### Author: Jarid Warren [ <jaridwarren@gmail.com> ]

Custom WordPress theme for the fictional 'Inhabitent Camping Supply Co." complete with search, custom post types & taxonomy , archives, single post views, contact form and widgetized sidebar. This website is a fixed-width desktop version.

<img src="./themes/inhabitent-theme/assets/images/readme-images/home-demo.gif" width="425"><img src="./themes/inhabitent-theme/assets/images/readme-images/grid-demo.gif" width="425">

## Motivation

This was my first attempt at building a completely custom WordPress theme. This site takes advantage of WordPress' built-in back-end capabilities to make a completely dynamic site using PHP and the WordPress template hierarchy. In addition, the front page and 'Shop' page were used to practice CSS grid.

## Technology

- <img src="./themes/inhabitent-theme/assets/images/readme-images/js.svg" width="15"> JavaScript ES6 / <img src="./themes/inhabitent-theme/assets/images/readme-images/jquery.svg" width="40"> jQuery
- <img src="./themes/inhabitent-theme/assets/images/readme-images/wordpress.svg" width="18"> WordPress / <img src="./themes/inhabitent-theme/assets/images/readme-images/php.svg" width="23"> PHP
- <img src="./themes/inhabitent-theme/assets/images/readme-images/npm.svg" width="20"> NPM / <img src="./themes/inhabitent-theme/assets/images/readme-images/gulp.svg" width="10"> Gulp
- <img src="./themes/inhabitent-theme/assets/images/readme-images/sass.svg" width="20"> Sass / <img src="./themes/inhabitent-theme/assets/images/readme-images/css3.svg" width="12"> CSS3

## Code Sample

The following inside `./plugins/inhabitent-functionality/lib/functions/post-types.php` defines a custom post type "Products" for items for sale in the shop.

```php
function inhabitent_register_products() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
  );
  
	$args = array(
		'label'                 => 'Product',
		'description'           => 'A post type for products in the shop.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		// 'template_lock'					=> 'all',
		'template'							=> array(
			array(
				'core/paragraph', array(
					'placeholder' => 'Add the product description here.'
				)
			)
		)
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_register_products', 0 );
```

The taxonomy meanwhile, is defined in `./plugins/inhabitent-functionality/lib/functions/taxonomies.php` with:

```php
function inhabitent_register_product_type() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Type',
		'all_items'                  => 'All Product Type',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product Type Name',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No product types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$rewrite = array(
		'slug'                       => 'product-type',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'inhabitent_register_product_type', 0 );
```

## Setup

**Install WordPress:**

- [Download Wordpress](https://wordpress.org/latest.zip) and place directory at root of server (you'll need a tool like [MAMP](https://www.mamp.info/en/) if you wish to host locally)
- Replace `themes`, `plugins` and `uploads` folders from install with ones in this repo

**Initialize NPM:**

`> npm init`

**Install Gulp:**

`> npm install`

**Convert Sass files to CSS:**

`> gulp sass`

**Call Babel & Uglify on JS files:**

`> gulp scripts`

**Launch Browser-Sync to automatically update changes:**

`> gulp browser-sync`

**Watch changes to Sass/JS and automatically run scripts/sass:**

`> gulp watch` or `gulp`

## @TODO

- Widget-ize footer
- Parameterize custom post-type definitions in `plugins/inhabitent-functionality/lib/functions/post-types.php`
- Validate HTML on all pages (only did front-page.php)
- Make entire website mobile responsive (desktop only at the moment)
