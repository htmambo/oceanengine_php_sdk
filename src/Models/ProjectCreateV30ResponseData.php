<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $autoDurationProjectCount = null;

    /**
     * 剩余自动投放项目余额
     * @var int
     */
    protected ?int $autoProjectCount = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30ResponseDataErrorKeywordsListInner[]
     */
    protected ?array $errorKeywordsList = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 星广联投三期协议
     * @var string
     */
    protected ?string $supplementaryAgreementInfo = null;

    /**
     * @return int
     */
    public function getAutoDurationProjectCount(): ?int
    {
        return $this->autoDurationProjectCount;
    }

    /**
     * @param int $autoDurationProjectCount
     * @return self
     */
    public function setAutoDurationProjectCount(?int $autoDurationProjectCount): self
    {
        $this->autoDurationProjectCount = $autoDurationProjectCount;
        return $this;
    }

    /**
     * 剩余自动投放项目余额
     * @return int
     */
    public function getAutoProjectCount(): ?int
    {
        return $this->autoProjectCount;
    }

    /**
     * 剩余自动投放项目余额
     * @param int $autoProjectCount
     * @return self
     */
    public function setAutoProjectCount(?int $autoProjectCount): self
    {
        $this->autoProjectCount = $autoProjectCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30ResponseDataErrorKeywordsListInner[]
     */
    public function getErrorKeywordsList(): ?array
    {
        return $this->errorKeywordsList;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30ResponseDataErrorKeywordsListInner[] $errorKeywordsList
     * @return self
     */
    public function setErrorKeywordsList(?array $errorKeywordsList): self
    {
        $this->errorKeywordsList = $errorKeywordsList;
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
     * 星广联投三期协议
     * @return string
     */
    public function getSupplementaryAgreementInfo(): ?string
    {
        return $this->supplementaryAgreementInfo;
    }

    /**
     * 星广联投三期协议
     * @param string $supplementaryAgreementInfo
     * @return self
     */
    public function setSupplementaryAgreementInfo(?string $supplementaryAgreementInfo): self
    {
        $this->supplementaryAgreementInfo = $supplementaryAgreementInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->autoDurationProjectCount !== null) {
            $result['auto_duration_project_count'] = $this->autoDurationProjectCount;
        }
        if ($this->autoProjectCount !== null) {
            $result['auto_project_count'] = $this->autoProjectCount;
        }
        if ($this->errorKeywordsList !== null) {
            $result['error_keywords_list'] = $this->errorKeywordsList;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->supplementaryAgreementInfo !== null) {
            $result['supplementary_agreement_info'] = $this->supplementaryAgreementInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auto_duration_project_count'] ?? null) !== null) {
            $obj->autoDurationProjectCount = (int) $v;
        }
        if (($v = $data['auto_project_count'] ?? null) !== null) {
            $obj->autoProjectCount = (int) $v;
        }
        if (($v = $data['error_keywords_list'] ?? null) !== null && is_array($v)) {
            $obj->errorKeywordsList = array_map(fn ($vv) => \Oceanengine\Models\ProjectCreateV30ResponseDataErrorKeywordsListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['supplementary_agreement_info'] ?? null) !== null) {
            $obj->supplementaryAgreementInfo = (string) $v;
        }
        return $obj;
    }
}
