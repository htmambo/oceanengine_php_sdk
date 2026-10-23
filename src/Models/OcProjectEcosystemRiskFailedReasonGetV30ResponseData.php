<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectEcosystemRiskFailedReasonGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * @var \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * @param \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
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
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\OcProjectEcosystemRiskFailedReasonGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
