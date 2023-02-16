<?php

namespace App;

use Spot\EntityInterface;
use Spot\MapperInterface;
use Spot\EventEmitter;
use Psr\Log\LogLevel;

/**
 * class name: Otp
 * @package Login Service
 * @version 1.0.0
 * @author Heston Sinuraya <sinuraya@gmail.com>
 * @copyright 2019 Heston Sinuraya
 * @license MIT
 */

class Otp extends \Spot\Entity
{
    
    /**
     * $table
     *
     * @var string
     */
    protected static $table = "otp";

    /**
     * fields
     *
     * @return array of fields
     */
    public static function fields()
    {
        return [
            "id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "phone" => ["type" => "string", "length" => 255],
            "otp" => ["type" => "string", "length" => 255],
        ];
    }

    /**
     * events
     *
     * @param EventEmitter $emitter
     * @return void
     */
    public static function events(EventEmitter $emitter)
    {
        return null;
    }

    /**
     * clear
     *
     * @return void
     */
    public function clear()
    {
        $this->data([
            "phone" => null, 
            "otp" => null,
        ]);
    }
}
