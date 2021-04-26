<?php
$email = 'user@example.com';

echo substr($email, strpos($email, "@") + 1);