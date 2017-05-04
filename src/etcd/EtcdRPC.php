<?php
// GENERATED CODE -- DO NOT EDIT!

namespace node\etcd;

use Etcdserverpb\AlarmRequest;
use Etcdserverpb\AuthDisableRequest;
use Etcdserverpb\AuthEnableRequest;
use Etcdserverpb\AuthenticateRequest;
use Etcdserverpb\AuthRoleAddRequest;
use Etcdserverpb\AuthRoleDeleteRequest;
use Etcdserverpb\AuthRoleGetRequest;
use Etcdserverpb\AuthRoleGrantPermissionRequest;
use Etcdserverpb\AuthRoleListRequest;
use Etcdserverpb\AuthRoleRevokePermissionRequest;
use Etcdserverpb\AuthUserAddRequest;
use Etcdserverpb\AuthUserChangePasswordRequest;
use Etcdserverpb\AuthUserDeleteRequest;
use Etcdserverpb\AuthUserGetRequest;
use Etcdserverpb\AuthUserGrantRoleRequest;
use Etcdserverpb\AuthUserListRequest;
use Etcdserverpb\AuthUserRevokeRoleRequest;
use Etcdserverpb\CompactionRequest;
use Etcdserverpb\DefragmentRequest;
use Etcdserverpb\DeleteRangeRequest;
use Etcdserverpb\HashRequest;
use Etcdserverpb\LeaseGrantRequest;
use Etcdserverpb\LeaseRevokeRequest;
use Etcdserverpb\LeaseTimeToLiveRequest;
use Etcdserverpb\MemberAddRequest;
use Etcdserverpb\MemberListRequest;
use Etcdserverpb\MemberRemoveRequest;
use Etcdserverpb\MemberUpdateRequest;
use Etcdserverpb\PutRequest;
use Etcdserverpb\RangeRequest;
use Etcdserverpb\SnapshotRequest;
use Etcdserverpb\StatusRequest;
use Etcdserverpb\TxnRequest;
use node\http\BaseStub;
use node\http\BidiStreamingCall;
use node\http\ServerStreamingCall;
use node\http\UnaryCall;

/**
 * Class KVClient
 * @package Etcdserver
 */
class KVClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Range gets the keys in the range from the key-value store.
     * @param RangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Range(RangeRequest $argument,
                          $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.KV/Range',
            $argument,
            ['\Etcdserverpb\RangeResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * Put puts the given key into the key-value store.
     * A put request increments the revision of the key-value store
     * and generates one event in the event history.
     * @param PutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Put(PutRequest $argument,
                        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.KV/Put',
            $argument,
            ['\Etcdserverpb\PutResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * DeleteRange deletes the given range from the key-value store.
     * A delete request increments the revision of the key-value store
     * and generates a delete event in the event history for every deleted key.
     * @param DeleteRangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function DeleteRange(DeleteRangeRequest $argument,
                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.KV/DeleteRange',
            $argument,
            ['\Etcdserverpb\DeleteRangeResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * Txn processes multiple requests in a single transaction.
     * A txn request increments the revision of the key-value store
     * and generates events with the same revision for every completed request.
     * It is not allowed to modify the same key several times within one txn.
     * @param TxnRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Txn(TxnRequest $argument,
                        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.KV/Txn',
            $argument,
            ['\Etcdserverpb\TxnResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * Compact compacts the event history in the etcd key-value store. The key-value
     * store should be periodically compacted or the event history will continue to grow
     * indefinitely.
     * @param CompactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Compact(CompactionRequest $argument,
                            $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.KV/Compact',
            $argument,
            ['\Etcdserverpb\CompactionResponse', 'decode'],
            $metadata,
            $options
        );
    }
}

class WatchClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
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
     * @return BidiStreamingCall
     */
    public function Watch($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/etcdserverpb.Watch/Watch',
            ['\Etcdserverpb\WatchResponse', 'decode'],
            $metadata,
            $options
        );
    }
}

class LeaseClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * LeaseGrant creates a lease which expires if the server does not receive a keepAlive
     * within a given time to live period. All keys attached to the lease will be expired and
     * deleted if the lease expires. Each expired key generates a delete event in the event history.
     * @param LeaseGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function LeaseGrant(LeaseGrantRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Lease/LeaseGrant',
            $argument,
            ['\Etcdserverpb\LeaseGrantResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * LeaseRevoke revokes a lease. All keys attached to the lease will expire and be deleted.
     * @param LeaseRevokeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function LeaseRevoke(LeaseRevokeRequest $argument,
                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Lease/LeaseRevoke',
            $argument,
            ['\Etcdserverpb\LeaseRevokeResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * LeaseKeepAlive keeps the lease alive by streaming keep alive requests from the client
     * to the server and streaming keep alive responses from the server to the client.
     * @param array $metadata metadata
     * @param array $options call options
     * @return BidiStreamingCall
     */
    public function LeaseKeepAlive($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/etcdserverpb.Lease/LeaseKeepAlive',
            ['\Etcdserverpb\LeaseKeepAliveResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * LeaseTimeToLive retrieves lease information.
     * @param LeaseTimeToLiveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function LeaseTimeToLive(LeaseTimeToLiveRequest $argument,
                                    $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Lease/LeaseTimeToLive',
            $argument,
            ['\Etcdserverpb\LeaseTimeToLiveResponse', 'decode'],
            $metadata,
            $options
        );
    }
}

class ClusterClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * MemberAdd adds a member into the cluster.
     * @param MemberAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function MemberAdd(MemberAddRequest $argument,
                              $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Cluster/MemberAdd',
            $argument,
            ['\Etcdserverpb\MemberAddResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * MemberRemove removes an existing member from the cluster.
     * @param MemberRemoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function MemberRemove(MemberRemoveRequest $argument,
                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Cluster/MemberRemove',
            $argument,
            ['\Etcdserverpb\MemberRemoveResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * MemberUpdate updates the member configuration.
     * @param MemberUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function MemberUpdate(MemberUpdateRequest $argument,
                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Cluster/MemberUpdate',
            $argument,
            ['\Etcdserverpb\MemberUpdateResponse', 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * MemberList lists all the members in the cluster.
     * @param MemberListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function MemberList(MemberListRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Cluster/MemberList',
            $argument,
            ['\Etcdserverpb\MemberListResponse', 'decode'],
            $metadata,
            $options
        );
    }

}

class MaintenanceClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Alarm activates, deactivates, and queries alarms regarding cluster health.
     * @param AlarmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Alarm(AlarmRequest $argument,
                          $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Maintenance/Alarm',
            $argument,
            ['\Etcdserverpb\AlarmResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * Status gets the status of the member.
     * @param StatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Status(StatusRequest $argument,
                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Maintenance/Status',
            $argument,
            ['\Etcdserverpb\StatusResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * Defragment defragments a member's backend database to recover storage space.
     * @param DefragmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Defragment(DefragmentRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Maintenance/Defragment',
            $argument,
            ['\Etcdserverpb\DefragmentResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * Hash returns the hash of the local KV state for consistency checking purpose.
     * This is designed for testing; do not use this in production when there
     * are ongoing transactions.
     * @param HashRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Hash(HashRequest $argument,
                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Maintenance/Hash',
            $argument,
            ['\Etcdserverpb\HashResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * Snapshot sends a snapshot of the entire backend from a member over a stream to a client.
     * @param SnapshotRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return ServerStreamingCall
     */
    public function Snapshot(SnapshotRequest $argument,
                             $metadata = [], $options = [])
    {
        return $this->_serverStreamRequest('/etcdserverpb.Maintenance/Snapshot',
            $argument,
            ['\Etcdserverpb\SnapshotResponse', 'decode'],
            $metadata, $options);
    }

}

class AuthClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * AuthEnable enables authentication.
     * @param AuthEnableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AuthEnable(AuthEnableRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/AuthEnable',
            $argument,
            ['\Etcdserverpb\AuthEnableResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * AuthDisable disables authentication.
     * @param AuthDisableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AuthDisable(AuthDisableRequest $argument,
                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/AuthDisable',
            $argument,
            ['\Etcdserverpb\AuthDisableResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * Authenticate processes an authenticate request.
     * @param AuthenticateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function Authenticate(AuthenticateRequest $argument,
                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/Authenticate',
            $argument,
            ['\Etcdserverpb\AuthenticateResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserAdd adds a new user.
     * @param AuthUserAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserAdd(AuthUserAddRequest $argument,
                            $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserAdd',
            $argument,
            ['\Etcdserverpb\AuthUserAddResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserGet gets detailed user information.
     * @param AuthUserGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserGet(AuthUserGetRequest $argument,
                            $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserGet',
            $argument,
            ['\Etcdserverpb\AuthUserGetResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserList gets a list of all users.
     * @param AuthUserListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserList(AuthUserListRequest $argument,
                             $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserList',
            $argument,
            ['\Etcdserverpb\AuthUserListResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserDelete deletes a specified user.
     * @param AuthUserDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserDelete(AuthUserDeleteRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserDelete',
            $argument,
            ['\Etcdserverpb\AuthUserDeleteResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserChangePassword changes the password of a specified user.
     * @param AuthUserChangePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserChangePassword(AuthUserChangePasswordRequest $argument,
                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserChangePassword',
            $argument,
            ['\Etcdserverpb\AuthUserChangePasswordResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserGrant grants a role to a specified user.
     * @param AuthUserGrantRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserGrantRole(AuthUserGrantRoleRequest $argument,
                                  $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserGrantRole',
            $argument,
            ['\Etcdserverpb\AuthUserGrantRoleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * UserRevokeRole revokes a role of specified user.
     * @param AuthUserRevokeRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function UserRevokeRole(AuthUserRevokeRoleRequest $argument,
                                   $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/UserRevokeRole',
            $argument,
            ['\Etcdserverpb\AuthUserRevokeRoleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleAdd adds a new role.
     * @param AuthRoleAddRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleAdd(AuthRoleAddRequest $argument,
                            $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleAdd',
            $argument,
            ['\Etcdserverpb\AuthRoleAddResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleGet gets detailed role information.
     * @param AuthRoleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleGet(AuthRoleGetRequest $argument,
                            $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleGet',
            $argument,
            ['\Etcdserverpb\AuthRoleGetResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleList gets lists of all roles.
     * @param AuthRoleListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleList(AuthRoleListRequest $argument,
                             $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleList',
            $argument,
            ['\Etcdserverpb\AuthRoleListResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleDelete deletes a specified role.
     * @param AuthRoleDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleDelete(AuthRoleDeleteRequest $argument,
                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleDelete',
            $argument,
            ['\Etcdserverpb\AuthRoleDeleteResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleGrantPermission grants a permission of a specified key or range to a specified role.
     * @param AuthRoleGrantPermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleGrantPermission(AuthRoleGrantPermissionRequest $argument,
                                        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleGrantPermission',
            $argument,
            ['\Etcdserverpb\AuthRoleGrantPermissionResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * RoleRevokePermission revokes a key or range permission of a specified role.
     * @param AuthRoleRevokePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RoleRevokePermission(AuthRoleRevokePermissionRequest $argument,
                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/etcdserverpb.Auth/RoleRevokePermission',
            $argument,
            ['\Etcdserverpb\AuthRoleRevokePermissionResponse', 'decode'],
            $metadata, $options);
    }

}

