<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContextAwareAssignmnt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    *{
        
        font-family:cursive;
    }
    body{
        background-color:#050617;
    }
    .heading{
        color: white;
        padding-top:10px;
        padding-bottom: 25px;
    }
    .grid1{
        color: white;
        border:black 1px solid ;
    }
    .brdr{
        color: white;
        border:1px solid #4d4d54;
        box-shadow: 1px 1px 5px 5px black;
    }
    .bttn{
        color: white;
        margin-top: 5px;
    }
    .space{
        margin-top: 30px;
        padding-bottom: 20px;
    }
    

</style>
<body>
   <div class="container">
       <div class="row no-gutters text-center ">
           <div class="col-sm-12 col-md-12 col-lg-12">
               <h3 class="notranslate heading ">Context Aware System</h3>
           </div>
       </div>
       <div class="row no-gutters notranslate">
           <div class="col-sm-6 col-md-6 col-lg-6 text-center  brdr">
               <h3 class="heading ">Weather</h3>
               <input type="text" class="form-control" placeholder="Enter city ">
               <input type="text" value="Check" class="btn btn-sm btn-danger bttn">
               <p class="display_weather">

               </p>
           </div>
           <div class="col-sm-6 col-md-6 col-lg-6 text-center brdr notranslate">
               <h3 class="heading ">Time</h3>
               <input type="text" class="form-control" placeholder="Enter city ">
               <input type="text" value="Check" class="btn btn-sm btn-danger bttn">
               <p class="display_weather">

               </p>
           </div>
       </div>
       <div class="row no-gutters border brdr space">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center" id="google_translate_element">
               <h3 class="notranslate heading ">Google Translater</h3><br>
               <textarea class="translate" cols="100" placeholder="Write and Tranbslate it in any language" rows="5" style="color: black;"></textarea>
            </div>
          
       </div>
       <div class="row no-gutters border brdr space">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
               <h3 class="notranslate heading ">Google Map</h3><br>
              <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115348.31208699707!2d68.2968658!3d25.3835549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C%20Sindh!5e0!3m2!1sen!2s!4v1613222955093!5m2!1sen!2s" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
          
       </div>

       <div class="row no-gutters border  brdr notranslate">
       <div class="col-sm-12 col-md-12 col-lg-12 text-center">
               <h3 class="heading ">Instagram</h3>
           </div>
          
       </div>
       
   </div>
</body>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>