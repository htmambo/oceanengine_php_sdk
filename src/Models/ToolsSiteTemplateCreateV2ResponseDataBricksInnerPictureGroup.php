<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup implements \JsonSerializable
{
    /**
     * 组图内容列表
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroupContentInner[]
     */
    protected ?array $content = null;

    /**
     * 组图内容列表
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroupContentInner[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * 组图内容列表
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroupContentInner[] $content
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
            $obj->content = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroupContentInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
