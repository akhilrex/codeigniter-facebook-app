<html>
<head>
    <!--    start css-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css"/>

    <!--    end css-->

    <!--    start js-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <!--    end js-->
    <title>
        <?php echo $template['title'];?>
    </title>

</head>

<body class="container">

<!--    Start Fb-->
<div id='fb-root'></div>
<script src='http://connect.facebook.net/en_US/all.js'></script>
<script>
    FB.init({
        appId:'{App id}',
        status:true, // check login status
        cookie:true, // enable cookies to allow the server to access the session
        xfbml:true, // parse XFBML
        oauth:true
    });

</script>
<!--    End Fb-->
<div id="content">


    <div class="row" id="header">
        <div class="span12">
            <img src="http://placehold.it/800x150&text=Header" alt="Header">
        </div>
    </div>
    <div id="main_container" class="row">
        <?php echo $template['body'];?>
    </div>
    <div id="footer" class="row">
        <div class="span12">
            <img src="http://placehold.it/800x50&text=Footer" alt="footer">
        </div>

    </div>
</div>

</body>
</html>
