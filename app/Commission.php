<?php
/**
 * Created by PhpStorm.
 * User: laurentbeauvisage
 * Date: 07/05/2018
 * Time: 14:07
 */

namespace App;


class Commission
{

    private $donation;
    private $commissionPercentage;


    public function __construct($commission)
    {
        $this->commissionPercentage = $commission;
    }

    /**
     * @param mixed $amount
     */
    public function setDonation($amount): void
    {
        $this->donation = $amount;
    }

    /**
     * @return mixed
     */
    public function getDonation()
    {
        return $this->donation;
    }




    /**
     * Retourne la valeur de la commission prélevée par le site.
     *
     */
    public function getCommissionAmount()
    {

    }

    /**
     * Retourne le montant perçu par le projet
     */
    public function getAmountCollected()
    {

    }
}