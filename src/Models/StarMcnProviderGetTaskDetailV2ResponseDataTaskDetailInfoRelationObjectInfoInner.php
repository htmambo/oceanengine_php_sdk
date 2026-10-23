<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo $objectFieldInfo = null;

    /**
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * @var int
     */
    protected ?int $starObjectType = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo
     */
    public function getObjectFieldInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo
    {
        return $this->objectFieldInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo $objectFieldInfo
     * @return self
     */
    public function setObjectFieldInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo $objectFieldInfo): self
    {
        $this->objectFieldInfo = $objectFieldInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
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
        if ($this->objectFieldInfo !== null) {
            $result['object_field_info'] = $this->objectFieldInfo;
        }
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->starObjectType !== null) {
            $result['star_object_type'] = $this->starObjectType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_field_info'] ?? null) !== null && is_array($v)) {
            $obj->objectFieldInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfo::fromArray($v);
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['star_object_type'] ?? null) !== null) {
            $obj->starObjectType = (int) $v;
        }
        return $obj;
    }
}
