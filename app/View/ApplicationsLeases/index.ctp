<div class="applicationsLeases index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Applications Leases'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Applications Lease'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('tenant_id'); ?></th>
						<th><?php echo $this->Paginator->sort('property_id'); ?></th>
						<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
						<th><?php echo $this->Paginator->sort('leasestype_id'); ?></th>
						<th><?php echo $this->Paginator->sort('start_date'); ?></th>
						<th><?php echo $this->Paginator->sort('end_date'); ?></th>
						<th><?php echo $this->Paginator->sort('automatically_end_the_lease'); ?></th>
						<th><?php echo $this->Paginator->sort('recurringcharge_id'); ?></th>
						<th><?php echo $this->Paginator->sort('next_due_date'); ?></th>
						<th><?php echo $this->Paginator->sort('rent_mount'); ?></th>
						<th><?php echo $this->Paginator->sort('security_deposit'); ?></th>
						<th><?php echo $this->Paginator->sort('security_deposit_date'); ?></th>
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
						<th><?php echo $this->Paginator->sort('notes'); ?></th>
						<th><?php echo $this->Paginator->sort('agreement'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($applicationsLeases as $applicationsLease): ?>
					<tr>
						<td><?php echo h($applicationsLease['ApplicationsLease']['id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['tenant_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['property_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['unit_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['leasestype_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['start_date']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['end_date']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['automatically_end_the_lease']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['recurringcharge_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['next_due_date']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['rent_mount']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['security_deposit']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['security_deposit_date']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['status_id']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['notes']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['agreement']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['created']); ?>&nbsp;</td>
						<td><?php echo h($applicationsLease['ApplicationsLease']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $applicationsLease['ApplicationsLease']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $applicationsLease['ApplicationsLease']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $applicationsLease['ApplicationsLease']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicationsLease['ApplicationsLease']['id'])); ?>
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