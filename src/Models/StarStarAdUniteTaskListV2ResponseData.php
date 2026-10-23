<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataDemandsInner[]
     */
    protected ?array $demands = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataDemandsInner[]
     */
    public function getDemands(): ?array
    {
        return $this->demands;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataDemandsInner[] $demands
     * @return self
     */
    public function setDemands(?array $demands): self
    {
        $this->demands = $demands;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demands !== null) {
            $result['demands'] = $this->demands;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demands'] ?? null) !== null && is_array($v)) {
            $obj->demands = array_map(fn ($vv) => \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataDemandsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarStarAdUniteTaskListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
