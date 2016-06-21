<!DOCTYPE html>
<?php $thisPage="Rios Creative Home"; ?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Luis Rios | Front-End Engineer &amp; UI/UX  Developer</title>
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/icons.css">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="p:domain_verify" content="5f58fe2760290898813d7d0d57a2c14a"/>
</head>
    
<body>
        <?php include "/inc/header.php"; ?>
    
        <main>
            <section class="content-wrapper">
                <div class="large-outer-glass">
                    <div class="large-inner-glass">
                        <h1><span>Luis Rios</span></h1>
                        <h3 class="text-center">Aspiring Front-End Engineer | UI/UX  Developer</h3>
                        <p class="email text-center"><a href="mailto:name@email.com">luis@rioscreative.com</a></p><br><br>
                        <p class="text-center">This site is currently under development. See you soon with some great stuff!</p>
                    </div>
                </div>
            </section>
        </main>
    
        <?php include "/inc/footer.php"; ?>
    
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