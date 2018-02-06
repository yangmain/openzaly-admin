<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/config.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 站点配置信息
 *
 * Generated from protobuf message <code>core.SiteConfig</code>
 */
class SiteConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     */
    private $site_address = '';
    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     */
    private $site_port = 0;
    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     */
    private $site_name = '';
    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     */
    private $site_logo = '';
    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     */
    private $site_version = '';
    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     */
    private $site_introduction = '';
    /**
     *站点注册方式
     *
     * Generated from protobuf field <code>int32 register_way = 7;</code>
     */
    private $register_way = 0;
    /**
     *支持图片大小
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     */
    private $pic_size = '';
    /**
     *站点状态
     *
     * Generated from protobuf field <code>int32 site_status = 9;</code>
     */
    private $site_status = 0;
    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     */
    private $site_status_info = '';
    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>int32 u2_encryption_status = 11;</code>
     */
    private $u2_encryption_status = 0;

    public function __construct()
    {
        \GPBMetadata\Core\Config::initOnce();
        parent::__construct();
    }

    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     * @return string
     */
    public function getSiteAddress()
    {
        return $this->site_address;
    }

    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_address = $var;

        return $this;
    }

    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     * @return int
     */
    public function getSitePort()
    {
        return $this->site_port;
    }

    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSitePort($var)
    {
        GPBUtil::checkInt32($var);
        $this->site_port = $var;

        return $this;
    }

    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     * @return string
     */
    public function getSiteName()
    {
        return $this->site_name;
    }

    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteName($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_name = $var;

        return $this;
    }

    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     * @return string
     */
    public function getSiteLogo()
    {
        return $this->site_logo;
    }

    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteLogo($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_logo = $var;

        return $this;
    }

    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     * @return string
     */
    public function getSiteVersion()
    {
        return $this->site_version;
    }

    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_version = $var;

        return $this;
    }

    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     * @return string
     */
    public function getSiteIntroduction()
    {
        return $this->site_introduction;
    }

    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteIntroduction($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_introduction = $var;

        return $this;
    }

    /**
     *站点注册方式
     *
     * Generated from protobuf field <code>int32 register_way = 7;</code>
     * @return int
     */
    public function getRegisterWay()
    {
        return $this->register_way;
    }

    /**
     *站点注册方式
     *
     * Generated from protobuf field <code>int32 register_way = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRegisterWay($var)
    {
        GPBUtil::checkInt32($var);
        $this->register_way = $var;

        return $this;
    }

    /**
     *支持图片大小
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     * @return string
     */
    public function getPicSize()
    {
        return $this->pic_size;
    }

    /**
     *支持图片大小
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPicSize($var)
    {
        GPBUtil::checkString($var, true);
        $this->pic_size = $var;

        return $this;
    }

    /**
     *站点状态
     *
     * Generated from protobuf field <code>int32 site_status = 9;</code>
     * @return int
     */
    public function getSiteStatus()
    {
        return $this->site_status;
    }

    /**
     *站点状态
     *
     * Generated from protobuf field <code>int32 site_status = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSiteStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->site_status = $var;

        return $this;
    }

    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     * @return string
     */
    public function getSiteStatusInfo()
    {
        return $this->site_status_info;
    }

    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteStatusInfo($var)
    {
        GPBUtil::checkString($var, true);
        $this->site_status_info = $var;

        return $this;
    }

    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>int32 u2_encryption_status = 11;</code>
     * @return int
     */
    public function getU2EncryptionStatus()
    {
        return $this->u2_encryption_status;
    }

    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>int32 u2_encryption_status = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setU2EncryptionStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->u2_encryption_status = $var;

        return $this;
    }
}