<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative $advancedCreative = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo $advancedCreativeInfo = null;

    /**
     * 三方购物车锚点ID
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * 抖音号ID
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 是否AI生成
     * @var bool
     */
    protected ?bool $creativeIsAIGC = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $externalOpenUrl = null;

    /**
     * 落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 落地页是否包含下载链接
     * @var bool
     */
    protected ?bool $externalUrlIsDownload = null;

    /**
     * 落地页标题
     * @var string
     */
    protected ?string $externalUrlTitle = null;

    /**
     * 抖音号UID
     * @var int
     */
    protected ?int $iesCoreUserId = null;

    /**
     * 抖音视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 素材包ID
     * @var int
     */
    protected ?int $materialPackageId = null;

    /**
     * 购物车无分佣直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 创意标题，选择素材包和抖音视频ID时无需填写
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 购物车无分佣链接
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * web_url是否是下载类落地页链接
     * @var bool
     */
    protected ?bool $webUrlIsDownload = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative
     */
    public function getAdvancedCreative(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative
    {
        return $this->advancedCreative;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative $advancedCreative
     * @return self
     */
    public function setAdvancedCreative(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative $advancedCreative): self
    {
        $this->advancedCreative = $advancedCreative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo
     */
    public function getAdvancedCreativeInfo(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo
    {
        return $this->advancedCreativeInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo $advancedCreativeInfo
     * @return self
     */
    public function setAdvancedCreativeInfo(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo $advancedCreativeInfo): self
    {
        $this->advancedCreativeInfo = $advancedCreativeInfo;
        return $this;
    }

    /**
     * 三方购物车锚点ID
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * 三方购物车锚点ID
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * 抖音号ID
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号ID
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 是否AI生成
     * @return bool
     */
    public function getCreativeIsAIGC(): ?bool
    {
        return $this->creativeIsAIGC;
    }

    /**
     * 是否AI生成
     * @param bool $creativeIsAIGC
     * @return self
     */
    public function setCreativeIsAIGC(?bool $creativeIsAIGC): self
    {
        $this->creativeIsAIGC = $creativeIsAIGC;
        return $this;
    }

    /**
     * 直达链接
     * @return string
     */
    public function getExternalOpenUrl(): ?string
    {
        return $this->externalOpenUrl;
    }

    /**
     * 直达链接
     * @param string $externalOpenUrl
     * @return self
     */
    public function setExternalOpenUrl(?string $externalOpenUrl): self
    {
        $this->externalOpenUrl = $externalOpenUrl;
        return $this;
    }

    /**
     * 落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 落地页是否包含下载链接
     * @return bool
     */
    public function getExternalUrlIsDownload(): ?bool
    {
        return $this->externalUrlIsDownload;
    }

    /**
     * 落地页是否包含下载链接
     * @param bool $externalUrlIsDownload
     * @return self
     */
    public function setExternalUrlIsDownload(?bool $externalUrlIsDownload): self
    {
        $this->externalUrlIsDownload = $externalUrlIsDownload;
        return $this;
    }

    /**
     * 落地页标题
     * @return string
     */
    public function getExternalUrlTitle(): ?string
    {
        return $this->externalUrlTitle;
    }

    /**
     * 落地页标题
     * @param string $externalUrlTitle
     * @return self
     */
    public function setExternalUrlTitle(?string $externalUrlTitle): self
    {
        $this->externalUrlTitle = $externalUrlTitle;
        return $this;
    }

    /**
     * 抖音号UID
     * @return int
     */
    public function getIesCoreUserId(): ?int
    {
        return $this->iesCoreUserId;
    }

    /**
     * 抖音号UID
     * @param int $iesCoreUserId
     * @return self
     */
    public function setIesCoreUserId(?int $iesCoreUserId): self
    {
        $this->iesCoreUserId = $iesCoreUserId;
        return $this;
    }

    /**
     * 抖音视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 素材包ID
     * @return int
     */
    public function getMaterialPackageId(): ?int
    {
        return $this->materialPackageId;
    }

    /**
     * 素材包ID
     * @param int $materialPackageId
     * @return self
     */
    public function setMaterialPackageId(?int $materialPackageId): self
    {
        $this->materialPackageId = $materialPackageId;
        return $this;
    }

    /**
     * 购物车无分佣直达链接
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 购物车无分佣直达链接
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * 创意标题，选择素材包和抖音视频ID时无需填写
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 创意标题，选择素材包和抖音视频ID时无需填写
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 购物车无分佣链接
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * 购物车无分佣链接
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * web_url是否是下载类落地页链接
     * @return bool
     */
    public function getWebUrlIsDownload(): ?bool
    {
        return $this->webUrlIsDownload;
    }

    /**
     * web_url是否是下载类落地页链接
     * @param bool $webUrlIsDownload
     * @return self
     */
    public function setWebUrlIsDownload(?bool $webUrlIsDownload): self
    {
        $this->webUrlIsDownload = $webUrlIsDownload;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advancedCreative !== null) {
            $result['advanced_creative'] = $this->advancedCreative;
        }
        if ($this->advancedCreativeInfo !== null) {
            $result['advanced_creative_info'] = $this->advancedCreativeInfo;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->creativeIsAIGC !== null) {
            $result['creative_is_AIGC'] = $this->creativeIsAIGC;
        }
        if ($this->externalOpenUrl !== null) {
            $result['external_open_url'] = $this->externalOpenUrl;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->externalUrlIsDownload !== null) {
            $result['external_url_is_download'] = $this->externalUrlIsDownload;
        }
        if ($this->externalUrlTitle !== null) {
            $result['external_url_title'] = $this->externalUrlTitle;
        }
        if ($this->iesCoreUserId !== null) {
            $result['ies_core_user_id'] = $this->iesCoreUserId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialPackageId !== null) {
            $result['material_package_id'] = $this->materialPackageId;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        if ($this->webUrlIsDownload !== null) {
            $result['web_url_is_download'] = $this->webUrlIsDownload;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_creative'] ?? null) !== null && is_array($v)) {
            $obj->advancedCreative = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative::fromArray($v);
        }
        if (($v = $data['advanced_creative_info'] ?? null) !== null && is_array($v)) {
            $obj->advancedCreativeInfo = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo::fromArray($v);
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['creative_is_AIGC'] ?? null) !== null) {
            $obj->creativeIsAIGC = (bool) $v;
        }
        if (($v = $data['external_open_url'] ?? null) !== null) {
            $obj->externalOpenUrl = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['external_url_is_download'] ?? null) !== null) {
            $obj->externalUrlIsDownload = (bool) $v;
        }
        if (($v = $data['external_url_title'] ?? null) !== null) {
            $obj->externalUrlTitle = (string) $v;
        }
        if (($v = $data['ies_core_user_id'] ?? null) !== null) {
            $obj->iesCoreUserId = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_package_id'] ?? null) !== null) {
            $obj->materialPackageId = (int) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        if (($v = $data['web_url_is_download'] ?? null) !== null) {
            $obj->webUrlIsDownload = (bool) $v;
        }
        return $obj;
    }
}
