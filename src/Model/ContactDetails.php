<?php

namespace Model;

/**
 * Class contactDetails
 *
 */
class ContactDetails
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return contactDetails
     */
    public function setId($id) : contactDetails
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @param $address
     * @return contactDetails
     */
    public function setAddress($address) : contactDetails
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }

    /**
     * @param $zipCode
     * @return contactDetails
     */
    public function setZipCode($zipCode) : contactDetails
    {
        $this->zip_code = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return contactDetails
     */
    public function setCity($city) : contactDetails
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }

    /**
     * @param $phoneNumber
     * @return contactDetails
     */
    public function setPhoneNumber($phoneNumber) : contactDetails
    {
        $this->phone_number = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }

    /**
     * @param $emailAddress
     * @return contactDetails
     */
    public function setEmailAddress($emailAddress) : contactDetails
    {
        $this->email_address = $emailAddress;
        return $this;
    }
}
