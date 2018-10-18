<?php

namespace Model;

/**
 * Class contactDetails
 *
 */
class ContactDetails
{
    /** @var int */
    private $id;

    /** @var string */
    private $address;

    /** @var string */
    private $zipCode;

    /** @var string */
    private $city;

    /** @var string */
    private $phoneNumber;

    /** @var string */
    private $emailAddress;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return ContactDetails
     */
    public function setId(int $id) : contactDetails
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }


    /**
     * @param string $address
     * @return ContactDetails
     */
    public function setAddress(string $address) : contactDetails
    {
        $this->address = $address;
    }


    /**
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }


    /**
     * @param string $zipCode
     * @return ContactDetails
     */
    public function setZipCode(string $zipCode) : contactDetails
    {
        $this->zipCode = $zipCode;
    }


    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }


    /**
     * @param string $city
     * @return ContactDetails
     */
    public function setCity(string $city) : contactDetails
    {
        $this->city = $city;
    }


    /**
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }


    /**
     * @param string $phoneNumber
     * @return ContactDetails
     */
    public function setPhoneNumber(string $phoneNumber) : contactDetails
    {
        $this->phoneNumber = $phoneNumber;
    }


    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return ContactDetails
     */
    public function setEmailAddress(string $emailAddress) : contactDetails
    {
        $this->emailAddress = $emailAddress;
    }
}
