<div class="residenceAndRentalHistories view">
<h2><?php echo __('Residence And Rental History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Id'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['tenant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landlord Or Manager Name'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['landlord_or_manager_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landlord Or Manager Phone'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['landlord_or_manager_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monthly Rent'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['monthly_rent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Residency From'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['date_of_residency_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Residency To'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['date_of_residency_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason For Leaving'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['reason_for_leaving']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Residence And Rental History'), array('action' => 'edit', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Residence And Rental History'), array('action' => 'delete', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id']), array(), __('Are you sure you want to delete # %s?', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Residence And Rental Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Residence And Rental History'), array('action' => 'add')); ?> </li>
	</ul>
</div>
