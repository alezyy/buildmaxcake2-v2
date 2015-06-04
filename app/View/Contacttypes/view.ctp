<div class="contacttypes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contacttype'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Contacttype'), array('action' => 'edit', $contacttype['Contacttype']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Contacttype'), array('action' => 'delete', $contacttype['Contacttype']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contacttype['Contacttype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contacttypes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contacttype'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($contacttype['Contacttype']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact Type'); ?></th>
		<td>
			<?php echo h($contacttype['Contacttype']['contact_type']); ?>
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
	<h3><?php echo __('Related Contacts'); ?></h3>
	<?php if (!empty($contacttype['Contact'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact No'); ?></th>
		<th><?php echo __('Salutation'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Department'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Contacttype Id'); ?></th>
		<th><?php echo __('Otheremail'); ?></th>
		<th><?php echo __('Secondaryemail'); ?></th>
		<th><?php echo __('Donotcall'); ?></th>
		<th><?php echo __('Emailoptout'); ?></th>
		<th><?php echo __('Imagename'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($contacttype['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id']; ?></td>
			<td><?php echo $contact['contact_no']; ?></td>
			<td><?php echo $contact['salutation']; ?></td>
			<td><?php echo $contact['first_name']; ?></td>
			<td><?php echo $contact['last_name']; ?></td>
			<td><?php echo $contact['email']; ?></td>
			<td><?php echo $contact['phone']; ?></td>
			<td><?php echo $contact['mobile']; ?></td>
			<td><?php echo $contact['title']; ?></td>
			<td><?php echo $contact['department']; ?></td>
			<td><?php echo $contact['fax']; ?></td>
			<td><?php echo $contact['contacttype_id']; ?></td>
			<td><?php echo $contact['otheremail']; ?></td>
			<td><?php echo $contact['secondaryemail']; ?></td>
			<td><?php echo $contact['donotcall']; ?></td>
			<td><?php echo $contact['emailoptout']; ?></td>
			<td><?php echo $contact['imagename']; ?></td>
			<td><?php echo $contact['reference']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'contacts', 'action' => 'view', $contact['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'contacts', 'action' => 'edit', $contact['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
