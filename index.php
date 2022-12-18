<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metas OG, Title & Description -->
    <title>WordPress Custom Post Type Code Generator</title>
    <meta name="description" content="Generate online the code you need for your custom post types in WordPress.">
    <!-- Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="WordPress Custom Post Type Code Generator" />
    <meta property="og:description" content="Generate online the code you need for your custom post types in WordPress." />
    <meta property="og:image" content="https://wordpress.rafamemmel.com/images/wpcptg.jpg" />
    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />
    <meta property="og:url" content="https://wordpress.rafamemmel.com" />
    <meta property="og:site_name" content="WPCPTG" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@rafamem" />
    <meta name="twitter:creator" content="@rafamem" />
    <meta property="og:url" content="https://wordpress.rafamemmel.com" />
    <meta property="og:title" content="WordPress Custom Post Type Code Generator" />
    <meta property="og:description" content="Generate online the code you need for your custom post types in WordPress." />
    <meta property="og:image" content="https://wordpress.rafamemmel.com/images/wpcptg.jpg" />
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C5YZM5GCPX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-C5YZM5GCPX');
    </script>
</head>

<body>
    <div class="container card-0 justify-content-center">
        <div class="card-body px-sm-4 px-0">
            <header class="row justify-content-center my-4">
                <div class="col-md-10 col">
                    <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">WordPress Custom Post Type Code
                        Generator</h3>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-sm-left">Generate online the code you need for your
                        custom post types in WordPress.</p>
                </div>
            </header>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12">
                    <div class="card shadow-lg card-1">
                        <div class="card-header py-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="mt-3 mb-2" for="text_domain">Text Domain</label>
                                        <input type="text" class="form-control" id="input_text_domain" placeholder="Type a label for Name" onkeyup="change_label('text_domain')">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="mt-3 mb-2" for="description">Description</label>
                                        <input type="text" class="form-control" id="input_description" placeholder="Type a label for Name" onkeyup="change_label('description')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body inner-card">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-sm-12">
                                    <ul class="my-4 nav nav-tabs nav" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="true">Custom Post Type Type</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="taxo-tab" data-bs-toggle="tab" data-bs-target="#taxo" type="button" role="tab" aria-controls="taxo" aria-selected="false">Taxonomies</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content border-0 mb-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                                    <?php include('inc/post.html'); ?>
                                </div>
                                <div class="tab-pane fade" id="taxo" role="tabpanel" aria-labelledby="taxo-tab">
                                    <?php include('inc/taxo.html'); ?>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-2">
                                <div class="col-md-12 col-lg-10 col-12">
                                    <h4 class="my-2">Custom Post Type Type Code</h4>
                                    <div class="card bg-dark my-4">
                                        <code class="p-3 text-light">
                                            function products(){<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;$labels = array(<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name' => _x('<span id="name">Products</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'singular_name' => _x('<span id="singular_name">Product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'menu_name' => _x('<span id="menu_name">Products</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name_admin_bar' => _x('<span id="name_admin_bar">Products</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'add_new' => _x('<span id="add_new">Add product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'add_new_item' => _x('<span id="add_new_item">Add new product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'new_item' => _x('<span id="new_item">New product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'edit_item' => _x('<span id="edit_item">Edit product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'view_item' => _x('<span id="view_item">View product</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'all_items' => _x('<span id="all_items">All products</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'search_items' => _x('<span id="search_items">Search products</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'parent_item' => _x('<span id="parent_item">Product padre</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'not_found' => _x('<span id="not_found">No products found</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'not_found_in_trash' => _x('<span id="not_found_in_trash">No products found in the trash</span>', '<span class="text_domain">wordpress-theme</span>')<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;);<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;$args = array(<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'labels' => $labels,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'description' => __('<span id="description">Products post type</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'public' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'publicly_queryable' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'show_ui' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'show_in_menu' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rewrite' => array('slug' => 'products'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'capability_type' => 'post',<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'has_archive' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'hierarchical' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'menu_position' => 6,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'supports' => array('title', 'editor', 'thumbnail'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'menu_icon' => 'dashicons-products'<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;);<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;register_post_type('products', $args);<br />
                                            }<br />
                                            add_action('init', 'products');
                                        </code>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-2">
                                <div class="col-md-12 col-lg-10 col-12">
                                    <h4 class="my-2">Taxonomy Code</h4>
                                    <div class="card bg-dark my-4">
                                        <code class="p-3 text-light">
                                            function taxonomies(){<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;register_taxonomy(<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'color',<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'products',<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'hierarchical' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'show_ui' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'labels' => [<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name' => _x('<span id="taxo_name">Colors</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'singular_name' => _x('<span id="taxo_singular_name">Color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'menu_name' => _x('<span id="taxo_menu_name">Colors</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name_admin_bar' => _x('<span id="taxo_name_admin_bar">Colors</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'add_new' => _x('<span id="taxo_add_new">Add color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'add_new_item' => _x('<span id="taxo_add_new_item">Add New color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'new_item' => _x('<span id="taxo_new_item">New color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'edit_item' => _x('<span id="taxo_edit_item">Edit color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'view_item' => _x('<span id="taxo_view_item">View color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'all_items' => _x('<span id="taxo_all_items">All colors</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'search_items' => _x('<span id="taxo_search_items">Search color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'parent_item' => _x('<span id="taxo_parent_item">Parent Color</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'not_found' => _x('<span id="taxo_not_found">No colors found</span>', '<span class="text_domain">wordpress-theme</span>'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'not_found_in_trash' => _x('<span id="taxo_not_found_in_trash">No colors found in the trash</span>', '<span class="text_domain">wordpress-theme</span>')<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'sort' => true,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'args' => array('ordeby' => 'term_order'),<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rewrite' => array('slug' => 'color')<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;);<br />
                                            }<br />
                                            add_action('init', 'taxonomies');
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="row justify-content-center my-3 text-center">
                <div class="col-md-12 col-lg-10 col-12">
                    Developed by <a href="https://www.rafamemmel.com">Rafael Memmel</a>
                </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function change_label(label) {
            if (label == 'text_domain') {
                var value = document.getElementById('input_' + label).value
                var keys = document.getElementsByClassName(label);
                for (var i = 0; i < keys.length; i++) {
                    keys.item(i).innerHTML = value;
                }
            } else {
                var key = document.getElementById(label).firstChild;
                var value = document.getElementById('input_' + label).value
                key.nodeValue = value;
            }
        }
    </script>
</body>

</html>