<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateLinkV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo
     */
    protected ?\Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo $linkComponentInfo = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo
     */
    public function getLinkComponentInfo(): ?\Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo
    {
        return $this->linkComponentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo $linkComponentInfo
     * @return self
     */
    public function setLinkComponentInfo(?\Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo $linkComponentInfo): self
    {
        $this->linkComponentInfo = $linkComponentInfo;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->linkComponentInfo !== null) {
            $result['link_component_info'] = $this->linkComponentInfo;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link_component_info'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentInfo = \Oceanengine\Models\StarComponentCreateLinkV2RequestLinkComponentInfo::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
