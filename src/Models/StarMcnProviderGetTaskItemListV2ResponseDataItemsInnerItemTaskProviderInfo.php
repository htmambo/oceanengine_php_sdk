<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $providerAdShareRatio = null;

    /**
     * @return int
     */
    public function getProviderAdShareRatio(): ?int
    {
        return $this->providerAdShareRatio;
    }

    /**
     * @param int $providerAdShareRatio
     * @return self
     */
    public function setProviderAdShareRatio(?int $providerAdShareRatio): self
    {
        $this->providerAdShareRatio = $providerAdShareRatio;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->providerAdShareRatio !== null) {
            $result['provider_ad_share_ratio'] = $this->providerAdShareRatio;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['provider_ad_share_ratio'] ?? null) !== null) {
            $obj->providerAdShareRatio = (int) $v;
        }
        return $obj;
    }
}
