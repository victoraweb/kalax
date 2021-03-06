<div class="qualifications index">
	<h2><?php echo __('Qualifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_position'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_visible'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_name'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_role'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($qualifications as $qualification): ?>
	<tr>
		<td><?php echo h($qualification['Qualification']['id']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_position']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_visible']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_path']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_name']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_role']); ?>&nbsp;</td>
		<td><?php echo h($qualification['Qualification']['qualification_description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qualification['Qualification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qualification['Qualification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qualification['Qualification']['id']), null, __('Are you sure you want to delete # %s?', $qualification['Qualification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Qualification'), array('action' => 'add')); ?></li>
	</ul>
</div>
