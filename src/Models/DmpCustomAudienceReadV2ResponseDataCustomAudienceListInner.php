<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceReadV2ResponseDataCustomAudienceListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @var \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListDeliveryStatus
     */
    protected ?string $deliveryStatus = null;

    /**
     * @var int
     */
    protected ?int $existPullOffTag = null;

    /**
     * @var int
     */
    protected ?int $isdel = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $pushStatus = null;

    /**
     * @var \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListSource
     */
    protected ?string $source = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var string
     */
    protected ?string $tag = null;

    /**
     * @var string
     */
    protected ?string $thirdPartyInfo = null;

    /**
     * @var int
     */
    protected ?int $uploadNum = null;

    /**
     * @return int
     */
    public function getCoverNum(): ?int
    {
        return $this->coverNum;
    }

    /**
     * @param int $coverNum
     * @return self
     */
    public function setCoverNum(?int $coverNum): self
    {
        $this->coverNum = $coverNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataSourceId(): ?string
    {
        return $this->dataSourceId;
    }

    /**
     * @param string $dataSourceId
     * @return self
     */
    public function setDataSourceId(?string $dataSourceId): self
    {
        $this->dataSourceId = $dataSourceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListDeliveryStatus
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListDeliveryStatus $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus(?string $deliveryStatus): self
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getExistPullOffTag(): ?int
    {
        return $this->existPullOffTag;
    }

    /**
     * @param int $existPullOffTag
     * @return self
     */
    public function setExistPullOffTag(?int $existPullOffTag): self
    {
        $this->existPullOffTag = $existPullOffTag;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsdel(): ?int
    {
        return $this->isdel;
    }

    /**
     * @param int $isdel
     * @return self
     */
    public function setIsdel(?int $isdel): self
    {
        $this->isdel = $isdel;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPushStatus(): ?int
    {
        return $this->pushStatus;
    }

    /**
     * @param int $pushStatus
     * @return self
     */
    public function setPushStatus(?int $pushStatus): self
    {
        $this->pushStatus = $pushStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceReadV2DataCustomAudienceListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyInfo(): ?string
    {
        return $this->thirdPartyInfo;
    }

    /**
     * @param string $thirdPartyInfo
     * @return self
     */
    public function setThirdPartyInfo(?string $thirdPartyInfo): self
    {
        $this->thirdPartyInfo = $thirdPartyInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getUploadNum(): ?int
    {
        return $this->uploadNum;
    }

    /**
     * @param int $uploadNum
     * @return self
     */
    public function setUploadNum(?int $uploadNum): self
    {
        $this->uploadNum = $uploadNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverNum !== null) {
            $result['cover_num'] = $this->coverNum;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        if ($this->deliveryStatus !== null) {
            $result['delivery_status'] = $this->deliveryStatus;
        }
        if ($this->existPullOffTag !== null) {
            $result['exist_pull_off_tag'] = $this->existPullOffTag;
        }
        if ($this->isdel !== null) {
            $result['isdel'] = $this->isdel;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->pushStatus !== null) {
            $result['push_status'] = $this->pushStatus;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        if ($this->thirdPartyInfo !== null) {
            $result['third_party_info'] = $this->thirdPartyInfo;
        }
        if ($this->uploadNum !== null) {
            $result['upload_num'] = $this->uploadNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        if (($v = $data['delivery_status'] ?? null) !== null) {
            $obj->deliveryStatus = (string) $v;
        }
        if (($v = $data['exist_pull_off_tag'] ?? null) !== null) {
            $obj->existPullOffTag = (int) $v;
        }
        if (($v = $data['isdel'] ?? null) !== null) {
            $obj->isdel = (int) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['push_status'] ?? null) !== null) {
            $obj->pushStatus = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['tag'] ?? null) !== null) {
            $obj->tag = (string) $v;
        }
        if (($v = $data['third_party_info'] ?? null) !== null) {
            $obj->thirdPartyInfo = (string) $v;
        }
        if (($v = $data['upload_num'] ?? null) !== null) {
            $obj->uploadNum = (int) $v;
        }
        return $obj;
    }
}
