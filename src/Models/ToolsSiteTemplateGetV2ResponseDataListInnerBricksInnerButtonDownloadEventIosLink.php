<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink implements \JsonSerializable
{
    /**
     * 应用描述，为了展示效果，推荐12个中文字符长度
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType
     */
    protected ?string $linkType = null;

    /**
     * 下载地址，当`link_type`等于`URL`时，有值
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
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * 下载地址，当`link_type`等于`URL`时，有值
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 下载地址，当`link_type`等于`URL`时，有值
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
