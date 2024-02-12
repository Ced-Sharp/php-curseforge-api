<?php
/**
 * FileStatus
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
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aternos\CurseForgeApi\Model;
use \Aternos\CurseForgeApi\ObjectSerializer;

/**
 * FileStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the file Possible enum values:  * 1 &#x3D; Processing  * 2 &#x3D; ChangesRequired  * 3 &#x3D; UnderReview  * 4 &#x3D; Approved  * 5 &#x3D; Rejected  * 6 &#x3D; MalwareDetected  * 7 &#x3D; Deleted  * 8 &#x3D; Archived  * 9 &#x3D; Testing  * 10 &#x3D; Released  * 11 &#x3D; ReadyForReview  * 12 &#x3D; Deprecated  * 13 &#x3D; Baking  * 14 &#x3D; AwaitingPublishing  * 15 &#x3D; FailedPublishing
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileStatus
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_3 = 3;

    public const NUMBER_4 = 4;

    public const NUMBER_5 = 5;

    public const NUMBER_6 = 6;

    public const NUMBER_7 = 7;

    public const NUMBER_8 = 8;

    public const NUMBER_9 = 9;

    public const NUMBER_10 = 10;

    public const NUMBER_11 = 11;

    public const NUMBER_12 = 12;

    public const NUMBER_13 = 13;

    public const NUMBER_14 = 14;

    public const NUMBER_15 = 15;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_3,
            self::NUMBER_4,
            self::NUMBER_5,
            self::NUMBER_6,
            self::NUMBER_7,
            self::NUMBER_8,
            self::NUMBER_9,
            self::NUMBER_10,
            self::NUMBER_11,
            self::NUMBER_12,
            self::NUMBER_13,
            self::NUMBER_14,
            self::NUMBER_15
        ];
    }
}


