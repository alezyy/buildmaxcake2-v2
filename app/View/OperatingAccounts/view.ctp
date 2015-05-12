<div class="operatingAccounts view">
<h2><?php echo __('Operating Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operatingAccount['OperatingAccount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($operatingAccount['OperatingAccount']['account_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($operatingAccount['OperatingAccount']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($operatingAccount['OperatingAccount']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operating Account'), array('action' => 'edit', $operatingAccount['OperatingAccount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operating Account'), array('action' => 'delete', $operatingAccount['OperatingAccount']['id']), array(), __('Are you sure you want to delete # %s?', $operatingAccount['OperatingAccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operating Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operating Account'), array('action' => 'add')); ?> </li>
	</ul>
</div>
