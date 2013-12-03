<div class="competitors index">
	<h2><?php echo __('Competitors'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('base_near'); ?></th>
			<th><?php echo $this->Paginator->sort('business_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($competitors as $competitor): ?>
	<tr>
		<td><?php echo h($competitor['Competitor']['id']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['name']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['rating']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['base_near']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($competitor['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $competitor['BusinessType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($competitor['Country']['name'], array('controller' => 'countries', 'action' => 'view', $competitor['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($competitor['State']['id'], array('controller' => 'states', 'action' => 'view', $competitor['State']['id'])); ?>
		</td>
		<td><?php echo h($competitor['Competitor']['city']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['zip']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['address']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['summary']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['created']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitor['Competitor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitor['Competitor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitor['Competitor']['id']), null, __('Are you sure you want to delete # %s?', $competitor['Competitor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competitor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
		
	</ul>
</div>