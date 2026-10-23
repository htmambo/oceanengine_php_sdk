<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdPreviewQrcodeGetV30ResponseDataData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30DataDataGenerate
     */
    protected ?string $generate = null;

    /**
     * @var string
     */
    protected ?string $idType = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var string
     */
    protected ?string $qrcodeMsgUrl = null;

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
     * @return \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30DataDataGenerate
     */
    public function getGenerate(): ?string
    {
        return $this->generate;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30DataDataGenerate $generate
     * @return self
     */
    public function setGenerate(?string $generate): self
    {
        $this->generate = $generate;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }

    /**
     * @param string $idType
     * @return self
     */
    public function setIdType(?string $idType): self
    {
        $this->idType = $idType;
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
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getQrcodeMsgUrl(): ?string
    {
        return $this->qrcodeMsgUrl;
    }

    /**
     * @param string $qrcodeMsgUrl
     * @return self
     */
    public function setQrcodeMsgUrl(?string $qrcodeMsgUrl): self
    {
        $this->qrcodeMsgUrl = $qrcodeMsgUrl;
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
        if ($this->generate !== null) {
            $result['generate'] = $this->generate;
        }
        if ($this->idType !== null) {
            $result['id_type'] = $this->idType;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->qrcodeMsgUrl !== null) {
            $result['qrcode_msg_url'] = $this->qrcodeMsgUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['generate'] ?? null) !== null) {
            $obj->generate = (string) $v;
        }
        if (($v = $data['id_type'] ?? null) !== null) {
            $obj->idType = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['qrcode_msg_url'] ?? null) !== null) {
            $obj->qrcodeMsgUrl = (string) $v;
        }
        return $obj;
    }
}
