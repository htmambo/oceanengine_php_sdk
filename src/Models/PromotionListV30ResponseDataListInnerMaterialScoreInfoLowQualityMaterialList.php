<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $lowQualityImageIds = null;

    /**
     * @var string[]
     */
    protected ?array $lowQualityVideoIds = null;

    /**
     * @return string[]
     */
    public function getLowQualityImageIds(): ?array
    {
        return $this->lowQualityImageIds;
    }

    /**
     * @param string[] $lowQualityImageIds
     * @return self
     */
    public function setLowQualityImageIds(?array $lowQualityImageIds): self
    {
        $this->lowQualityImageIds = $lowQualityImageIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLowQualityVideoIds(): ?array
    {
        return $this->lowQualityVideoIds;
    }

    /**
     * @param string[] $lowQualityVideoIds
     * @return self
     */
    public function setLowQualityVideoIds(?array $lowQualityVideoIds): self
    {
        $this->lowQualityVideoIds = $lowQualityVideoIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lowQualityImageIds !== null) {
            $result['low_quality_image_ids'] = $this->lowQualityImageIds;
        }
        if ($this->lowQualityVideoIds !== null) {
            $result['low_quality_video_ids'] = $this->lowQualityVideoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['low_quality_image_ids'] ?? null) !== null && is_array($v)) {
            $obj->lowQualityImageIds = $v;
        }
        if (($v = $data['low_quality_video_ids'] ?? null) !== null && is_array($v)) {
            $obj->lowQualityVideoIds = $v;
        }
        return $obj;
    }
}
