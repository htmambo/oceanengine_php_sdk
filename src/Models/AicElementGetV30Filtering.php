<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementGetV30Filtering implements \JsonSerializable
{
    /**
     * 根据元素创建时间进行过滤结束始时间，与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 根据元素创建时间进行过滤的起始时间，与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 元素id列表，数量限制：50
     * @var int[]
     */
    protected ?array $elementIds = null;

    /**
     * 元素名称，模糊匹配
     * @var string
     */
    protected ?string $elementName = null;

    /**
     * @var \Oceanengine\Models\AicElementGetV30FilteringElementType
     */
    protected ?string $elementType = null;

    /**
     * 元素的存储路径（文件夹） 传入后仅查询文件夹下素材，示例：/数码/电脑，/为根路径，最大层级不得超过10
     * @var string
     */
    protected ?string $pathName = null;

    /**
     * @var \Oceanengine\Models\AicElementGetV30FilteringUseAs
     */
    protected ?string $useAs = null;

    /**
     * 根据元素创建时间进行过滤结束始时间，与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 根据元素创建时间进行过滤结束始时间，与create_start_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 根据元素创建时间进行过滤的起始时间，与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 根据元素创建时间进行过滤的起始时间，与create_end_time搭配使用 格式为yyyy-mm-dd HH:MM:SS
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 元素id列表，数量限制：50
     * @return int[]
     */
    public function getElementIds(): ?array
    {
        return $this->elementIds;
    }

    /**
     * 元素id列表，数量限制：50
     * @param int[] $elementIds
     * @return self
     */
    public function setElementIds(?array $elementIds): self
    {
        $this->elementIds = $elementIds;
        return $this;
    }

    /**
     * 元素名称，模糊匹配
     * @return string
     */
    public function getElementName(): ?string
    {
        return $this->elementName;
    }

    /**
     * 元素名称，模糊匹配
     * @param string $elementName
     * @return self
     */
    public function setElementName(?string $elementName): self
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementGetV30FilteringElementType
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param \Oceanengine\Models\AicElementGetV30FilteringElementType $elementType
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * 元素的存储路径（文件夹） 传入后仅查询文件夹下素材，示例：/数码/电脑，/为根路径，最大层级不得超过10
     * @return string
     */
    public function getPathName(): ?string
    {
        return $this->pathName;
    }

    /**
     * 元素的存储路径（文件夹） 传入后仅查询文件夹下素材，示例：/数码/电脑，/为根路径，最大层级不得超过10
     * @param string $pathName
     * @return self
     */
    public function setPathName(?string $pathName): self
    {
        $this->pathName = $pathName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementGetV30FilteringUseAs
     */
    public function getUseAs(): ?string
    {
        return $this->useAs;
    }

    /**
     * @param \Oceanengine\Models\AicElementGetV30FilteringUseAs $useAs
     * @return self
     */
    public function setUseAs(?string $useAs): self
    {
        $this->useAs = $useAs;
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
        if ($this->elementIds !== null) {
            $result['element_ids'] = $this->elementIds;
        }
        if ($this->elementName !== null) {
            $result['element_name'] = $this->elementName;
        }
        if ($this->elementType !== null) {
            $result['element_type'] = $this->elementType;
        }
        if ($this->pathName !== null) {
            $result['path_name'] = $this->pathName;
        }
        if ($this->useAs !== null) {
            $result['use_as'] = $this->useAs;
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
        if (($v = $data['element_ids'] ?? null) !== null && is_array($v)) {
            $obj->elementIds = $v;
        }
        if (($v = $data['element_name'] ?? null) !== null) {
            $obj->elementName = (string) $v;
        }
        if (($v = $data['element_type'] ?? null) !== null) {
            $obj->elementType = (string) $v;
        }
        if (($v = $data['path_name'] ?? null) !== null) {
            $obj->pathName = (string) $v;
        }
        if (($v = $data['use_as'] ?? null) !== null) {
            $obj->useAs = (string) $v;
        }
        return $obj;
    }
}
