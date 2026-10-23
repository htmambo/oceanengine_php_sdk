<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalConsultAwameListGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataConsultAwemeListInner[]
     */
    protected ?array $consultAwemeList = null;

    /**
     * @var \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataConsultAwemeListInner[]
     */
    public function getConsultAwemeList(): ?array
    {
        return $this->consultAwemeList;
    }

    /**
     * @param \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataConsultAwemeListInner[] $consultAwemeList
     * @return self
     */
    public function setConsultAwemeList(?array $consultAwemeList): self
    {
        $this->consultAwemeList = $consultAwemeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->consultAwemeList !== null) {
            $result['consult_aweme_list'] = $this->consultAwemeList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['consult_aweme_list'] ?? null) !== null && is_array($v)) {
            $obj->consultAwemeList = array_map(fn ($vv) => \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataConsultAwemeListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalConsultAwameListGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
