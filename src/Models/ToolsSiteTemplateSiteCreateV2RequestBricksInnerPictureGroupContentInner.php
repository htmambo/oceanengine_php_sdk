<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto $linkDto = null;

    /**
     * 标签，用户自定义标注
     * @var string
     */
    protected ?string $tag = null;

    /**
     * 用户自行上传的图片url，当content不为空时，必填
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto
     */
    public function getLinkDto(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto
    {
        return $this->linkDto;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto $linkDto
     * @return self
     */
    public function setLinkDto(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto $linkDto): self
    {
        $this->linkDto = $linkDto;
        return $this;
    }

    /**
     * 标签，用户自定义标注
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * 标签，用户自定义标注
     * @param string $tag
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * 用户自行上传的图片url，当content不为空时，必填
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 用户自行上传的图片url，当content不为空时，必填
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->linkDto !== null) {
            $result['link_dto'] = $this->linkDto;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link_dto'] ?? null) !== null && is_array($v)) {
            $obj->linkDto = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroupContentInnerLinkDto::fromArray($v);
        }
        if (($v = $data['tag'] ?? null) !== null) {
            $obj->tag = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
