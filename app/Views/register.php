<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<?php
$username = [
    'class' => 'form-control',
    'name'  => 'username',
    'id'    => 'username',
    'value' => null
];
$password = [
    'class' => 'form-control',
    'name'  => 'password',
    'id'    => 'password',
    'value' => null
];
$repassword = [
    'class' => 'form-control',
    'name'  => 'repassword',
    'id'    => 'repassword',
    'value' => null
];
$btn_submit = [
    'class' => 'btn btn-primary'
];
?>

<h1 class="py-4">Register Form</h1>

<?= form_open('auth/register') ?>
<div class="form-group">
    <?= form_label('Username', 'username'); ?>
    <?= form_input($username); ?>
</div>
<div class="form-group">
    <?= form_label('Password', 'password'); ?>
    <?= form_password($password); ?>
</div>
<div class="form-group">
    <?= form_label('Repeat Password', 'repassword'); ?>
    <?= form_password($repassword); ?>
</div>
<div class="text-right">
    <?= form_submit('submit', 'Submit', $btn_submit); ?>
</div>
<?= form_close() ?>

<?= $this->endSection(); ?>