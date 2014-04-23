<!-- File: /app/View/Posts/index.ctp -->

<div class ="posts index">
		
	<div class="row">
		<div class="col-lg-2"></div>
        <div class="col-lg-8 ">
			<table class="table">
				<thead><h1>Blog Posts</h1>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Created</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($posts as $post): ?>
					<tr class ="active">
						<td><?php echo ('<h5>'.$post['Post']['id'].'</h5>');?></td>
						<td><?php echo $this->Html->link( $post['Post']['title'], array('action' => 'view', 
							$post['Post']['id'])); ?>
						</td>
						<td><?php echo $post['Post']['created']; ?></td>
						<td>
							<?php echo $this->Form->postLink('Delete', array('action' => 'delete', 
							$post['Post']['id']), array('confirm' => 'Are you sure?'));?>&nbsp;&nbsp;
							<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
						</td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>	
		<div class="col-lg-2"></div>
	</div>
</div>


