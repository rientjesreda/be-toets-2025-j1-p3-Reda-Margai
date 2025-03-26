<?php

class UfcModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllUfc()
    {
        $sql = 'SELECT  UFC.Naam
                       ,UFC.RanglijstNummer
                       ,UFC.Lengte
                       ,UFC.Gewicht
                       ,UFC.Leeftijd
                       ,UFC.WinstDoorKnockout

                FROM Ufc as UFC
                
                ORDER BY UFC.RanglijstNummer DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}