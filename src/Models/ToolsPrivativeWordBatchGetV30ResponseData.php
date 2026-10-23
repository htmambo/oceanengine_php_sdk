<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordBatchGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataProjectsPrivativeInner[]
     */
    protected ?array $projectsPrivative = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataPromotionsPrivativeInner[]
     */
    protected ?array $promotionsPrivative = null;

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataProjectsPrivativeInner[]
     */
    public function getProjectsPrivative(): ?array
    {
        return $this->projectsPrivative;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataProjectsPrivativeInner[] $projectsPrivative
     * @return self
     */
    public function setProjectsPrivative(?array $projectsPrivative): self
    {
        $this->projectsPrivative = $projectsPrivative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataPromotionsPrivativeInner[]
     */
    public function getPromotionsPrivative(): ?array
    {
        return $this->promotionsPrivative;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataPromotionsPrivativeInner[] $promotionsPrivative
     * @return self
     */
    public function setPromotionsPrivative(?array $promotionsPrivative): self
    {
        $this->promotionsPrivative = $promotionsPrivative;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectsPrivative !== null) {
            $result['projects_privative'] = $this->projectsPrivative;
        }
        if ($this->promotionsPrivative !== null) {
            $result['promotions_privative'] = $this->promotionsPrivative;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['projects_privative'] ?? null) !== null && is_array($v)) {
            $obj->projectsPrivative = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataProjectsPrivativeInner::fromArray($vv), $v);
        }
        if (($v = $data['promotions_privative'] ?? null) !== null && is_array($v)) {
            $obj->promotionsPrivative = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordBatchGetV30ResponseDataPromotionsPrivativeInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
