<?php

require_once 'db.class.php';

class dbTraveller
{
    private $id;

    private $firstname;

    private $lastname;

    private $age;

    private $bookingId;

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
        if (false === is_numeric($id) && $id >= 0)
            throw new Exception('id must be positive integer');

        $this->id = $id;

        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        if (false === is_string($firstname))
            throw new Exception("firstname must be of type string");

        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        if (false === is_string($lastname))
            throw new Exception("firstname must be of type string");

        $this->lastname = $lastname;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if (false === is_numeric($age))
            throw new Exception("Age must be of type numeric");

        $this->age = $age;

        return $this;
    }

    public function getBookingId()    {
        return $this->bookingId;
    }

    public function setBookingId($bookingId)
    {
        if (false === is_numeric($bookingId) && $bookingId >= 0)
            throw new Exception('bookingId must be positive integer');

        $this->bookingId = $bookingId;

        return $this;
    }

    public function load($id = null)
    {
        if (is_numeric($id) && $id > 0)
            $this->id = $id;

        if (false === is_numeric($this->id))
            throw new Exception("No traveller id specified");

        $stmt = $this->db->prepare("SELECT * FROM traveller WHERE id = ?");
        $stmt->bind_param('i', $this->id);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $this->firstname = $row['firstname'];
        $this->lastname = $row['lastname'];
        $this->age = $row['age'];
    }

    /**
     * insert a new row traveller in the database
     */
    public function update()
    {
        $query = "UPDATE traveller SET "
               . "lastname = ?, firstname = ?, age = ?, booking_id = ? "
               . "WHERE id = ?";

        $stmt = $this->db->prepare($query);

        if (false === $stmt)
            throw new Exception("Prepare query failed : " . $this->db->getLastError());

        $stmt->bind_param('ssiii',
            $this->lastname,
            $this->firstname,
            $this->age,
            $this->bookingId,
            $this->id
        );

        $stmt->execute();

        return $this;
    }

    /**
     * insert a new row traveller in database
     */
    public function insert()
    {
        $query = "INSERT INTO traveller (firstname, lastname, age, booking_id) "
            . "VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);

        $stmt->bind_param('ssii',
            $this->firstname,
            $this->lastname,
            $this->age,
            $this->bookingId
        );

        $stmt->execute();

        $this->id = $stmt->insert_id;

        return $this;
    }

    /**
     * insert or update a traveller in the database
     * @throws Exception if data is needed
     */
    public function save()
    {
        if (empty($this->lastname))
            throw new Exception("lastname must be set");

        if (empty($this->firstname))
            throw new Exception("firstname must be set");

        if (empty($this->age))
            throw new Exception("age must be set");

        if (false === is_numeric($this->bookingId))
            throw new Exception("bookingId must be set");

        if ($this->id)              // id is not null so asume that this traveller exists in database : update it
            $this->update();
        else                        // id not exist, we create the traveller in the database
            $this->insert();

        return $this;
    }
}