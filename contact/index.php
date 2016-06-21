<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Contact Luis Rios</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/contact.css">
        <link rel="stylesheet" href="../css/icons.css">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
</head>
    
<body>
        <header class = "site-header" w3-include-html="../inc/header.html">
        </header>
        <main>
            <section class="content-wrapper">
                <div class="large-outer-glass">
                    <div class="large-inner-glass">
                        <h1><span>Contact</span></h1>
                        <h3 class="text-center">Send me a message</h3>  
                        <div id="contact-form" class="clearfix">
                            <form id="form-action" method="POST">
                                <label for="name">Your Name: <span class="required">*</span></label>
                                <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
                                <label for="email">Email Address: <span class="required">*</span></label>
                                <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />
                                <label for="message">Message: <span class="required">*</span></label>
                                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
                                <input type="hidden" name="_next" value="../contact/thanks.php" />
                                <input type="text" name="_gotcha" style="display:none" />
                                <input type="submit" value="Send Email" id="submit-button" />
                                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer" w3-include-html="../inc/footer.html">
        </footer>
    <script>
        w3IncludeHTML();
        var contactform =  document.getElementById('form-action');
        contactform.setAttribute('action', '//formspree.io/' + 'luis' + '@' + 'rioscreative' + '.' + 'com');
    </script>
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