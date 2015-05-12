<div class="leasestypes view">
<h2><?php echo __('Leasestype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leasestype['Leasestype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Lease'); ?></dt>
		<dd>
			<?php echo h($leasestype['Leasestype']['type_lease']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leasestype'), array('action' => 'edit', $leasestype['Leasestype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leasestype'), array('action' => 'delete', $leasestype['Leasestype']['id']), array(), __('Are you sure you want to delete # %s?', $leasestype['Leasestype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leasestypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leasestype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
