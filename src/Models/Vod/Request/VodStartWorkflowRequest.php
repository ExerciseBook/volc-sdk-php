<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Models\Vod\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Request.VodStartWorkflowRequest</code>
 */
class VodStartWorkflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     */
    protected $TemplateId = '';
    /**
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.WorkflowParams Input = 3;</code>
     */
    protected $Input = null;
    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     */
    protected $Priority = 0;
    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     */
    protected $CallbackArgs = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频Id
     *     @type string $TemplateId
     *           工作流模板Id
     *     @type \Volc\Models\Vod\Business\WorkflowParams $Input
     *           动态参数
     *     @type int $Priority
     *           任务优先级
     *     @type string $CallbackArgs
     *           回调参数
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频Id
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 工作流模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.WorkflowParams Input = 3;</code>
     * @return \Volc\Models\Vod\Business\WorkflowParams
     */
    public function getInput()
    {
        return $this->Input;
    }

    /**
     * 动态参数
     *
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.WorkflowParams Input = 3;</code>
     * @param \Volc\Models\Vod\Business\WorkflowParams $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Volc\Models\Vod\Business\WorkflowParams::class);
        $this->Input = $var;

        return $this;
    }

    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * 任务优先级
     *
     * Generated from protobuf field <code>int32 Priority = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->Priority = $var;

        return $this;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

}

