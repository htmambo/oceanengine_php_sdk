<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselAwemeGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInner[]
     */
    protected ?array $imageAggregateList = null;

    /**
     * @var \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInner[]
     */
    public function getImageAggregateList(): ?array
    {
        return $this->imageAggregateList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInner[] $imageAggregateList
     * @return self
     */
    public function setImageAggregateList(?array $imageAggregateList): self
    {
        $this->imageAggregateList = $imageAggregateList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->imageAggregateList !== null) {
            $result['image_aggregate_list'] = $this->imageAggregateList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_aggregate_list'] ?? null) !== null && is_array($v)) {
            $obj->imageAggregateList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
