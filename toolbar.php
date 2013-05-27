<?php global $link; ?>
<?php
  echo stylesheet_tag("/plugins/feedspin_toolbar/toolbar.css");
	print_user_stylesheet($link)
?>
<ul>
<li class="rss"><a title="Subscribe" onclick="quickMenuGo('qmcAddFeed')">S</a></li>
<li class="list"><a title="Toggle" onclick="toggle_cdm_expanded()">T</a></li>
<li class="success"><a title="Mark" onclick="catchupCurrentFeed()">M</a></li>
<li class="refresh"><a title="Refresh" onclick="viewCurrentFeed()">R</a></li>
<li class="previous"><a title="Previous" onclick="moveToPost('prev',true)">P</a></li>
<li class="next"><a title="Next" onclick="moveToPost('next',true)">N</a></li>
</ul>
