<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselGetV10Filtering implements \JsonSerializable
{
    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-mm-dd\"
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 支持根据图文名称/ID搜索
     * @var string
     */
    protected ?string $queryString = null;

    /**
     * 图文素材来源 JICHAUNG 即创
     * @var \Oceanengine\Models\QianchuanCarouselGetV10FilteringSources[]
     */
    protected ?array $sources = null;

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-mm-dd\"
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-mm-dd\"
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-mm-dd\"
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤 数量限制：<=100
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 支持根据图文名称/ID搜索
     * @return string
     */
    public function getQueryString(): ?string
    {
        return $this->queryString;
    }

    /**
     * 支持根据图文名称/ID搜索
     * @param string $queryString
     * @return self
     */
    public function setQueryString(?string $queryString): self
    {
        $this->queryString = $queryString;
        return $this;
    }

    /**
     * 图文素材来源 JICHAUNG 即创
     * @return \Oceanengine\Models\QianchuanCarouselGetV10FilteringSources[]
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * 图文素材来源 JICHAUNG 即创
     * @param \Oceanengine\Models\QianchuanCarouselGetV10FilteringSources[] $sources
     * @return self
     */
    public function setSources(?array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-mm-dd\"
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-mm-dd\"
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
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
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->queryString !== null) {
            $result['query_string'] = $this->queryString;
        }
        if ($this->sources !== null) {
            $result['sources'] = $this->sources;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['query_string'] ?? null) !== null) {
            $obj->queryString = (string) $v;
        }
        if (($v = $data['sources'] ?? null) !== null && is_array($v)) {
            $obj->sources = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
