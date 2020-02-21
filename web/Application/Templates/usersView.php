<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Adress</th>
        <th>Born At</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <?php for($i=1; $i < count($user) / 2; $i++): ?>
            <td><?= $user[$i] ?></td>
            <?php endfor ?>
        </tr>
    <?php endforeach ?>
</table>