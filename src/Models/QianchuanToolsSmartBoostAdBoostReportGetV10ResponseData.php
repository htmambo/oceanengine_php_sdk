<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostReportGetV10ResponseData implements \JsonSerializable
{
    /**
     * 起量版本号
     * @var int
     */
    protected ?int $adRaiseVersion = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * json返回值
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataRaiseResultsInner[]
     */
    protected ?array $raiseResults = null;

    /**
     * 起量版本号
     * @return int
     */
    public function getAdRaiseVersion(): ?int
    {
        return $this->adRaiseVersion;
    }

    /**
     * 起量版本号
     * @param int $adRaiseVersion
     * @return self
     */
    public function setAdRaiseVersion(?int $adRaiseVersion): self
    {
        $this->adRaiseVersion = $adRaiseVersion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * json返回值
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataRaiseResultsInner[]
     */
    public function getRaiseResults(): ?array
    {
        return $this->raiseResults;
    }

    /**
     * json返回值
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataRaiseResultsInner[] $raiseResults
     * @return self
     */
    public function setRaiseResults(?array $raiseResults): self
    {
        $this->raiseResults = $raiseResults;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adRaiseVersion !== null) {
            $result['ad_raise_version'] = $this->adRaiseVersion;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->raiseResults !== null) {
            $result['raise_results'] = $this->raiseResults;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_raise_version'] ?? null) !== null) {
            $obj->adRaiseVersion = (int) $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['raise_results'] ?? null) !== null && is_array($v)) {
            $obj->raiseResults = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataRaiseResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
