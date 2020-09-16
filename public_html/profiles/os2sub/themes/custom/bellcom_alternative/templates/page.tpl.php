<div class="outer-wrapper">
  <div class="sidebar sidebar-left">
    <div class="sidebar-logo">
      <a href="<?php print $front_page; ?>" class="sidebar-logo-link">
        <img src="<?php print $logo; ?>" class="sidebar-logo-image sidebar-logo-image-wide" alt="<?php print $site_name. t(' logo'); ?>" />
      </a>
    </div>
    <?php if (isset($sidebar_primary_navigation)): ?>
      <?php print render($sidebar_primary_navigation); ?>
    <?php endif; ?>
  </div>
  <div class="inner-wrapper" role="document">
    <nav class="simple-navigation">
      <ul class="simple-navigation-list simple-navigation-list-left">
        <li class="simple-navigation-button">
          <a href="#" data-sidebar-toggle="left">
            <span class="fa icon fa-bars">&nbsp;</span>
          </a>
        </li>
      </ul>
      <a href="<?php print $front_page; ?>" class="simple-navigation-logo-link">
        <img src="<?php print $logo; ?>" class="topbar-logo-image" alt="<?php print $site_name. t(' logo'); ?>" />
        <?php if ($site_name) : ?><span class="tablet-sitename"><?php print $site_name; ?></span><?php endif; ?>

      </a>
    </nav>
    <div class="content">
      <div class="container header-container">
       <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php if ($logo && !$site_name): ?>
              <a href='<?php print $front_page; ?>' class="main-navigation-logo-link">
                <img class="main-navigation-logo-image" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php elseif ($logo && $site_name): ?>
              <a href='<?php print $front_page; ?>' class="main-navigation-logo-link">
                  <img class="main-navigation-logo-image" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                <span class="site-name"><?php print $site_name; ?></span>
                <?php if ($slogan): ?>
                  <span class="site-slogan"><?php print $slogan; ?></span>
                <?php endif; ?>
              </a>
            <?php endif; ?>
          </div>
        <section class="top-right-menu col-md-6" role="navigation">
          <?php if ($secondary_navigation): ?>
            <?php print render($secondary_navigation); ?>
          <?php endif; ?>
          <?php if (!empty($page['header'])):?>
            <?php print render($page['header']);?>
          <?php endif; ?>
          <ul class="main-navigation-list main-navigation-lang">
            <?php if ($theme_settings['languages']['lang_german']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_german']['url']; ?>"
                  class="lang-link lang-link-de"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_german']['tooltip']; ?>">DE
                </a>
              </li>
            <?php endif; ?>
            <?php if ($theme_settings['languages']['lang_english']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_english']['url']; ?>"
                  class="lang-link lang-link-en"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_english']['tooltip']; ?>">EN
                </a>
              </li>
            <?php endif; ?>

            <?php if ($theme_settings['languages']['lang_swedish']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_swedish']['url']; ?>"
                  class="lang-link lang-link-se"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_swedish']['tooltip']; ?>">SE
                </a>
              </li>
            <?php endif; ?>
            <?php if ($theme_settings['languages']['lang_norwegian']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_norwegian']['url']; ?>"
                  class="lang-link lang-link-no"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_norwegian']['tooltip']; ?>">NO
                </a>
              </li>
            <?php endif; ?>

            <?php if ($theme_settings['languages']['lang_arabic']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_arabic']['url']; ?>"
                  class="lang-link lang-link-ar"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_arabic']['tooltip']; ?>">AR
                </a>
              </li>
            <?php endif; ?>

            <?php if ($theme_settings['languages']['lang_danish']['active']): ?>
              <li class="main-navigation-list-link">
                <a href="<?php print $theme_settings['languages']['lang_danish']['url']; ?>"
                  class="lang-link lang-link-da"
                  data-toggle="tooltip"
                  data-placement="bottom"
                  title="<?php print $theme_settings['languages']['lang_danish']['tooltip']; ?>">DK
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </section>
      </div>
    </div>
  </div>

  <div class="main-navigation-wrapper">
    <div class="main-navigation-bar" id="main-navigation-bar">
      <div class="container nav-container">
        <div class="row">
          <nav class="col-md-9">

            <?php if (isset($primary_navigation)): ?>
              <?php print render($primary_navigation); ?>
            <?php endif; ?>

          </nav>
          <section role="search" class="col-md-3">
            <?php print $search_box; ?>
          </section>
        </div>
      </div>
    </div>
  </div>

  <?php if (!empty($page['highlighted'])): ?>
    <div class="highlighted"><?php print render($page['highlighted']); ?></div>
  <?php endif; ?>

  <?php if (!empty($breadcrumb)): ?>
    <section class="os2sub-breadcrumb-container">
      <div class="breadcrumbs-wrapper">
        <div class="container">
          <?php print $breadcrumb; ?>
        </div>
      </div>
    </section>
  <?php endif;?>
  <div class="container main-container">
    <?php print $messages; ?>
    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>


    <?php if (!empty($tabs)): ?>
      <div class="content-tabs-container">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <a id="main-content"></a>
    <div class="visible-xs-block visible-sm-block"><?php print $search_box; ?></div>
    <?php if (!panels_get_current_page_display()): ?>
      <div class="os2sub-box">
        <?php if (empty($node) ) { ?>
          <?php if ($title): ?>
            <div class="os2sub-box-heading">
              <h2 class="os2sub-box-heading-title"><?php print $title; ?></h2>
            </div>
          <?php endif; } ?>
          <div class="os2sub-box-body">
            <?php print render($page['content']); ?>
          </div>
        </div>
        <?php else: ?>
          <?php print render($page['content']); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if (!empty($page['footertop1']) OR !empty($page['footertop2']) OR !empty($page['footer'])): ?>
      <div class="pail-section pail-section-wrapper">
        <div class="container footer-container">
          <div class="row">
            <?php if (!empty($page['footertop1'])) : ?>
              <section role="complementary" class="footertop-region col-sm-4">
                  <?php print render($page['footertop1']); ?>
              </section>
            <?php endif ?>
            <?php if (!empty($page['footertop2'])) : ?>
              <section role="complementary" class="footertop2-region col-sm-8">
                  <?php print render($page['footertop2']); ?>
              </section>
            <?php endif ?>
            <?php if (!empty($page['footer'])) : ?>
              <section role="complementary" class="footer-region col-sm-12">
                <?php print render($page['footer']); ?>
              </section>
            <?php endif ?>
          </div>
        </div>
      </div>
    <?php endif ?>
    <footer class="footer">
      <div class="footer-branding">
       <div class="container">
        <?php if (empty($page['footer4']) OR $theme_settings['layout']['footer']['show_branding']): ?>
          <div class="branding-logo">
            <?php if (isset($theme_settings['layout']['branding_link'])): ?>
              <a href="<?php print $theme_settings['layout']['branding_link']; ?>">
            <?php endif; ?>
              <span class="branding-text">
                <?php if (!empty($theme_settings['layout']['footer']['show_branding']) ): ?>
                <?php if (empty($theme_settings['layout']['footer']['footer_branding_logo']) ): ?>
                <span class="standard"><img src="<?php print base_path().path_to_theme().'/dist/img/ballerupbyvaaben.png' ?>" alt="Ballerup byvåben"></span>
                <?php else:
                  $file = file_load((int) $theme_settings['layout']['footer']['footer_branding_logo']);
                  $uri = $file->uri;
                  print theme('image_style',
                    array(
                      'path' => $uri,
                      'style_name' => 'footer_branding',
                      'alt' => 'Ballerup logo',
                    ),
                  ); ?>
                <?php endif;?>
                 <?php endif;?>
                <?php if ($theme_settings['layout']['footer']['show_branding_text']): ?>

                <?php if (isset($theme_settings['layout']['branding_text'])): ?>
                  <?php print $theme_settings['layout']['branding_text']; ?>

                <?php else: ?>
                subsite er præsenteret i samarbejde med Ballerup Kommune

                <?php endif; ?>

                 <?php print $theme_settings['branding_text']; ?>


                <?php endif; ?>
              </span>
            <?php if (isset($theme_settings['layout']['branding_link'])): ?>
            </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php print render($page['footer4']); ?>
       </div>
     </div>
      <?php if (!empty($page['footer2'])
        OR !empty($theme_settings['contact_information'])
        OR isset($theme_settings['layout']['footer']['show_social_links']) ) : ?>
        <div class="footer-dark">
          <div class="container footer-dark-container">
            <div class="row">
                <div class="contact-information col-sm-4">
                  <?php print render($page['footer2']); ?>
                  <?php if (isset($theme_settings['contact_information']['business_owner_name'])) : ?>
                    <h2 class="block-title">
                      <?php print $theme_settings['contact_information']['business_owner_name']; ?>
                    </h2>
                  <?php endif; ?>

                  <p>
                    <?php if (!empty($theme_settings['contact_information']['business_startup_year']) ) : ?>
                      <?php print t('Siden ').$theme_settings['contact_information']['business_startup_year']; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['address']) ) : ?>
                      <?php print $theme_settings['contact_information']['address']; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['zipcode']) ) : ?>
                      <?php print $theme_settings['contact_information']['zipcode']; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['city']) ) : ?>
                      <?php print $theme_settings['contact_information']['city']; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['phone_system']) ) : ?>
                      <?php print '<a title="Ring til '.$theme_settings['contact_information']['phone_readable'].'"
                        href="tel:'.$theme_settings['contact_information']['phone_system'].'">'; ?>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['phone_readable']) ) : ?>
                      <?php print $theme_settings['contact_information']['phone_readable']; ?></br>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['phone_system']) ) : ?>
                      <?php print '</a>'; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['email']) ) : ?>
                      <?php print '<a href="mailto:'.$theme_settings['contact_information']['email'].'
                        Title="Send email">'.$theme_settings['contact_information']['email'].'</a>'; ?><br/>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['working_hours']) ) : ?>
                      <?php print $theme_settings['contact_information']['working_hours']; ?></br>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['cvr_nr']) ) : ?>
                      <br/><?php print $theme_settings['contact_information']['cvr_nr']; ?></br>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['giro_nr']) ) : ?>
                      <?php print $theme_settings['contact_information']['giro_nr']; ?></br>
                    <?php endif; ?>

                    <?php if (!empty($theme_settings['contact_information']['ean']) ) : ?>
                      <?php print $theme_settings['contact_information']['ean']; ?></br>
                    <?php endif; ?>
                  </p>
  	            </div>
                <?php if (!empty($page['footer5'])) : ?>
                  <div class="col-sm-5">
                    <section role="complementary">
            	        <div class="footer5">
              	        <?php print render($page['footer5']); ?>
              	     </div>
                    </section>
        	        </div>
                <?php endif ?>
            <?php if (!empty($page['footer6'])) : ?>
              <div class="col-sm-3">
                <section role="complementary">
                  <div class="footer6">
                    <div class="custom-links">
                      <?php print render($page['footer6']); ?>
                    </div>
                  </div>
                </section>
              </div>
            <?php endif; ?>
              <div class="social-links col-sm-3">
                <?php if ($theme_settings['social_links']['social_links_block_name']): ?>
                  <h3 class="block-title"><?php print $theme_settings['social_links']['social_links_block_name']; ?></h3>
                <?php endif; ?>
                <?php print render($page['footer3']); ?>
                <ul class="social-icon-list">
                  <?php if ($theme_settings['social_links']['facebook']['active']): ?>
                    <li>
                      <a
                        href="<?php print $theme_settings['social_links']['facebook']['url']; ?>"
                        target="_blank"
                        class="social-icon social-icon-facebook"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?php print $theme_settings['social_links']['facebook']['tooltip']; ?>">
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['twitter']['active']): ?>
                    <li>
                      <a
                        href="<?php print $theme_settings['social_links']['twitter']['url']; ?>"
                        target="_blank"
                        class="social-icon social-icon-twitter"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?php print $theme_settings['social_links']['twitter']['tooltip']; ?>">
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['googleplus']['active']): ?>
                    <li>
                      <a
                        href="<?php print $theme_settings['social_links']['googleplus']['url']; ?>"
                        target="_blank"
                        class="social-icon social-icon-google-plus"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?php print $theme_settings['social_links']['googleplus']['tooltip']; ?>">
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['linkedin']['active']): ?>
                    <li>
                      <a
                        href="<?php print $theme_settings['social_links']['linkedin']['url']; ?>"
                        target="_blank"
                        class="social-icon social-icon-linkedin"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?php print $theme_settings['social_links']['linkedin']['tooltip']; ?>">
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if ($theme_settings['social_links']['pinterest']['active']): ?>
                    <li>
                      <a
                        href="<?php print $theme_settings['social_links']['pinterest']['url']; ?>"
                        target="_blank" class="social-icon social-icon-pinterest"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?php print $theme_settings['social_links']['pinterest']['tooltip']; ?>">
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['instagram']['active']): ?>
                    <li><a href="<?php print $theme_settings['social_links']['instagram']['url']; ?>" target="_blank" class="social-icon social-icon-instagram" data-toggle="tooltip" data-placement="top" title="<?php print $theme_settings['social_links']['instagram']['tooltip']; ?>"></a></li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['youtube']['active']): ?>
                    <li><a href="<?php print $theme_settings['social_links']['youtube']['url']; ?>" target="_blank" class="social-icon social-icon-youtube" data-toggle="tooltip" data-placement="top" title="<?php print $theme_settings['social_links']['youtube']['tooltip']; ?>"></a></li>
                  <?php endif; ?>

                  <?php if ($theme_settings['social_links']['vimeo']['active']): ?>
                    <li><a href="<?php print $theme_settings['social_links']['vimeo']['url']; ?>" target="_blank" class="social-icon social-icon-vimeo" data-toggle="tooltip" data-placement="top" title="<?php print $theme_settings['social_links']['vimeo']['tooltip']; ?>"></a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </footer>
  </div>
</div>
