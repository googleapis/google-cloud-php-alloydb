<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/service.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�p
%google/cloud/alloydb/v1/service.protogoogle.cloud.alloydb.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/cloud/alloydb/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ListClustersRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"x
ListClustersResponse2
clusters (2 .google.cloud.alloydb.v1.Cluster
next_page_token (	
unreachable (	"�
GetClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster7
view (2$.google.cloud.alloydb.v1.ClusterViewB�A"�
CreateSecondaryClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
CreateClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A
force (B�A"�
PromoteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A"�
RestoreClusterRequest>
backup_source (2%.google.cloud.alloydb.v1.BackupSourceH S
continuous_backup_source (2/.google.cloud.alloydb.v1.ContinuousBackupSourceH 6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A6
cluster (2 .google.cloud.alloydb.v1.ClusterB�A

request_id (	B�A
validate_only (B�AB
source"�
ListInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"{
ListInstancesResponse4
	instances (2!.google.cloud.alloydb.v1.Instance
next_page_token (	
unreachable (	"�
GetInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance3
view (2%.google.cloud.alloydb.v1.InstanceView"�
CreateInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A"�
CreateSecondaryInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A"o
CreateInstanceRequestsU
create_instance_requests (2..google.cloud.alloydb.v1.CreateInstanceRequestB�A"�
BatchCreateInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/InstanceF
requests (2/.google.cloud.alloydb.v1.CreateInstanceRequestsB�A

request_id (	B�A"T
BatchCreateInstancesResponse4
	instances (2!.google.cloud.alloydb.v1.Instance"�
BatchCreateInstancesMetadata
instance_targets (	f
instance_statuses (2K.google.cloud.alloydb.v1.BatchCreateInstancesMetadata.InstanceStatusesEntryk
InstanceStatusesEntry
key (	A
value (22.google.cloud.alloydb.v1.BatchCreateInstanceStatus:8"�
BatchCreateInstanceStatusG
state (28.google.cloud.alloydb.v1.BatchCreateInstanceStatus.State
	error_msg (	!
error (2.google.rpc.Status<
type (2..google.cloud.alloydb.v1.Instance.InstanceType"v
State
STATE_UNSPECIFIED 
PENDING_CREATE	
READY
CREATING
DELETING

FAILED
ROLLED_BACK"�
UpdateInstanceRequest4
update_mask (2.google.protobuf.FieldMaskB�A8
instance (2!.google.cloud.alloydb.v1.InstanceB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
etag (	B�A
validate_only (B�A"�
FailoverInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"�
InjectFaultRequestN

fault_type (25.google.cloud.alloydb.v1.InjectFaultRequest.FaultTypeB�A5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"4
	FaultType
FAULT_TYPE_UNSPECIFIED 
STOP_VM"�
RestartInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"�
ListBackupsRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	page_size (

page_token (	
filter (	
order_by (	"u
ListBackupsResponse0
backups (2.google.cloud.alloydb.v1.Backup
next_page_token (	
unreachable (	"G
GetBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup"�
CreateBackupRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	backup_id (	B�A4
backup (2.google.cloud.alloydb.v1.BackupB�A

request_id (	B�A
validate_only (B�A"�
UpdateBackupRequest4
update_mask (2.google.protobuf.FieldMaskB�A4
backup (2.google.cloud.alloydb.v1.BackupB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup

request_id (	B�A
validate_only (B�A
etag (	B�A"�
!ListSupportedDatabaseFlagsRequestD
parent (	B4�A�A.,alloydb.googleapis.com/SupportedDatabaseFlag
	page_size (

page_token (	"�
"ListSupportedDatabaseFlagsResponseP
supported_database_flags (2..google.cloud.alloydb.v1.SupportedDatabaseFlag
next_page_token (	"�
 GenerateClientCertificateRequest6
parent (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A5
cert_duration (2.google.protobuf.DurationB�A

public_key (	B�A"]
!GenerateClientCertificateResponse"
pem_certificate_chain (	B�A
ca_cert (	B�A"l
GetConnectionInfoRequest7
parent (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A"�
OperationMetadatae
batch_create_instances_metadata (25.google.cloud.alloydb.v1.BatchCreateInstancesMetadataB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AB
request_specific"�
ListUsersRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"o
ListUsersResponse,
users (2.google.cloud.alloydb.v1.User
next_page_token (	
unreachable (	"C
GetUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User"�
CreateUserRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
user_id (	B�A0
user (2.google.cloud.alloydb.v1.UserB�A

request_id (	B�A
validate_only (B�A"�
UpdateUserRequest4
update_mask (2.google.protobuf.FieldMaskB�A0
user (2.google.cloud.alloydb.v1.UserB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"{
DeleteUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User

request_id (	B�A
validate_only (B�A2�1
AlloyDBAdmin�
ListClusters,.google.cloud.alloydb.v1.ListClustersRequest-.google.cloud.alloydb.v1.ListClustersResponse"=���.,/v1/{parent=projects/*/locations/*}/clusters�Aparent�

GetCluster*.google.cloud.alloydb.v1.GetClusterRequest .google.cloud.alloydb.v1.Cluster";���.,/v1/{name=projects/*/locations/*/clusters/*}�Aname�
CreateCluster-.google.cloud.alloydb.v1.CreateClusterRequest.google.longrunning.Operation"x���7",/v1/{parent=projects/*/locations/*}/clusters:cluster�Aparent,cluster,cluster_id�A
ClusterOperationMetadata�
UpdateCluster-.google.cloud.alloydb.v1.UpdateClusterRequest.google.longrunning.Operation"z���?24/v1/{cluster.name=projects/*/locations/*/clusters/*}:cluster�Acluster,update_mask�A
ClusterOperationMetadata�
DeleteCluster-.google.cloud.alloydb.v1.DeleteClusterRequest.google.longrunning.Operation"h���.*,/v1/{name=projects/*/locations/*/clusters/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
PromoteCluster..google.cloud.alloydb.v1.PromoteClusterRequest.google.longrunning.Operation"e���9"4/v1/{name=projects/*/locations/*/clusters/*}:promote:*�Aname�A
ClusterOperationMetadata�
RestoreCluster..google.cloud.alloydb.v1.RestoreClusterRequest.google.longrunning.Operation"^���9"4/v1/{parent=projects/*/locations/*}/clusters:restore:*�A
ClusterOperationMetadata�
CreateSecondaryCluster6.google.cloud.alloydb.v1.CreateSecondaryClusterRequest.google.longrunning.Operation"����G"</v1/{parent=projects/*/locations/*}/clusters:createsecondary:cluster�Aparent,cluster,cluster_id�A
ClusterOperationMetadata�
ListInstances-.google.cloud.alloydb.v1.ListInstancesRequest..google.cloud.alloydb.v1.ListInstancesResponse"I���:8/v1/{parent=projects/*/locations/*/clusters/*}/instances�Aparent�
GetInstance+.google.cloud.alloydb.v1.GetInstanceRequest!.google.cloud.alloydb.v1.Instance"G���:8/v1/{name=projects/*/locations/*/clusters/*/instances/*}�Aname�
CreateInstance..google.cloud.alloydb.v1.CreateInstanceRequest.google.longrunning.Operation"����D"8/v1/{parent=projects/*/locations/*/clusters/*}/instances:instance�Aparent,instance,instance_id�A
InstanceOperationMetadata�
CreateSecondaryInstance7.google.cloud.alloydb.v1.CreateSecondaryInstanceRequest.google.longrunning.Operation"����T"H/v1/{parent=projects/*/locations/*/clusters/*}/instances:createsecondary:instance�Aparent,instance,instance_id�A
InstanceOperationMetadata�
BatchCreateInstances4.google.cloud.alloydb.v1.BatchCreateInstancesRequest.google.longrunning.Operation"����P"D/v1/{parent=projects/*/locations/*/clusters/*}/instances:batchCreate:requests�A1
BatchCreateInstancesResponseOperationMetadata�
UpdateInstance..google.cloud.alloydb.v1.UpdateInstanceRequest.google.longrunning.Operation"����M2A/v1/{instance.name=projects/*/locations/*/clusters/*/instances/*}:instance�Ainstance,update_mask�A
InstanceOperationMetadata�
DeleteInstance..google.cloud.alloydb.v1.DeleteInstanceRequest.google.longrunning.Operation"t���:*8/v1/{name=projects/*/locations/*/clusters/*/instances/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
FailoverInstance0.google.cloud.alloydb.v1.FailoverInstanceRequest.google.longrunning.Operation"s���F"A/v1/{name=projects/*/locations/*/clusters/*/instances/*}:failover:*�Aname�A
InstanceOperationMetadata�
InjectFault+.google.cloud.alloydb.v1.InjectFaultRequest.google.longrunning.Operation"����I"D/v1/{name=projects/*/locations/*/clusters/*/instances/*}:injectFault:*�Afault_type,name�A
InstanceOperationMetadata�
RestartInstance/.google.cloud.alloydb.v1.RestartInstanceRequest.google.longrunning.Operation"r���E"@/v1/{name=projects/*/locations/*/clusters/*/instances/*}:restart:*�Aname�A
InstanceOperationMetadata�
ListBackups+.google.cloud.alloydb.v1.ListBackupsRequest,.google.cloud.alloydb.v1.ListBackupsResponse"<���-+/v1/{parent=projects/*/locations/*}/backups�Aparent�
	GetBackup).google.cloud.alloydb.v1.GetBackupRequest.google.cloud.alloydb.v1.Backup":���-+/v1/{name=projects/*/locations/*/backups/*}�Aname�
CreateBackup,.google.cloud.alloydb.v1.CreateBackupRequest.google.longrunning.Operation"s���5"+/v1/{parent=projects/*/locations/*}/backups:backup�Aparent,backup,backup_id�A
BackupOperationMetadata�
UpdateBackup,.google.cloud.alloydb.v1.UpdateBackupRequest.google.longrunning.Operation"u���<22/v1/{backup.name=projects/*/locations/*/backups/*}:backup�Abackup,update_mask�A
BackupOperationMetadata�
DeleteBackup,.google.cloud.alloydb.v1.DeleteBackupRequest.google.longrunning.Operation"g���-*+/v1/{name=projects/*/locations/*/backups/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListSupportedDatabaseFlags:.google.cloud.alloydb.v1.ListSupportedDatabaseFlagsRequest;.google.cloud.alloydb.v1.ListSupportedDatabaseFlagsResponse"K���<:/v1/{parent=projects/*/locations/*}/supportedDatabaseFlags�Aparent�
GenerateClientCertificate9.google.cloud.alloydb.v1.GenerateClientCertificateRequest:.google.cloud.alloydb.v1.GenerateClientCertificateResponse"\\���M"H/v1/{parent=projects/*/locations/*/clusters/*}:generateClientCertificate:*�Aparent�
GetConnectionInfo1.google.cloud.alloydb.v1.GetConnectionInfoRequest\'.google.cloud.alloydb.v1.ConnectionInfo"Z���KI/v1/{parent=projects/*/locations/*/clusters/*/instances/*}/connectionInfo�Aparent�
	ListUsers).google.cloud.alloydb.v1.ListUsersRequest*.google.cloud.alloydb.v1.ListUsersResponse"E���64/v1/{parent=projects/*/locations/*/clusters/*}/users�Aparent�
GetUser\'.google.cloud.alloydb.v1.GetUserRequest.google.cloud.alloydb.v1.User"C���64/v1/{name=projects/*/locations/*/clusters/*/users/*}�Aname�

CreateUser*.google.cloud.alloydb.v1.CreateUserRequest.google.cloud.alloydb.v1.User"X���<"4/v1/{parent=projects/*/locations/*/clusters/*}/users:user�Aparent,user,user_id�

UpdateUser*.google.cloud.alloydb.v1.UpdateUserRequest.google.cloud.alloydb.v1.User"Z���A29/v1/{user.name=projects/*/locations/*/clusters/*/users/*}:user�Auser,update_mask�

DeleteUser*.google.cloud.alloydb.v1.DeleteUserRequest.google.protobuf.Empty"C���6*4/v1/{name=projects/*/locations/*/clusters/*/users/*}�AnameJ�Aalloydb.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.alloydb.v1BServiceProtoPZ5cloud.google.com/go/alloydb/apiv1/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1�Google\\Cloud\\AlloyDb\\V1�Google::Cloud::AlloyDB::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

