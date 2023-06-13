<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta\Instance\UpdatePolicy;

use UnexpectedValueException;

/**
 * Specifies the available modes of update.
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.Instance.UpdatePolicy.Mode</code>
 */
class Mode
{
    /**
     * Mode is unknown.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Least disruptive way to apply the update.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * Performs a forced update when applicable. This will be fast but may
     * incur a downtime.
     *
     * Generated from protobuf enum <code>FORCE_APPLY = 2;</code>
     */
    const FORCE_APPLY = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::FORCE_APPLY => 'FORCE_APPLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


