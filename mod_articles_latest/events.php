<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<dl class="latestnews<?php echo $moduleclass_sfx; ?>" itemscope itemtype="http://schema.org/Event">
<?php foreach ($list as $item) :  ?>
	<dt itemprop="Date">
		<span class="fa fa-calendar">&nbsp</span><?php echo JHtml::_('date', $item->created, "d.m.Y"); ?>
	</dt>
	<dd>
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
	</dd>
<?php endforeach; ?>
</dl>
