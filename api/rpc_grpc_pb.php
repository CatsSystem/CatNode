<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Etcdserverpb {

  class KVClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Range gets the keys in the range from the key-value store.
     * @param \Etcdserverpb\RangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Range(\Etcdserverpb\RangeRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.KV/Range',
      $argument,
      ['\Etcdserverpb\RangeResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Put puts the given key into the key-value store.
     * A put request increments the revision of the key-value store
     * and generates one event in the event history.
     * @param \Etcdserverpb\PutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Put(\Etcdserverpb\PutRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.KV/Put',
      $argument,
      ['\Etcdserverpb\PutResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * DeleteRange deletes the given range from the key-value store.
     * A delete request increments the revision of the key-value store
     * and generates a delete event in the event history for every deleted key.
     * @param \Etcdserverpb\DeleteRangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteRange(\Etcdserverpb\DeleteRangeRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.KV/DeleteRange',
      $argument,
      ['\Etcdserverpb\DeleteRangeResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Txn processes multiple requests in a single transaction.
     * A txn request increments the revision of the key-value store
     * and generates events with the same revision for every completed request.
     * It is not allowed to modify the same key several times within one txn.
     * @param \Etcdserverpb\TxnRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Txn(\Etcdserverpb\TxnRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.KV/Txn',
      $argument,
      ['\Etcdserverpb\TxnResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Compact compacts the event history in the etcd key-value store. The key-value
     * store should be periodically compacted or the event history will continue to grow
     * indefinitely.
     * @param \Etcdserverpb\CompactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Compact(\Etcdserverpb\CompactionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.KV/Compact',
      $argument,
      ['\Etcdserverpb\CompactionResponse', 'decode'],
      $metadata, $options);
    }

  }

  class WatchClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Watch watches for events happening or that have happened. Both input and output
     * are streams; the input stream is for creating and canceling watchers and the output
     * stream sends events. One watch RPC can watch on multiple key ranges, streaming events
     * for several watches at once. The entire event history can be watched starting from the
     * last compaction revision.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Watch($metadata = [], $options = []) {
      return $this->_bidiRequest('/etcdserverpb.Watch/Watch',
      ['\Etcdserverpb\WatchResponse','decode'],
      $metadata, $options);
    }

  }

  class LeaseClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * LeaseGrant creates a lease which expires if the server does not receive a keepAlive
     * within a given time to live period. All keys attached to the lease will be expired and
     * deleted if the lease expires. Each expired key generates a delete event in the event history.
     * @param \Etcdserverpb\LeaseGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaseGrant(\Etcdserverpb\LeaseGrantRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Lease/LeaseGrant',
      $argument,
      ['\Etcdserverpb\LeaseGrantResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * LeaseRevoke revokes a lease. All keys attached to the lease will expire and be deleted.
     * @param \Etcdserverpb\LeaseRevokeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaseRevoke(\Etcdserverpb\LeaseRevokeRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Lease/LeaseRevoke',
      $argument,
      ['\Etcdserverpb\LeaseRevokeResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * LeaseKeepAlive keeps the lease alive by streaming keep alive requests from the client
     * to the server and streaming keep alive responses from the server to the client.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaseKeepAlive($metadata = [], $options = []) {
      return $this->_bidiRequest('/etcdserverpb.Lease/LeaseKeepAlive',
      ['\Etcdserverpb\LeaseKeepAliveResponse','decode'],
      $metadata, $options);
    }

    /**
     * LeaseTimeToLive retrieves lease information.
     * @param \Etcdserverpb\LeaseTimeToLiveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaseTimeToLive(\Etcdserverpb\LeaseTimeToLiveRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Lease/LeaseTimeToLive',
      $argument,
      ['\Etcdserverpb\LeaseTimeToLiveResponse', 'decode'],
      $metadata, $options);
    }

  }

  class ClusterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * MemberAdd adds a member into the cluster.
     * @param \Etcdserverpb\MemberAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MemberAdd(\Etcdserverpb\MemberAddRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Cluster/MemberAdd',
      $argument,
      ['\Etcdserverpb\MemberAddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * MemberRemove removes an existing member from the cluster.
     * @param \Etcdserverpb\MemberRemoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MemberRemove(\Etcdserverpb\MemberRemoveRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Cluster/MemberRemove',
      $argument,
      ['\Etcdserverpb\MemberRemoveResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * MemberUpdate updates the member configuration.
     * @param \Etcdserverpb\MemberUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MemberUpdate(\Etcdserverpb\MemberUpdateRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Cluster/MemberUpdate',
      $argument,
      ['\Etcdserverpb\MemberUpdateResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * MemberList lists all the members in the cluster.
     * @param \Etcdserverpb\MemberListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MemberList(\Etcdserverpb\MemberListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Cluster/MemberList',
      $argument,
      ['\Etcdserverpb\MemberListResponse', 'decode'],
      $metadata, $options);
    }

  }

  class MaintenanceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Alarm activates, deactivates, and queries alarms regarding cluster health.
     * @param \Etcdserverpb\AlarmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Alarm(\Etcdserverpb\AlarmRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Maintenance/Alarm',
      $argument,
      ['\Etcdserverpb\AlarmResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Status gets the status of the member.
     * @param \Etcdserverpb\StatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Status(\Etcdserverpb\StatusRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Maintenance/Status',
      $argument,
      ['\Etcdserverpb\StatusResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Defragment defragments a member's backend database to recover storage space.
     * @param \Etcdserverpb\DefragmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Defragment(\Etcdserverpb\DefragmentRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Maintenance/Defragment',
      $argument,
      ['\Etcdserverpb\DefragmentResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Hash returns the hash of the local KV state for consistency checking purpose.
     * This is designed for testing; do not use this in production when there
     * are ongoing transactions.
     * @param \Etcdserverpb\HashRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Hash(\Etcdserverpb\HashRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Maintenance/Hash',
      $argument,
      ['\Etcdserverpb\HashResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Snapshot sends a snapshot of the entire backend from a member over a stream to a client.
     * @param \Etcdserverpb\SnapshotRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Snapshot(\Etcdserverpb\SnapshotRequest $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/etcdserverpb.Maintenance/Snapshot',
      $argument,
      ['\Etcdserverpb\SnapshotResponse', 'decode'],
      $metadata, $options);
    }

  }

  class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * AuthEnable enables authentication.
     * @param \Etcdserverpb\AuthEnableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AuthEnable(\Etcdserverpb\AuthEnableRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/AuthEnable',
      $argument,
      ['\Etcdserverpb\AuthEnableResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * AuthDisable disables authentication.
     * @param \Etcdserverpb\AuthDisableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AuthDisable(\Etcdserverpb\AuthDisableRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/AuthDisable',
      $argument,
      ['\Etcdserverpb\AuthDisableResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Authenticate processes an authenticate request.
     * @param \Etcdserverpb\AuthenticateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Authenticate(\Etcdserverpb\AuthenticateRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/Authenticate',
      $argument,
      ['\Etcdserverpb\AuthenticateResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserAdd adds a new user.
     * @param \Etcdserverpb\AuthUserAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserAdd(\Etcdserverpb\AuthUserAddRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserAdd',
      $argument,
      ['\Etcdserverpb\AuthUserAddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserGet gets detailed user information.
     * @param \Etcdserverpb\AuthUserGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserGet(\Etcdserverpb\AuthUserGetRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserGet',
      $argument,
      ['\Etcdserverpb\AuthUserGetResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserList gets a list of all users.
     * @param \Etcdserverpb\AuthUserListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserList(\Etcdserverpb\AuthUserListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserList',
      $argument,
      ['\Etcdserverpb\AuthUserListResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserDelete deletes a specified user.
     * @param \Etcdserverpb\AuthUserDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserDelete(\Etcdserverpb\AuthUserDeleteRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserDelete',
      $argument,
      ['\Etcdserverpb\AuthUserDeleteResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserChangePassword changes the password of a specified user.
     * @param \Etcdserverpb\AuthUserChangePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserChangePassword(\Etcdserverpb\AuthUserChangePasswordRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserChangePassword',
      $argument,
      ['\Etcdserverpb\AuthUserChangePasswordResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserGrant grants a role to a specified user.
     * @param \Etcdserverpb\AuthUserGrantRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserGrantRole(\Etcdserverpb\AuthUserGrantRoleRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserGrantRole',
      $argument,
      ['\Etcdserverpb\AuthUserGrantRoleResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * UserRevokeRole revokes a role of specified user.
     * @param \Etcdserverpb\AuthUserRevokeRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserRevokeRole(\Etcdserverpb\AuthUserRevokeRoleRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/UserRevokeRole',
      $argument,
      ['\Etcdserverpb\AuthUserRevokeRoleResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleAdd adds a new role.
     * @param \Etcdserverpb\AuthRoleAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleAdd(\Etcdserverpb\AuthRoleAddRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleAdd',
      $argument,
      ['\Etcdserverpb\AuthRoleAddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleGet gets detailed role information.
     * @param \Etcdserverpb\AuthRoleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleGet(\Etcdserverpb\AuthRoleGetRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleGet',
      $argument,
      ['\Etcdserverpb\AuthRoleGetResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleList gets lists of all roles.
     * @param \Etcdserverpb\AuthRoleListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleList(\Etcdserverpb\AuthRoleListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleList',
      $argument,
      ['\Etcdserverpb\AuthRoleListResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleDelete deletes a specified role.
     * @param \Etcdserverpb\AuthRoleDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleDelete(\Etcdserverpb\AuthRoleDeleteRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleDelete',
      $argument,
      ['\Etcdserverpb\AuthRoleDeleteResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleGrantPermission grants a permission of a specified key or range to a specified role.
     * @param \Etcdserverpb\AuthRoleGrantPermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleGrantPermission(\Etcdserverpb\AuthRoleGrantPermissionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleGrantPermission',
      $argument,
      ['\Etcdserverpb\AuthRoleGrantPermissionResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * RoleRevokePermission revokes a key or range permission of a specified role.
     * @param \Etcdserverpb\AuthRoleRevokePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RoleRevokePermission(\Etcdserverpb\AuthRoleRevokePermissionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/etcdserverpb.Auth/RoleRevokePermission',
      $argument,
      ['\Etcdserverpb\AuthRoleRevokePermissionResponse', 'decode'],
      $metadata, $options);
    }

  }

}
