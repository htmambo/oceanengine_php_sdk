<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialGetV30Filtering implements \JsonSerializable
{
    /**
     * 根据素材创建时间进行过滤结束始时间，可与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 根据素材创建时间进行过滤的起始时间，可与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 素材名称，模糊匹配
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * @var \Oceanengine\Models\AicMaterialGetV30FilteringRadio
     */
    protected ?string $radio = null;

    /**
     * 视频ID数组，数量限制：50
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * 根据素材创建时间进行过滤结束始时间，可与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 根据素材创建时间进行过滤结束始时间，可与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 根据素材创建时间进行过滤的起始时间，可与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 根据素材创建时间进行过滤的起始时间，可与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 素材名称，模糊匹配
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * 素材名称，模糊匹配
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicMaterialGetV30FilteringRadio
     */
    public function getRadio(): ?string
    {
        return $this->radio;
    }

    /**
     * @param \Oceanengine\Models\AicMaterialGetV30FilteringRadio $radio
     * @return self
     */
    public function setRadio(?string $radio): self
    {
        $this->radio = $radio;
        return $this;
    }

    /**
     * 视频ID数组，数量限制：50
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * 视频ID数组，数量限制：50
     * @param string[] $videoIds
     * @return self
     */
    public function setVideoIds(?array $videoIds): self
    {
        $this->videoIds = $videoIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createEndTime !== null) {
            $result['create_end_time'] = $this->createEndTime;
        }
        if ($this->createStartTime !== null) {
            $result['create_start_time'] = $this->createStartTime;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
        }
        if ($this->radio !== null) {
            $result['radio'] = $this->radio;
        }
        if ($this->videoIds !== null) {
            $result['video_ids'] = $this->videoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
        }
        if (($v = $data['radio'] ?? null) !== null) {
            $obj->radio = (string) $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        return $obj;
    }
}
