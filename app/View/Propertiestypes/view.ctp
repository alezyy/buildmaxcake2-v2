<div class="propertiestypes view">
<h2><?php echo __('Propertiestype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertiestype['Propertiestype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($propertiestype['Propertiestype']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propertiestype'), array('action' => 'edit', $propertiestype['Propertiestype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propertiestype'), array('action' => 'delete', $propertiestype['Propertiestype']['id']), array(), __('Are you sure you want to delete # %s?', $propertiestype['Propertiestype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propertiestypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propertiestype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
