<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_common.proto

namespace Volc\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Business.VodSourceInfo</code>
 */
class VodSourceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 1;</code>
     */
    protected $FileId = '';
    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 2;</code>
     */
    protected $Md5 = '';
    /**
     *文件类型 video/audio
     *
     * Generated from protobuf field <code>string FileType = 3;</code>
     */
    protected $FileType = '';
    /**
     *编码格式
     *
     * Generated from protobuf field <code>string Codec = 4;</code>
     */
    protected $Codec = '';
    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 5;</code>
     */
    protected $Height = 0;
    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 6;</code>
     */
    protected $Width = 0;
    /**
     *文件格式
     *
     * Generated from protobuf field <code>string Format = 7;</code>
     */
    protected $Format = '';
    /**
     *时长
     *
     * Generated from protobuf field <code>float Duration = 8;</code>
     */
    protected $Duration = 0.0;
    /**
     *文件大小
     *
     * Generated from protobuf field <code>int64 Size = 9;</code>
     */
    protected $Size = 0;
    /**
     *对象地址
     *
     * Generated from protobuf field <code>string StoreUri = 10;</code>
     */
    protected $StoreUri = '';
    /**
     *视频分辨率
     *
     * Generated from protobuf field <code>string Definition = 11;</code>
     */
    protected $Definition = '';
    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>int64 Bitrate = 12;</code>
     */
    protected $Bitrate = 0;
    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 13;</code>
     */
    protected $Fps = 0.0;
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 14;</code>
     */
    protected $CreateTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FileId
     *          文件ID
     *     @type string $Md5
     *           hash值
     *     @type string $FileType
     *          文件类型 video/audio
     *     @type string $Codec
     *          编码格式
     *     @type int|string $Height
     *          视频高度
     *     @type int|string $Width
     *          视频宽度
     *     @type string $Format
     *          文件格式
     *     @type float $Duration
     *          时长
     *     @type int|string $Size
     *          文件大小
     *     @type string $StoreUri
     *          对象地址
     *     @type string $Definition
     *          视频分辨率
     *     @type int|string $Bitrate
     *          码率(Kbps)
     *     @type float $Fps
     *          帧率
     *     @type string $CreateTime
     *          创建时间
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 1;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->FileId;
    }

    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileId = $var;

        return $this;
    }

    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 2;</code>
     * @return string
     */
    public function getMd5()
    {
        return $this->Md5;
    }

    /**
     * hash值
     *
     * Generated from protobuf field <code>string Md5 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->Md5 = $var;

        return $this;
    }

    /**
     *文件类型 video/audio
     *
     * Generated from protobuf field <code>string FileType = 3;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     *文件类型 video/audio
     *
     * Generated from protobuf field <code>string FileType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     *编码格式
     *
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     *编码格式
     *
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 5;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int64 Height = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->Height = $var;

        return $this;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 6;</code>
     * @return int|string
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int64 Width = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->Width = $var;

        return $this;
    }

    /**
     *文件格式
     *
     * Generated from protobuf field <code>string Format = 7;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     *文件格式
     *
     * Generated from protobuf field <code>string Format = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     *时长
     *
     * Generated from protobuf field <code>float Duration = 8;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     *时长
     *
     * Generated from protobuf field <code>float Duration = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkFloat($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     *文件大小
     *
     * Generated from protobuf field <code>int64 Size = 9;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     *文件大小
     *
     * Generated from protobuf field <code>int64 Size = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->Size = $var;

        return $this;
    }

    /**
     *对象地址
     *
     * Generated from protobuf field <code>string StoreUri = 10;</code>
     * @return string
     */
    public function getStoreUri()
    {
        return $this->StoreUri;
    }

    /**
     *对象地址
     *
     * Generated from protobuf field <code>string StoreUri = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUri = $var;

        return $this;
    }

    /**
     *视频分辨率
     *
     * Generated from protobuf field <code>string Definition = 11;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     *视频分辨率
     *
     * Generated from protobuf field <code>string Definition = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>int64 Bitrate = 12;</code>
     * @return int|string
     */
    public function getBitrate()
    {
        return $this->Bitrate;
    }

    /**
     *码率(Kbps)
     *
     * Generated from protobuf field <code>int64 Bitrate = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkInt64($var);
        $this->Bitrate = $var;

        return $this;
    }

    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 13;</code>
     * @return float
     */
    public function getFps()
    {
        return $this->Fps;
    }

    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setFps($var)
    {
        GPBUtil::checkFloat($var);
        $this->Fps = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 14;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreateTime = $var;

        return $this;
    }

}

