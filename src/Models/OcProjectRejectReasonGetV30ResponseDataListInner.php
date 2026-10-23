<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectRejectReasonGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 素材维度审核建议列表
     * @var \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 项目维度审核建议列表
     * @var \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerProjectRejectInner[]
     */
    protected ?array $projectReject = null;

    /**
     * 素材维度审核建议列表
     * @return \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * 素材维度审核建议列表
     * @param \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 项目维度审核建议列表
     * @return \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerProjectRejectInner[]
     */
    public function getProjectReject(): ?array
    {
        return $this->projectReject;
    }

    /**
     * 项目维度审核建议列表
     * @param \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerProjectRejectInner[] $projectReject
     * @return self
     */
    public function setProjectReject(?array $projectReject): self
    {
        $this->projectReject = $projectReject;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialReject !== null) {
            $result['material_reject'] = $this->materialReject;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectReject !== null) {
            $result['project_reject'] = $this->projectReject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['project_reject'] ?? null) !== null && is_array($v)) {
            $obj->projectReject = array_map(fn ($vv) => \Oceanengine\Models\OcProjectRejectReasonGetV30ResponseDataListInnerProjectRejectInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
