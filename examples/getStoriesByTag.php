<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$tag = 'tag';

$stories = $instagram->getStoriesByTag($tag);
print_r($stories);
$instagram->markStoriesSeen($stories, $tag);