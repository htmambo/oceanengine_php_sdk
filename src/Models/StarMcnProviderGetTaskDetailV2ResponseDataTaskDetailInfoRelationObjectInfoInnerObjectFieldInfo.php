<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo $objectNovelInfo = null;

    /**
     * @var int
     */
    protected ?int $starObjectType = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo
     */
    public function getObjectNovelInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo
    {
        return $this->objectNovelInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo $objectNovelInfo
     * @return self
     */
    public function setObjectNovelInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo $objectNovelInfo): self
    {
        $this->objectNovelInfo = $objectNovelInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarObjectType(): ?int
    {
        return $this->starObjectType;
    }

    /**
     * @param int $starObjectType
     * @return self
     */
    public function setStarObjectType(?int $starObjectType): self
    {
        $this->starObjectType = $starObjectType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->objectNovelInfo !== null) {
            $result['object_novel_info'] = $this->objectNovelInfo;
        }
        if ($this->starObjectType !== null) {
            $result['star_object_type'] = $this->starObjectType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_novel_info'] ?? null) !== null && is_array($v)) {
            $obj->objectNovelInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo::fromArray($v);
        }
        if (($v = $data['star_object_type'] ?? null) !== null) {
            $obj->starObjectType = (int) $v;
        }
        return $obj;
    }
}
