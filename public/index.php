<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

// phpinfo();

use Dotenv\Dotenv;
use GuzzleHttp\Exception\ClientException;

DotEnv::createImmutable(__DIR__.'/../')->load();

$client = new \InShore\Bookwhen\Client($_ENV['INSHORE_BOOKWHEN_API_KEY'], $_ENV['INSHORE_BOOKWHEN_LOGGING']);

$tags = [];

$date = new DateTime();
//$from = $date->modify('next monday')->format('Ymd') . '000000';
$from = $date->format('Ymd').'000000';
$date = new DateTime();
$to = $date->modify('next sunday')->modify('+7 day')->format('Ymd').'235959';

// Get the events.
try {
    $allEvents = $client->getEvents(false, false, [], [], [], [], $from, $to, true);
    $events = array_filter($allEvents, function ($event) {
        if (! $event->soldOut) {
            $start = new DateTime($event->attributes->start_at);
            $end = new DateTime($event->attributes->end_at);
            $event->dateTime = $start->format('l, d F ')."'".$start->format('y h:i ').' - '.$end->format('h:i A');

            return $event;
        }

    });
} catch (ClientException $e) {
    echo '<pre>'.var_export($e).'</pre>';
} catch (Exception $e) {
    echo $e->errorMessage();
}
if (empty($events)) {
    exit('Good joob all events are sold out, no email to send!');
}

var_export($events);
