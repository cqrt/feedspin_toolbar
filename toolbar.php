<?php global $link; ?>
<?php
  echo stylesheet_tag("/plugins/feedspin_toolbar/toolbar.css");
	print_user_stylesheet($link)
?>
<div class="rss_container"><li class="rss"><a title="Subscribe" onclick="quickMenuGo('qmcAddFeed')"></a></li></div>
<li class="list"><a title="Toggle" onclick="toggle_cdm_expanded()"></a></li>
<li class="update"><a title="Mark" onclick="catchupCurrentFeed()"></a></li>
<li class="repeat"><a title="Refresh" onclick="viewCurrentFeed()"></a></li>
<li class="arrow-alt up"><a title="Previous" onclick="moveToPost('prev',true)"></a></li>
<li class="arrow-alt down"><a title="Next" onclick="moveToPost('next',true)"></a></li>
