<?php global $link; ?>
<?php
  echo stylesheet_tag("/plugins/feedspin_toolbar/toolbar.css");
	print_user_stylesheet($link)
?>
<button class="button_nav" title="Subscribe" onclick="quickMenuGo('qmcAddFeed')"></button>
<button class="button_nav" title="Toggle" onclick="toggle_cdm_expanded()"></button>
<button class="button_nav" title="Mark" onclick="catchupCurrentFeed()"></button>
<button class="button_nav" title="Refresh" onclick="viewCurrentFeed()"></button>
<button class="button_nav" title="Previous" onclick="moveToPost('prev',true)"></button>
<button class="button_nav" title="Next" onclick="moveToPost('next',true)"></button>
