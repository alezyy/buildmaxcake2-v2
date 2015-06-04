<div class="contactsubdetails view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contactsubdetail'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Contactsubdetail'), array('action' => 'edit', $contactsubdetail['Contactsubdetail']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Contactsubdetail'), array('action' => 'delete', $contactsubdetail['Contactsubdetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactsubdetail['Contactsubdetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contactsubdetails'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contactsubdetail'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contacts'), array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($contactsubdetail['Contactsubdetail']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo $this->Html->link($contactsubdetail['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $contactsubdetail['Contact']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Home Phone'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['home_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Phone'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['other_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Assistant'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['assistant']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Assistant Phone'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['assistant_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Birthday'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['birthday']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Laststayintouchrequest'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['laststayintouchrequest']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Laststayintouchsavedate'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['laststayintouchsavedate']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lead Source'); ?></th>
		<td>
			<?php echo h($contactsubdetail['Contactsubdetail']['lead_source']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

