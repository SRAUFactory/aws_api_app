<?php
require 'aws/aws-autoloader.php';

use Aws\Credentials\CredentialProvider;
use Aws\Ec2\Ec2Client;

$Client = new Ec2Client([
     'region' => 'us-east-1',
     'version' => 'latest',
     'credentials' => CredentialProvider::env(),
]);

$res = $Client->describeInstances([]);
header("Access-Control-Allow-Origin: *");
echo json_encode($res['Reservations']);
