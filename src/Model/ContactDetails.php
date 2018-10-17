<?php

namespace Model;

/**
 * Class contactDetails
 *
 */
class ContactDetails
{
    private $id;

    private $address;

    private $zipCode;

    private $city;

    private $phoneNumber;

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
    }

    /**
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }

    /**
     * @param $zip_code
     * @return contactDetails
     */
    public function setZipCode($zipCode) : contactDetails
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
     * @param $city
     * @return contactDetails
     */
    public function setCity($city) : contactDetails
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
     * @param $phone_number
     * @return contactDetails
     */
    public function setPhoneNumber($phoneNumber) : contactDetails
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
     * @param $email_address
     * @return contactDetails
     */
    public function setEmailAddress($emailAddress) : contactDetails
    {
        $this->emailAddress = $emailAddress;
    }
}
