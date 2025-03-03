<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace Google\Cloud\AlloyDb\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execute a SQL statement response.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.ExecuteSqlResponse</code>
 */
class ExecuteSqlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * SqlResult represents the results for the execution of sql statements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.SqlResult sql_results = 1;</code>
     */
    private $sql_results;
    /**
     * Any additional metadata information regarding the execution of the sql
     * statement.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.ExecuteSqlMetadata metadata = 3;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AlloyDb\V1\SqlResult>|\Google\Protobuf\Internal\RepeatedField $sql_results
     *           SqlResult represents the results for the execution of sql statements.
     *     @type \Google\Cloud\AlloyDb\V1\ExecuteSqlMetadata $metadata
     *           Any additional metadata information regarding the execution of the sql
     *           statement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * SqlResult represents the results for the execution of sql statements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.SqlResult sql_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSqlResults()
    {
        return $this->sql_results;
    }

    /**
     * SqlResult represents the results for the execution of sql statements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1.SqlResult sql_results = 1;</code>
     * @param array<\Google\Cloud\AlloyDb\V1\SqlResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSqlResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AlloyDb\V1\SqlResult::class);
        $this->sql_results = $arr;

        return $this;
    }

    /**
     * Any additional metadata information regarding the execution of the sql
     * statement.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.ExecuteSqlMetadata metadata = 3;</code>
     * @return \Google\Cloud\AlloyDb\V1\ExecuteSqlMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Any additional metadata information regarding the execution of the sql
     * statement.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.ExecuteSqlMetadata metadata = 3;</code>
     * @param \Google\Cloud\AlloyDb\V1\ExecuteSqlMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1\ExecuteSqlMetadata::class);
        $this->metadata = $var;

        return $this;
    }

}

