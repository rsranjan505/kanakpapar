<!-- breadcrumb-section -->
<?php
  if($page_name =='home'){
    $banner_name = 'Home';
  }else if($page_name == 'about'){
    $banner_name = 'About Us';
  } else if($page_name == 'products'){
    $banner_name = 'Our products';
  } else if($page_name == 'contact'){
    $banner_name = 'Contact Us';
  }else{
    $banner_name = '';
  }
?>

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Craving delicious, authentic Kanak Papar</p>
                    <h1><?php echo $banner_name; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- end breadcrumb section -->