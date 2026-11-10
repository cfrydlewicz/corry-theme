  <div id="a_footer" class="footer-container">

    <div class="pre-footer">
      <div class="inner-wrapper">

        <section class="follow-container sp_horizontal-padding" role="complementary">
          <div class="site-footer_header">Follow Me</div>
          <ul>
            <li><a class="i_mail" href="https://forms.gle/NiPokd4kjcp6D32z7" target="_blank">Email</a></li>
            <li><a class="i_rss" href="/subscribe-to-corrys-blog-with-rss/" target="_blank">RSS</a></li>
            <li><a class="i_bluesky u_nowrap" href="/bluesky" rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Bluesky</a></li>
          </ul>
        </section>

        <?php if ( is_page_template( 'page_campaign-template.php' ) ) : ?>
          <section class="paid-for sp_padding">
            <p class="f_smallest" style="text-align: center;">This site was designed and coded by Corry Frydlewicz.<br>
              Paid for by <em>Corry Frydlewicz for Emeryville City Council 2026</em> (#1493176)</p>
          </section>
        <?php else : ?>
          <section class="reverse-canary sp_padding">
            <p class="f_smallest" style="text-align: center;">I have not been required to disclose data to the government under duress. If that changes and I'm able, I will remove this text. (last update: 2026-11-10)</p>
          </section>
        <?php endif; ?>

      </div>
    </div>

    <div class="site-footer">
      <div class="inner-wrapper">
        <section class="copyright-footer">
          <span class="site-footer-text">&copy;<span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a href="mailto:cfrydlewicz@gmail.com" target="_blank"><span itemprop="copyrightHolder">Corry Frydlewicz</span></a></span>
        </section>
        <section class="back-to-top">
          <span class="site-footer-text"><a href="#" class="i_arrow-up--after">Back to Top</a></span>
        </section>
        <?php if ( !is_page_template( 'page_campaign-template.php' ) ) : ?>
          <section class="follow-container">
            <h3 class="u_visually-hidden">Follow or Add Me:</h3>
            <ul>
              <li><a class="i_mail"          title="Email Newsletter"               href="/emailsubscribe?utm_source=site-footer" target="_blank"></a></li>
              <li><a class="i_rss"           title="My RSS Feed"                    href="/subscribe-to-corrys-blog-with-rss/"></a></li>
              <li><a class="i_bluesky"       title="cfrydlewicz on Bluesky"         href="/bluesky"                                                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);"></a></li>
           <!--li><a class="i_discord"       title="My Discord Server"              href="/discord"                                                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://discord.gg']);"></a></li-->
           <!--li><a class="i_matrix"        title="My Matrix Server"               href="/matrix-chat"                                                                   rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://matrix.org']);"></a></li-->
           <!--li><a class="i_pinterest"     title="My Boards"                      href="/boards"                                                                        target="_blank"></a></li-->
              <li><a class="i_spotify"       title="My Spotify Profile & Playlists" href="https://open.spotify.com/user/1232018881?si=2dd1be0bb2304895"                   rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://spotify.com/']);"></a></li>
              <li><a class="i_steam"         title="My Steam Profile"               href="https://steamcommunity.com/id/cfrydlewicz/"                                     rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://steamcommunity.com']);"></a></li>
           <!--li><a class="i_game"          title="My Final Fantasy XIV Character" href="https://na.finalfantasyxiv.com/lodestone/character/2240266/"                    rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://na.finalfantasyxiv.com']);"></a></li-->
              <li><a class="i_linkedin"      title="My LinkedIn Profile"            href="https://www.linkedin.com/in/corryfrydlewicz"                                    rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.linkedin.com']);"></a></li>
              <li><a class="i_github"        title="My GitHub Profile"              href="https://github.com/cfrydlewicz"                                                 rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://github.com']);"></a></li>
           <!--li><a class="i_stackoverflow" title="My StackOverflow Profile"       href="https://stackoverflow.com/users/967727/cfrydlewicz"                             rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://stackoverflow.com']);"></a></li-->
              <li><a class="i_magic"         title="My Magic: The Gathering Decks"  href="https://www.moxfield.com/users/ultros"                                          rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.moxfield.com']);"></a></li>
           <!--li><a class="i_lol"           title="My League of Legends Profile"   href="https://www.leagueofgraphs.com/summoner/na/Ultros"                              rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.leagueofgraphs.com/']);"></a></li-->
           <!--li><a class="i_twitch"        title="Ultros_the_Octopus on Twitch"   href="https://www.twitch.tv/ultros_the_octopus"                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.twitch.tv']);"></a></li-->
           <!--li><a class="i_psn"           title="My PlayStation Network Profile" href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51"              rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://us.playstation.com']);"></a></li-->
            </ul>
          </section>
        <?php endif; ?>
      </div>
    </div>

  </div>

</footer>
</div>

<div id="shadow" class="nav-trigger"></div>

<?php wp_footer(); ?>
</body></html>
