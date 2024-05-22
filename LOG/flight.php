
<?php

interface Logger {
    public function log($message);
}
class FileLogger implements Logger {
    private $handle;
    private $logFile;

    public function __construct($filename, $mode = 'w+') {
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode) or die('Could not open log file.');
    }

    public function log($message) {
        $message =("(Flight)") . " - " . $message;
        $message = date("D M j G:i:s T Y") . " - " . $message;
        fwrite($this->handle, $message);
    }
    
    public function __destruct() {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        echo sprintf("%s to the Database\n", $message);
    }
}


class Flight {
    private string $flightNumber;
    private string $departure;
    private string $destination;
    private string $date;
    private string $name;
    private int    $id;
    private int    $unoccupiedSeats;

    public function __construct($flightNumber, $departure, $destination, $date, $name, $id, $unoccupiedSeats,) {
        $this->flightNumber = $flightNumber;
        $this->departure = $departure;
        $this->destination = $destination;
        $this->date = $date;
        $this->name = $name;
        $this->id = $id;
        $this->unoccupiedSeats = $unoccupiedSeats;
    }

    public function getUnoccupiedSeats() {
        return $this->unoccupiedSeats;
    }

    public function checkAvailability($date, $passengers) {
        return $this->unoccupiedSeats >= $passengers;
    }

    public function bookFlight($passengers) {
        if ($this->checkAvailability("", $passengers)) {
            $this->unoccupiedSeats -= $passengers;
            return true;
        } else {
            return false;
        }
    }

    public function reserveSeats($passengers) {
        $this->unoccupiedSeats -= $passengers;
    }

    public function cancelReservation($passengers) {
        $this->unoccupiedSeats += $passengers;
    }

    

    public function displayFlightDetailsOnTXT(Logger $logger) {
        $logger->log("Flight Number: " . $this->flightNumber . "\n");
        $logger->log("Passenger Name: " . $this->name . "\n");
        $logger->log("Passenger ID: " . $this->id . "\n");
        $logger->log("Departure: " . $this->departure . "\n");
        $logger->log("Destination: " . $this->destination . "\n");
        $logger->log("Date: " . $this->date  . "\n");
    }

    public function displayTotalofSeats() {
        echo "Total of Unoccupied Seats: " . $this->unoccupiedSeats . "\n";
    }
}

$logger = new FileLogger('./login.txt', 'r+');
$logger->log("Hello Arbel" . PHP_EOL);
$logger->log("Welcome!" . PHP_EOL);
// Usage
$flight = new Flight("FL221", "Manila", "Japan", "2024-04-22", "Arbel Perez, Katrina Tamondong", "2210179", 50);


$date = "2024-04-15";
$passengers = 2;

if ($flight->checkAvailability($date, $passengers)) {
    $logger->log("Seats are available for $passengers passenger/s on $date.\n");
} else {
    $logger->log("Sorry, seats are not available for $passengers passenger/s on $date.\n");
}

if ($flight->bookFlight($passengers)) {
    $logger->log("Flight booked successfully for $passengers passenger/s.\n");
} else {
    $logger->log("Sorry, unable to book the flight for $passengers passenger/s. Not enough available seats.\n");
}


$flight->displayFlightDetailsOnTXT($logger);


$logger = [
    new FileLogger('./login.txt'),
    new DatabaseLogger()
];

foreach($logger as $loggers) {
    $loggers->log("Arbel Pogi has logged in");
}
