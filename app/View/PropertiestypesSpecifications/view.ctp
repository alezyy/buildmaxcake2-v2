<div class="propertiestypesSpecifications view">
<h2><?php echo __('Propertiestypes Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertiestypesSpecification['PropertiestypesSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propertiestype Id'); ?></dt>
		<dd>
			<?php echo h($propertiestypesSpecification['PropertiestypesSpecification']['propertiestype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propertiestypes Specification'); ?></dt>
		<dd>
			<?php echo h($propertiestypesSpecification['PropertiestypesSpecification']['propertiestypes_specification']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propertiestypes Specification'), array('action' => 'edit', $propertiestypesSpecification['PropertiestypesSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propertiestypes Specification'), array('action' => 'delete', $propertiestypesSpecification['PropertiestypesSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $propertiestypesSpecification['PropertiestypesSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propertiestypes Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propertiestypes Specification'), array('action' => 'add')); ?> </li>
	</ul>
</div>
