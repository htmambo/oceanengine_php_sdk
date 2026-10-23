<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpPlayableListV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 素材uri
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 素材封面图 - 开平抽帧截图
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 试玩直玩素材mid
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 素材名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 预览二维码图片的url
     * @var string
     */
    protected ?string $qrImageUrl = null;

    /**
     * 素材的md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsStatus
     */
    protected ?string $status = null;

    /**
     * 试玩/直玩素材版本号
     * @var string
     */
    protected ?string $version = null;

    /**
     * 素材uri
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * 素材uri
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 素材封面图 - 开平抽帧截图
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 素材封面图 - 开平抽帧截图
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 试玩直玩素材mid
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 试玩直玩素材mid
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 素材名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 素材名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 预览二维码图片的url
     * @return string
     */
    public function getQrImageUrl(): ?string
    {
        return $this->qrImageUrl;
    }

    /**
     * 预览二维码图片的url
     * @param string $qrImageUrl
     * @return self
     */
    public function setQrImageUrl(?string $qrImageUrl): self
    {
        $this->qrImageUrl = $qrImageUrl;
        return $this;
    }

    /**
     * 素材的md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 素材的md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableListV30DataMaterialsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 试玩/直玩素材版本号
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * 试玩/直玩素材版本号
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
        if ($this->appPlayUri !== null) {
            $result['app_play_uri'] = $this->appPlayUri;
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
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
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
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
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
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
