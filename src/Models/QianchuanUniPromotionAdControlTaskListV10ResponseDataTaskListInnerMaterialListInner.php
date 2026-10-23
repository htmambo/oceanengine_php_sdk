<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage $coverImage = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var int
     */
    protected ?int $videoDuration = null;

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage
     */
    public function getCoverImage(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage
    {
        return $this->coverImage;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage $coverImage
     * @return self
     */
    public function setCoverImage(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage $coverImage): self
    {
        $this->coverImage = $coverImage;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoDuration(): ?int
    {
        return $this->videoDuration;
    }

    /**
     * @param int $videoDuration
     * @return self
     */
    public function setVideoDuration(?int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
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
        if ($this->coverImage !== null) {
            $result['cover_image'] = $this->coverImage;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['cover_image'] ?? null) !== null && is_array($v)) {
            $obj->coverImage = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInnerCoverImage::fromArray($v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (int) $v;
        }
        return $obj;
    }
}
