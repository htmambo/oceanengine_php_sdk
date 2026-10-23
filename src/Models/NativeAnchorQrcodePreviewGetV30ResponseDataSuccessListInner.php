<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorQrcodePreviewGetV30ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var string
     */
    protected ?string $anchorQrcodeUrl = null;

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorQrcodeUrl(): ?string
    {
        return $this->anchorQrcodeUrl;
    }

    /**
     * @param string $anchorQrcodeUrl
     * @return self
     */
    public function setAnchorQrcodeUrl(?string $anchorQrcodeUrl): self
    {
        $this->anchorQrcodeUrl = $anchorQrcodeUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorQrcodeUrl !== null) {
            $result['anchor_qrcode_url'] = $this->anchorQrcodeUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_qrcode_url'] ?? null) !== null) {
            $obj->anchorQrcodeUrl = (string) $v;
        }
        return $obj;
    }
}
