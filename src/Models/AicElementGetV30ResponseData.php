<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementGetV30ResponseData implements \JsonSerializable
{
    /**
     * 返回结果
     * @var \Oceanengine\Models\AicElementGetV30ResponseDataElementsInner[]
     */
    protected ?array $elements = null;

    /**
     * @var \Oceanengine\Models\AicElementGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AicElementGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 返回结果
     * @return \Oceanengine\Models\AicElementGetV30ResponseDataElementsInner[]
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * 返回结果
     * @param \Oceanengine\Models\AicElementGetV30ResponseDataElementsInner[] $elements
     * @return self
     */
    public function setElements(?array $elements): self
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AicElementGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AicElementGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AicElementGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->elements !== null) {
            $result['elements'] = $this->elements;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['elements'] ?? null) !== null && is_array($v)) {
            $obj->elements = array_map(fn ($vv) => \Oceanengine\Models\AicElementGetV30ResponseDataElementsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AicElementGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
