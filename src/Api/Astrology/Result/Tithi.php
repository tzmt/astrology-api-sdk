<?php
/**
 * (c) Ennexa <api@prokerala.com>
 *
 * This source file is subject to the MIT license.
 *
 * PHP version 5
 *
 * @category API_SDK
 * @package  Astrology
 * @author   Ennexa <api@prokerala.com>
 * @license  https://api.prokerala.com/license.txt MIT License
 * @version  GIT: 1.0
 * @link     https://github.com/prokerala/astrology
 * @access   public
 **/
namespace Prokerala\Api\Astrology\Result;

/**
 * Defines Tithi
 *
 **/
class Tithi
{
    public const TITHI_PRATIPADA = 1;
    public const TITHI_DWITIYA = 2;
    public const TITHI_TRITIYA = 3;
    public const TITHI_CHATURTHI = 4;
    public const TITHI_PANCHAMI = 5;
    public const TITHI_SHASHTHI = 6;
    public const TITHI_SAPTAMI = 7;
    public const TITHI_ASHTAMI = 8;
    public const TITHI_NAVAMI = 9;
    public const TITHI_DASHAMI = 10;
    public const TITHI_EKADASHI = 11;
    public const TITHI_DWADASHI = 12;
    public const TITHI_TRAYODASHI = 13;
    public const TITHI_CHATURDASHI = 14;
    public const TITHI_PURNIMA = 15;
    public const TITHI_AMAVASYA = 16;

    public static $arTithi = [
    ["paksha" => "Shukla", "tithi" => "Pratipada"],
    ["paksha" => "Shukla", "tithi" => "Dwitiya"],
    ["paksha" => "Shukla", "tithi" => "Tritiya"],
    ["paksha" => "Shukla", "tithi" => "Chaturthi"],
    ["paksha" => "Shukla", "tithi" => "Panchami"],
    ["paksha" => "Shukla", "tithi" => "Shashthi"],
    ["paksha" => "Shukla", "tithi" => "Saptami"],
    ["paksha" => "Shukla", "tithi" => "Ashtami"],
    ["paksha" => "Shukla", "tithi" => "Navami"],
    ["paksha" => "Shukla", "tithi" => "Dashami"],
    ["paksha" => "Shukla", "tithi" => "Ekadashi"],
    ["paksha" => "Shukla", "tithi" => "Dwadashi"],
    ["paksha" => "Shukla", "tithi" => "Trayodashi"],
    ["paksha" => "Shukla", "tithi" => "Chaturdashi"],
    ["paksha" => "Shukla", "tithi" => "Purnima"],
    ["paksha" => "Shukla", "tithi" => "Pratipada"],
    ["paksha" => "Shukla", "tithi" => "Dwitiya"],
    ["paksha" => "Shukla", "tithi" => "Tritiya"],
    ["paksha" => "Shukla", "tithi" => "Chaturthi"],
    ["paksha" => "Shukla", "tithi" => "Panchami"],
    ["paksha" => "Shukla", "tithi" => "Shashthi"],
    ["paksha" => "Shukla", "tithi" => "Saptami"],
    ["paksha" => "Shukla", "tithi" => "Ashtami"],
    ["paksha" => "Shukla", "tithi" => "Navami"],
    ["paksha" => "Shukla", "tithi" => "Dashami"],
    ["paksha" => "Shukla", "tithi" => "Ekadashi"],
    ["paksha" => "Shukla", "tithi" => "Dwadashi"],
    ["paksha" => "Shukla", "tithi" => "Trayodashi"],
    ["paksha" => "Shukla", "tithi" => "Chaturdashi"],
    ["paksha" => "Shukla", "tithi" => "Amavasya"]
    ];

    protected $id;
    protected $name;
    protected $startTime;
    protected $endTime;
    protected $paksha;
    /**
     * Init Tithi
     *
     * @param array $data tithi details
     **/
    public function __construct($data) 
    {
        $this->id = $data->id;
        $this->name = self::$arTithi[$data->id]["tithi"];
        $this->startTime = $data->start;
        $this->endTime = $data->end;
        $this->paksha = $data->paksha;
    }

    /**
     * Function returns the name
     *
     * @return string 
     **/
    public function getName() 
    {
        return $this->name;
    }
    /**
     * Function returns the id
     *
     * @return int 
     **/
    public function getId() 
    {
        return $this->id;
    }

    /**
     * Function returns the starttime
     *
     * @return string in ISO 8601 format 
     **/
    public function getStartTime() 
    {
        return $this->startTime;
    }

    /**
     * Function returns the endtime
     *
     * @return string in ISO 8601 format 
     **/
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Function returns the tithi list
     *
     * @return array
     **/
    public function getTithiList()
    {
        return self::$arTithi;
    }
    /**
     * Function returns the paksha
     *
     * @return string
     **/
    public function getPaksha()
    {
        return $this->paksha;
    }
}