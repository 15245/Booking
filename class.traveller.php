<?php

class Traveller
{
    private $age;

    private $firstname;

    private $lastname;

    public function __construct()
    {
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname string must be between 1 and 50 characters long (minimum 1 because chinese
     * @return $this
     * @throws Exception
     */
    public function setFirstname($firstname)
    {
        if (!preg_match("/[a-zA-Z]{1,50}$/", $firstname))
            return false;

        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname string must be between 1 and 50 characters long
     * @return $this
     * @throws Exception
     */
    public function setLastname($lastname)
    {
        if (!preg_match("/[a-zA-Z]{1,50}$/", $lastname))
            return false;

        $this->lastname = $lastname;

        return $this;
    }

    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * @param $age  Must be between 0 and 140 years
     * @return $this
     * @throws Exception
     */
    public function setAge($age)
    {
        if (false == is_numeric($age) && $age > 0 && $age < 140)
            return false;

        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

}
