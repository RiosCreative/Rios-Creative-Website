<!DOCTYPE html>
<?php $thisPage="Thank You"; ?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Thank you for contacting Luis Rios</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/contact.css">
        <link rel="stylesheet" href="../css/icons.css">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
    
<body>
        <?php include "../inc/header.php"; ?>
    
        <main>
            <section class="content-wrapper">
                <div class="large-outer-glass">
                    <div class="large-inner-glass">
                        <h1><span>Contact Success!</span></h1>                       
                        <p class="text-center">Thanks for your message! I will get back to you ASAP!</p>
                    </div>
                </div>
            </section>
        </main>
            
        <?php include "../inc/footer.php"; ?>    
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script type="text/javascript">
        function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "../js/main.js";
        document.body.appendChild(element);
        }
        if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
    </script>
</body>
</html>