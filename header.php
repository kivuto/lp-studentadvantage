<!-- Header -->
 
  <div class="row header hide-for-small">
      <div class="container">
          <div class="large-2 columns">
              <a href="http://www.onthehub.com" target="_blank" tabindex="1">
                <img src="img/oth_logo.png" alt="OnTheHub">
              </a>
          </div>
          <div class="large-2 large-offset-3 columns">
              <a href="http://www.minitab.com" target="_blank" tabindex="2">
                <img src="img/minitab_logo.png" alt="Minitab">
              </a>  
          </div>  
      </div>  
  </div>
 
  <!-- End Header -->

  <!-- Sub Header/Nav DESKTOPS -->
  <nav class="top-bar subHeader hide-for-small" data-topbar>
    <div class="container">
      <ul class="title-area">
          <li class="name">
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"></a></li>
      </ul>

      <section class="top-bar-section">
          <!-- Left Nav Section -->
            <ul class="center">
              <li><img src="img/kvt-logo.png" alt="Kivuto Solutions"></li>
              <li><a data-block="<?php echo $block1; ?>" onclick="tib('.content-introduction', '', '', '');">Intro</a></li>
              <li><a data-block="<?php echo $block2; ?>" onclick="tib('.content-challenges', '', '', '');">Challenges</a></li>
              <li><a data-block="<?php echo $block3; ?>" onclick="tib('.content-solution', '', '', '');">Solution</a></li>
              <li><a data-block="<?php echo $block4; ?>" onclick="tib('.content-resources', '', '', '');">Resources</a></li>
              <li><a data-block="<?php echo $block5; ?>" onclick="tib('.content-pricing', '', '', '');">Pricing</a></li>
              <li><a data-block="<?php echo $block6; ?>" onclick="tib('.content-email', '', '', '');">Lets Talk</a></li>
              <li><a data-block="<?php echo $block7; ?>" onclick="tib('.content-customers', '', '', '');">Customers</a></li>
            </ul>
      </section>
    </div>  
  </nav>

  <!-- Sub Header/Nav MOBILE -->
  <nav class="tab-bar offHeader show-for-small" data-topbar>
    <a class="left-off-canvas-toggle menu-icon">
      <span>ELMS&nbsp;for&nbsp;student&nbsp;advantage</span>
    </a>
  </nav>

  <aside class="left-off-canvas-menu">
    <ul class="off-canvas-list">
      <li><label>Setup</label></li>

        <li><a onclick="tib('.content-introduction', '', '', '');" data-search="">Intro</a></li>
        <li><a onclick="tib('.content-challenges', '', '', '');" data-search="Styles">Challenges</a></li>
        <li><a onclick="tib('.content-solution', '', '', '');" data-search="SCSS">Solution</a></li>
        <li><a onclick="tib('.content-resources', '', '', '');" data-search="Rails,Gem">Resources</a></li>
        <li><a onclick="tib('.content-pricing', '', '', '');" data-search="">Pricing</a></li>
        <li><a onclick="tib('.content-email', '', '', '');" data-search="Global Styles,Global Mixins,Global Variables,Useful HTML Classes">Lets Talk</a></li>
        <li><a onclick="tib('.content-customers', '', '', '');" data-search=""></a></li>

    </ul>
  </aside>
<a class="exit-off-canvas"></a>