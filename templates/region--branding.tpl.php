<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
  <a id="nameplate-link" href="http://www.uni.edu/">
   <div id="nameplate">
     <img alt="University of Northern Iowa" src="../sites/all/themes/unibasetheme/images/uni.gif">
   </div><!-- END NAMEPLATE --></a>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
      <?php if ($linked_logo_img): ?>
      <div class="logo-img">
        <?php print $linked_logo_img; ?>
      </div>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
      <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
      <hgroup class="site-name-slogan<?php print $class; ?>">        
        <?php if ($site_name): ?>
        <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
        <?php if ($is_front): ?>        
        <h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
        <?php else: ?>
        <h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
        <?php endif; ?>
        <?php endif; ?>
        <div id="cub-site-name"><a href="/eop/classic-upward-bound"><img style="float:left;" src="/eop/sites/all/themes/eop/images/cub.png"/></a><h1 class="site-name"><a href="/eop/classic-upward-bound">Classic Upward Bound</a></h1></div>
        <div id="imsa-site-name"><a href="/eop/iowa-mathematics-science-academy"><img style="float:left;" src="/eop/sites/all/themes/eop/images/imsalogo.gif"/></a><h1 class="site-name"><a href="/eop/iowa-mathematics-science-academy">Iowa Mathematics & Science Academy</a></h1></div>
        <div id="ets-site-name"><h1 class="site-name"><a href="/eop/educational-talent-search">Educational Talent Search</a></h1></div>
        <div id="eoc-site-name"><h1 class="site-name"><a href="/eop/educational-opportunity-center">Educational Opportunity Center</a></h1></div>
        <?php if ($site_slogan): ?>
        <?php $class = $site_slogan_hidden ? ' element-invisible' : ''; ?>
        <h6 class="site-slogan<?php print $class; ?>"><?php print $site_slogan; ?></h6>
        <?php endif; ?>
      </hgroup>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>