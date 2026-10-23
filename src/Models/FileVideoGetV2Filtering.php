<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoGetV2Filtering implements \JsonSerializable
{
    /**
     * 根据视频上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 视频高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 视频宽高比，示例: [1.7, 2.5] 输入1.7则搜索满足宽高比介于1.65-1.75之间的视频，即精度上下浮动0.05
     * @var float[]
     */
    protected ?array $ratio = null;

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * 素材来源枚举 https://open.oceanengine.com/labels/7/docs/1696710760171535
     * @var string[]
     */
    protected ?array $source = null;

    /**
     * 星图达人 id 检索，最大 支持 20 个
     * @var string[]
     */
    protected ?array $starAuthorIds = null;

    /**
     * 根据视频上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 视频ids，示例: [\"86adb23eaa21229fc04ef932b5089bb8\"] 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 根据视频上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据视频上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 视频高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 视频高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 视频宽高比，示例: [1.7, 2.5] 输入1.7则搜索满足宽高比介于1.65-1.75之间的视频，即精度上下浮动0.05
     * @return float[]
     */
    public function getRatio(): ?array
    {
        return $this->ratio;
    }

    /**
     * 视频宽高比，示例: [1.7, 2.5] 输入1.7则搜索满足宽高比介于1.65-1.75之间的视频，即精度上下浮动0.05
     * @param float[] $ratio
     * @return self
     */
    public function setRatio(?array $ratio): self
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * 素材来源枚举 https://open.oceanengine.com/labels/7/docs/1696710760171535
     * @return string[]
     */
    public function getSource(): ?array
    {
        return $this->source;
    }

    /**
     * 素材来源枚举 https://open.oceanengine.com/labels/7/docs/1696710760171535
     * @param string[] $source
     * @return self
     */
    public function setSource(?array $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 星图达人 id 检索，最大 支持 20 个
     * @return string[]
     */
    public function getStarAuthorIds(): ?array
    {
        return $this->starAuthorIds;
    }

    /**
     * 星图达人 id 检索，最大 支持 20 个
     * @param string[] $starAuthorIds
     * @return self
     */
    public function setStarAuthorIds(?array $starAuthorIds): self
    {
        $this->starAuthorIds = $starAuthorIds;
        return $this;
    }

    /**
     * 根据视频上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据视频上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 视频ids，示例: [\"86adb23eaa21229fc04ef932b5089bb8\"] 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * 视频ids，示例: [\"86adb23eaa21229fc04ef932b5089bb8\"] 数量限制：<=100 注意：video_ids、material_ids、signatures只能选择一个进行过滤
     * @param string[] $videoIds
     * @return self
     */
    public function setVideoIds(?array $videoIds): self
    {
        $this->videoIds = $videoIds;
        return $this;
    }

    /**
     * 视频宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 视频宽度
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->ratio !== null) {
            $result['ratio'] = $this->ratio;
        }
        if ($this->signatures !== null) {
            $result['signatures'] = $this->signatures;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->starAuthorIds !== null) {
            $result['star_author_ids'] = $this->starAuthorIds;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->videoIds !== null) {
            $result['video_ids'] = $this->videoIds;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['ratio'] ?? null) !== null && is_array($v)) {
            $obj->ratio = $v;
        }
        if (($v = $data['signatures'] ?? null) !== null && is_array($v)) {
            $obj->signatures = $v;
        }
        if (($v = $data['source'] ?? null) !== null && is_array($v)) {
            $obj->source = $v;
        }
        if (($v = $data['star_author_ids'] ?? null) !== null && is_array($v)) {
            $obj->starAuthorIds = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
