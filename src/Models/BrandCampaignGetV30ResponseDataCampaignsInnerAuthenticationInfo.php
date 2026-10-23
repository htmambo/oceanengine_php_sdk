<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo implements \JsonSerializable
{
    /**
     * 附件信息
     * @var \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoAccessoryInner[]
     */
    protected ?array $accessory = null;

    /**
     * 关联合同
     * @var string
     */
    protected ?string $projectId = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo
     */
    protected ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo $projectInfo = null;

    /**
     * 内广签约主体ID
     * @var string
     */
    protected ?string $subjectId = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo
     */
    protected ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo $subjectInfo = null;

    /**
     * 附件信息
     * @return \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoAccessoryInner[]
     */
    public function getAccessory(): ?array
    {
        return $this->accessory;
    }

    /**
     * 附件信息
     * @param \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoAccessoryInner[] $accessory
     * @return self
     */
    public function setAccessory(?array $accessory): self
    {
        $this->accessory = $accessory;
        return $this;
    }

    /**
     * 关联合同
     * @return string
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * 关联合同
     * @param string $projectId
     * @return self
     */
    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo
     */
    public function getProjectInfo(): ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo
    {
        return $this->projectInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo $projectInfo
     * @return self
     */
    public function setProjectInfo(?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo $projectInfo): self
    {
        $this->projectInfo = $projectInfo;
        return $this;
    }

    /**
     * 内广签约主体ID
     * @return string
     */
    public function getSubjectId(): ?string
    {
        return $this->subjectId;
    }

    /**
     * 内广签约主体ID
     * @param string $subjectId
     * @return self
     */
    public function setSubjectId(?string $subjectId): self
    {
        $this->subjectId = $subjectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo
     */
    public function getSubjectInfo(): ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo
    {
        return $this->subjectInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo $subjectInfo
     * @return self
     */
    public function setSubjectInfo(?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo $subjectInfo): self
    {
        $this->subjectInfo = $subjectInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accessory !== null) {
            $result['accessory'] = $this->accessory;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectInfo !== null) {
            $result['project_info'] = $this->projectInfo;
        }
        if ($this->subjectId !== null) {
            $result['subject_id'] = $this->subjectId;
        }
        if ($this->subjectInfo !== null) {
            $result['subject_info'] = $this->subjectInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accessory'] ?? null) !== null && is_array($v)) {
            $obj->accessory = array_map(fn ($vv) => \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoAccessoryInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (string) $v;
        }
        if (($v = $data['project_info'] ?? null) !== null && is_array($v)) {
            $obj->projectInfo = \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo::fromArray($v);
        }
        if (($v = $data['subject_id'] ?? null) !== null) {
            $obj->subjectId = (string) $v;
        }
        if (($v = $data['subject_info'] ?? null) !== null && is_array($v)) {
            $obj->subjectInfo = \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo::fromArray($v);
        }
        return $obj;
    }
}
