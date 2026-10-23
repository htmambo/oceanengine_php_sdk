<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskTaskAuthorGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataTaskAuthorsInfoInner[]
     */
    protected ?array $taskAuthorsInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataTaskAuthorsInfoInner[]
     */
    public function getTaskAuthorsInfo(): ?array
    {
        return $this->taskAuthorsInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataTaskAuthorsInfoInner[] $taskAuthorsInfo
     * @return self
     */
    public function setTaskAuthorsInfo(?array $taskAuthorsInfo): self
    {
        $this->taskAuthorsInfo = $taskAuthorsInfo;
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
        if ($this->taskAuthorsInfo !== null) {
            $result['task_authors_info'] = $this->taskAuthorsInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_authors_info'] ?? null) !== null && is_array($v)) {
            $obj->taskAuthorsInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30ResponseDataTaskAuthorsInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
