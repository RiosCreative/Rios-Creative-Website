<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>About Luis Rios | Front-End Engineer &amp; UI/UX  Developer</title>
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
                        <h1><span>Sample Web Project</span></h1>
                        <h3>Client/University Course &nbsp;| &nbsp;YEAR</h3>
                        <p>This site is currently under development. See you soon with some great stuff!</p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer" w3-include-html="../inc/footer.html">
        </footer>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
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