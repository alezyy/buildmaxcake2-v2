<div class="contacts index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contacts'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contact'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactaddresses'), array('controller' => 'contactaddresses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactaddress'), array('controller' => 'contactaddresses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactsubdetails'), array('controller' => 'contactsubdetails', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactsubdetail'), array('controller' => 'contactsubdetails', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('contact_no'); ?></th>
						<th><?php echo $this->Paginator->sort('salutation'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th><?php echo $this->Paginator->sort('mobile'); ?></th>
						<th><?php echo $this->Paginator->sort('title'); ?></th>
						<th><?php echo $this->Paginator->sort('department'); ?></th>
						<th><?php echo $this->Paginator->sort('fax'); ?></th>
						<th><?php echo $this->Paginator->sort('contacttype_id'); ?></th>
						<th><?php echo $this->Paginator->sort('otheremail'); ?></th>
						<th><?php echo $this->Paginator->sort('secondaryemail'); ?></th>
						<th><?php echo $this->Paginator->sort('donotcall'); ?></th>
						<th><?php echo $this->Paginator->sort('emailoptout'); ?></th>
						<th><?php echo $this->Paginator->sort('imagename'); ?></th>
						<th><?php echo $this->Paginator->sort('reference'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($contacts as $contact): ?>
					<tr>
						<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['contact_no']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['salutation']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['mobile']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['title']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['department']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['fax']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($contact['Contacttype']['id'], array('controller' => 'contacttypes', 'action' => 'view', $contact['Contacttype']['id'])); ?>
		</td>
						<td><?php echo h($contact['Contact']['otheremail']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['secondaryemail']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['donotcall']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['emailoptout']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['imagename']); ?>&nbsp;</td>
						<td><?php echo h($contact['Contact']['reference']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $contact['Contact']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $contact['Contact']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $contact['Contact']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
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