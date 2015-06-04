<div class="contactsubdetails index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contactsubdetails'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactsubdetail'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacts'), array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('contact_id'); ?></th>
						<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('other_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('assistant'); ?></th>
						<th><?php echo $this->Paginator->sort('assistant_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('birthday'); ?></th>
						<th><?php echo $this->Paginator->sort('laststayintouchrequest'); ?></th>
						<th><?php echo $this->Paginator->sort('laststayintouchsavedate'); ?></th>
						<th><?php echo $this->Paginator->sort('lead_source'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($contactsubdetails as $contactsubdetail): ?>
					<tr>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($contactsubdetail['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $contactsubdetail['Contact']['id'])); ?>
		</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['home_phone']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['other_phone']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['assistant']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['assistant_phone']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['birthday']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['laststayintouchrequest']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['laststayintouchsavedate']); ?>&nbsp;</td>
						<td><?php echo h($contactsubdetail['Contactsubdetail']['lead_source']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $contactsubdetail['Contactsubdetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $contactsubdetail['Contactsubdetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $contactsubdetail['Contactsubdetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactsubdetail['Contactsubdetail']['id'])); ?>
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