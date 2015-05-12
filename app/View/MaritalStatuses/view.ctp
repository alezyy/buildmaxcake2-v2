<div class="maritalStatuses view">
<h2><?php echo __('Marital Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($maritalStatus['MaritalStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($maritalStatus['MaritalStatus']['marital_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Marital Status'), array('action' => 'edit', $maritalStatus['MaritalStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Marital Status'), array('action' => 'delete', $maritalStatus['MaritalStatus']['id']), array(), __('Are you sure you want to delete # %s?', $maritalStatus['MaritalStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marital Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marital Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>
