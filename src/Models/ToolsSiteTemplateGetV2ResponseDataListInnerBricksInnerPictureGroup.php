<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup implements \JsonSerializable
{
    /**
     * 组图内容列表
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroupContentInner[]
     */
    protected ?array $content = null;

    /**
     * 组图内容列表
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroupContentInner[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * 组图内容列表
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroupContentInner[] $content
     * @return self
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null && is_array($v)) {
            $obj->content = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroupContentInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
