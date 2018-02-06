<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_friend_apply.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiFriendApplyRequest</code>
 */
class HaiFriendApplyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *被添加好友的用户ID
     *
     * Generated from protobuf field <code>string site_friend_id = 1;</code>
     */
    private $site_friend_id = '';
    /**
     *申请添加的原因说明
     *
     * Generated from protobuf field <code>string apply_reason = 2;</code>
     */
    private $apply_reason = '';

    public function __construct()
    {
        \GPBMetadata\Plugin\HaiFriendApply::initOnce();
        parent::__construct();
    }

    /**
     *被添加好友的用户ID
     *
     * Generated from protobuf field <code>string site_friend_id = 1;</code>
     * @return string
     */
    public function getSiteFriendId()
    {
        return $this->site_friend_id;
    }

    /**
     *被添加好友的用户ID
     *
     * Generated from protobuf field <code>string site_friend_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteFriendId($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_friend_id = $var;

        return $this;
    }

    /**
     *申请添加的原因说明
     *
     * Generated from protobuf field <code>string apply_reason = 2;</code>
     * @return string
     */
    public function getApplyReason()
    {
        return $this->apply_reason;
    }

    /**
     *申请添加的原因说明
     *
     * Generated from protobuf field <code>string apply_reason = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApplyReason($var)
    {
        GPBUtil::checkString($var, true);
        $this->apply_reason = $var;

        return $this;
    }
}
