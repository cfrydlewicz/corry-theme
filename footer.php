	<footer class="pre-footer">

		<div class="u_flex u_flex--space-between">

			<section class="about-container footer-section-container" id="anchor-contact">
				<h3>About Corry</h3>
				<p>[TODO: Write blurb]</p>
				<?php if ( in_category('professional') || is_page() ) : ?>
					<p>I am currently <span class="availability availability--none">not available</span> for full-time or freelance work.</p>
				<?php endif; ?>
				<?php if ( ! is_page(640) ) : ?>
					<a class="button-link about-cta" href="/about/">Read more</a>
				<?php endif; ?>
			</section>

			<section class="follow-container footer-section-container">
				<h3>Where to Find Me</h3>
				<ul>
					<li class="facebook"><a 			class="icon-facebook2" 			href="http://www.facebook.com/cfrydlewicz" 																			onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" 			target="_blank"><span class="u_visually-hidden">Facebook</span></a></li>
				  <li class="twitter"><a 				class="icon-twitter" 				href="http://www.twitter.com/cfrydlewicz" 																			onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" 			target="_blank"><span class="u_visually-hidden">Twitter</span></a></li>
				  <li class="googleplus"><a 		class="icon-google-plus" 		href="https://plus.google.com/u/0/103048907259001918186/about/p/pub" 						onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://plus.google.com']);" 			target="_blank"><span class="u_visually-hidden">Google+</span></a></li>
					<li class="linkedin"><a 			class="icon-linkedin" 			href="http://www.linkedin.com/in/corryart" 																			onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" 			target="_blank"><span class="u_visually-hidden">LinkedIn</span></a></li>
					<li class="github"><a 				class="icon-github" 				href="https://github.com/cfrydlewicz" 																					onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://github.com']);"						target="_blank"><span class="u_visually-hidden">GitHub</span></a></li>
					<li class="stackoverflow"><a 	class="icon-stackoverflow" 	href="http://stackoverflow.com/users/967727/cfrydlewicz" 												onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://stackoverflow.com']);"			target="_blank"><span class="u_visually-hidden">StackOverflow</span></a></li>
				  <li class="spotify"><a 				class="icon-spotify" 				href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" 	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" 					target="_blank"><span class="u_visually-hidden">My Spotify Playlists</span></a></li>
					<li class="twitch"><a 				class="icon-twitch" 				href="https://www.twitch.tv/ultros_the_octopus" 																onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.twitch.tv']);"				target="_blank"><span class="u_visually-hidden">Twitch.tv</span></a></li>
					<li class="game-lol"><a 			class="icon-lol" 						href="http://www.lolking.net/summoner/na/20187867" 															onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" 			target="_blank"><span class="u_visually-hidden">League of Legends</span></a></li>
					<li class="game-steam"><a 		class="icon-steam" 					href="http://steamcommunity.com/id/cfrydlewicz/" 																onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" 		target="_blank"><span class="u_visually-hidden">Steam</span></a></li>
					<li class="game-blizzard"><a 	class="icon-blizzard" 			href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" 						onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" 				target="_blank"><span class="u_visually-hidden">Blizzard</span></a></li>
					<li class="game-mtgo"><a 			class="icon-mtgo" 					href="http://community.wizards.com/users/propagandist" 													onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://community.wizards.com']);" target="_blank"><span class="u_visually-hidden">Magic: The Gathering Online</span></a></li>
					<li class="game-psn"><a 			class="icon-psn" 						href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" 				onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" 		target="_blank"><span class="u_visually-hidden">PlayStation Network</span></a></li>
					<!--li class="xbl"><a 				class="icon-xbl" 						href="http://www.xboxgamertag.com/search/viciouslobo/" 													onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" 	target="_blank"><span class="u_visually-hidden">Xbox Live</span></a></li-->
				</ul>
			</section>

			<section class="tag-cloud-container footer-section-container">
				<h3>What I Write About</h3>

				[TODO: Insert Tag Cloud]

			</section>

		</div>
	</footer>

	<footer class="u_flex u_flex--space-between">
		<div class="copyright-footer">
			<p class="copyright f_smallest">&copy;2006-<span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a href="mailto:cfrydlewicz@gmail.com" target="_blank"><span itemprop="copyrightHolder">Corry Frydlewicz</span></a></p>
		</div>
		<div class="footer-links-container">
			<ul>
				<li><a href="#">Back to Top</a></li>
				<li><a href="/">Home</a></li>
				<li><a href="https://github.com/cfrydlewicz/corry18" target="_blank">This WordPress Theme on GitHub</a></li>
			</ul>
		</div>
	</footer>

	<?php wp_footer(); ?>


<!-- BEGIN elements opened in header.php -->
</div><!-- /.total-wrapper -->

</body></html>
