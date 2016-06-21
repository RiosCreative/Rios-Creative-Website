<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Luis Rios | Front-End Engineer &amp; UI/UX  Developer</title>
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/icons.css">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
    
<body>
        <header class = "site-header" w3-include-html="../inc/header.html">
        </header>
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
        <footer class="site-footer" w3-include-html="../inc/footer.html">
        </footer>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
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
    <script>w3IncludeHTML();</script>
</body>
</html>