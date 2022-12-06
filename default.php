
<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title><?php echo 'TrEM'; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <?php echo $this->Html->css('default.css'); ?>
        <?php echo $this->Html->css('flexslider.css'); ?>
        <?php echo $this->Html->css('font-awesome.css'); ?>
        <?php echo $this->Html->css('style.css'); ?>
        <?php echo $this->Html->css('bootstrap.min.css'); ?>
        <?php echo $this->Html->css('prettyPhoto.css'); ?>
        

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    
        
        <?php echo $this->element('andiaNavbar'); ?>

        
        <?php echo $this->element('andiaSlider'); ?>

        <!-- Site Description -->
        
        <?php echo "ONE Simple title just to test Git commit"; ?>
        
        <!-- Services -->
        <?php echo $this->fetch('content'); ?>
        
       
        <!-- Footer -->
        <?php echo $this->fetch('andiaFooter'); ?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

        <?php echo $this->Html->script('jquery-1.8.2.min.js'); ?>
        <?php echo $this->Html->script('jquery.flexslider.js'); ?>
        <?php echo $this->Html->script('jjquery.tweet.js'); ?>
        <?php echo $this->Html->script('jquery-1.8.2.min.js'); ?>
        <?php echo $this->Html->script('jflickrfeed.js'); ?>
        <?php echo $this->Html->script('jquery.ui.map.min.js'); ?>
        <?php echo $this->Html->script('jquery.quicksand.js'); ?>
        <?php echo $this->Html->script('scripts.js'); ?>
    </body>

</html>

