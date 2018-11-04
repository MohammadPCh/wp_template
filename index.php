<?php get_header(); ?>

<div id="first" class="first mb-2">
    <div class="bg-orange">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="header-left lg-order-1">
                <a class="phone link " href="#">۰۲۱-۴۳۳۶۷</a>
                <a class="portal link" href="#">پورتال مشتریان</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">قوانین سایت</a>
                    <a class="nav-item nav-link" href="#">اخبار</a>
                    <a class="nav-item nav-link" href="#">وبلاگ</a>
                    <a class="nav-item nav-link" href="#">استخدام</a>
                    <a class="nav-item nav-link" href="#">درباره ما</a>
                    <a class="nav-item nav-link" href="#">تماس با ما</a>
                </div>
            </div>

        </nav>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-lightt">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="content col-lg-6">

            </div>
            <img class="character col-lg-6" src="airplane_sr.jpg" alt="">

        </div>
    </div>

    <a id="scroller" href="#second">بیشتر بدانید</a>
</div>

<div id="second" class="second">
    <div class="container pt-4">
        <?php $args = array(
	'posts_per_page'   => 6,
	'offset'           => 0,
	'category'         => 0,
	'category_name'    => 'sindadfeatures',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true,
	'fields'           => '',
);

$posts_array = get_posts( $args ); 
$feature_i=0;?>

    <div class="card-deck py-2">
        <?php foreach ($posts_array as $post) { ?>
        <?php
            if(get_field('feature1'))
            {
                $feature1 = get_field('feature1');
            }
            if(get_field('feature2'))
            {
                $feature2 = get_field('feature2');
            }
            if(get_field('feature3'))
            {
                $feature3 = get_field('feature3');
            }
            if(get_field('icon'))
            {
                $icon = get_field('icon')["url"];

            }
            ?>
        <div class="card" style="width: 18rem;">
            <?php echo '<img class="card-img-top mx-auto" src="'.$icon.'" alt="Card image cap">'; ?>
            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php echo $post->post_title; ?>
                </h5>
                <p class="card-text">
                    <?php echo $feature1; ?> <br>
                    <?php echo $feature2; ?> <br>
                    <?php echo $feature3; ?> <br>
                </p>
                <a href="#" class="btn btn-primary">بیشتر</a>
            </div>
        </div>
        <?php if ($feature_i==2) {
            echo '</div>';
            echo '<div class="card-deck py-2">';
        } ?>
    <?php $feature_i +=1;} ?>
    </div>
        
    </div>
</div>













<?php get_footer(); ?>

    <!-- // foreach (get_field('icon') as $key => $val) {
//     echo $key.'<br>';
//     echo $val.'<br>';
//  } -->

<!-- <?php if (has_post_thumbnail( $post->ID ) ): ?> -->
    <!-- <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> -->
    <!-- <?php echo $image[0]; ?> -->
    <!-- <div id="custom-bg" style="background-image: url('')">	 -->
    <!-- <?php echo $image[0]; ?> -->
    <!-- </div> -->
    <!-- <?php endif; ?> -->