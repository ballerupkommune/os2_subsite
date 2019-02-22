<article role="listitem" id="node-<?php print $node->nid; ?>"
         class="<?php print $classes; ?> subsite-spotbox subsite-box subsite-box-small-spacing"<?php print $attributes; ?>>

    <?php if ( isset( $content['field_os2web_base_field_lead_img'] ) ): ?>
        <!-- Begin - image -->
        <div class="node__image">
            <?php print render( $content['field_os2web_base_field_lead_img'] ); ?>
        </div>
        <!-- End - image -->
    <?php endif; ?>

    <a class="news-spot-link" href="<?php print $node_url; ?>">
        <div class="date-in-parts">
            <span class="day"><?php echo date("j", $node->created); ?>. </span>
            <span class="month"><?php echo t(date("F", $node->created)); ?></span>
            <span class="year"><?php echo date("Y", $node->created); ?></span>
        </div>

        <h4 class="h4 subsite-spot-heading-title">
            <?php print $title; ?>
        </h4>

        <?php if (isset($content['field_os2web_base_field_summary'])) : ?>
            <span class="subsite-teaser-body-content">
                <?php print render($content['field_os2web_base_field_summary']); ?>
            </span>

        <?php elseif (isset($content['body'])): ?>
            <span class="subsite-teaser-body-content">
                <?php print render($content['body']); ?>
            </span>
        <?php endif; ?>

    </a>
</article>
