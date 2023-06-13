<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Instance is a computing unit that an end customer can connect to.
 * It's the main unit of computing resources in AlloyDB.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the instance resource with the format:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}/instances/{instance_id}
     * where the cluster and instance ID segments should satisfy the regex
     * expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`, e.g. 1-63 characters of
     * lowercase letters, numbers, and dashes, starting with a letter, and ending
     * with a letter or number. For more details see https://google.aip.dev/122.
     * The prefix of the instance resource name is the name of the parent
     * resource:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * User-settable and human-readable display name for the Instance.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Output only. The system-generated UID of the resource. The UID is assigned
     * when the resource is created, and it is retained until it is deleted.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. Create time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Update time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. Delete time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * Output only. The current serving state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Required. The type of the instance. Specified at creation time.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType instance_type = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_type = 0;
    /**
     * Configurations for the machines that host the underlying
     * database engine.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.MachineConfig machine_config = 10;</code>
     */
    protected $machine_config = null;
    /**
     * Availability type of an Instance.
     * If empty, defaults to REGIONAL for primary instances.
     * For read pools, availability_type is always UNSPECIFIED. Instances in the
     * read pools are evenly distributed across available zones within the region
     * (i.e. read pools with more than one node will have a node in at
     * least two zones).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.AvailabilityType availability_type = 11;</code>
     */
    protected $availability_type = 0;
    /**
     * The Compute Engine zone that the instance should serve from, per
     * https://cloud.google.com/compute/docs/regions-zones
     * This can ONLY be specified for ZONAL instances.
     * If present for a REGIONAL instance, an error will be thrown.
     * If this is absent for a ZONAL instance, instance is created in a random
     * zone with available capacity.
     *
     * Generated from protobuf field <code>string gce_zone = 12;</code>
     */
    protected $gce_zone = '';
    /**
     * Database flags. Set at instance level.
     *  * They are copied from primary instance on read instance creation.
     *  * Read instances can set new or override existing flags that are relevant
     *    for reads, e.g. for enabling columnar cache on a read instance. Flags
     *    set on read instance may or may not be present on primary.
     * This is a list of "key": "value" pairs.
     * "key": The name of the flag. These flags are passed at instance setup time,
     * so include both server options and system variables for Postgres. Flags are
     * specified with underscores, not hyphens.
     * "value": The value of the flag. Booleans are set to **on** for true
     * and **off** for false. This field must be omitted if the flag
     * doesn't take a value.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 13;</code>
     */
    private $database_flags;
    /**
     * Output only. This is set for the read-write VM of the PRIMARY instance
     * only.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.Node writable_node = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $writable_node = null;
    /**
     * Output only. List of available read-only VMs in this instance, including
     * the standby for a PRIMARY instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance.Node nodes = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $nodes;
    /**
     * Configuration for query insights.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.QueryInsightsInstanceConfig query_insights_config = 21;</code>
     */
    protected $query_insights_config = null;
    /**
     * Read pool specific config.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.ReadPoolConfig read_pool_config = 14;</code>
     */
    protected $read_pool_config = null;
    /**
     * Output only. The IP address for the Instance.
     * This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ip_address = '';
    /**
     * Output only. Reconciling (https://google.aip.dev/128#reconciliation).
     * Set to true if the current state of Instance does not match the user's
     * intended state, and the service is actively updating the resource to
     * reconcile them. This can happen due to user-triggered updates or
     * system actions like failover or maintenance.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciling = false;
    /**
     * For Resource freshness validation (https://google.aip.dev/154)
     *
     * Generated from protobuf field <code>string etag = 17;</code>
     */
    protected $etag = '';
    /**
     * Annotations to allow client tools to store small amount of arbitrary data.
     * This is distinct from labels.
     * https://google.aip.dev/128
     *
     * Generated from protobuf field <code>map<string, string> annotations = 18;</code>
     */
    private $annotations;
    /**
     * Update policy that will be applied during instance update.
     * This field is not persisted when you update the instance.
     * To use a non-default update policy, you must
     * specify explicitly specify the value in each update request.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.UpdatePolicy update_policy = 22;</code>
     */
    protected $update_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the instance resource with the format:
     *            * projects/{project}/locations/{region}/clusters/{cluster_id}/instances/{instance_id}
     *           where the cluster and instance ID segments should satisfy the regex
     *           expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`, e.g. 1-63 characters of
     *           lowercase letters, numbers, and dashes, starting with a letter, and ending
     *           with a letter or number. For more details see https://google.aip.dev/122.
     *           The prefix of the instance resource name is the name of the parent
     *           resource:
     *            * projects/{project}/locations/{region}/clusters/{cluster_id}
     *     @type string $display_name
     *           User-settable and human-readable display name for the Instance.
     *     @type string $uid
     *           Output only. The system-generated UID of the resource. The UID is assigned
     *           when the resource is created, and it is retained until it is deleted.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time stamp
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update time stamp
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. Delete time stamp
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels as key value pairs
     *     @type int $state
     *           Output only. The current serving state of the instance.
     *     @type int $instance_type
     *           Required. The type of the instance. Specified at creation time.
     *     @type \Google\Cloud\AlloyDb\V1alpha\Instance\MachineConfig $machine_config
     *           Configurations for the machines that host the underlying
     *           database engine.
     *     @type int $availability_type
     *           Availability type of an Instance.
     *           If empty, defaults to REGIONAL for primary instances.
     *           For read pools, availability_type is always UNSPECIFIED. Instances in the
     *           read pools are evenly distributed across available zones within the region
     *           (i.e. read pools with more than one node will have a node in at
     *           least two zones).
     *     @type string $gce_zone
     *           The Compute Engine zone that the instance should serve from, per
     *           https://cloud.google.com/compute/docs/regions-zones
     *           This can ONLY be specified for ZONAL instances.
     *           If present for a REGIONAL instance, an error will be thrown.
     *           If this is absent for a ZONAL instance, instance is created in a random
     *           zone with available capacity.
     *     @type array|\Google\Protobuf\Internal\MapField $database_flags
     *           Database flags. Set at instance level.
     *            * They are copied from primary instance on read instance creation.
     *            * Read instances can set new or override existing flags that are relevant
     *              for reads, e.g. for enabling columnar cache on a read instance. Flags
     *              set on read instance may or may not be present on primary.
     *           This is a list of "key": "value" pairs.
     *           "key": The name of the flag. These flags are passed at instance setup time,
     *           so include both server options and system variables for Postgres. Flags are
     *           specified with underscores, not hyphens.
     *           "value": The value of the flag. Booleans are set to **on** for true
     *           and **off** for false. This field must be omitted if the flag
     *           doesn't take a value.
     *     @type \Google\Cloud\AlloyDb\V1alpha\Instance\Node $writable_node
     *           Output only. This is set for the read-write VM of the PRIMARY instance
     *           only.
     *     @type array<\Google\Cloud\AlloyDb\V1alpha\Instance\Node>|\Google\Protobuf\Internal\RepeatedField $nodes
     *           Output only. List of available read-only VMs in this instance, including
     *           the standby for a PRIMARY instance.
     *     @type \Google\Cloud\AlloyDb\V1alpha\Instance\QueryInsightsInstanceConfig $query_insights_config
     *           Configuration for query insights.
     *     @type \Google\Cloud\AlloyDb\V1alpha\Instance\ReadPoolConfig $read_pool_config
     *           Read pool specific config.
     *     @type string $ip_address
     *           Output only. The IP address for the Instance.
     *           This is the connection endpoint for an end-user application.
     *     @type bool $reconciling
     *           Output only. Reconciling (https://google.aip.dev/128#reconciliation).
     *           Set to true if the current state of Instance does not match the user's
     *           intended state, and the service is actively updating the resource to
     *           reconcile them. This can happen due to user-triggered updates or
     *           system actions like failover or maintenance.
     *     @type string $etag
     *           For Resource freshness validation (https://google.aip.dev/154)
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Annotations to allow client tools to store small amount of arbitrary data.
     *           This is distinct from labels.
     *           https://google.aip.dev/128
     *     @type \Google\Cloud\AlloyDb\V1alpha\Instance\UpdatePolicy $update_policy
     *           Update policy that will be applied during instance update.
     *           This field is not persisted when you update the instance.
     *           To use a non-default update policy, you must
     *           specify explicitly specify the value in each update request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the instance resource with the format:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}/instances/{instance_id}
     * where the cluster and instance ID segments should satisfy the regex
     * expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`, e.g. 1-63 characters of
     * lowercase letters, numbers, and dashes, starting with a letter, and ending
     * with a letter or number. For more details see https://google.aip.dev/122.
     * The prefix of the instance resource name is the name of the parent
     * resource:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the instance resource with the format:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}/instances/{instance_id}
     * where the cluster and instance ID segments should satisfy the regex
     * expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`, e.g. 1-63 characters of
     * lowercase letters, numbers, and dashes, starting with a letter, and ending
     * with a letter or number. For more details see https://google.aip.dev/122.
     * The prefix of the instance resource name is the name of the parent
     * resource:
     *  * projects/{project}/locations/{region}/clusters/{cluster_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User-settable and human-readable display name for the Instance.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-settable and human-readable display name for the Instance.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The system-generated UID of the resource. The UID is assigned
     * when the resource is created, and it is retained until it is deleted.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. The system-generated UID of the resource. The UID is assigned
     * when the resource is created, and it is retained until it is deleted.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. Create time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Update time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Update time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Delete time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. Delete time stamp
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The current serving state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current serving state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1alpha\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. The type of the instance. Specified at creation time.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType instance_type = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getInstanceType()
    {
        return $this->instance_type;
    }

    /**
     * Required. The type of the instance. Specified at creation time.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.InstanceType instance_type = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setInstanceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1alpha\Instance\InstanceType::class);
        $this->instance_type = $var;

        return $this;
    }

    /**
     * Configurations for the machines that host the underlying
     * database engine.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.MachineConfig machine_config = 10;</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Instance\MachineConfig|null
     */
    public function getMachineConfig()
    {
        return $this->machine_config;
    }

    public function hasMachineConfig()
    {
        return isset($this->machine_config);
    }

    public function clearMachineConfig()
    {
        unset($this->machine_config);
    }

    /**
     * Configurations for the machines that host the underlying
     * database engine.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.MachineConfig machine_config = 10;</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Instance\MachineConfig $var
     * @return $this
     */
    public function setMachineConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Instance\MachineConfig::class);
        $this->machine_config = $var;

        return $this;
    }

    /**
     * Availability type of an Instance.
     * If empty, defaults to REGIONAL for primary instances.
     * For read pools, availability_type is always UNSPECIFIED. Instances in the
     * read pools are evenly distributed across available zones within the region
     * (i.e. read pools with more than one node will have a node in at
     * least two zones).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.AvailabilityType availability_type = 11;</code>
     * @return int
     */
    public function getAvailabilityType()
    {
        return $this->availability_type;
    }

    /**
     * Availability type of an Instance.
     * If empty, defaults to REGIONAL for primary instances.
     * For read pools, availability_type is always UNSPECIFIED. Instances in the
     * read pools are evenly distributed across available zones within the region
     * (i.e. read pools with more than one node will have a node in at
     * least two zones).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.AvailabilityType availability_type = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1alpha\Instance\AvailabilityType::class);
        $this->availability_type = $var;

        return $this;
    }

    /**
     * The Compute Engine zone that the instance should serve from, per
     * https://cloud.google.com/compute/docs/regions-zones
     * This can ONLY be specified for ZONAL instances.
     * If present for a REGIONAL instance, an error will be thrown.
     * If this is absent for a ZONAL instance, instance is created in a random
     * zone with available capacity.
     *
     * Generated from protobuf field <code>string gce_zone = 12;</code>
     * @return string
     */
    public function getGceZone()
    {
        return $this->gce_zone;
    }

    /**
     * The Compute Engine zone that the instance should serve from, per
     * https://cloud.google.com/compute/docs/regions-zones
     * This can ONLY be specified for ZONAL instances.
     * If present for a REGIONAL instance, an error will be thrown.
     * If this is absent for a ZONAL instance, instance is created in a random
     * zone with available capacity.
     *
     * Generated from protobuf field <code>string gce_zone = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setGceZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->gce_zone = $var;

        return $this;
    }

    /**
     * Database flags. Set at instance level.
     *  * They are copied from primary instance on read instance creation.
     *  * Read instances can set new or override existing flags that are relevant
     *    for reads, e.g. for enabling columnar cache on a read instance. Flags
     *    set on read instance may or may not be present on primary.
     * This is a list of "key": "value" pairs.
     * "key": The name of the flag. These flags are passed at instance setup time,
     * so include both server options and system variables for Postgres. Flags are
     * specified with underscores, not hyphens.
     * "value": The value of the flag. Booleans are set to **on** for true
     * and **off** for false. This field must be omitted if the flag
     * doesn't take a value.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDatabaseFlags()
    {
        return $this->database_flags;
    }

    /**
     * Database flags. Set at instance level.
     *  * They are copied from primary instance on read instance creation.
     *  * Read instances can set new or override existing flags that are relevant
     *    for reads, e.g. for enabling columnar cache on a read instance. Flags
     *    set on read instance may or may not be present on primary.
     * This is a list of "key": "value" pairs.
     * "key": The name of the flag. These flags are passed at instance setup time,
     * so include both server options and system variables for Postgres. Flags are
     * specified with underscores, not hyphens.
     * "value": The value of the flag. Booleans are set to **on** for true
     * and **off** for false. This field must be omitted if the flag
     * doesn't take a value.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDatabaseFlags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->database_flags = $arr;

        return $this;
    }

    /**
     * Output only. This is set for the read-write VM of the PRIMARY instance
     * only.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.Node writable_node = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Instance\Node|null
     */
    public function getWritableNode()
    {
        return $this->writable_node;
    }

    public function hasWritableNode()
    {
        return isset($this->writable_node);
    }

    public function clearWritableNode()
    {
        unset($this->writable_node);
    }

    /**
     * Output only. This is set for the read-write VM of the PRIMARY instance
     * only.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.Node writable_node = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Instance\Node $var
     * @return $this
     */
    public function setWritableNode($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Instance\Node::class);
        $this->writable_node = $var;

        return $this;
    }

    /**
     * Output only. List of available read-only VMs in this instance, including
     * the standby for a PRIMARY instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance.Node nodes = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Output only. List of available read-only VMs in this instance, including
     * the standby for a PRIMARY instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.alloydb.v1alpha.Instance.Node nodes = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AlloyDb\V1alpha\Instance\Node>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AlloyDb\V1alpha\Instance\Node::class);
        $this->nodes = $arr;

        return $this;
    }

    /**
     * Configuration for query insights.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.QueryInsightsInstanceConfig query_insights_config = 21;</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Instance\QueryInsightsInstanceConfig|null
     */
    public function getQueryInsightsConfig()
    {
        return $this->query_insights_config;
    }

    public function hasQueryInsightsConfig()
    {
        return isset($this->query_insights_config);
    }

    public function clearQueryInsightsConfig()
    {
        unset($this->query_insights_config);
    }

    /**
     * Configuration for query insights.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.QueryInsightsInstanceConfig query_insights_config = 21;</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Instance\QueryInsightsInstanceConfig $var
     * @return $this
     */
    public function setQueryInsightsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Instance\QueryInsightsInstanceConfig::class);
        $this->query_insights_config = $var;

        return $this;
    }

    /**
     * Read pool specific config.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.ReadPoolConfig read_pool_config = 14;</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Instance\ReadPoolConfig|null
     */
    public function getReadPoolConfig()
    {
        return $this->read_pool_config;
    }

    public function hasReadPoolConfig()
    {
        return isset($this->read_pool_config);
    }

    public function clearReadPoolConfig()
    {
        unset($this->read_pool_config);
    }

    /**
     * Read pool specific config.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.ReadPoolConfig read_pool_config = 14;</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Instance\ReadPoolConfig $var
     * @return $this
     */
    public function setReadPoolConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Instance\ReadPoolConfig::class);
        $this->read_pool_config = $var;

        return $this;
    }

    /**
     * Output only. The IP address for the Instance.
     * This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Output only. The IP address for the Instance.
     * This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Output only. Reconciling (https://google.aip.dev/128#reconciliation).
     * Set to true if the current state of Instance does not match the user's
     * intended state, and the service is actively updating the resource to
     * reconcile them. This can happen due to user-triggered updates or
     * system actions like failover or maintenance.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. Reconciling (https://google.aip.dev/128#reconciliation).
     * Set to true if the current state of Instance does not match the user's
     * intended state, and the service is actively updating the resource to
     * reconcile them. This can happen due to user-triggered updates or
     * system actions like failover or maintenance.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * For Resource freshness validation (https://google.aip.dev/154)
     *
     * Generated from protobuf field <code>string etag = 17;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * For Resource freshness validation (https://google.aip.dev/154)
     *
     * Generated from protobuf field <code>string etag = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Annotations to allow client tools to store small amount of arbitrary data.
     * This is distinct from labels.
     * https://google.aip.dev/128
     *
     * Generated from protobuf field <code>map<string, string> annotations = 18;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Annotations to allow client tools to store small amount of arbitrary data.
     * This is distinct from labels.
     * https://google.aip.dev/128
     *
     * Generated from protobuf field <code>map<string, string> annotations = 18;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Update policy that will be applied during instance update.
     * This field is not persisted when you update the instance.
     * To use a non-default update policy, you must
     * specify explicitly specify the value in each update request.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.UpdatePolicy update_policy = 22;</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Instance\UpdatePolicy|null
     */
    public function getUpdatePolicy()
    {
        return $this->update_policy;
    }

    public function hasUpdatePolicy()
    {
        return isset($this->update_policy);
    }

    public function clearUpdatePolicy()
    {
        unset($this->update_policy);
    }

    /**
     * Update policy that will be applied during instance update.
     * This field is not persisted when you update the instance.
     * To use a non-default update policy, you must
     * specify explicitly specify the value in each update request.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Instance.UpdatePolicy update_policy = 22;</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Instance\UpdatePolicy $var
     * @return $this
     */
    public function setUpdatePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Instance\UpdatePolicy::class);
        $this->update_policy = $var;

        return $this;
    }

}

