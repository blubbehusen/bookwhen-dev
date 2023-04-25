<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;
use InShore\Bookwhen\Bookwhen;

DotEnv::createImmutable(__DIR__.'/../')->load();

$bookwhen = new Bookwhen();

var_export($bookwhen->event('ev-siyg-20230501080000', includeLocation: true, includeTickets: true));
//var_export($bookwhen->events(to: '20230501', includeLocation: true, includeTickets: true));

//var_export($bookwhen->attachments());

//var_export($bookwhen->events(to: '20230501'));
//var_export($bookwhen->events(to: '20230501'));


//var_export($bookwhen->event('ev-siyg-20230501080000', includeLocation: true, includeTickets: true));
//if ($bookwhen->event->soldOut) {
//    var_export($bookwhen->event);
//} else {
 //   var_export($bookwhen->event->tickets);
//}

//var_export($bookwhen->ticket('ti-s4dt-20230421130000-typw'));

//var_export($bookwhen->tickets('ev-s4dt-20230421130000'));

//var_export($bookwhen->classPasses());
//var_export($bookwhen->classPass('ev-svg4-20230424130000'));

//var_export($bookwhen->events());
//    $bookwhen->event->location->id;.
//    $bookwhen->event->location->address
//    $bookwhen->event->location->info
//    $bookwhen->event->location->l
//    $bookwhen->event('ev-s4dt-20230421130000')->attendeeCount;
//    $bookwhen->event('ev-s4dt-20230421130000')->soldOut;

// $bookwhen->event->description;
// $bookwhen->eventTickets()

// $tags = [];

// $date = new DateTime();
// //$from = $date->modify('next monday')->format('Ymd') . '000000';
// $from = $date->format('Ymd') . '000000';
// $date = new DateTime();
// $to = $date->modify('next sunday')->modify('+7 day')->format('Ymd') . '235959';

// // Get the events.
// try {
//     $allEvents = $client->getEvents(false, false, [], [], [], [], $from, $to, true);
//     $events = array_filter($allEvents, function ($event) {
//         if (!$event->soldOut) {
//             $start = new DateTime($event->attributes->start_at);
//             $end = new DateTime($event->attributes->end_at);
//             $event->dateTime = $start->format('l, d F ') . "'" . $start->format('y h:i ') . ' - ' . $end->format('h:i A');
//             return $event;
//         }

//     });
// } catch (ClientException $e) {
//     echo '<pre>' . var_export($e) . '</pre>';
// } catch (Exception $e) {
//     echo $e->errorMessage();
// }
// if (empty($events)) {
//     die('Good joob all events are sold out, no email to send!');
// }

// var_export($events);
