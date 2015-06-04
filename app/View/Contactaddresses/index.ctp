<div class="contactaddresses index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contactaddresses'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactaddress'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('mailing_city'); ?></th>
						<th><?php echo $this->Paginator->sort('mailing_street'); ?></th>
						<th><?php echo $this->Paginator->sort('mailing_country'); ?></th>
						<th><?php echo $this->Paginator->sort('other_country'); ?></th>
						<th><?php echo $this->Paginator->sort('mailing_state'); ?></th>
						<th><?php echo $this->Paginator->sort('mailing_pobox'); ?></th>
						<th><?php echo $this->Paginator->sort('other_city'); ?></th>
						<th><?php echo $this->Paginator->sort('others_tate'); ?></th>
						<th><?php echo $this->Paginator->sort('mailing_zip'); ?></th>
						<th><?php echo $this->Paginator->sort('other_zip'); ?></th>
						<th><?php echo $this->Paginator->sort('other_street'); ?></th>
						<th><?php echo $this->Paginator->sort('other_pobox'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($contactaddresses as $contactaddress): ?>
					<tr>
						<td><?php echo h($contactaddress['Contactaddress']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($contactaddress['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $contactaddress['Contact']['id'])); ?>
		</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_city']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_street']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_country']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['other_country']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_state']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_pobox']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['other_city']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['others_tate']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['mailing_zip']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['other_zip']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['other_street']); ?>&nbsp;</td>
						<td><?php echo h($contactaddress['Contactaddress']['other_pobox']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $contactaddress['Contactaddress']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $contactaddress['Contactaddress']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $contactaddress['Contactaddress']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactaddress['Contactaddress']['id'])); ?>
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