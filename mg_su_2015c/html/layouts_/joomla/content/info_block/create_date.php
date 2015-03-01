<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

?>

<?php //new+ ?>
<div class="date"><span><?php echo JHtml::_('date', $displayData['item']->created, 'Y');?></span><?php echo JHtml::_('date', $displayData['item']->created, 'F');?> <?php echo JHtml::_('date', $displayData['item']->created, 'd');?> d.</div>
<?php //new- ?>

<!-- ORIGINAL
			<dd class="create">
					<span class="icon-calendar"></span>
					<time datetime="<?php echo JHtml::_('date', $displayData['item']->created, 'c'); ?>" itemprop="dateCreated">
						<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $displayData['item']->created, JText::_('DATE_FORMAT_LC3'))); ?>
					</time>
			</dd>
			-->