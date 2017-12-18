<?php

require_once 'db.class.php';
require_once 'db.traveller.php';

class dbBooking
{
    private $id = null;

    private $nbTravellers;

    private $insurance;

    private $price;

    private $destination;

    private $paid = false;

    private $travellers = [];

    private $db;

    public function __construct()
    {
        $this->db = db::getInstance();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        if (false === is_numeric($id) || $id <= 0) {
            throw new Exception('id must be positive integer');
        }

        $this->id = $id;

        return $this;
    }

    public function setDestination($destination)
    {
        if (false === is_string($destination))
            throw new Exception('destination must be a string');

        $this->destination = $destination;

        return $this;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getNbTravellers()
    {
        return $this->nbTravellers;
    }

    public function setNbTravellers($nbTravellers)
    {
        if (false === is_numeric($nbTravellers))
            throw new Exception('nbTravellers must be integer');

        $this->nbTravellers = $nbTravellers;

        return $this;
    }

    public function isInsurance()
    {
        return $this->insurance ? true : false;
    }

    public function setInsurance($insurance)
    {
        if (false === is_bool($insurance))
            throw new Exception('paid must be boolean');

        $this->insurance = $insurance;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (false === is_numeric($price))
            throw new Exception('paid must be numeric');

        $this->price = $price;
        return $this;
    }

    public function isPaid()
    {
        return $this->paid;
    }

    public function setPaid($paid)
    {
        if (false === is_bool($paid))
            throw new Exception('paid must be boolean type');

        $this->paid = $paid;
        return $this;
    }

    public function addTraveller(dbTraveller $traveller)
    {
        $this->travellers[] = $traveller;
        return $this;
    }

    public function getTravellers()
    {
        return $this->travellers;
    }

    public function delete($id = null)
    {
        if (false === is_null($id))
            $this->setId($id);

        if (is_null($this->id))
            throw new Exception("id must be specified");

        $this->db->query("DELETE FROM booking WHERE id = " . $this->id);
        $this->db->query("DELETE FROM traveller WHERE booking_id = " . $this->id);

        $this->travellers = [];
        $this->price = [];
        $this->destination = [];
        $this->insurance = null;

        return $this;
    }

    /**
     * Load a booking data from the database
     * @param null $id id of the booking to load
     * @throws Exception if id is not specified
     * @return $this
     */
    public function load($id = null)
    {
        if (false === is_null($id))
            $this->setId($id);

        if (is_null($this->id))
            throw new Exception("id must be specified");

        $result = $this->db->query("SELECT * FROM booking WHERE id = " . $this->id);
        $row = $result->fetch_assoc();
        $this
            ->setDestination($row['destination'])
            ->setInsurance(isset($row['insurance']) ? true : false)
            ->setNbTravellers($row['nb_travellers'])
            ->setPaid(isset($row['paid']) ? true : false)
            ->setPrice($row['price']);

        $result->free();

        $result = $this->db->query("SELECT * FROM traveller WHERE booking_id = " . $this->id);

        $this->travellers = [];

        while ($row = $result->fetch_assoc()) {
            $traveller = new dbTraveller();
            $traveller
                ->setId($row['id'])
                ->setAge($row['age'])
                ->setFirstname($row['firstname'])
                ->setLastname($row['lastname']);

            $this->travellers[] = $traveller;
        }

        $result->free();

        return $this;
    }

    /**
     * insert a new row booking in the database
     */
    private function insert()
    {
        $query = "INSERT INTO booking (destination, nb_travellers, insurance, paid, price) "
               . "VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);

        if (false === $stmt)
            throw new Exception("Prepare query failed");

        $stmt->bind_param('siiid', // destination : string, nbTraveller, insurance, paid : int, price : decimal
            $this->destination,
            $this->nbTravellers,
            $this->insurance,
            $this->paid,
            $this->price
        );

        $stmt->execute();

        if ($error = $this->db->getLastError() != "")
            throw new Exception($error);

        $this->id = $stmt->insert_id;

        foreach ($this->travellers as $traveller) {
            $traveller
                ->setBookingId($this->id)
                ->save();
        }

        return $this;
    }

    /**
     * update a row booking in the database by his row id
     */
    private function update()
    {
        $query = "UPDATE booking SET "
               . "destination = ?, nb_travellers = ?, insurance = ?, paid = ?, price = ? "
               . "WHERE id = ?";

        $stmt = $this->db->prepare($query);

        if (false === $stmt)
            throw new Exception("Prepare query failed : " . $this->db->getLastError());

        $stmt->bind_param('siiidi',
            $this->destination,
            $this->nbTravellers,
            $this->insurance,
            $this->paid,
            $this->price,
            $this->id
        );

        $stmt->execute();

        // update existing travellers data
        $ids = [];
        $result = $this->db->query("SELECT id FROM traveller WHERE booking_id = " . $this->id);
        while ($row = $result->fetch_assoc())
            $ids[] = $row['id'];

        foreach ($this->travellers as $key => $traveller) {
            $traveller->setBookingId($this->id);
            if (count($ids))
                $traveller->setId($ids[$key]);
            $traveller->save();
        }

        return $this;
    }

    /**
     * insert or update a booking in the database
     * @throws Exception if data is needed
     */
    public function save()
    {
        if (false === is_int($this->nbTravellers))
            throw new Exception("nbTravellers must be set");

        if (false === is_bool($this->insurance))
            throw new Exception("insurance must be set");

        if (false === is_bool($this->paid))
            throw new Exception("paid must be set");

        if (false === is_numeric($this->price))
            throw new Exception("price must be set");

        if ($this->id == 0)   
            $this->insert();
        else
            $this->update();

        return $this;
    }
}