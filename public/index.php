<?php

declare (strict_types = 1);

require_once '../vendor/autoload.php';

// phpinfo();

use \Dotenv\Dotenv;
use \InShore\Bookwhen\Client as Client;

DotEnv::createImmutable(__DIR__);$dotenv->load();

$client = new \InShore\Bookwhen\Client($_ENV['INSHORE_BOOKWHEN_API_KEY'], $_ENV['INSHORE_BOOKWHEN_LOGGING']);




/*

dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new \InShore\Bookwhen\Client($_ENV['INSHORE_BOOKWHEN_API_KEY'], $_ENV['INSHORE_BOOKWHEN_LOGGING']);

$tags = [];

$date = new DateTime();
//$from = $date->modify('next monday')->format('Ymd') . '000000';
$from = $date->format('Ymd') . '000000';
$date = new DateTime();
$to = $date->modify('next sunday')->modify('+7 day')->format('Ymd') . '235959';

// Get the events.
try {
    $allEvents = $client->getEvents(false, false, [], [], [], [], $from, $to, true);
    $events = array_filter($allEvents, function ($event) {
        if (!$event->soldOut) {
            $start = new DateTime($event->attributes->start_at);
            $end = new DateTime($event->attributes->end_at);
            $event->dateTime = $start->format('l, d F ') . "'" . $start->format('y h:i ') . ' - ' . $end->format('h:i A');
            return $event;
        }
        
    });
} catch (Exception $e) {
    echo $e->errorMessage();
}
if (empty($events)) {
    die('Good joob all events are sold out, no email to send!');
}

$eventGroups = [];
foreach ($events as $event) {
    $event->location = $client->getLocation($event->relationships->location->data->id);
    if (!array_key_exists(md5($event->attributes->title), $eventGroups)) {
        $eventGroup = new stdClass();
        $eventGroup->logo = null;
        $eventGroup->title = $event->attributes->title;
        $eventGroup->details = $event->attributes->details;
        $eventGroup->events = [$event];
        $eventGroups[md5($event->attributes->title)] = $eventGroup;
    } else {
        $eventGroup->events[] = $event;
    }
}
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates/twig/email/');
$twig = new \Twig\Environment($loader, [
    //'cache' => '/tmp',
]);

$twig->addExtension(new CssInlinerExtension());

$bookWhenUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/booknow.php';

$energiseReformerImage = new stdClass();
$energiseReformerImage->base64 = base64_encode(file_get_contents(__DIR__ . '/397ecf5829c83c76cf876fe5634c0e4c.jpg'));
$energiseReformerImage->mimeType = 'image/jpg';

$logoImage = new stdClass();
$logoImage->base64 = base64_encode(file_get_contents(__DIR__ . '/templates/twig/email/unity-logo.svg'));
$logoImage->mimeType = 'image/svg+xml';

$matworkPilatesImage = new stdClass();
$matworkPilatesImage->base64 = base64_encode(file_get_contents(__DIR__ . '/aa5dc290dddadd03ffd128e255b27e7e.jpg'));
$matworkPilatesImage->mimeType = 'image/jpg';

$reChargeReformerImage = new stdClass();
$reChargeReformerImage->base64 = base64_encode(file_get_contents(__DIR__ . '/2f115bddcfd4a141b1006636c60f6f48.jpg'));
$reChargeReformerImage->mimeType = 'image/jpg';

$reformerSkillsImage = new stdClass();
$reformerSkillsImage->base64 = base64_encode(file_get_contents(__DIR__ . '/8390919969619ce37335cafe43ec2909.jpg'));
$reformerSkillsImage->mimeType = 'image/jpg';





// $reformerImage = new stdClass();
// $reformerImage->base64 = base64_encode(file_get_contents(__DIR__ . '/2f115bddcfd4a141b1006636c60f6f48.jpg'));
// $reformerImage->mimeType = 'image/jpg';
/*/