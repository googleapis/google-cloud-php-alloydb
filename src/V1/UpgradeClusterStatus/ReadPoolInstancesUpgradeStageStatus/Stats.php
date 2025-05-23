<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace Google\Cloud\AlloyDb\V1\UpgradeClusterStatus\ReadPoolInstancesUpgradeStageStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Upgrade stats for read pool instances.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.UpgradeClusterStatus.ReadPoolInstancesUpgradeStageStatus.Stats</code>
 */
class Stats extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of read pool instances for which upgrade has not started.
     *
     * Generated from protobuf field <code>int32 not_started = 1;</code>
     */
    protected $not_started = 0;
    /**
     * Number of read pool instances undergoing upgrade.
     *
     * Generated from protobuf field <code>int32 ongoing = 2;</code>
     */
    protected $ongoing = 0;
    /**
     * Number of read pool instances successfully upgraded.
     *
     * Generated from protobuf field <code>int32 success = 3;</code>
     */
    protected $success = 0;
    /**
     * Number of read pool instances which failed to upgrade.
     *
     * Generated from protobuf field <code>int32 failed = 4;</code>
     */
    protected $failed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $not_started
     *           Number of read pool instances for which upgrade has not started.
     *     @type int $ongoing
     *           Number of read pool instances undergoing upgrade.
     *     @type int $success
     *           Number of read pool instances successfully upgraded.
     *     @type int $failed
     *           Number of read pool instances which failed to upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of read pool instances for which upgrade has not started.
     *
     * Generated from protobuf field <code>int32 not_started = 1;</code>
     * @return int
     */
    public function getNotStarted()
    {
        return $this->not_started;
    }

    /**
     * Number of read pool instances for which upgrade has not started.
     *
     * Generated from protobuf field <code>int32 not_started = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNotStarted($var)
    {
        GPBUtil::checkInt32($var);
        $this->not_started = $var;

        return $this;
    }

    /**
     * Number of read pool instances undergoing upgrade.
     *
     * Generated from protobuf field <code>int32 ongoing = 2;</code>
     * @return int
     */
    public function getOngoing()
    {
        return $this->ongoing;
    }

    /**
     * Number of read pool instances undergoing upgrade.
     *
     * Generated from protobuf field <code>int32 ongoing = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOngoing($var)
    {
        GPBUtil::checkInt32($var);
        $this->ongoing = $var;

        return $this;
    }

    /**
     * Number of read pool instances successfully upgraded.
     *
     * Generated from protobuf field <code>int32 success = 3;</code>
     * @return int
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Number of read pool instances successfully upgraded.
     *
     * Generated from protobuf field <code>int32 success = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkInt32($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Number of read pool instances which failed to upgrade.
     *
     * Generated from protobuf field <code>int32 failed = 4;</code>
     * @return int
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * Number of read pool instances which failed to upgrade.
     *
     * Generated from protobuf field <code>int32 failed = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFailed($var)
    {
        GPBUtil::checkInt32($var);
        $this->failed = $var;

        return $this;
    }

}


