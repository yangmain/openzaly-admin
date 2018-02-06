<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *群加密图片消息
 *
 * Generated from protobuf message <code>core.GroupSecretImage</code>
 */
class GroupSecretImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string msg_id = 1;</code>
     */
    private $msg_id = '';
    /**
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     */
    private $site_user_id = '';
    /**
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     */
    private $site_group_id = '';
    /**
     * Generated from protobuf field <code>string imageId = 4;</code>
     */
    private $imageId = '';
    /**
     *加密key
     *
     * Generated from protobuf field <code>string ts_key = 5;</code>
     */
    private $ts_key = '';
    /**
     * Generated from protobuf field <code>string site_device_id = 6;</code>
     */
    private $site_device_id = '';
    /**
     *消息时间
     *
     * Generated from protobuf field <code>int64 time = 7;</code>
     */
    private $time = 0;

    public function __construct()
    {
        \GPBMetadata\Core\Core::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string msg_id = 1;</code>
     * @return string
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * Generated from protobuf field <code>string msg_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, true);
        $this->msg_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     * @return string
     */
    public function getSiteGroupId()
    {
        return $this->site_group_id;
    }

    /**
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteGroupId($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string imageId = 4;</code>
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Generated from protobuf field <code>string imageId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setImageId($var)
    {
        GPBUtil::checkString($var, true);
        $this->imageId = $var;

        return $this;
    }

    /**
     *加密key
     *
     * Generated from protobuf field <code>string ts_key = 5;</code>
     * @return string
     */
    public function getTsKey()
    {
        return $this->ts_key;
    }

    /**
     *加密key
     *
     * Generated from protobuf field <code>string ts_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTsKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->ts_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string site_device_id = 6;</code>
     * @return string
     */
    public function getSiteDeviceId()
    {
        return $this->site_device_id;
    }

    /**
     * Generated from protobuf field <code>string site_device_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteDeviceId($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_device_id = $var;

        return $this;
    }

    /**
     *消息时间
     *
     * Generated from protobuf field <code>int64 time = 7;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *消息时间
     *
     * Generated from protobuf field <code>int64 time = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }
}
