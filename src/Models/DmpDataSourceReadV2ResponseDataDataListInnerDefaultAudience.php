<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $calculateSubType = null;

    /**
     * @var int
     */
    protected ?int $calculateType = null;

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
     * @var int
     */
    protected ?int $customType = null;

    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus
     */
    protected ?string $deliveryStatus = null;

    /**
     * @var string
     */
    protected ?string $expiryDate = null;

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
     * @var int
     */
    protected ?int $source = null;

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
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalculateSubType(): ?int
    {
        return $this->calculateSubType;
    }

    /**
     * @param int $calculateSubType
     * @return self
     */
    public function setCalculateSubType(?int $calculateSubType): self
    {
        $this->calculateSubType = $calculateSubType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalculateType(): ?int
    {
        return $this->calculateType;
    }

    /**
     * @param int $calculateType
     * @return self
     */
    public function setCalculateType(?int $calculateType): self
    {
        $this->calculateType = $calculateType;
        return $this;
    }

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
     * @return int
     */
    public function getCustomType(): ?int
    {
        return $this->customType;
    }

    /**
     * @param int $customType
     * @return self
     */
    public function setCustomType(?int $customType): self
    {
        $this->customType = $customType;
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
     * @return \Oceanengine\Models\DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus(?string $deliveryStatus): self
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * @param string $expiryDate
     * @return self
     */
    public function setExpiryDate(?string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
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
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return self
     */
    public function setSource(?int $source): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->calculateSubType !== null) {
            $result['calculate_sub_type'] = $this->calculateSubType;
        }
        if ($this->calculateType !== null) {
            $result['calculate_type'] = $this->calculateType;
        }
        if ($this->coverNum !== null) {
            $result['cover_num'] = $this->coverNum;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->customType !== null) {
            $result['custom_type'] = $this->customType;
        }
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        if ($this->deliveryStatus !== null) {
            $result['delivery_status'] = $this->deliveryStatus;
        }
        if ($this->expiryDate !== null) {
            $result['expiry_date'] = $this->expiryDate;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['calculate_sub_type'] ?? null) !== null) {
            $obj->calculateSubType = (int) $v;
        }
        if (($v = $data['calculate_type'] ?? null) !== null) {
            $obj->calculateType = (int) $v;
        }
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['custom_type'] ?? null) !== null) {
            $obj->customType = (int) $v;
        }
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        if (($v = $data['delivery_status'] ?? null) !== null) {
            $obj->deliveryStatus = (string) $v;
        }
        if (($v = $data['expiry_date'] ?? null) !== null) {
            $obj->expiryDate = (string) $v;
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
            $obj->source = (int) $v;
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
