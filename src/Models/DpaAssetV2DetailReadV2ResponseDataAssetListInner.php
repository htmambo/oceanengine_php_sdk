<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2DetailReadV2ResponseDataAssetListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 投放条件创建时间，格式: yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $assetCreateTime = null;

    /**
     * 投放条件id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 投放条件最近一次修改时间，格式: yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $assetModifyTime = null;

    /**
     * 投放条件名称
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListSource
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListStatus
     */
    protected ?string $status = null;

    /**
     * 线索商品id
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放条件创建时间，格式: yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getAssetCreateTime(): ?string
    {
        return $this->assetCreateTime;
    }

    /**
     * 投放条件创建时间，格式: yyyy-MM-dd HH:mm:ss
     * @param string $assetCreateTime
     * @return self
     */
    public function setAssetCreateTime(?string $assetCreateTime): self
    {
        $this->assetCreateTime = $assetCreateTime;
        return $this;
    }

    /**
     * 投放条件id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 投放条件id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 投放条件最近一次修改时间，格式: yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getAssetModifyTime(): ?string
    {
        return $this->assetModifyTime;
    }

    /**
     * 投放条件最近一次修改时间，格式: yyyy-MM-dd HH:mm:ss
     * @param string $assetModifyTime
     * @return self
     */
    public function setAssetModifyTime(?string $assetModifyTime): self
    {
        $this->assetModifyTime = $assetModifyTime;
        return $this;
    }

    /**
     * 投放条件名称
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 投放条件名称
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2DetailReadV2DataAssetListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 线索商品id
     * @return int
     */
    public function getUniqueProductId(): ?int
    {
        return $this->uniqueProductId;
    }

    /**
     * 线索商品id
     * @param int $uniqueProductId
     * @return self
     */
    public function setUniqueProductId(?int $uniqueProductId): self
    {
        $this->uniqueProductId = $uniqueProductId;
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
        if ($this->assetCreateTime !== null) {
            $result['asset_create_time'] = $this->assetCreateTime;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetModifyTime !== null) {
            $result['asset_modify_time'] = $this->assetModifyTime;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->uniqueProductId !== null) {
            $result['unique_product_id'] = $this->uniqueProductId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['asset_create_time'] ?? null) !== null) {
            $obj->assetCreateTime = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_modify_time'] ?? null) !== null) {
            $obj->assetModifyTime = (string) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['unique_product_id'] ?? null) !== null) {
            $obj->uniqueProductId = (int) $v;
        }
        return $obj;
    }
}
