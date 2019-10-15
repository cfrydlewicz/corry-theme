	<footer class="pre-footer">

		<div class="u_flex u_flex--space-between">

			<section class="about-container footer-section-container" id="anchor-contact">
				<h3>About Corry</h3>
				<?php if ( in_category('professional') || is_page() ) : ?>
				  <p>Lead Developer and Manager of front-end developers, focusing on the production pipelines for marketing content for Gap Inc.</p>
				  <p>For details, please visit <a href="https://www.linkedin.com/in/corryfrydlewicz/" rel="noreferrer">my LinkedIn profile</a>.</p>
				  <p>I am currently:</p>
					<ul class="availability-list">
						<li class="availability--none"><span><em>Not</em> available</span> for <strong>full-time work</strong>.</li>
						<li class="availability--none"><span><em>Not</em> available</span> for <strong>freelance work</strong>.</li>
						<li class="availability--part"><span><em>Part-Time</em> available</span> for <strong>volunteer work</strong>.</li>
					</ul>
					<a class="button-link about-cta" href="https://www.linkedin.com/in/corryfrydlewicz/" rel="noreferrer">Read more</a>
				<?php else : ?>
					<p>This is my personal website, where my opinions and experiences are openly shared. I do not speak on behalf of any other persons or groups.</p>
					<p>For my professional information, please visit <a href="https://www.linkedin.com/in/corryfrydlewicz/" rel="noreferrer">my LinkedIn profile</a>.</p>
					<a class="button-link about-cta" href="/about/">Read more</a>
				<?php endif; ?>
			</section>

			<section class="follow-container footer-section-container">
				<h3 class="u_visually-hidden">Social Networks I'm On:</h3>
				<ul>
					<li class="facebook"><a 			class="i_facebook2" 			href="http://www.facebook.com/cfrydlewicz" 																			rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" 			target="_blank"><span class="u_visually-hidden">Facebook</span></a></li>
				  <li class="twitter"><a 				class="i_twitter" 				href="http://www.twitter.com/cfrydlewicz" 																			rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" 			target="_blank"><span class="u_visually-hidden">Twitter</span></a></li>
					<li class="linkedin"><a 			class="i_linkedin" 			href="http://www.linkedin.com/in/corryfrydlewicz" 															rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" 			target="_blank"><span class="u_visually-hidden">LinkedIn</span></a></li>
					<li class="github"><a 				class="i_github" 				href="https://github.com/cfrydlewicz" 																					rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://github.com']);"						target="_blank"><span class="u_visually-hidden">GitHub</span></a></li>
					<li class="stackoverflow"><a 	class="i_stackoverflow" 	href="http://stackoverflow.com/users/967727/cfrydlewicz" 												rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://stackoverflow.com']);"			target="_blank"><span class="u_visually-hidden">StackOverflow</span></a></li>
				  <li class="spotify"><a 				class="i_spotify" 				href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" 	rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" 					target="_blank"><span class="u_visually-hidden">My Spotify Playlists</span></a></li>
					<li class="twitch"><a 				class="i_twitch" 				href="https://www.twitch.tv/ultros_the_octopus" 																rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.twitch.tv']);"				target="_blank"><span class="u_visually-hidden">Twitch.tv</span></a></li>
					<li class="game-lol"><a 			class="i_lol" 						href="http://www.lolking.net/summoner/na/20187867" 															rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" 			target="_blank"><span class="u_visually-hidden">League of Legends</span></a></li>
					<li class="game-steam"><a 		class="i_steam" 					href="http://steamcommunity.com/id/cfrydlewicz/" 																rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" 		target="_blank"><span class="u_visually-hidden">Steam</span></a></li>
					<li class="game-psn"><a 			class="i_psn" 						href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" 				rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" 		target="_blank"><span class="u_visually-hidden">PlayStation Network</span></a></li>
					<!--li class="game-blizzard"><a 	class="i_blizzard" 			href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" 						rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" 				target="_blank"><span class="u_visually-hidden">Blizzard</span></a></li-->
					<!--li class="xbl"><a 						class="i_xbl" 						href="http://www.xboxgamertag.com/search/viciouslobo/" 													rel="noreferrer"	onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" 	target="_blank"><span class="u_visually-hidden">Xbox Live</span></a></li-->
				</ul>
			</section>

			<section class="copyright-footer footer-section-container">
				<div>
					<p class="copyright f_smallest">&copy;2006 &ndash; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a href="mailto:cfrydlewicz@gmail.com" target="_blank"><span itemprop="copyrightHolder">Corry Frydlewicz</span></a></p>
				</div>
				<div class="footer-links-container">
					<ul>
						<li><a class="i_top" href="#">Top of Page</a></li>
						<li><a class="i_home" href="/">Home</a></li>
						<!--li><a class="i_github" href="https://github.com/cfrydlewicz/corry18" target="_blank">This WordPress Theme on GitHub</a></li-->
					</ul>
				</div>
			</section>

		</div>
	</footer>

	<?php wp_footer(); ?>

<!-- BEGIN elements opened in header.php -->

</div><!-- /.total-wrapper -->

</body></html>
