<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 资产ID
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 资产ID
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产ID
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        return $obj;
    }
}
