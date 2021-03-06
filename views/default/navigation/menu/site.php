<?php
/**
 * Ohyes Theme
 * @website Link: https://github.com/lianglee/OhYesTheme
 * @Package Ohyes
 * @subpackage Theme
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
*/ 
 
$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

echo ' <div class="ohyestopmenu" id="ohyestopmenu">
       <a class="ohyestopmenu_button ohyestopmenu_close" href="#"><span class="arrow"></span></a>
        <a class="ohyestopmenu_button ohyestopmenu_open" href="#ohyestopmenu"> <span class="arrow"></span></a>
        
<ul class="ohyestopmenu_content">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}
if ($more_items) {
	echo elgg_view('navigation/menu/elements/section', array(
		'class' => 'elgg-menu elgg-menu-site elgg-menu-site-more', 
		'items' => $more_items,
	));
}
?>
</ul>
        
    </div> 


