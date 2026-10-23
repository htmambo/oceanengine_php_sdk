<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskItemListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataStatInfoInner[]
     */
    protected ?array $statInfo = null;

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataStatInfoInner[]
     */
    public function getStatInfo(): ?array
    {
        return $this->statInfo;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataStatInfoInner[] $statInfo
     * @return self
     */
    public function setStatInfo(?array $statInfo): self
    {
        $this->statInfo = $statInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->statInfo !== null) {
            $result['stat_info'] = $this->statInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['stat_info'] ?? null) !== null && is_array($v)) {
            $obj->statInfo = array_map(fn ($vv) => \Oceanengine\Models\StarStarAdUniteTaskItemListV2ResponseDataStatInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
