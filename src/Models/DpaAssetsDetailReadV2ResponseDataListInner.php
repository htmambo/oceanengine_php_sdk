<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetsDetailReadV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $assetCreateTime = null;

    /**
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * @var string
     */
    protected ?string $assetModifyTime = null;

    /**
     * @var \Oceanengine\Models\DpaAssetsDetailReadV2DataListAssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\DpaAssetsDetailReadV2DataListAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\DpaAssetsDetailReadV2DataListSource
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\DpaAssetsDetailReadV2DataListStatus
     */
    protected ?string $status = null;

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
     * @return string
     */
    public function getAssetCreateTime(): ?string
    {
        return $this->assetCreateTime;
    }

    /**
     * @param string $assetCreateTime
     * @return self
     */
    public function setAssetCreateTime(?string $assetCreateTime): self
    {
        $this->assetCreateTime = $assetCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetModifyTime(): ?string
    {
        return $this->assetModifyTime;
    }

    /**
     * @param string $assetModifyTime
     * @return self
     */
    public function setAssetModifyTime(?string $assetModifyTime): self
    {
        $this->assetModifyTime = $assetModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetsDetailReadV2DataListAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetsDetailReadV2DataListAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetsDetailReadV2DataListAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetsDetailReadV2DataListAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetsDetailReadV2DataListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetsDetailReadV2DataListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetsDetailReadV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetsDetailReadV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
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
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
