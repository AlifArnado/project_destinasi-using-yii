<table>
    <tr>
        <th width="300">NO</th>
        <th width="300">KOTA</th>
        <th width="300">PROVINSI</th>
    </tr>
    <?php foreach ($model as $model1): ?>
    <tr>
        <td><?php echo $model1['id'] ?></td>
        <td><?php echo $model1['nama_kota'] ?></td>
        <td><?php echo $model1['propinsi'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
