<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);
?>
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
	<div class="system-unpublished">
<?php endif; ?>

<?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>

<?php if ($canEdit || $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
	<?php echo JLayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item, 'print' => false)); ?>
<?php endif; ?>

<?php if ($params->get('show_tags') && !empty($this->item->tags->itemTags)) : ?>
	<?php echo JLayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
<?php endif; ?>

<?php // Todo Not that elegant would be nice to group the params ?>
<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
	|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') ); ?>

<?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
	<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
<?php endif; ?>

<?php echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?>


<?php if (!$params->get('show_intro')) : ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
<?php endif; ?>



<?php if ($params->get('show_readmore') && $this->item->readmore) : ?>
<?php // new - -----------------------------------------------------------------------------------------------------------?>
					<!-- <a href = "<?php $link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); echo $link ?>" ><div class="image"><img alt="" src="<?php  echo $this->baseurl; ?>/templates/<?php $app = & JFactory::getApplication(); $temp1 = $app->getTemplate(); echo $temp1;?>/images/new.jpg"></div></a>
		-->
<a class="news-item" href="#">
	<div class="image">
		<img alt="" src="<?php  echo $this->baseurl; ?>/templates/<?php $app = & JFactory::getApplication(); $temp1 = $app->getTemplate(); echo $temp1;?>/images/new.jpg">
	</div>
	<div class="text">
		<div class="date">
			<span><?php echo JHtml::_('date', $this->item->created, 'Y');?></span>
				<?php echo JHtml::_('date', $this->item->created, 'F');?> <?php echo JHtml::_('date', $this->item->created, 'd');?>
		</div>
		<?php echo $this->item->event->beforeDisplayContent; ?> <?php echo $this->item->introtext; ?>
	</div>
</a>
		
	<!--<?php echo $this->item->event->beforeDisplayContent; ?> <?php echo $this->item->introtext; ?>
	-->

<?php else : ?>
<?php //echo $this->item->event->beforeDisplayContent; ?> <?php //echo $this->item->introtext; ?>

<a class="news-item no-image" href="#">
	<div class="text">
		<div class="date">
			<span><?php echo JHtml::_('date', $this->item->created, 'Y');?></span>
			<?php echo JHtml::_('date', $this->item->created, 'F');?> <?php echo JHtml::_('date', $this->item->created, 'd');?>
		</div>
	<?php echo $this->item->event->beforeDisplayContent; ?> <?php echo $this->item->introtext; ?>
	</div>
</a>

<?php  endif; ?>

<?php if ($useDefList && ($info == 1 || $info == 2)) : ?>
	<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
<?php  endif; ?>

<?php if ($params->get('show_readmore') && $this->item->readmore) :
	/*if ($params->get('access-view')) :
		$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
	else :
		$menu = JFactory::getApplication()->getMenu();
		$active = $menu->getActive();
		$itemId = $active->id;
		$link1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
		$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
		$link = new JUri($link1);
		$link->setVar('return', base64_encode($returnURL));
	endif; */?>

	<?php //echo JLayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link)); ?>

<?php endif; ?>

<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
</div>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>