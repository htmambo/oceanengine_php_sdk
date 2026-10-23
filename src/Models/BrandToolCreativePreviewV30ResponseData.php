<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolCreativePreviewV30ResponseData implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * 预览二维码图片URL
     * @var string
     */
    protected ?string $previewQrcodeUrl = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 创意ID
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意ID
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * 预览二维码图片URL
     * @return string
     */
    public function getPreviewQrcodeUrl(): ?string
    {
        return $this->previewQrcodeUrl;
    }

    /**
     * 预览二维码图片URL
     * @param string $previewQrcodeUrl
     * @return self
     */
    public function setPreviewQrcodeUrl(?string $previewQrcodeUrl): self
    {
        $this->previewQrcodeUrl = $previewQrcodeUrl;
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
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->previewQrcodeUrl !== null) {
            $result['preview_qrcode_url'] = $this->previewQrcodeUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['preview_qrcode_url'] ?? null) !== null) {
            $obj->previewQrcodeUrl = (string) $v;
        }
        return $obj;
    }
}
