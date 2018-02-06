<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_plugin_update.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.HaiPluginUpdateRequest</code>
 */
class HaiPluginUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *需要更新的插件扩展
     *
     * Generated from protobuf field <code>.core.PluginProfile plugin = 1;</code>
     */
    private $plugin = null;

    public function __construct()
    {
        \GPBMetadata\Plugin\HaiPluginUpdate::initOnce();
        parent::__construct();
    }

    /**
     *需要更新的插件扩展
     *
     * Generated from protobuf field <code>.core.PluginProfile plugin = 1;</code>
     * @return \Library\Plugin\PluginProfile
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     *需要更新的插件扩展
     *
     * Generated from protobuf field <code>.core.PluginProfile plugin = 1;</code>
     * @param \Library\Plugin\PluginProfile $var
     * @return $this
     */
    public function setPlugin($var)
    {
        GPBUtil::checkMessage($var, \Library\Plugin\PluginProfile::class);
        $this->plugin = $var;

        return $this;
    }
}
