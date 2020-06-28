<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        td,
        th {
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1><?= $pageTitle; ?></h1>
    <a href="<?= base_url('form/index'); ?>">Create</a>

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($table as $t) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $t['name']; ?></td>
                    <td><?= $t['email']; ?></td>
                    <td><?= $t['address']; ?></td>
                    <td>
                        <a href="<?= base_url('form/edit' . '/' . $t['id']); ?>">Edit</a>
                        <a href="<?= base_url('form/delete' . '/' . $t['id']); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>