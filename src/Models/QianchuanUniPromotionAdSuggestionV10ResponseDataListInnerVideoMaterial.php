<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage $coverImage = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage
     */
    public function getCoverImage(): ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage
    {
        return $this->coverImage;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage $coverImage
     * @return self
     */
    public function setCoverImage(?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage $coverImage): self
    {
        $this->coverImage = $coverImage;
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
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
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
            $obj->coverImage = \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage::fromArray($v);
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
