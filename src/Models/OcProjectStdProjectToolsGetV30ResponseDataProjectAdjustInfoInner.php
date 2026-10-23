<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo
     */
    protected ?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo $audienceAdjustInfo = null;

    /**
     * @var \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo
     */
    protected ?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo $keywordsAdjustInfo = null;

    /**
     * @var \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerMaterialAdjustInfoInner[]
     */
    protected ?array $materialAdjustInfo = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo
     */
    public function getAudienceAdjustInfo(): ?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo
    {
        return $this->audienceAdjustInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo $audienceAdjustInfo
     * @return self
     */
    public function setAudienceAdjustInfo(?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo $audienceAdjustInfo): self
    {
        $this->audienceAdjustInfo = $audienceAdjustInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo
     */
    public function getKeywordsAdjustInfo(): ?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo
    {
        return $this->keywordsAdjustInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo $keywordsAdjustInfo
     * @return self
     */
    public function setKeywordsAdjustInfo(?\Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo $keywordsAdjustInfo): self
    {
        $this->keywordsAdjustInfo = $keywordsAdjustInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerMaterialAdjustInfoInner[]
     */
    public function getMaterialAdjustInfo(): ?array
    {
        return $this->materialAdjustInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerMaterialAdjustInfoInner[] $materialAdjustInfo
     * @return self
     */
    public function setMaterialAdjustInfo(?array $materialAdjustInfo): self
    {
        $this->materialAdjustInfo = $materialAdjustInfo;
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
        if ($this->audienceAdjustInfo !== null) {
            $result['audience_adjust_info'] = $this->audienceAdjustInfo;
        }
        if ($this->keywordsAdjustInfo !== null) {
            $result['keywords_adjust_info'] = $this->keywordsAdjustInfo;
        }
        if ($this->materialAdjustInfo !== null) {
            $result['material_adjust_info'] = $this->materialAdjustInfo;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_adjust_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceAdjustInfo = \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo::fromArray($v);
        }
        if (($v = $data['keywords_adjust_info'] ?? null) !== null && is_array($v)) {
            $obj->keywordsAdjustInfo = \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo::fromArray($v);
        }
        if (($v = $data['material_adjust_info'] ?? null) !== null && is_array($v)) {
            $obj->materialAdjustInfo = array_map(fn ($vv) => \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerMaterialAdjustInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
