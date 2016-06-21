<header class = "site-header">
    <div class="logoholder">
        <a href="http://rioscreative.com/" class="logoicon" id="logoicon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 512 512" class="svg_icon"><path d="M211.5 243l101.2 101.2c-8 1.5-16.2 2.3-24.7 2.3 -72.1 0-130.5-58.4-130.5-130.5 0-9.3 1-18.3 2.8-27H288c14.9 0 27 12.1 27 27s-12.1 27-27 27H211.5z" class="a"/><path d="M363.9 341.4c16.2-11.8 29.8-26.9 39.9-44.3H387.9c-9 13.6-20.4 25.3-33.7 34.7l-42.5-42.5C335 277.3 351 253 351 225c0-39.8-32.2-72-72-72H170.2c23.4-35.2 63.4-58.5 108.9-58.5s85.5 23.3 108.9 58.5h15.9C378.8 110 332.3 81 279 81s-99.8 29-124.7 72H63l45 45h29.5c-1.7 8.8-2.5 17.8-2.5 27 0 79.5 64.5 144 144 144 12.4 0 24.5-1.6 36-4.5L373.5 423h72L363.9 341.4zM303.7 353.2c-8 1.5-16.2 2.3-24.7 2.3 -72.1 0-130.5-58.4-130.5-130.5 0-9.3 1-18.3 2.8-27H279c14.9 0 27 12.1 27 27s-12.1 27-27 27h-76.5L303.7 353.2z"/><path d="M211.5 243l101.2 101.2c-8 1.5-16.2 2.3-24.7 2.3 -72.1 0-130.5-58.4-130.5-130.5 0-9.3 1-18.3 2.8-27H288c14.9 0 27 12.1 27 27s-12.1 27-27 27H211.5z" class="a"/><line x1="324" y1="355.5" x2="312.7" y2="344.2" class="a"/></svg></a>
        <a href="http://rioscreative.com/" class="logotext" id="logotext">Rios Creative</a>
        <a href="javascript:void(0);" id="menubox" onclick="menu_toggle()">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" height="0" viewBox="0 0 800 600" class="menu_icon">
            <path class="menupath" d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
            <path class = "menupath" d="M300,320 L540,320" id="middle"></path>
            <path class="menupath" d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path></svg></a>
    </div>
    <nav role="navigation" class="site-nav">
        <ul class="nav-list">
            <li><a href="../about/" <?php if ($thisPage=="About Me") 
echo " class=\"active\""; ?>>About</a></li>
            <li><a href="../portfolio/" <?php if ($thisPage=="Portfolio") 
echo " class=\"active\""; ?>>Portfolio</a></li>
            <li><a href="../inspiration/" <?php if ($thisPage=="Inspiration") 
echo " class=\"active\""; ?>>Inspiration</a></li>
            <li><a href="../contact/" <?php if ($thisPage=="Contact") 
echo " class=\"active\""; ?>>Contact</a></li>
        </ul>
    </nav>
</header>