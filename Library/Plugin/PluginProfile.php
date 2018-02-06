<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/plugin.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *最简单的用户信息，用于给别人呈现
 *
 * Generated from protobuf message <code>core.PluginProfile</code>
 */
class PluginProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string url_page = 3;</code>
     */
    private $url_page = '';
    /**
     * Generated from protobuf field <code>string url_api = 4;</code>
     */
    private $url_api = '';
    /**
     * Generated from protobuf field <code>string icon = 5;</code>
     */
    private $icon = '';
    /**
     * Generated from protobuf field <code>string auth_key = 6;</code>
     */
    private $auth_key = '';
    /**
     * Generated from protobuf field <code>string allowed_ip = 7;</code>
     */
    private $allowed_ip = '';
    /**
     * Generated from protobuf field <code>.core.PluginStatus status = 8;</code>
     */
    private $status = 0;

    public function __construct()
    {
        \GPBMetadata\Core\Plugin::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url_page = 3;</code>
     * @return string
     */
    public function getUrlPage()
    {
        return $this->url_page;
    }

    /**
     * Generated from protobuf field <code>string url_page = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlPage($var)
    {
        GPBUtil::checkString($var, true);
        $this->url_page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url_api = 4;</code>
     * @return string
     */
    public function getUrlApi()
    {
        return $this->url_api;
    }

    /**
     * Generated from protobuf field <code>string url_api = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlApi($var)
    {
        GPBUtil::checkString($var, true);
        $this->url_api = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string icon = 5;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Generated from protobuf field <code>string icon = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, true);
        $this->icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string auth_key = 6;</code>
     * @return string
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Generated from protobuf field <code>string auth_key = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->auth_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string allowed_ip = 7;</code>
     * @return string
     */
    public function getAllowedIp()
    {
        return $this->allowed_ip;
    }

    /**
     * Generated from protobuf field <code>string allowed_ip = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAllowedIp($var)
    {
        GPBUtil::checkString($var, true);
        $this->allowed_ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.PluginStatus status = 8;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.core.PluginStatus status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Library\Plugin\PluginStatus::class);
        $this->status = $var;

        return $this;
    }
}
