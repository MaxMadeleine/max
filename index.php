<?php

$trace = trace();

echo "Hostname: " . $trace['hostname'] . "\n";
echo "Client IP: " . $trace['clientIp'] . "\n";
echo "HTTP Protocol: " . $trace['httpProtocol'] . "\n";
echo "ASN: " . $trace['asn'] . "\n";
echo "ASN's organization: " . $trace['asOrganization'] . "\n";
echo "Colocation: " . $trace['colo'] . "\n";
echo "Country: " . $trace['country'] . "\n";
echo "Region: " . $trace['region'] . "\n";
echo "Postal Code: " . $trace['postalCode'] . "\n";
echo "Latitude: " . $trace['latitude'] . "\n";
echo "Longitude: " . $trace['longitude'] . "\n";