<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= form_open('form/create'); ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="<?= set_value('address'); ?>">
        </div>

        <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('home'); ?>'">Back</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</body>

</html>