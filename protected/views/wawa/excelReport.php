<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      wawe		</th>
 		<th width="80px">
		      wawi		</th>
 		<th width="80px">
		      haha		</th>
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
			<?php echo $row->wawe; ?>
		</td>
       		<td>
			<?php echo $row->wawi; ?>
		</td>
       		<td>
			<?php echo $row->haha; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
