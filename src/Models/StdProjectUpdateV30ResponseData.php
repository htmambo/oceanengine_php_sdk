<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ResponseDataErrorKeywordsListInner[]
     */
    protected ?array $errorKeywordsList = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $supplementaryAgreementInfo = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30ResponseDataErrorKeywordsListInner[]
     */
    public function getErrorKeywordsList(): ?array
    {
        return $this->errorKeywordsList;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ResponseDataErrorKeywordsListInner[] $errorKeywordsList
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
     * @return string
     */
    public function getSupplementaryAgreementInfo(): ?string
    {
        return $this->supplementaryAgreementInfo;
    }

    /**
     * @param string $supplementaryAgreementInfo
     * @return self
     */
    public function setSupplementaryAgreementInfo(?string $supplementaryAgreementInfo): self
    {
        $this->supplementaryAgreementInfo = $supplementaryAgreementInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorKeywordsList !== null) {
            $result['error_keywords_list'] = $this->errorKeywordsList;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->supplementaryAgreementInfo !== null) {
            $result['supplementary_agreement_info'] = $this->supplementaryAgreementInfo;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_keywords_list'] ?? null) !== null && is_array($v)) {
            $obj->errorKeywordsList = array_map(fn ($vv) => \Oceanengine\Models\StdProjectUpdateV30ResponseDataErrorKeywordsListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['supplementary_agreement_info'] ?? null) !== null) {
            $obj->supplementaryAgreementInfo = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
