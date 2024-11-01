<?php if ($lc_embedid) { ?>
<!-- Zipp.Chat widget -->
<script type="text/javascript">
	(function(w, d, s, u) {
		w.id = <?php echo $lc_embedid;?>; w.lang = '<?php echo $lc_set_lang;?>'; w.cName = '<?php echo $logged_in["name"];?>'; w.cEmail = '<?php echo $logged_in["email"];?>'; w.cMessage = ''; w.lcjUrl = u;
		var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
		j.async = true; j.src = 'https://zipp.chat/talk/js/jaklcpchat.js';
		h.parentNode.insertBefore(j, h);
	})(window, document, 'script', 'https://zipp.chat/talk/');
</script>
<div id="jaklcp-chat-container"></div>
<!-- end Zipp.Chat widget -->
<?php } ?>