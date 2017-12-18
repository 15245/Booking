<?php

class BookingConfiguration
{
    private $destination;
    private $nbPassengers;
    private $insurance;

    private $destinations = [
        "athens",
        "barcelona",
        "ibiza",
        "lisbon",
        "london",
        "new York",
        "roma",
        "toronto",
        "venice",
    ];

    public function __construct()
    {
    }

    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination must be a valid destinations from $this->destinations list
     * @return $this
     * @throws Exception
     */
    public function setDestination($destination)
    {
        if (false == is_string($destination) && in_array($destination, $this->destinations))
            throw new Exception('');

        $this->destination = $destination;
        return $this;
    }

    public function getPassengers()
    {
        return $this->nbPassengers;
    }

    /**
     * @param numeric $passengers must be between 0 and 10
     * @return $this
     * @throws Exception
     */
    public function setPassengers($passengers)
    {
        if (false == is_numeric($passengers) && $passengers > 0 && $passengers < 10)
            throw new Exception('Number of passenger must be between 0 and 10');

        $this->nbPassengers = $passengers;

        return $this;
    }

    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param boolean $insurance must be true if insurance is wanted else false
     * @return $this
     * @throws Exception
     */
    public function setInsurance($insurance)
    {
        if (false == is_bool($insurance))
            throw new Exception('Wrong insurance value');

        $this->insurance = $insurance;
        return $this;
    }

    public function getDestinations()
    {
        return $this->destinations;
    }
}
