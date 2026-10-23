<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCluePrivateMessageCallbackV2RequestClueData implements \JsonSerializable
{
    /**
     * 线索创建的秒级时间戳
     * @var int
     */
    protected ?int $createTimestamp = null;

    /**
     * isv/广告主自定义字段，字典结构。如 {\"ai_tag\": \"有意向\"}
     * @var array<string,string>
     */
    protected ?array $extInfo = null;

    /**
     * crm/isv中的标识线索唯一的id
     * @var string
     */
    protected ?string $externalId = null;

    /**
     * 留资用户名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 电话
     * @var string
     */
    protected ?string $phone = null;

    /**
     * 线索备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 自定义的标签，一次最多传入20个
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * 微信
     * @var string
     */
    protected ?string $weixin = null;

    /**
     * 线索创建的秒级时间戳
     * @return int
     */
    public function getCreateTimestamp(): ?int
    {
        return $this->createTimestamp;
    }

    /**
     * 线索创建的秒级时间戳
     * @param int $createTimestamp
     * @return self
     */
    public function setCreateTimestamp(?int $createTimestamp): self
    {
        $this->createTimestamp = $createTimestamp;
        return $this;
    }

    /**
     * isv/广告主自定义字段，字典结构。如 {\"ai_tag\": \"有意向\"}
     * @return array<string,string>
     */
    public function getExtInfo(): ?array
    {
        return $this->extInfo;
    }

    /**
     * isv/广告主自定义字段，字典结构。如 {\"ai_tag\": \"有意向\"}
     * @param array<string,string> $extInfo
     * @return self
     */
    public function setExtInfo(?array $extInfo): self
    {
        $this->extInfo = $extInfo;
        return $this;
    }

    /**
     * crm/isv中的标识线索唯一的id
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * crm/isv中的标识线索唯一的id
     * @param string $externalId
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * 留资用户名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 留资用户名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 电话
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 电话
     * @param string $phone
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 线索备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 线索备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 自定义的标签，一次最多传入20个
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * 自定义的标签，一次最多传入20个
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * 微信
     * @return string
     */
    public function getWeixin(): ?string
    {
        return $this->weixin;
    }

    /**
     * 微信
     * @param string $weixin
     * @return self
     */
    public function setWeixin(?string $weixin): self
    {
        $this->weixin = $weixin;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTimestamp !== null) {
            $result['create_timestamp'] = $this->createTimestamp;
        }
        if ($this->extInfo !== null) {
            $result['ext_info'] = $this->extInfo;
        }
        if ($this->externalId !== null) {
            $result['external_id'] = $this->externalId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->weixin !== null) {
            $result['weixin'] = $this->weixin;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_timestamp'] ?? null) !== null) {
            $obj->createTimestamp = (int) $v;
        }
        if (($v = $data['ext_info'] ?? null) !== null && is_array($v)) {
            $obj->extInfo = $v;
        }
        if (($v = $data['external_id'] ?? null) !== null) {
            $obj->externalId = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['phone'] ?? null) !== null) {
            $obj->phone = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['weixin'] ?? null) !== null) {
            $obj->weixin = (string) $v;
        }
        return $obj;
    }
}
