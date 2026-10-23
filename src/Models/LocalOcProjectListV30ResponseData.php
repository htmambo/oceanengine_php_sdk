<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInner[]
     */
    protected ?array $projectList = null;

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInner[]
     */
    public function getProjectList(): ?array
    {
        return $this->projectList;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInner[] $projectList
     * @return self
     */
    public function setProjectList(?array $projectList): self
    {
        $this->projectList = $projectList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->projectList !== null) {
            $result['project_list'] = $this->projectList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalOcProjectListV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['project_list'] ?? null) !== null && is_array($v)) {
            $obj->projectList = array_map(fn ($vv) => \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
