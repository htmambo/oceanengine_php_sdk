<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 自定义关键词上传失败的关键词list，关键词添加失败不会影响项目创建结果
     * @var \Oceanengine\Models\StdProjectCreateV30ResponseDataErrorKeywordsListInner[]
     */
    protected ?array $errorKeywordsList = null;

    /**
     * 创编消息提示
     * @var \Oceanengine\Models\StdProjectCreateV30ResponseDataNoticeInner[]
     */
    protected ?array $notice = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 星广联投投放协议查看地址，仅短剧行业投放星广联投项目时会返回
     * @var string
     */
    protected ?string $supplementaryAgreementInfo = null;

    /**
     * 自定义关键词上传失败的关键词list，关键词添加失败不会影响项目创建结果
     * @return \Oceanengine\Models\StdProjectCreateV30ResponseDataErrorKeywordsListInner[]
     */
    public function getErrorKeywordsList(): ?array
    {
        return $this->errorKeywordsList;
    }

    /**
     * 自定义关键词上传失败的关键词list，关键词添加失败不会影响项目创建结果
     * @param \Oceanengine\Models\StdProjectCreateV30ResponseDataErrorKeywordsListInner[] $errorKeywordsList
     * @return self
     */
    public function setErrorKeywordsList(?array $errorKeywordsList): self
    {
        $this->errorKeywordsList = $errorKeywordsList;
        return $this;
    }

    /**
     * 创编消息提示
     * @return \Oceanengine\Models\StdProjectCreateV30ResponseDataNoticeInner[]
     */
    public function getNotice(): ?array
    {
        return $this->notice;
    }

    /**
     * 创编消息提示
     * @param \Oceanengine\Models\StdProjectCreateV30ResponseDataNoticeInner[] $notice
     * @return self
     */
    public function setNotice(?array $notice): self
    {
        $this->notice = $notice;
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
     * 星广联投投放协议查看地址，仅短剧行业投放星广联投项目时会返回
     * @return string
     */
    public function getSupplementaryAgreementInfo(): ?string
    {
        return $this->supplementaryAgreementInfo;
    }

    /**
     * 星广联投投放协议查看地址，仅短剧行业投放星广联投项目时会返回
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
        if ($this->errorKeywordsList !== null) {
            $result['error_keywords_list'] = $this->errorKeywordsList;
        }
        if ($this->notice !== null) {
            $result['notice'] = $this->notice;
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
        if (($v = $data['error_keywords_list'] ?? null) !== null && is_array($v)) {
            $obj->errorKeywordsList = array_map(fn ($vv) => \Oceanengine\Models\StdProjectCreateV30ResponseDataErrorKeywordsListInner::fromArray($vv), $v);
        }
        if (($v = $data['notice'] ?? null) !== null && is_array($v)) {
            $obj->notice = array_map(fn ($vv) => \Oceanengine\Models\StdProjectCreateV30ResponseDataNoticeInner::fromArray($vv), $v);
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
