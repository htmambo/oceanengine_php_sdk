<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial implements \JsonSerializable
{
    /**
     * 抖音主页视频id
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 视频预览链接
     * @var string
     */
    protected ?string $awemeItemUrl = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage $coverImage = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 抖音主页视频id
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音主页视频id
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 视频预览链接
     * @return string
     */
    public function getAwemeItemUrl(): ?string
    {
        return $this->awemeItemUrl;
    }

    /**
     * 视频预览链接
     * @param string $awemeItemUrl
     * @return self
     */
    public function setAwemeItemUrl(?string $awemeItemUrl): self
    {
        $this->awemeItemUrl = $awemeItemUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage
     */
    public function getCoverImage(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage
    {
        return $this->coverImage;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage $coverImage
     * @return self
     */
    public function setCoverImage(?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage $coverImage): self
    {
        $this->coverImage = $coverImage;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->awemeItemUrl !== null) {
            $result['aweme_item_url'] = $this->awemeItemUrl;
        }
        if ($this->coverImage !== null) {
            $result['cover_image'] = $this->coverImage;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['aweme_item_url'] ?? null) !== null) {
            $obj->awemeItemUrl = (string) $v;
        }
        if (($v = $data['cover_image'] ?? null) !== null && is_array($v)) {
            $obj->coverImage = \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage::fromArray($v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
