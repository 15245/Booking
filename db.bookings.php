<?php

require_once ROOT_PATH . '/database/db.class.php';
require_once ROOT_PATH . '/database/db.booking.php';

class dbBookings
{
    private $bookings = [];

    private $db;

    public function __construct()
    {
        $this->db = db::getInstance();
    }

    // load bookings by ids. no parameter = load all the bookings
    public function load(array $ids = null)
    {
        // No ids given : fetch all ids in the database
        if (is_null($ids)) {
            $result = $this->db->query("SELECT id FROM booking");
            $ids = [];
            while ($row = $result->fetch_assoc())
                $ids[] = $row['id'];
            $result->free();
        }

        // Load booking datas
        foreach ($ids as $id) {
            $booking = new dbBooking();
            $booking->load($id);
            $this->bookings[] = $booking;
        }

        return $this;
    }

    public function getBookings()
    {
        return $this->bookings;
    }
}
