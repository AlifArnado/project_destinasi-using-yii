<style type="text/css" media="screen">
    table.dataGrid {
        border-collapse: collapse;
        border: 1px solid balck;
        width: 100%;
        #font-size: 8px;
    }
    table.dataGrid td {
        border: 1px solid black;
        padding: 5px 5px 5px 5px;
    }
</style>
<h2 align="center">DAFTAR PEGAWAI</h2>
<table class="dataGrid">
    <tr>
        <th>NO</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>TANGGAL LAHIR</th>
        <th>AGAMA</th>
    </tr>
    <?php $no = 1; foreach ($row as $pegawai): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $pegawai['nip']; ?></td>
            <td><?php echo $pegawai['nama']; ?></td>
            <td><?php echo $pegawai['alamat']; ?></td>
            <td><?php echo $pegawai['tanggal_lahir']; ?></td>
            <td><?php echo $pegawai['agama']; ?></td>
        </tr>
    <?php endforeach ?>
</table>
