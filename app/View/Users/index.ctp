<!-- File: /app/View/Users/index.ctp -->
<div class ="users index">
	
	<div class="row">
		<div class="col-lg-2"></div>
        <div class="col-lg-8">
			<table class="table">
				<thead><h1>Members List</h1>	
					<tr>
						<th>Id</th>
						<th>Username</th>
						<th>Password</th>
						<th>Role</th>
						<th>Created</th>
						<th>Modified</th>
					</tr>
				</thead>
				<tbody>
					<!-- Here's where we loop through our $posts array, printing out post info -->
					<?php foreach ($users as $user): ?>
						<tr class="active">
							<td><?php echo ('<h5>'.$user['User']['id'].'</h5>');?></td>
							<td><?php echo $user['User']['username']; ?></td>
							<td><?php echo $user['User']['password']; ?></td>
							<td><?php echo $user['User']['role']; ?></td>
							<td><?php echo $user['User']['created']; ?></td>
							<td><?php echo $user['User']['modified']; ?></td>
							<td>
								<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>&nbsp;&nbsp;                            
								<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>&nbsp;&nbsp;
								<?php echo $this->Form->postLink('Delete', array('action' => 'delete', 
								$user['User']['id']), array('confirm' => 'Are you sure?'));?>
							</td>
						</tr>
					<?php endforeach ;?>
				</tbody>
			</table>
		</div>	
		<div class="col-lg-2"></div>
		
	</div>
</div>

