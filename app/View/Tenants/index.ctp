<div class="tenants index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tenants'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tenant'), array('action' => 'add'), array('escape' => false)); ?></li>
													</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
						<th><?php echo $this->Paginator->sort('marital_status_id'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('alternate emails'); ?></th>
						<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('work_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('fax'); ?></th>
						<th><?php echo $this->Paginator->sort('country_id'); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('street'); ?></th>
						<th><?php echo $this->Paginator->sort('City'); ?></th>
						<th><?php echo $this->Paginator->sort('zip'); ?></th>
						<th><?php echo $this->Paginator->sort('birth_date'); ?></th>
						<th><?php echo $this->Paginator->sort('driver_license_number'); ?></th>
						<th><?php echo $this->Paginator->sort('driver_license_state'); ?></th>
						<th><?php echo $this->Paginator->sort('total_number_of_occupants'); ?></th>
						<th><?php echo $this->Paginator->sort('unit_or_address_applying_for'); ?></th>
						<th><?php echo $this->Paginator->sort('requested_lease_term'); ?></th>
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
						<th><?php echo $this->Paginator->sort('emergency_contact'); ?></th>
						<th><?php echo $this->Paginator->sort('emergency_contact_email'); ?></th>
						<th><?php echo $this->Paginator->sort('emergency_contact_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('relationship_to_tenant'); ?></th>
						<th><?php echo $this->Paginator->sort('co_signer_details'); ?></th>
						<th><?php echo $this->Paginator->sort('notes'); ?></th>
						<th><?php echo $this->Paginator->sort('photo'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($tenants as $tenant): ?>
					<tr>
						<td><?php echo h($tenant['Tenant']['id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['gender_id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['marital_status_id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['email']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['alternate emails']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['cell_phone']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['home_phone']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['work_phone']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['fax']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['country_id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['state_id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['street']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['City']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['zip']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['birth_date']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['driver_license_number']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['driver_license_state']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['total_number_of_occupants']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['unit_or_address_applying_for']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['requested_lease_term']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['status_id']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['emergency_contact']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['emergency_contact_email']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['emergency_contact_phone']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['relationship_to_tenant']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['co_signer_details']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['notes']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['photo']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['created']); ?>&nbsp;</td>
						<td><?php echo h($tenant['Tenant']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $tenant['Tenant']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tenant['Tenant']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $tenant['Tenant']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tenant['Tenant']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->