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

    private $zip_code;

    private $city;

    private $phone_number;

    private $email_address;

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
        return $this->zip_code;
    }

    /**
     * @param $zip_code
     * @return contactDetails
     */
    public function setZipCode($zip_code) : contactDetails
    {
        $this->zip_code = $zip_code;
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
        return $this->phone_number;
    }

    /**
     * @param $phone_number
     * @return contactDetails
     */
    public function setPhoneNumber($phone_number) : contactDetails
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->email_address;
    }

    /**
     * @param $email_address
     * @return contactDetails
     */
    public function setEmailAddress($email_address) : contactDetails
    {
        $this->email_address = $email_address;
    }
}
