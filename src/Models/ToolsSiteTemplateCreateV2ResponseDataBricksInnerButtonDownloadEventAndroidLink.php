<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink implements \JsonSerializable
{
    /**
     * 快应用资产id
     * @var string
     */
    protected ?string $assetId = null;

    /**
     * 应用描述，为了展示效果，推荐12个中文字符长度
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType
     */
    protected ?string $linkType = null;

    /**
     * 快应用地址，当`link_type`等于`QUICK_APP`时，有值
     * @var string
     */
    protected ?string $quickApp = null;

    /**
     * 下载地址，当`link_type`等于`URL`时，有值
     * @var string
     */
    protected ?string $url = null;

    /**
     * 快应用资产id
     * @return string
     */
    public function getAssetId(): ?string
    {
        return $this->assetId;
    }

    /**
     * 快应用资产id
     * @param string $assetId
     * @return self
     */
    public function setAssetId(?string $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

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
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * 快应用地址，当`link_type`等于`QUICK_APP`时，有值
     * @return string
     */
    public function getQuickApp(): ?string
    {
        return $this->quickApp;
    }

    /**
     * 快应用地址，当`link_type`等于`QUICK_APP`时，有值
     * @param string $quickApp
     * @return self
     */
    public function setQuickApp(?string $quickApp): self
    {
        $this->quickApp = $quickApp;
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
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->quickApp !== null) {
            $result['quick_app'] = $this->quickApp;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (string) $v;
        }
        if (($v = $data['quick_app'] ?? null) !== null) {
            $obj->quickApp = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
