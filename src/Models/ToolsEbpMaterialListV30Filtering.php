<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialListV30Filtering implements \JsonSerializable
{
    /**
     * EBP 自定义标签 ID
     * @var int[]
     */
    protected ?array $customTagIds = null;

    /**
     * 截止时间，yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 评估类型：FIRST_PUBLISH=首发，AD_HIGH_QUALITY=AD 优质，ECP_HIGH_QUALITY=ECP 优质 优质素材需同时传入 AD 和 ECP 两种
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30FilteringEvaluateTypes[]
     */
    protected ?array $evaluateTypes = null;

    /**
     * 素材类型： CREATIVE_IMAGE_MODE_VIDEO=横版视频， CREATIVE_IMAGE_MODE_VIDEO_VERTICAL=竖版视频， CREATIVE_IMAGE_MODE_VIDEO_SPLASH=开屏视频
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30FilteringImageModes[]
     */
    protected ?array $imageModes = null;

    /**
     * 素材 ID
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 素材名称模糊匹配
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * 开始时间，yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * EBP 系统标签稳定配置 ID
     * @var int[]
     */
    protected ?array $systemTagIds = null;

    /**
     * EBP 自定义标签 ID
     * @return int[]
     */
    public function getCustomTagIds(): ?array
    {
        return $this->customTagIds;
    }

    /**
     * EBP 自定义标签 ID
     * @param int[] $customTagIds
     * @return self
     */
    public function setCustomTagIds(?array $customTagIds): self
    {
        $this->customTagIds = $customTagIds;
        return $this;
    }

    /**
     * 截止时间，yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 截止时间，yyyy-mm-dd hh:mm:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 评估类型：FIRST_PUBLISH=首发，AD_HIGH_QUALITY=AD 优质，ECP_HIGH_QUALITY=ECP 优质 优质素材需同时传入 AD 和 ECP 两种
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30FilteringEvaluateTypes[]
     */
    public function getEvaluateTypes(): ?array
    {
        return $this->evaluateTypes;
    }

    /**
     * 评估类型：FIRST_PUBLISH=首发，AD_HIGH_QUALITY=AD 优质，ECP_HIGH_QUALITY=ECP 优质 优质素材需同时传入 AD 和 ECP 两种
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30FilteringEvaluateTypes[] $evaluateTypes
     * @return self
     */
    public function setEvaluateTypes(?array $evaluateTypes): self
    {
        $this->evaluateTypes = $evaluateTypes;
        return $this;
    }

    /**
     * 素材类型： CREATIVE_IMAGE_MODE_VIDEO=横版视频， CREATIVE_IMAGE_MODE_VIDEO_VERTICAL=竖版视频， CREATIVE_IMAGE_MODE_VIDEO_SPLASH=开屏视频
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30FilteringImageModes[]
     */
    public function getImageModes(): ?array
    {
        return $this->imageModes;
    }

    /**
     * 素材类型： CREATIVE_IMAGE_MODE_VIDEO=横版视频， CREATIVE_IMAGE_MODE_VIDEO_VERTICAL=竖版视频， CREATIVE_IMAGE_MODE_VIDEO_SPLASH=开屏视频
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30FilteringImageModes[] $imageModes
     * @return self
     */
    public function setImageModes(?array $imageModes): self
    {
        $this->imageModes = $imageModes;
        return $this;
    }

    /**
     * 素材 ID
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材 ID
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 素材名称模糊匹配
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * 素材名称模糊匹配
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * 开始时间，yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间，yyyy-mm-dd hh:mm:ss
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * EBP 系统标签稳定配置 ID
     * @return int[]
     */
    public function getSystemTagIds(): ?array
    {
        return $this->systemTagIds;
    }

    /**
     * EBP 系统标签稳定配置 ID
     * @param int[] $systemTagIds
     * @return self
     */
    public function setSystemTagIds(?array $systemTagIds): self
    {
        $this->systemTagIds = $systemTagIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customTagIds !== null) {
            $result['custom_tag_ids'] = $this->customTagIds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->evaluateTypes !== null) {
            $result['evaluate_types'] = $this->evaluateTypes;
        }
        if ($this->imageModes !== null) {
            $result['image_modes'] = $this->imageModes;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->systemTagIds !== null) {
            $result['system_tag_ids'] = $this->systemTagIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_tag_ids'] ?? null) !== null && is_array($v)) {
            $obj->customTagIds = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['evaluate_types'] ?? null) !== null && is_array($v)) {
            $obj->evaluateTypes = $v;
        }
        if (($v = $data['image_modes'] ?? null) !== null && is_array($v)) {
            $obj->imageModes = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['system_tag_ids'] ?? null) !== null && is_array($v)) {
            $obj->systemTagIds = $v;
        }
        return $obj;
    }
}
