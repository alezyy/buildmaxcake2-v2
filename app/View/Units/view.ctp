<div class="units view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Unit'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Unit'), array('action' => 'edit', $unit['Unit']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Units'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Unit'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Properties'), array('controller' => 'properties', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Property'), array('controller' => 'properties', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Rental Owners'), array('controller' => 'rental_owners', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Rental Owner'), array('controller' => 'rental_owners', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sizes'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Size'), array('controller' => 'sizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Leasestypes'), array('controller' => 'leasestypes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Leasestype'), array('controller' => 'leasestypes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Statuses'), array('controller' => 'statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Status'), array('controller' => 'statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Property'); ?></th>
		<td>
			<?php echo $this->Html->link($unit['Property']['propertiestype_id'], array('controller' => 'properties', 'action' => 'view', $unit['Property']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Owner'); ?></th>
		<td>
			<?php echo $this->Html->link($unit['RentalOwner']['gender_id'], array('controller' => 'rental_owners', 'action' => 'view', $unit['RentalOwner']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unit Number'); ?></th>
		<td>
			<?php echo h($unit['Unit']['unit_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Size'); ?></th>
		<td>
			<?php echo $this->Html->link($unit['Size']['id'], array('controller' => 'sizes', 'action' => 'view', $unit['Size']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Market Rent'); ?></th>
		<td>
			<?php echo h($unit['Unit']['market_rent']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bedrooms'); ?></th>
		<td>
			<?php echo h($unit['Unit']['bedrooms']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bath'); ?></th>
		<td>
			<?php echo h($unit['Unit']['bath']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lease Term'); ?></th>
		<td>
			<?php echo h($unit['Unit']['lease_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Leasestype'); ?></th>
		<td>
			<?php echo $this->Html->link($unit['Leasestype']['id'], array('controller' => 'leasestypes', 'action' => 'view', $unit['Leasestype']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Amount'); ?></th>
		<td>
			<?php echo h($unit['Unit']['rental_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deposit Amount'); ?></th>
		<td>
			<?php echo h($unit['Unit']['deposit_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($unit['Unit']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Features'); ?></th>
		<td>
			<?php echo h($unit['Unit']['features']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($unit['Unit']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo $this->Html->link($unit['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $unit['Status']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($unit['Unit']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($unit['Unit']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Applications Leases'); ?></h3>
	<?php if (!empty($unit['ApplicationsLease'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Leasestype Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Automatically End The Lease'); ?></th>
		<th><?php echo __('Recurringcharge Id'); ?></th>
		<th><?php echo __('Next Due Date'); ?></th>
		<th><?php echo __('Rent Mount'); ?></th>
		<th><?php echo __('Security Deposit'); ?></th>
		<th><?php echo __('Security Deposit Date'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Agreement'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($unit['ApplicationsLease'] as $applicationsLease): ?>
		<tr>
			<td><?php echo $applicationsLease['id']; ?></td>
			<td><?php echo $applicationsLease['tenant_id']; ?></td>
			<td><?php echo $applicationsLease['property_id']; ?></td>
			<td><?php echo $applicationsLease['unit_id']; ?></td>
			<td><?php echo $applicationsLease['leasestype_id']; ?></td>
			<td><?php echo $applicationsLease['start_date']; ?></td>
			<td><?php echo $applicationsLease['end_date']; ?></td>
			<td><?php echo $applicationsLease['automatically_end_the_lease']; ?></td>
			<td><?php echo $applicationsLease['recurringcharge_id']; ?></td>
			<td><?php echo $applicationsLease['next_due_date']; ?></td>
			<td><?php echo $applicationsLease['rent_mount']; ?></td>
			<td><?php echo $applicationsLease['security_deposit']; ?></td>
			<td><?php echo $applicationsLease['security_deposit_date']; ?></td>
			<td><?php echo $applicationsLease['status_id']; ?></td>
			<td><?php echo $applicationsLease['notes']; ?></td>
			<td><?php echo $applicationsLease['agreement']; ?></td>
			<td><?php echo $applicationsLease['created']; ?></td>
			<td><?php echo $applicationsLease['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'applications_leases', 'action' => 'view', $applicationsLease['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'applications_leases', 'action' => 'edit', $applicationsLease['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'applications_leases', 'action' => 'delete', $applicationsLease['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicationsLease['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
