<?php

$id = 9;
$email = 'nepridumal@testing.com';
$name = 'Nepridumal';

\App\Models\User::update($id, $email, $name);