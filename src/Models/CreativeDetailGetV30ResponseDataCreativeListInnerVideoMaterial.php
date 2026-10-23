<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial implements \JsonSerializable
{
    /**
     * 抖音短视频ID
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 自定义商品库视频模板ID
     * @var string[]
     */
    protected ?array $dpaVideoTaskIds = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType
     */
    protected ?string $dpaVideoTemplateType = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo $videoInfo = null;

    /**
     * 抖音短视频ID
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音短视频ID
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 自定义商品库视频模板ID
     * @return string[]
     */
    public function getDpaVideoTaskIds(): ?array
    {
        return $this->dpaVideoTaskIds;
    }

    /**
     * 自定义商品库视频模板ID
     * @param string[] $dpaVideoTaskIds
     * @return self
     */
    public function setDpaVideoTaskIds(?array $dpaVideoTaskIds): self
    {
        $this->dpaVideoTaskIds = $dpaVideoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType
     */
    public function getDpaVideoTemplateType(): ?string
    {
        return $this->dpaVideoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType $dpaVideoTemplateType
     * @return self
     */
    public function setDpaVideoTemplateType(?string $dpaVideoTemplateType): self
    {
        $this->dpaVideoTemplateType = $dpaVideoTemplateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo $videoInfo): self
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
            $obj->imageInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialImageInfo::fromArray($v);
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterialVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
