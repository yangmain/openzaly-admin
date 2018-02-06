<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.TransportPackageData</code>
 */
class TransportPackageData extends \Google\Protobuf\Internal\Message
{
    /**
     *错误信息，如果err不为null，data很有可能是无用的。
     *
     * Generated from protobuf field <code>.core.ErrorInfo err = 1;</code>
     */
    private $err = null;
    /**
     *业务Data，由业务逻辑自己解析
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    private $data = '';
    /**
     *非业务逻辑的必要数据
     * 分为两个级别：Socket级 与 Request级
     * Socket级：只在链接建立后的第一个请求中传递，在链接的整个生命周期都有效。
     * Request级：在每一次请求中都可能会变化并传递。
     *
     * Generated from protobuf field <code>map<int32, string> header = 3;</code>
     */
    private $header;

    public function __construct()
    {
        \GPBMetadata\Core\Core::initOnce();
        parent::__construct();
    }

    /**
     *错误信息，如果err不为null，data很有可能是无用的。
     *
     * Generated from protobuf field <code>.core.ErrorInfo err = 1;</code>
     * @return \Library\Plugin\ErrorInfo
     */
    public function getErr()
    {
        return $this->err;
    }

    /**
     *错误信息，如果err不为null，data很有可能是无用的。
     *
     * Generated from protobuf field <code>.core.ErrorInfo err = 1;</code>
     * @param \Library\Plugin\ErrorInfo $var
     * @return $this
     */
    public function setErr($var)
    {
        GPBUtil::checkMessage($var, \Library\Plugin\ErrorInfo::class);
        $this->err = $var;

        return $this;
    }

    /**
     *业务Data，由业务逻辑自己解析
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *业务Data，由业务逻辑自己解析
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, false);
        $this->data = $var;

        return $this;
    }

    /**
     *非业务逻辑的必要数据
     * 分为两个级别：Socket级 与 Request级
     * Socket级：只在链接建立后的第一个请求中传递，在链接的整个生命周期都有效。
     * Request级：在每一次请求中都可能会变化并传递。
     *
     * Generated from protobuf field <code>map<int32, string> header = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     *非业务逻辑的必要数据
     * 分为两个级别：Socket级 与 Request级
     * Socket级：只在链接建立后的第一个请求中传递，在链接的整个生命周期都有效。
     * Request级：在每一次请求中都可能会变化并传递。
     *
     * Generated from protobuf field <code>map<int32, string> header = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::STRING);
        $this->header = $arr;

        return $this;
    }
}
