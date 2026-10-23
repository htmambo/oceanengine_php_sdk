<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var string[]
     */
    protected ?array $dpaVideoTaskIds = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListVideoMaterialDpaVideoTemplateType
     */
    protected ?string $dpaVideoTemplateType = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo $videoInfo = null;

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
     * @return string[]
     */
    public function getDpaVideoTaskIds(): ?array
    {
        return $this->dpaVideoTaskIds;
    }

    /**
     * @param string[] $dpaVideoTaskIds
     * @return self
     */
    public function setDpaVideoTaskIds(?array $dpaVideoTaskIds): self
    {
        $this->dpaVideoTaskIds = $dpaVideoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListVideoMaterialDpaVideoTemplateType
     */
    public function getDpaVideoTemplateType(): ?string
    {
        return $this->dpaVideoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListVideoMaterialDpaVideoTemplateType $dpaVideoTemplateType
     * @return self
     */
    public function setDpaVideoTemplateType(?string $dpaVideoTemplateType): self
    {
        $this->dpaVideoTemplateType = $dpaVideoTemplateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
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
        if ($this->dpaVideoTaskIds !== null) {
            $result['dpa_video_task_ids'] = $this->dpaVideoTaskIds;
        }
        if ($this->dpaVideoTemplateType !== null) {
            $result['dpa_video_template_type'] = $this->dpaVideoTemplateType;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['dpa_video_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->dpaVideoTaskIds = $v;
        }
        if (($v = $data['dpa_video_template_type'] ?? null) !== null) {
            $obj->dpaVideoTemplateType = (string) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialImageInfo::fromArray($v);
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterialVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
