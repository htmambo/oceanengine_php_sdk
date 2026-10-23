<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileCarouselListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInner[]
     */
    protected ?array $carouselList = null;

    /**
     * @var \Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInner[]
     */
    public function getCarouselList(): ?array
    {
        return $this->carouselList;
    }

    /**
     * @param \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInner[] $carouselList
     * @return self
     */
    public function setCarouselList(?array $carouselList): self
    {
        $this->carouselList = $carouselList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->carouselList !== null) {
            $result['carousel_list'] = $this->carouselList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselList = array_map(fn ($vv) => \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalFileCarouselListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
