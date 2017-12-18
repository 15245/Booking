<?php

require_once ROOT_PATH . '/models/class.traveller.php';

class Booking
{

    private $travellers = [];

    private $id = null;

    public function __construct()
    {
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function isSetTravellerNum($travellerNumber)
    {
        return isset($this->travellers[$travellerNumber]);
    }

    public function updateTraveller(Traveller $traveller, $travellerNumber) 
    {
        if (isset($this->travellers[$travellerNumber])) {
            $this->travellers[$travellerNumber] = $traveller;
            return $this;
        }

        return false;
    }

    /**
     * return the traveller by order (1st one is the traveller number 0)
     * @param $travellerNumber
     * @return mixed
     */
    public function getTravellerByNumber($travellerNumber)
    {
        if ($travellerNumber < count($this->travellers) && isset($this->travellers[$travellerNumber]))
            return $this->travellers[$travellerNumber];
        else
            return false;
    }

    /**
     * @param Traveller $traveller to add to the travellers list
     * @return $this
     */
    public function addTraveller(Traveller $traveller)
    {
        $this->travellers[] = $traveller;
        return $this;
    }

    /**
     * Get the travellers list
     * @return array
     */
    public function getTravellers()
    {
        return $this->travellers;
    }

    /**
     * @return int number of travellers
     */
    public function getTravellersNumber()
    {
        return count($this->travellers);
    }

    /**
     * @return bool true if there is at least one adult else return false
     */
    public function isOneAdult()
    {
        foreach ($this->travellers as $traveller) {
            if ($traveller->getAge() > 18) {    // one travellers above 18 years, return true
                return true;
            }
        }

        return false;  // if arrived here, no travellers above 18 years were found, so we return false !
    }

    /**
     * @return bool|string true if the travel is valid or a string with error message if not
     */
    public function travelValidity()
    {
        if (false === $this->isOneAdult()) {  // no any aduly in the travellers list
            return 'NO_ADULT_PRESENT';        // we return the error message
        }

        return true;                          // no problem, we return true
    }

    /**
     * @return int the total price for the travel
     */
    public function getPrice($insurance = false)
    {
        $finalPrice = 0;

        foreach ($this->travellers as $traveller) {   // for each travelers
            if ($traveller->getAge() < 12) {          // if less than 12 years old
                $finalPrice += 10;                    // price is 10 €
            } else {                                  // else
                $finalPrice += 15;                    // it's 15 €
            }
        }

        if ($insurance == true) {                     // Si l'assurance a été prise
            $finalPrice += 20 * $this->getTravellersNumber(); // ajout du prix de l'assurance pour chaque voyageur
        }

        return $finalPrice;
    }

}