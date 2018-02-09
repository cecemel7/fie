<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "pauline.lebrun@hotmail.com";
 
    $email_subject = "FIE - Nouveau Message";
 
    
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $email_message = "Formulaire envoyé.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Prénom: ".clean_string($first_name)."\n";
 
    $email_message .= "Nom: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Message: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<title>Facult&eacute; internationale d'esth&eacute;tique</title>
<meta name="Title" content="La Faculté Internationale d'Esthétique Pauline Le Brun"/>
<meta name="Subject" content="formation en esthétique"/>
<meta name="description" content="La Faculté Internationale d'Esthétique Le Brun Pauline vous propose la formation d'Esthétique et plusieurs spécialisations"/>
<meta name="keywords" content="formation, esthétique, soins, aromathérapie, massage, maquillage, réflexothérapie"/>
<meta name="Author" content="Pauline Le Brun"/>
<meta name="Identifier-URL" content="http://www.fie-esthetique.com"/>
<meta name="Revisit-after" content="2 days"/>
<meta name="Robots" content="all"/>

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-57764684-1', 'auto');
 ga('send', 'pageview');
 
</script>

</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      	<div id="pre_header" class="row">
             <div id="titre_site" class="span12"><h1>Faculté Internationale d'Esthétique</h1></div>
        </div>
        
        <div class="lien_facebook row"><a href="https://www.facebook.com/pages/Facult%C3%A9-Internationale-dEsth%C3%A9tique/300973800030503" target="_blank"><img src="img/Logo_facebook_29.png" alt="Facebook"></a></div>
        
        <div class="logo visible-phone">
        	<a href="index.htm"><img src="img/piccolo-logo.png" alt="Facult&eacute; internationale d'esth&eacute;tique" /></a>
        </div>
             
        
        <!-- Main Navigation
        ================================================== -->
        <div class="row navigation">
            <div class="navbar hidden-phone row">                     
            <!--            
            <ul class="nav span5" id="menu_part_1">
            -->
            <ul class="nav">
             <li class="active"><a href="index.htm">Accueil</a></li>
             
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">La formation<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="cours-soir-wkd.htm">Cours jour/soir-wkd</a></li>
                    <li><a href="cours-pratiques.htm">Cours pratiques</a></li>
                    <li><a href="cours-theoriques.htm">Cours théoriques</a></li>                    
                </ul>
             </li>             

             <li><a href="specialisations.htm">Spécialisations</a></li>            
                        
            <!--
            </ul>

            <ul class="nav span2 hidden-phone" id="menu_part_2">
            -->            
           	 <li id="logo_fie">
             	<a href="index.htm"><img src="img/logo_FIE_centre.png" alt="Faculté Internationale d'Esthétique"></a>
             </li>
            <!--
            </ul>
            
 			<ul class="nav span5 hidden-phone" id="menu_part_3">
            -->             
             <li><a href="gestion-entreprise.htm">Gestion d'entreprise</a></li>
             
             <li><a href="page-contact.htm">Contact</a></li>
             
             <li><a href="inscriptions.htm" class="menu_rose">Inscriptions <br/>2017-2018</a></li>
            </ul>
             

           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Menu</option>
                    <option value="index.htm">Accueil</option>
                    <option value="#">La formation</option>
                        <option value="cours-soir-wkd.htm">- Cours jour/soir-wkd</option>
                        <option value="cours-pratiques.htm">- Cours pratiques</option>
                        <option value="cours-theoriques.htm">- Cours théoriques</option>
                    <option value="specialisations.htm">Spécialisations</option>
					<option value="gestion-entreprise.htm">Gestion d'entreprise</option>
                    <option value="page-contact.htm">Contact</option>
                    <option value="inscriptions.htm">Inscriptions 2017-2018</option>
                </select>
                </div>
                </form>
            
        </div>
        
      </div><!-- End Header --> 
<p>Merci de nous avoir contacté. Nous vous répondrons dès que possible.</p> 


 <!-- Google Code for Contact Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 960340918;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "oLGLCNC0sVgQtsf2yQM";
var google_remarketing_only = false;
/* ]]> */                  
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/960340918/?label=oLGLCNC0sVgQtsf2yQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

 </body>
</html>
 
<?php
 
}
 
?>
