<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAbnormalAssetsGetV30ResponseData implements \JsonSerializable
{
    /**
     * 最新一天的接入状态（天级别更新）
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 分包的接入状态信息
     * @var \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInner[]
     */
    protected ?array $singleCase = null;

    /**
     * 最新一天的接入状态（天级别更新）
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 最新一天的接入状态（天级别更新）
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 分包的接入状态信息
     * @return \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInner[]
     */
    public function getSingleCase(): ?array
    {
        return $this->singleCase;
    }

    /**
     * 分包的接入状态信息
     * @param \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInner[] $singleCase
     * @return self
     */
    public function setSingleCase(?array $singleCase): self
    {
        $this->singleCase = $singleCase;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->singleCase !== null) {
            $result['single_case'] = $this->singleCase;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['single_case'] ?? null) !== null && is_array($v)) {
            $obj->singleCase = array_map(fn ($vv) => \Oceanengine\Models\EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
