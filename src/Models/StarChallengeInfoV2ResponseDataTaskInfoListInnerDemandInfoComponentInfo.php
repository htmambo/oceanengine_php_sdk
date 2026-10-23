<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $industryComponentId = null;

    /**
     * @var int[]
     */
    protected ?array $linkComponentIds = null;

    /**
     * @var int
     */
    protected ?int $liveAttractComponentId = null;

    /**
     * @return int
     */
    public function getIndustryComponentId(): ?int
    {
        return $this->industryComponentId;
    }

    /**
     * @param int $industryComponentId
     * @return self
     */
    public function setIndustryComponentId(?int $industryComponentId): self
    {
        $this->industryComponentId = $industryComponentId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getLinkComponentIds(): ?array
    {
        return $this->linkComponentIds;
    }

    /**
     * @param int[] $linkComponentIds
     * @return self
     */
    public function setLinkComponentIds(?array $linkComponentIds): self
    {
        $this->linkComponentIds = $linkComponentIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveAttractComponentId(): ?int
    {
        return $this->liveAttractComponentId;
    }

    /**
     * @param int $liveAttractComponentId
     * @return self
     */
    public function setLiveAttractComponentId(?int $liveAttractComponentId): self
    {
        $this->liveAttractComponentId = $liveAttractComponentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industryComponentId !== null) {
            $result['industry_component_id'] = $this->industryComponentId;
        }
        if ($this->linkComponentIds !== null) {
            $result['link_component_ids'] = $this->linkComponentIds;
        }
        if ($this->liveAttractComponentId !== null) {
            $result['live_attract_component_id'] = $this->liveAttractComponentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry_component_id'] ?? null) !== null) {
            $obj->industryComponentId = (int) $v;
        }
        if (($v = $data['link_component_ids'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentIds = $v;
        }
        if (($v = $data['live_attract_component_id'] ?? null) !== null) {
            $obj->liveAttractComponentId = (int) $v;
        }
        return $obj;
    }
}
