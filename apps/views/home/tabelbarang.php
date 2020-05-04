<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Banyak Barang</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td scope="row"><?= $item['id'] ?></td>
                <td><?= $item['nama']  ?></td>
                <td><?= $item['banyak'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>