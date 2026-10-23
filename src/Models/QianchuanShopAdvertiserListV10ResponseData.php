<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanShopAdvertiserListV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataAdvIdListInner[]
     */
    protected ?array $advIdList = null;

    /**
     * @var int[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataAdvIdListInner[]
     */
    public function getAdvIdList(): ?array
    {
        return $this->advIdList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataAdvIdListInner[] $advIdList
     * @return self
     */
    public function setAdvIdList(?array $advIdList): self
    {
        $this->advIdList = $advIdList;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param int[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->advIdList !== null) {
            $result['adv_id_list'] = $this->advIdList;
        }
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id_list'] ?? null) !== null && is_array($v)) {
            $obj->advIdList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataAdvIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanShopAdvertiserListV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
