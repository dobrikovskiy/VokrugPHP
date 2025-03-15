#!/usr/bin/env php
<?php

$app = require __DIR__.'/app/bootstrap.php';
echo "Runner started\n";
exit($app->run());
