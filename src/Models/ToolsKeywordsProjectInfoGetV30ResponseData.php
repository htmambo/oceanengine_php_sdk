<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsProjectInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30ResponseDataProjectInfoInner[]
     */
    protected ?array $projectInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30ResponseDataProjectInfoInner[]
     */
    public function getProjectInfo(): ?array
    {
        return $this->projectInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30ResponseDataProjectInfoInner[] $projectInfo
     * @return self
     */
    public function setProjectInfo(?array $projectInfo): self
    {
        $this->projectInfo = $projectInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectInfo !== null) {
            $result['project_info'] = $this->projectInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_info'] ?? null) !== null && is_array($v)) {
            $obj->projectInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30ResponseDataProjectInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
