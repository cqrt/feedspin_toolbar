<?php global $link; ?>
<?php
  echo stylesheet_tag("/plugins/feedspin_toolbar/toolbar.css");
	print_user_stylesheet($link)
?>
<div class="container rss_container"><li class="rss"><a title="Subscribe" onclick="quickMenuGo('qmcAddFeed')"></a></li></div>
<div class="container list_container"><li class="list"><a title="Toggle" onclick="toggle_cdm_expanded()"></a></li></div>
<div class="container update_container"><li class="update"><a title="Mark" onclick="catchupCurrentFeed()"></a></li></div>
<div class="container repeat_container"><li class="repeat"><a title="Refresh" onclick="viewCurrentFeed()"></a></li></div>
<div class="container up_container"><li class="arrow-alt up"><a title="Previous" onclick="moveToPost('prev',true)"></a></li></div>
<div class="container down_container"><li class="arrow-alt down"><a title="Next" onclick="moveToPost('next',true)"></a></li></div>
