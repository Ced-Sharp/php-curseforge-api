<?php
/**
 * HashAlgo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CurseForge API
 *
 * HTTP API for CurseForge
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aternos\CurseForgeApi\Model;
use \Aternos\CurseForgeApi\ObjectSerializer;

/**
 * HashAlgo Class Doc Comment
 *
 * @category Class
 * @description Hash algorithems Possible enum values:  * 1 &#x3D; Sha1  * 2 &#x3D; Md5
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HashAlgo
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_2
        ];
    }
}


