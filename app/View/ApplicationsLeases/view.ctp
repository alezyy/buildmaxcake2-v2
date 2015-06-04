<div class="applicationsLeases view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Applications Lease'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Applications Lease'), array('action' => 'edit', $applicationsLease['ApplicationsLease']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Applications Lease'), array('action' => 'delete', $applicationsLease['ApplicationsLease']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicationsLease['ApplicationsLease']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applications Leases'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applications Lease'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tenant Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['tenant_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Property Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['property_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unit Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['unit_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Leasestype Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['leasestype_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Start Date'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['start_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('End Date'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['end_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Automatically End The Lease'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['automatically_end_the_lease']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Recurringcharge Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['recurringcharge_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Next Due Date'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['next_due_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rent Mount'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['rent_mount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Security Deposit'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['security_deposit']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Security Deposit Date'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['security_deposit_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status Id'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['status_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['notes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Agreement'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['agreement']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($applicationsLease['ApplicationsLease']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

