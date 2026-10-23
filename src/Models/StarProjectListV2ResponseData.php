<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProjectListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarProjectListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarProjectListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StarProjectListV2ResponseDataProjectsInner[]
     */
    protected ?array $projects = null;

    /**
     * @return \Oceanengine\Models\StarProjectListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarProjectListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarProjectListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarProjectListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarProjectListV2ResponseDataProjectsInner[]
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * @param \Oceanengine\Models\StarProjectListV2ResponseDataProjectsInner[] $projects
     * @return self
     */
    public function setProjects(?array $projects): self
    {
        $this->projects = $projects;
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
        if ($this->projects !== null) {
            $result['projects'] = $this->projects;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarProjectListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['projects'] ?? null) !== null && is_array($v)) {
            $obj->projects = array_map(fn ($vv) => \Oceanengine\Models\StarProjectListV2ResponseDataProjectsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
