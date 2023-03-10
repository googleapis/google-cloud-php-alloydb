<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/service.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for current status of an instance in the BatchCreateInstances
 * operation.
 * For example, lets say a BatchCreateInstances workflow has 4 instances,
 * Instance1 through Instance4. Lets also assume that 2 instances succeeded
 * but the third failed to create and the 4th was never picked up for creation
 * because of failure of the previous one. Then, resulting states would look
 * something like:
 *   1. Instance1 = ROLLED_BACK
 *   2. Instance2 = ROLLED_BACK
 *   3. Instance3 = FAILED
 *   4. Instance4 = FAILED
 * However, while the operation is running, the instance might be in other
 * states including PENDING_CREATE, ACTIVE, DELETING and CREATING. The states
 * / do not get further updated once the operation is done.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus</code>
 */
class BatchCreateInstanceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The current state of an instance involved in the batch create operation.
     * Once the operation is complete, the final state of the instances in the
     * LRO can be one of:
     *   1. ACTIVE, indicating that instances were created successfully
     *   2. FAILED, indicating that a particular instance failed creation
     *   3. ROLLED_BACK indicating that although the instance was created
     *      successfully, it had to be rolled back and deleted due to failure in
     *      other steps of the workflow.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus.State state = 1;</code>
     */
    protected $state = 0;
    /**
     * DEPRECATED - Use the error field instead.
     * Error, if any error occurred and is available, during instance creation.
     *
     * Generated from protobuf field <code>string error_msg = 2;</code>
     */
    protected $error_msg = '';
    /**
     * The RPC status of the instance creation operation. This field will be
     * present if an error happened during the instance creation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType type = 3;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The current state of an instance involved in the batch create operation.
     *           Once the operation is complete, the final state of the instances in the
     *           LRO can be one of:
     *             1. ACTIVE, indicating that instances were created successfully
     *             2. FAILED, indicating that a particular instance failed creation
     *             3. ROLLED_BACK indicating that although the instance was created
     *                successfully, it had to be rolled back and deleted due to failure in
     *                other steps of the workflow.
     *     @type string $error_msg
     *           DEPRECATED - Use the error field instead.
     *           Error, if any error occurred and is available, during instance creation.
     *     @type \Google\Rpc\Status $error
     *           The RPC status of the instance creation operation. This field will be
     *           present if an error happened during the instance creation.
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The current state of an instance involved in the batch create operation.
     * Once the operation is complete, the final state of the instances in the
     * LRO can be one of:
     *   1. ACTIVE, indicating that instances were created successfully
     *   2. FAILED, indicating that a particular instance failed creation
     *   3. ROLLED_BACK indicating that although the instance was created
     *      successfully, it had to be rolled back and deleted due to failure in
     *      other steps of the workflow.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of an instance involved in the batch create operation.
     * Once the operation is complete, the final state of the instances in the
     * LRO can be one of:
     *   1. ACTIVE, indicating that instances were created successfully
     *   2. FAILED, indicating that a particular instance failed creation
     *   3. ROLLED_BACK indicating that although the instance was created
     *      successfully, it had to be rolled back and deleted due to failure in
     *      other steps of the workflow.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1alpha\BatchCreateInstanceStatus\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * DEPRECATED - Use the error field instead.
     * Error, if any error occurred and is available, during instance creation.
     *
     * Generated from protobuf field <code>string error_msg = 2;</code>
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->error_msg;
    }

    /**
     * DEPRECATED - Use the error field instead.
     * Error, if any error occurred and is available, during instance creation.
     *
     * Generated from protobuf field <code>string error_msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_msg = $var;

        return $this;
    }

    /**
     * The RPC status of the instance creation operation. This field will be
     * present if an error happened during the instance creation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * The RPC status of the instance creation operation. This field will be
     * present if an error happened during the instance creation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1alpha\Instance\InstanceType::class);
        $this->type = $var;

        return $this;
    }

}

