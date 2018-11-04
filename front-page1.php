<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->پ
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">دامنه</h4>
                </div>
                <div class="modal-body">
                    <p>نتایج به شرح زیر است.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <header class="page-header">
        هدر سایت اینجاست
    </header>
    <div id="menu">
        این جا منو هستش :)
    </div>

    <div class="container ">
        <div>
            <div class="menu">
                این جا منو هستش :)
            </div>
        </div>

        <div class="jumbotron">
            با پشتیبانی حرفه ای نزدیک به دو دهه در کنار شما هستیم.
            کسب و کار آنلاینتان را با ثبت یک دامنه شروع کنید:
            <div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">چک کن</button>
            </div>
        </div>

        <div class="feature">
            <div class="inner-feature">
                <h3>آخرین نسل سرور های Xpress</h3>
                <p>سریع، پایدار، امن</p>

                <a href="">مشاهده</a>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>به دنبال میزبانی حرفه ای و مطمئن هستید؟</h2>
        <p>با سرویس های میزبانی ایران سرور با خیال راحت به توسعه کسب و کارتان بپردازید.
        </p>
        <div class="row">
            <div class="col-md-4 gray-box box1">
                <div class="box">
                    <p class="pre">
                        salam<br>
                        salam<br>
                        salam<br>
                        salam<br>
                        salam<br>
                        salam<br>
                    </p>
                    <a class="btn-default" href="">مشاهده</a>
                </div>
            </div>
            <div class="col-md-4 green-box box2">
                <div class="box">
                    salam <br>
                    salam <br>
                    salam <br>
                    salam <br>
                    salam <br>
                    salam <br>
                    salam <br>
                    salam <br>
                    <a class="btn-default" href="">مشاهده</a>
                </div>
            </div>
            <div class="col-md-4 gray-box box3">
                <div class="box">
                    <p>
                        salam <br>
                        salam <br>
                        salam <br>
                        salam <br>
                        salam <br>
                        salam <br>
                    </p>
                    <a class="btn-default" href="">مشاهده</a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <ul class=" row list-inline">
                <li>تگ 1</li>
                <li>تگ 2</li>
                <li>تگ 3</li>
                <li>تگ 4</li>
                <li>تگ 5</li>
                <li>تگ 6</li>
            </ul>
        </div>

    </div>

    <div class="container-fluid">
        <div class="container direction-rtl">
            <h3>براساس نیازتان انتخاب کنید:</h3>
        </div>
        <div class="container direction-rtl">
        <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            اطلاعات بیشتر
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Button
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            اطلاعات اضافه
        </div>
    </div>
        </div>
    </div>
    <p>
        <?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => 0,
	'category_name'    => 'pro',
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

$posts_array = get_posts( $args ); ?>

        <?php foreach ($posts_array as $post) { ?>
        <?php echo $post->ID; ?><br>
        <?php echo $post->post_title; ?><br>
        <?php echo $post->meta ?><br>
        <!-- <?php if (has_post_thumbnail( $post->ID ) ): ?> -->
        <!-- <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> -->
        <!-- <?php echo $image[0]; ?> -->
        <!-- <div id="custom-bg" style="background-image: url('')">	 -->
        <!-- <?php echo $image[0]; ?> -->
        <!-- </div> -->
        <!-- <?php endif; ?> -->
        <?php } ?>

    </p>
    
    <!-- <script src="script.js"></script> -->
</body>

</html>