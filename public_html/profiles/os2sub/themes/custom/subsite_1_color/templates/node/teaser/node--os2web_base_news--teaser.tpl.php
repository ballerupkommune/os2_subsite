
<?php if ( !$page ) : ?>
  <a href="<?php
  global $base_url;
  print $base_url . $node_url;
  ?>">
    <span class="os2sub-box" style="display: block;">
      <span class="top-border" style="display: block;">
        <article id="node-<?php print $node->nid; ?>" class="row <?php print $classes . " all"; ?> clearfix"<?php print $attributes; ?> date-filter="<?php if ( isset($top_parent_term) ) print $top_parent_term ?>">
          <span class="teaser-wrapper" style="display: block;">
            <?php if ( isset($content['field_os2web_base_field_lead_img']) ) : ?>
              <span class="col-xs-2" style="display: block;">
                <?php
                $img = field_get_items('node', $node, 'field_os2web_base_field_lead_img');
                $image = $img[0];
                $style = 'os2sub_small_imagesize';
                $public_filename = image_style_url($style, $image["uri"]);
                $path = drupal_get_path_alias('node/' . $node->nid);
                print $html = '<img class="img-responsive" title = "' . $image["title"] . '" src="' . $public_filename . '"/>';
                ?>
              </span>
              <span class="col-xs-10" style="display: block;">
                <span class="nyheder-title">
                  <?php print $node->title; ?>
                </span>
                <span class="nyheder-summary" style="display: block;">
                  <?php if (!isset($content['field_os2web_base_field_summary'])) :
                     print render($content['body']); endif; ?>
                  <?php print render($content['field_os2web_base_field_summary']); ?>
                </span>
                <span class="date-in-parts" style="display: block;">
                   <span class="day"><?php  echo date("j", $node->created); ?>. </span>
                   <span class="month"><?php echo t(date("F", $node->created)); ?></span>
                   <span class="year"><?php echo date("Y", $node->created); ?></span>
                </span>

              </span>
            <?php else: ?>
              <span class="col-sm-12 col-xs-12" style="display: block;">
                <span style="display: block;">
                  <?php print $node->title; ?>
                </span>
                <?php print render($content['field_os2web_base_field_summary']); ?>
                <span class="date-in-parts" style="display: block;">
                   <span class="day"><?php  echo date("j", $node->created); ?>. </span>
                   <span class="month"><?php echo t(date("F", $node->created)); ?></span>
                   <span class="year"><?php echo date("Y", $node->created); ?></span>
                </span>
              </span>
            <?php endif; ?>
          </span>
          <?php
          // Hide comments, tags, and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_os2web_base_field_image']);
          hide($content['field_os2web_base_field_lead_img']);
          ?>
          <?php if ( !empty($content['field_tags']) || !empty($content['links']) ): ?>
            <?php hide($content['field_tags']); ?>
            <?php hide($content['links']); ?>
          <?php endif; ?>
          <?php hide($content['comments']); ?>
        </article>
      </span>
    </span>
  </a>
<?php endif; ?>
