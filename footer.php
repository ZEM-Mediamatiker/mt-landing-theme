        <footer>
            <address>
                <span class="hidden-xs"><?php echo $lang['EIDG_DEP_FOOT'];?></span>
                <nav class="pull-right">
                    <ul>
                        <li>
                            <a href="https://www.admin.ch/gov/de/start/rechtliches.html" target="_blank">Rechtliches</a>
                        </li>
                        <li>
                            <a href="https://www.admin.ch/gov/de/start/dokumentation/impressum.html" target="_blank">Impressum</a>
                        </li>
                    </ul>
                </nav>
            </address>
        </footer> 
    </body>
    

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendors.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/polyfill.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
        
    <script>		
		if(window.location.search == "?lang=fr"){
			$(".langfr").addClass("active");
		}else{
			$(".langfr").removeClass("active");
		}
        if(window.location.search == "?lang=de"){
			$(".langde").addClass("active");
		}else{
			$(".langde").removeClass("active");
		}
        if(window.location.search == "?lang=it"){
			$(".langit").addClass("active");
		}else{
			$(".langit").removeClass("active");
		}
        if(window.location.search == "?lang=en"){
			$(".langen").addClass("active");
		}else{
			$(".langen").removeClass("active");
		}        
	</script>
    
</html>