<div class="events form">
<?php echo $this->Form->create('Event', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('event_visible');
		echo $this->Form->input('event_position');
		echo $this->Form->input('event_pic_name');
		echo $this->Form->input('event_path', array('type' => 'file'));
		echo $this->Form->input('event_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
