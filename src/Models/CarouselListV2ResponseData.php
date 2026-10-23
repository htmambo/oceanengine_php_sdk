<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInner[]
     */
    protected ?array $carousels = null;

    /**
     * @var \Oceanengine\Models\CarouselListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\CarouselListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInner[]
     */
    public function getCarousels(): ?array
    {
        return $this->carousels;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInner[] $carousels
     * @return self
     */
    public function setCarousels(?array $carousels): self
    {
        $this->carousels = $carousels;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\CarouselListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\CarouselListV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->carousels !== null) {
            $result['carousels'] = $this->carousels;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousels'] ?? null) !== null && is_array($v)) {
            $obj->carousels = array_map(fn ($vv) => \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\CarouselListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
