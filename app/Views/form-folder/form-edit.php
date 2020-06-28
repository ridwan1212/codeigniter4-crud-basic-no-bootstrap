<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= form_open('form/update'); ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="<?= $forEdit['id']; ?>">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $forEdit['name']; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $forEdit['email']; ?>">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="<?= $forEdit['address']; ?>">
        </div>

        <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('home'); ?>'">Back</button>
        <button type="submit" class="btn btn-primary">Save Change</button>
    </form>
</body>

</html>