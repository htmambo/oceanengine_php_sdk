<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePlayableListV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 直玩素材特有字段
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var int
     */
    protected ?int $appMaterialId = null;

    /**
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * 审核原因
     * @var string
     */
    protected ?string $auditReason = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30DataMaterialsAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30DataMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 24h
     * @var string
     */
    protected ?string $qrImageUrl = null;

    /**
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30DataMaterialsStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $version = null;

    /**
     * 直玩素材特有字段
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 直玩素材特有字段
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppMaterialId(): ?int
    {
        return $this->appMaterialId;
    }

    /**
     * @param int $appMaterialId
     * @return self
     */
    public function setAppMaterialId(?int $appMaterialId): self
    {
        $this->appMaterialId = $appMaterialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * 审核原因
     * @return string
     */
    public function getAuditReason(): ?string
    {
        return $this->auditReason;
    }

    /**
     * 审核原因
     * @param string $auditReason
     * @return self
     */
    public function setAuditReason(?string $auditReason): self
    {
        $this->auditReason = $auditReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableListV30DataMaterialsAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30DataMaterialsAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
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
     * @return \Oceanengine\Models\FilePlayableListV30DataMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30DataMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 24h
     * @return string
     */
    public function getQrImageUrl(): ?string
    {
        return $this->qrImageUrl;
    }

    /**
     * 24h
     * @param string $qrImageUrl
     * @return self
     */
    public function setQrImageUrl(?string $qrImageUrl): self
    {
        $this->qrImageUrl = $qrImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableListV30DataMaterialsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30DataMaterialsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appMaterialId !== null) {
            $result['app_material_id'] = $this->appMaterialId;
        }
        if ($this->appPlayUri !== null) {
            $result['app_play_uri'] = $this->appPlayUri;
        }
        if ($this->auditReason !== null) {
            $result['audit_reason'] = $this->auditReason;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->qrImageUrl !== null) {
            $result['qr_image_url'] = $this->qrImageUrl;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_material_id'] ?? null) !== null) {
            $obj->appMaterialId = (int) $v;
        }
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
        }
        if (($v = $data['audit_reason'] ?? null) !== null) {
            $obj->auditReason = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['qr_image_url'] ?? null) !== null) {
            $obj->qrImageUrl = (string) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
