<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalLifeAdvertiserListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataAdvListInner[]
     */
    protected ?array $advList = null;

    /**
     * @var \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataAdvListInner[]
     */
    public function getAdvList(): ?array
    {
        return $this->advList;
    }

    /**
     * @param \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataAdvListInner[] $advList
     * @return self
     */
    public function setAdvList(?array $advList): self
    {
        $this->advList = $advList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->advList !== null) {
            $result['adv_list'] = $this->advList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_list'] ?? null) !== null && is_array($v)) {
            $obj->advList = array_map(fn ($vv) => \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataAdvListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalLifeAdvertiserListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
