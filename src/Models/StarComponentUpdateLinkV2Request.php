<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentUpdateLinkV2Request implements \JsonSerializable
{
    /**
     * 组件ID
     * @var int
     */
    protected ?int $linkComponentId = null;

    /**
     * @var \Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo
     */
    protected ?\Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo $linkComponentInfo = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 组件ID
     * @return int
     */
    public function getLinkComponentId(): ?int
    {
        return $this->linkComponentId;
    }

    /**
     * 组件ID
     * @param int $linkComponentId
     * @return self
     */
    public function setLinkComponentId(?int $linkComponentId): self
    {
        $this->linkComponentId = $linkComponentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo
     */
    public function getLinkComponentInfo(): ?\Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo
    {
        return $this->linkComponentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo $linkComponentInfo
     * @return self
     */
    public function setLinkComponentInfo(?\Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo $linkComponentInfo): self
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
        if ($this->linkComponentId !== null) {
            $result['link_component_id'] = $this->linkComponentId;
        }
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
        if (($v = $data['link_component_id'] ?? null) !== null) {
            $obj->linkComponentId = (int) $v;
        }
        if (($v = $data['link_component_info'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentInfo = \Oceanengine\Models\StarComponentUpdateLinkV2RequestLinkComponentInfo::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
