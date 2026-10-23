<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerImageMaterialInner implements \JsonSerializable
{
    /**
     * 审核拒绝图片高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 审核拒绝图片uri
     * @var string
     */
    protected ?string $webUri = null;

    /**
     * 审核拒绝图片url
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * 审核拒绝图片宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 审核拒绝图片高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 审核拒绝图片高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 审核拒绝图片uri
     * @return string
     */
    public function getWebUri(): ?string
    {
        return $this->webUri;
    }

    /**
     * 审核拒绝图片uri
     * @param string $webUri
     * @return self
     */
    public function setWebUri(?string $webUri): self
    {
        $this->webUri = $webUri;
        return $this;
    }

    /**
     * 审核拒绝图片url
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * 审核拒绝图片url
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * 审核拒绝图片宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 审核拒绝图片宽度
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->webUri !== null) {
            $result['web_uri'] = $this->webUri;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['web_uri'] ?? null) !== null) {
            $obj->webUri = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
