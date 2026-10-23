<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AssetsCreativeComponentUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo
     */
    protected ?\Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo $componentInfo = null;

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
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo
     */
    public function getComponentInfo(): ?\Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo
    {
        return $this->componentInfo;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo $componentInfo
     * @return self
     */
    public function setComponentInfo(?\Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo $componentInfo): self
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
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
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
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = \Oceanengine\Models\AssetsCreativeComponentUpdateV2RequestComponentInfo::fromArray($v);
        }
        return $obj;
    }
}
