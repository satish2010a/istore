<div class="departments index">
	<h2><?php echo __('Departments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sysid'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('minAmt'); ?></th>
			<th><?php echo $this->Paginator->sort('maxAmt'); ?></th>
			<th><?php echo $this->Paginator->sort('isAllowFS'); ?></th>
			<th><?php echo $this->Paginator->sort('isNegative'); ?></th>
			<th><?php echo $this->Paginator->sort('isFuel'); ?></th>
			<th><?php echo $this->Paginator->sort('isAllowFQ'); ?></th>
			<th><?php echo $this->Paginator->sort('isAllowSD'); ?></th>
			<th><?php echo $this->Paginator->sort('isBL1'); ?></th>
			<th><?php echo $this->Paginator->sort('isBL2'); ?></th>
			<th><?php echo $this->Paginator->sort('isMoneyOrder'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($departments as $department): ?>
	<tr>
		<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['sysid']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['station_id']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['name']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['minAmt']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['maxAmt']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isAllowFS']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isNegative']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isFuel']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isAllowFQ']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isAllowSD']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isBL1']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isBL2']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['isMoneyOrder']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['created']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $department['Department']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
