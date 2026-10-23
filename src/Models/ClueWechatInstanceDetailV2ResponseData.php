<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceDetailV2ResponseData implements \JsonSerializable
{
    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 微信号码包ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $modTime = null;

    /**
     * 微信号码包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ClueWechatInstanceDetailV2DataSubType
     */
    protected ?string $subType = null;

    /**
     * @var \Oceanengine\Models\ClueWechatInstanceDetailV2DataSuffix
     */
    protected ?string $suffix = null;

    /**
     * @var \Oceanengine\Models\ClueWechatInstanceDetailV2ResponseDataWechatListInner[]
     */
    protected ?array $wechatList = null;

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 微信号码包ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信号码包ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getModTime(): ?string
    {
        return $this->modTime;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @param string $modTime
     * @return self
     */
    public function setModTime(?string $modTime): self
    {
        $this->modTime = $modTime;
        return $this;
    }

    /**
     * 微信号码包名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 微信号码包名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceDetailV2DataSubType
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceDetailV2DataSubType $subType
     * @return self
     */
    public function setSubType(?string $subType): self
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceDetailV2DataSuffix
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceDetailV2DataSuffix $suffix
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceDetailV2ResponseDataWechatListInner[]
     */
    public function getWechatList(): ?array
    {
        return $this->wechatList;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceDetailV2ResponseDataWechatListInner[] $wechatList
     * @return self
     */
    public function setWechatList(?array $wechatList): self
    {
        $this->wechatList = $wechatList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->modTime !== null) {
            $result['mod_time'] = $this->modTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subType !== null) {
            $result['sub_type'] = $this->subType;
        }
        if ($this->suffix !== null) {
            $result['suffix'] = $this->suffix;
        }
        if ($this->wechatList !== null) {
            $result['wechat_list'] = $this->wechatList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['mod_time'] ?? null) !== null) {
            $obj->modTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sub_type'] ?? null) !== null) {
            $obj->subType = (string) $v;
        }
        if (($v = $data['suffix'] ?? null) !== null) {
            $obj->suffix = (string) $v;
        }
        if (($v = $data['wechat_list'] ?? null) !== null && is_array($v)) {
            $obj->wechatList = array_map(fn ($vv) => \Oceanengine\Models\ClueWechatInstanceDetailV2ResponseDataWechatListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
