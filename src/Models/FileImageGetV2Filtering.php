<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageGetV2Filtering implements \JsonSerializable
{
    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 图片高度
     * @var float
     */
    protected ?float $height = null;

    /**
     * 图片ids，可以根据图片ids（创意中使用的图片key，存在一张图片对应多个image_ids的情况）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 图片宽高比，eg: [1.7, 2.5]，输入1.7则搜索满足宽高比介于1.65-1.75之间的图片，即精度上下浮动0.05
     * @var float[]
     */
    protected ?array $ratio = null;

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 图片宽度
     * @var float
     */
    protected ?float $width = null;

    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 图片高度
     * @return float
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * 图片高度
     * @param float $height
     * @return self
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 图片ids，可以根据图片ids（创意中使用的图片key，存在一张图片对应多个image_ids的情况）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * 图片ids，可以根据图片ids（创意中使用的图片key，存在一张图片对应多个image_ids的情况）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 图片宽高比，eg: [1.7, 2.5]，输入1.7则搜索满足宽高比介于1.65-1.75之间的图片，即精度上下浮动0.05
     * @return float[]
     */
    public function getRatio(): ?array
    {
        return $this->ratio;
    }

    /**
     * 图片宽高比，eg: [1.7, 2.5]，输入1.7则搜索满足宽高比介于1.65-1.75之间的图片，即精度上下浮动0.05
     * @param float[] $ratio
     * @return self
     */
    public function setRatio(?array $ratio): self
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * md5值列表，可以根据素材的md5进行过滤 数量限制：<=100 注意：image_ids、material_ids、signatures只能选择一个进行过滤
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 图片宽度
     * @return float
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * 图片宽度
     * @param float $width
     * @return self
     */
    public function setWidth(?float $width): self
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
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
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
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
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
            $obj->height = (float) $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
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
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (float) $v;
        }
        return $obj;
    }
}
