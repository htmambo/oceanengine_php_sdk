<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType
     */
    protected ?string $creativeType = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage $groupImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo $horizontalImageVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo $horizontalVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage $largeImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage $smallImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo $variableImageVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo $verticalImageVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo $verticalVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative $videoCreative = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType
     */
    public function getCreativeType(): ?string
    {
        return $this->creativeType;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType $creativeType
     * @return self
     */
    public function setCreativeType(?string $creativeType): self
    {
        $this->creativeType = $creativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage
     */
    public function getGroupImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage
    {
        return $this->groupImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage $groupImage
     * @return self
     */
    public function setGroupImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage $groupImage): self
    {
        $this->groupImage = $groupImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo
     */
    public function getHorizontalImageVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo
    {
        return $this->horizontalImageVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo $horizontalImageVideo
     * @return self
     */
    public function setHorizontalImageVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo $horizontalImageVideo): self
    {
        $this->horizontalImageVideo = $horizontalImageVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo
     */
    public function getHorizontalVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo
    {
        return $this->horizontalVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo $horizontalVideo
     * @return self
     */
    public function setHorizontalVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo $horizontalVideo): self
    {
        $this->horizontalVideo = $horizontalVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage
     */
    public function getLargeImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage
    {
        return $this->largeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage $largeImage
     * @return self
     */
    public function setLargeImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage $largeImage): self
    {
        $this->largeImage = $largeImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage
     */
    public function getSmallImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage
    {
        return $this->smallImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage $smallImage
     * @return self
     */
    public function setSmallImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage $smallImage): self
    {
        $this->smallImage = $smallImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo
     */
    public function getVariableImageVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo
    {
        return $this->variableImageVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo $variableImageVideo
     * @return self
     */
    public function setVariableImageVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo $variableImageVideo): self
    {
        $this->variableImageVideo = $variableImageVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo
     */
    public function getVerticalImageVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo
    {
        return $this->verticalImageVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo $verticalImageVideo
     * @return self
     */
    public function setVerticalImageVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo $verticalImageVideo): self
    {
        $this->verticalImageVideo = $verticalImageVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo
     */
    public function getVerticalVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo
    {
        return $this->verticalVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo $verticalVideo
     * @return self
     */
    public function setVerticalVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo $verticalVideo): self
    {
        $this->verticalVideo = $verticalVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative
     */
    public function getVideoCreative(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative
    {
        return $this->videoCreative;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative $videoCreative
     * @return self
     */
    public function setVideoCreative(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative $videoCreative): self
    {
        $this->videoCreative = $videoCreative;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeType !== null) {
            $result['creative_type'] = $this->creativeType;
        }
        if ($this->groupImage !== null) {
            $result['group_image'] = $this->groupImage;
        }
        if ($this->horizontalImageVideo !== null) {
            $result['horizontal_image_video'] = $this->horizontalImageVideo;
        }
        if ($this->horizontalVideo !== null) {
            $result['horizontal_video'] = $this->horizontalVideo;
        }
        if ($this->largeImage !== null) {
            $result['large_image'] = $this->largeImage;
        }
        if ($this->smallImage !== null) {
            $result['small_image'] = $this->smallImage;
        }
        if ($this->variableImageVideo !== null) {
            $result['variable_image_video'] = $this->variableImageVideo;
        }
        if ($this->verticalImageVideo !== null) {
            $result['vertical_image_video'] = $this->verticalImageVideo;
        }
        if ($this->verticalVideo !== null) {
            $result['vertical_video'] = $this->verticalVideo;
        }
        if ($this->videoCreative !== null) {
            $result['video_creative'] = $this->videoCreative;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_type'] ?? null) !== null) {
            $obj->creativeType = (string) $v;
        }
        if (($v = $data['group_image'] ?? null) !== null && is_array($v)) {
            $obj->groupImage = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage::fromArray($v);
        }
        if (($v = $data['horizontal_image_video'] ?? null) !== null && is_array($v)) {
            $obj->horizontalImageVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo::fromArray($v);
        }
        if (($v = $data['horizontal_video'] ?? null) !== null && is_array($v)) {
            $obj->horizontalVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalVideo::fromArray($v);
        }
        if (($v = $data['large_image'] ?? null) !== null && is_array($v)) {
            $obj->largeImage = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoLargeImage::fromArray($v);
        }
        if (($v = $data['small_image'] ?? null) !== null && is_array($v)) {
            $obj->smallImage = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage::fromArray($v);
        }
        if (($v = $data['variable_image_video'] ?? null) !== null && is_array($v)) {
            $obj->variableImageVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVariableImageVideo::fromArray($v);
        }
        if (($v = $data['vertical_image_video'] ?? null) !== null && is_array($v)) {
            $obj->verticalImageVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo::fromArray($v);
        }
        if (($v = $data['vertical_video'] ?? null) !== null && is_array($v)) {
            $obj->verticalVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo::fromArray($v);
        }
        if (($v = $data['video_creative'] ?? null) !== null && is_array($v)) {
            $obj->videoCreative = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVideoCreative::fromArray($v);
        }
        return $obj;
    }
}
