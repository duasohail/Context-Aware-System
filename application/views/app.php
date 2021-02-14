<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContextAwareAssignmnt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/style.css') ?>">
</head>

<body>
    <!-- container start -->
    <div class="container">


        <!-- 1 Row -->
        <div class="row no-gutters text-center ">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h3 class="notranslate heading ">Context Aware System</h3>
            </div>
        </div>
        <!-- ends -->



        <!-- Weather -->
        <div class="row no-gutters notranslate brdr">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center ">
                <h3 class="heading ">Weather</h3>
                <input type="text" class="form-control" id="cityName" value="city" placeholder="Enter city ">
                <input type="button" value="Check" id="button" onclick="btnn()" class="btn btn-sm btn-danger bttn">
                <br><br>
                <div class="display_weather">
                    <p class="city"></p>
                    <p class="desc"></p>
                    <p class="temp"></p>
                    <p class="feels"></p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                <br>
                <img src="<?PHP echo base_url('/assets/img/sun.png') ?>" width='200px' height='150px'>
            </div>
        </div>



        <!-- Time -->
        <div class="row no-gutters border brdr space">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                <br>
                <img src="<?PHP echo base_url('/assets/img/clock.png') ?>" width='200px' height='210px'>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 text-center  notranslate">
                <h3 class="heading ">Time</h3>
                <input type="text" class="form-control" placeholder="Enter city ">
                <input type="button" value="Check" class="btn btn-sm btn-danger bttn">
                <p class="display_weather">

                </p>
            </div>
        </div>




        <!-- Google Translator -->
        <div class="row no-gutters border brdr space">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center" id="google_translate_element">
                <h3 class="notranslate heading ">Google Translater</h3><br>
                <textarea class="translate" cols="100" placeholder="Write and Tranbslate it in any language" rows="5" style="color: black;"></textarea>
            </div>

        </div>




        <!-- Google Map -->
        <div class="row no-gutters border brdr space">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <h3 class="notranslate heading ">Google Map</h3><br>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115348.31208699707!2d68.2968658!3d25.3835549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C%20Sindh!5e0!3m2!1sen!2s!4v1613222955093!5m2!1sen!2s" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>

        </div>



        <!-- Instagram -->

        <div class="row no-gutters border  brdr notranslate">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <h3 class="heading ">Instagram</h3>
            </div>

        </div>




        <!-- container End -->
    </div>

</body>


<!-- Weather jabvascript code -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!--Ends -->


<!-- Our custom js file -->
<script type="text/javascript" src="<?php echo base_url('/assets/app.js') ?>"></script>

<!-- Bootstrap Cdn -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>