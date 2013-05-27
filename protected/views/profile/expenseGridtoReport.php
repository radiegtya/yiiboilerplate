<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      image		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      cursed		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->image; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->cursed; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
