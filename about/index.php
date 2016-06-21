<!DOCTYPE html>
<?php $thisPage="About Me"; ?>
<html>
<head>
        <meta charset="UTF-8">
        <title>About Luis Rios</title>
        <link rel="stylesheet" href="../css/style.css"> 
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
                        <h1><span>About Me</span></h1>
                        <h3 class="text-center">Designer, Developer, Leader</h3>
                        <div class="full-info-holder">
                            <div class="text-main">
                                <h2 >I'm an aspiring Front End Engineer and UX/UI Developer.</h2>
                                <p>I enjoy creating intuitive, beautiful and versatile designs from complex problems and challenging myself by learning a new tool or technique in each project.</p>
                            </div>
                            <div class="img-main">
                                <img alt="Luis Rios" src="../img/self-portrait-min.png"/>
                            </div>
                        </div>
                        
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