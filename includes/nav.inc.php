<nav class="menu <?php if($page_title == 'Home'){echo 'fixed';} ?>">
  <ul class="nav-logos">
    <li><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" id="logo" href="<?php if($page_title == 'Home'){echo '#home';} else{echo 'index.php#home';} ?>"><span class="hide">logo</span></a></li>
    <li class="<?php if($page_title == 'Home'){echo 'hide-logo-text';} ?>"><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" id="logo-type" href="<?php if($page_title == 'Home'){echo '#home';} else{echo 'index.php#home';} ?>"><span class="hide">The Final Draft</span></a></li>
    <!-- <li><a href="#" id="menu_mobile"><i class="fa fa-bars"></i></a></li> -->
  </ul>

  <ul id="nav-links">
    <li><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" href="<?php if($page_title == 'Home'){echo '#home';} else{echo 'index.php#home';} ?>">Home</a></li>
    <li><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" href="<?php if($page_title == 'Home'){echo '#about';} else{echo 'index.php#about';} ?>">About</a></li>
    <li><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" href="<?php if($page_title == 'Home'){echo '#grads';} else{echo 'index.php#grads';} ?>">Grads</a></li>
    <li><a class="<?php if($page_title == 'Home'){echo 'scroll';} ?>" href="<?php if($page_title == 'Home'){echo '#schdule';} else{echo 'index.php#schdule';} ?>">Map</a></li>
  </ul>
</nav>
