<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AssetsCreativeComponentCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo
     */
    protected ?\Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo $componentInfo = null;

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
     * @return \Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo
     */
    public function getComponentInfo(): ?\Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo
    {
        return $this->componentInfo;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo $componentInfo
     * @return self
     */
    public function setComponentInfo(?\Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo $componentInfo): self
    {
        $this->componentInfo = $componentInfo;
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
        if ($this->componentInfo !== null) {
            $result['component_info'] = $this->componentInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = \Oceanengine\Models\AssetsCreativeComponentCreateV2RequestComponentInfo::fromArray($v);
        }
        return $obj;
    }
}
