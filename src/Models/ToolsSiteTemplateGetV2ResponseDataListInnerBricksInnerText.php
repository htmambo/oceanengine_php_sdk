<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText implements \JsonSerializable
{
    /**
     * 文本内容，长度至少为1
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto $linkDto = null;

    /**
     * 文本内容，长度至少为1
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 文本内容，长度至少为1
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto
     */
    public function getLinkDto(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto
    {
        return $this->linkDto;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto $linkDto
     * @return self
     */
    public function setLinkDto(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto $linkDto): self
    {
        $this->linkDto = $linkDto;
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
        if ($this->linkDto !== null) {
            $result['link_dto'] = $this->linkDto;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['link_dto'] ?? null) !== null && is_array($v)) {
            $obj->linkDto = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerTextLinkDto::fromArray($v);
        }
        return $obj;
    }
}
