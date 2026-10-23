<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderGetV10ResponseData implements \JsonSerializable
{
    /**
     * 获取失败的订单id列表
     * @var int[]
     */
    protected ?array $failList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 获取失败的订单id列表
     * @return int[]
     */
    public function getFailList(): ?array
    {
        return $this->failList;
    }

    /**
     * 获取失败的订单id列表
     * @param int[] $failList
     * @return self
     */
    public function setFailList(?array $failList): self
    {
        $this->failList = $failList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->failList !== null) {
            $result['fail_list'] = $this->failList;
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
        if (($v = $data['fail_list'] ?? null) !== null && is_array($v)) {
            $obj->failList = $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
