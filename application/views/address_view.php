<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>

<img src="<?= base_url('public/images/brain.jpg') ?> " width="100">

<table>
    <?php foreach ($address as $item):?>
        <tr>
            <td><?= $item['Name'] ?></td>
            <td><?= $item['Surname'] ?></td>
            <td><?= $item['Email'] ?></td>
            <td><?= $item['Phone'] ?></td>
            <td><?= $item['Country'] ?></td>
			<td><a href="<?=base_url('my_controller/update');?>/<?=$item['Id'];?>">Update</a></td>
			<td><a href="<?=base_url('my_controller/delete');?>/<?=$item['Id'];?>">Delete</a></td>
		</tr>
    <?php endforeach;?>
</table>

</body>
</html>
