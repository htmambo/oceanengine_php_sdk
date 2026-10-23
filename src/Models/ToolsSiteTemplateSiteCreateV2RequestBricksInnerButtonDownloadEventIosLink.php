<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink implements \JsonSerializable
{
    /**
     * 应用描述，为了展示效果，推荐12个中文字符长度
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType
     */
    protected ?string $linkType = null;

    /**
     * 链接地址，当`link_type`为URL时，必填
     * @var string
     */
    protected ?string $url = null;

    /**
     * 应用描述，为了展示效果，推荐12个中文字符长度
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 应用描述，为了展示效果，推荐12个中文字符长度
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * 链接地址，当`link_type`为URL时，必填
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 链接地址，当`link_type`为URL时，必填
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
