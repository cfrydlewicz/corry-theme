  <div id="a_footer" class="footer-container">

    <div class="pre-footer">
      <div class="inner-wrapper">

        <section class="campaign-container sp_padding" role="complementary">
          <?php if ( !is_page_template( 'page_campaign-template.php' ) ) : ?>
            <div class="site-footer_header">Did You Know <strong>I'm Running for City Council?</strong></div>
            <a href="/emeryville/join-me/"><img alt="Corry for Emeryville Logo" src="/wp-content/uploads/corry-emeryville-2026_logo-hi-res-scaled.png" style="width: 360px;"></a>
          <?php endif; ?>
          <div class="cta">
            <a href="/emeryville/join-me/">Join Me</a>
          </div>
          <?php if ( is_page_template( 'page_campaign-template.php' ) ) : ?>
            <div class="share-the-campaign">
              <div class="site-footer_header">Share The Campaign</div>
              <ul>
                <li><a class="i_mail" href="mailto:%20?subject=🗳Corry%20for%20Emeryville&amp;body=Check%20out%20Corry%20Frydlewicz%20for%20Emeryville%20City%20Council" target="_blank" rel="noreferrer noopener">Email</a></li>
                <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=https://corry.us/emeryville%20@corry.us" target="_blank" rel="noreferrer noopener nofollow">Bluesky</a></li>
                <li><a class="i_facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://corryfrydlewicz.com/emeryville/?utm_source=fb" target="_blank" rel="noreferrer noopener nofollow" class="nofancybox">Facebook</a></li>
                <li><a class="i_twitter" href="https://twitter.com/intent/tweet?url=https://corryfrydlewicz.com/emeryville/?utm_source=twitter&amp;text=" target="_blank" rel="noreferrer noopener nofollow">Twitter</a></li>
                <li><a class="i_linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://corryfrydlewicz.com/emeryville/?utm_source=linkedin" target="_blank" rel="noreferrer noopener nofollow">LinkedIn</a></li>
                <!--li><a class="i_nextdoor" href="https://nextdoor.com/sharekit/?body=https://corryfrydlewicz.com/emeryville/?utm_source=nextdoor" target="_blank" rel="noreferrer noopener nofollow">NextDoor</a></li-->
              </ul>
            </div>
          <?php endif; ?>
        </section>

        <section class="follow-container sp_horizontal-padding" role="complementary">
          <div class="site-footer_header">Follow Me</div>
          <ul>
            <?php if ( is_page_template( 'page_campaign-template.php' ) ) : ?>
              <li><a class="i_mail" href="https://forms.gle/6pbe5HsXqWkBfeDj6" target="_blank">Newsletter Sign Up</a></li>
            <?php else : ?>
              <li><a class="i_mail" href="/emailsubscribe?utm_source=site-footer" target="_blank">Email me</a> to join my newsletter.</li>
              <li><a class="i_rss" href="/subscribe-to-corrys-blog-with-rss/" target="_blank">RSS</a> is the best way to follow <em>new posts</em>.</li>
              <!--li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a> is where I'll share more once I have a few subscribers.</li-->
            <?php endif; ?>
              <li><a class="i_bluesky u_nowrap" href="/bluesky" rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Bluesky</a></li>
          </ul>
        </section>

        <?php if ( is_page_template( 'page_campaign-template.php' ) ) : ?>
          <section class="paid-for sp_padding">
            <p class="f_smallest" style="text-align: center;">This site was <a href="/emeryville/campaign-finance/">paid for</a>, designed, and coded by Corry Frydlewicz.</p>
          </section>
        <?php else : ?>
          <section class="reverse-canary sp_padding">
            <p class="f_smallest" style="text-align: center;">I have not been required to disclose data to the government under duress. If that changes and I'm able, I will remove this text. (last update: 2025-05-31)</p>
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
           <!--li><a class="i_heart"         title="My Patreon"                     href="/patreon"                                                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);"></a></li-->
              <li><a class="i_bluesky"       title="cfrydlewicz on Bluesky"         href="/bluesky"                                                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);"></a></li>
              <li><a class="i_discord"       title="My Discord Server"              href="/discord"                                                                       rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://discord.gg']);"></a></li>
           <!--li><a class="i_mastodon"      title="Follow Me on Mastodon"          href="https://sfba.social/@cfrydlewicz"                                               rel="me"         target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://twipped.social']);"></a></li-->
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
