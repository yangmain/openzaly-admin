<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_list.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiUserListResponse</code>
 */
class HaiUserListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *查询的结果
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     */
    private $user_profile;

    public function __construct()
    {
        \GPBMetadata\Plugin\HaiUserList::initOnce();
        parent::__construct();
    }

    /**
     *查询的结果
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserProfile()
    {
        return $this->user_profile;
    }

    /**
     *查询的结果
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     * @param \Library\Plugin\SimpleUserProfile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserProfile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Library\Plugin\SimpleUserProfile::class);
        $this->user_profile = $arr;

        return $this;
    }
}
