<?php
require 'aws/aws-autoloader.php';

$ec2 = new Aws\Ec2\Ec2Client([
     'region' => 'us-east-1a',
     'version' => 'latest',
]);

var_dump($ec2);
