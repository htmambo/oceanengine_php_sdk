<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMarketPageGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalMarketPageGetV30ResponseDataMarkPageInfoInner[]
     */
    protected ?array $markPageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalMarketPageGetV30ResponseDataMarkPageInfoInner[]
     */
    public function getMarkPageInfo(): ?array
    {
        return $this->markPageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalMarketPageGetV30ResponseDataMarkPageInfoInner[] $markPageInfo
     * @return self
     */
    public function setMarkPageInfo(?array $markPageInfo): self
    {
        $this->markPageInfo = $markPageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->markPageInfo !== null) {
            $result['mark_page_info'] = $this->markPageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['mark_page_info'] ?? null) !== null && is_array($v)) {
            $obj->markPageInfo = array_map(fn ($vv) => \Oceanengine\Models\LocalMarketPageGetV30ResponseDataMarkPageInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
