<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2ListV2RequestFiltering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaAssetV2ListV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\DpaAssetV2ListV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2ListV2FilteringStatus $status
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
