<!DOCTYPE html>
<html>

<head>

    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="formulairephp.css">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

   

</head>

<body>
<? 
if(isset($_POST['NAME'],$_POST["PRENOM"],$_POST["EMAIL"],$_POST["PHONE"]))
{
    $nom=$_POST['NAME'];
    $prenom=$_POST['PRENOM'];
    $email=$_POST["EMAIL"];
    $numero=$_POST['PHONE'];

    $recup =fopen('listcontact.txt', 'a+');
    fputs($recup, $nom.' '. $prenom.' '. $email.'   '. $numero);
    fclose($recup);

}


?>



    <div id="container">
    <header> <center><img id="amlogo" alt="astonlogo" src="https://i.ibb.co/ZTJSVDR/astonlogo.png">
        </center>
    </header>

    <div id="Texte">
        <div id="titre">
            <h1>Réservez votre essai gratuit</h1>
            <h2 class="modele">Aston Martin DBS Superleggera</h2>
            <h3 class="modele">Absolue de Beauté</h3>
        </div>





    
        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
               
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form
             
                action="https://gmail.us17.list-manage.com/subscribe/post?u=20d1ae885c6ac23df610f523c&amp;id=3253e2a5be"
                method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                novalidate>
                <div id="mc_embed_signup_scroll">
                    <!-- <h2>Subscribe</h2> -->

<!-- 
                    <div class="indicates-required"><span class="asterisk">*

                    </span> indicates required</div> -->
                    <div class="mc-field-group">
                        <label for="mce-PRENOM">Prénom <span class="asterisk">*</span>
                        </label>
                        <input type="text" value=<?php echo $_POST["PRENOM"]?> name="PRENOM" class="required" id="mce-PRENOM" placeholder="Votre Prénom*">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-NAME">Nom <span class="asterisk">*</span>
                        </label>
                        <input type="text" value=<?php echo $_POST["NAME"]?> name="NAME" class="required" id="mce-NAME" placeholder="Votre Nom*">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Adresse email <span class="asterisk">*</span>
                        </label>
                        <input type="email" value=<?php echo $_POST["EMAIL"]?> name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Votre email*"> 
                    </div>
                    <div class="mc-field-group size1of2">0202020202
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                            name="b_20d1ae885c6ac23df610f523c_3253e2a5be" tabindex="-1" value=""></div>
                            <input type="checkbox" name="policy" id="policy"> <label id="policy" for="policy">
                                J'ai pris conaissance et accepte la <a
                                    href="https://shop.astonmartin.com/fr/politique-de-confidentialite"> Politique de
                                    confidentialite</a>
                    <div class="clear"><input type="submit" value="Réserver votre essai" name="subscribe"
                            id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
        <!-- <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script> -->
        <script type='text/javascript'>(function ($) {
                window.fnames = new Array(); window.ftypes = new Array(); fnames[1] = 'PRENOM'; ftypes[1] = 'text'; fnames[2] = 'NAME'; ftypes[2] = 'text'; fnames[0] = 'EMAIL'; ftypes[0] = 'email'; fnames[4] = 'PHONE'; ftypes[4] = 'phone'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: FR
 */
                $.extend($.validator.messages, {
                    required: "Ce champ est requis.",
                    remote: "Veuillez remplir ce champ pour continuer.",
                    email: "Veuillez entrer une adresse email valide.",
                    url: "Veuillez entrer une URL valide.",
                    date: "Veuillez entrer une date valide.",
                    dateISO: "Veuillez entrer une date valide (ISO).",
                    number: "Veuillez entrer un nombre valide.",
                    digits: "Veuillez entrer (seulement) une valeur numérique.",
                    creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
                    equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
                    accept: "Veuillez entrer une valeur avec u0202020202trer au moins {0} caractères."),
                    rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
                    range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
                    max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
                    min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
                });
            }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->



</div>
        <footer>
            <hr />
            <ul>
                <li><a href="https://www.astonmartin.com/fr/contact-us" target="_blank">Nous contacter</a></li>
                <li><a href="https://www.astonmartin.com/fr/legal/terms-and-conditions" target="_blank">Conditions
                        générales</a></li>
                <li><a href="https://www.astonmartin.com/fr/dealers/aston-martin-paris" target="_blank">Qui
                        sommes-nous</a>
                </li>
                <li><a href="https://www.astonmartin.com/fr/legal/cookies" target="_blank">Cookies</a></li>
            </ul>

            <script type="text/javascript" src="contact2.js"></script>
        </footer>


</div>
</body>

</html>