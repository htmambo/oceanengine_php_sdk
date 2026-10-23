<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryStatementV2ResponseDataProjectRefStatementListInner implements \JsonSerializable
{
    /**
     * 结算单归档状态
     * @var int
     */
    protected ?int $archiveStatus = null;

    /**
     * 结算单归档状态名称
     * @var string
     */
    protected ?string $archiveStatusName = null;

    /**
     * 附件列表
     * @var \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInnerAttachListInner[]
     */
    protected ?array $attachList = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 项目关联结算单金额
     * @var string
     */
    protected ?string $refStatementAmount = null;

    /**
     * 结算单盖章状态（1：未盖章，2：审批中，3：已盖章，5：无需盖章，4: 电子签章审批中)
     * @var int
     */
    protected ?int $stampStatus = null;

    /**
     * 结算单盖章状态名称
     * @var string
     */
    protected ?string $stampStatusName = null;

    /**
     * @var int
     */
    protected ?int $statementId = null;

    /**
     * 结算单编号
     * @var string
     */
    protected ?string $statementSerial = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var string
     */
    protected ?string $statusName = null;

    /**
     * 结算单归档状态
     * @return int
     */
    public function getArchiveStatus(): ?int
    {
        return $this->archiveStatus;
    }

    /**
     * 结算单归档状态
     * @param int $archiveStatus
     * @return self
     */
    public function setArchiveStatus(?int $archiveStatus): self
    {
        $this->archiveStatus = $archiveStatus;
        return $this;
    }

    /**
     * 结算单归档状态名称
     * @return string
     */
    public function getArchiveStatusName(): ?string
    {
        return $this->archiveStatusName;
    }

    /**
     * 结算单归档状态名称
     * @param string $archiveStatusName
     * @return self
     */
    public function setArchiveStatusName(?string $archiveStatusName): self
    {
        $this->archiveStatusName = $archiveStatusName;
        return $this;
    }

    /**
     * 附件列表
     * @return \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInnerAttachListInner[]
     */
    public function getAttachList(): ?array
    {
        return $this->attachList;
    }

    /**
     * 附件列表
     * @param \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInnerAttachListInner[] $attachList
     * @return self
     */
    public function setAttachList(?array $attachList): self
    {
        $this->attachList = $attachList;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目id
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 项目关联结算单金额
     * @return string
     */
    public function getRefStatementAmount(): ?string
    {
        return $this->refStatementAmount;
    }

    /**
     * 项目关联结算单金额
     * @param string $refStatementAmount
     * @return self
     */
    public function setRefStatementAmount(?string $refStatementAmount): self
    {
        $this->refStatementAmount = $refStatementAmount;
        return $this;
    }

    /**
     * 结算单盖章状态（1：未盖章，2：审批中，3：已盖章，5：无需盖章，4: 电子签章审批中)
     * @return int
     */
    public function getStampStatus(): ?int
    {
        return $this->stampStatus;
    }

    /**
     * 结算单盖章状态（1：未盖章，2：审批中，3：已盖章，5：无需盖章，4: 电子签章审批中)
     * @param int $stampStatus
     * @return self
     */
    public function setStampStatus(?int $stampStatus): self
    {
        $this->stampStatus = $stampStatus;
        return $this;
    }

    /**
     * 结算单盖章状态名称
     * @return string
     */
    public function getStampStatusName(): ?string
    {
        return $this->stampStatusName;
    }

    /**
     * 结算单盖章状态名称
     * @param string $stampStatusName
     * @return self
     */
    public function setStampStatusName(?string $stampStatusName): self
    {
        $this->stampStatusName = $stampStatusName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }

    /**
     * @param int $statementId
     * @return self
     */
    public function setStatementId(?int $statementId): self
    {
        $this->statementId = $statementId;
        return $this;
    }

    /**
     * 结算单编号
     * @return string
     */
    public function getStatementSerial(): ?string
    {
        return $this->statementSerial;
    }

    /**
     * 结算单编号
     * @param string $statementSerial
     * @return self
     */
    public function setStatementSerial(?string $statementSerial): self
    {
        $this->statementSerial = $statementSerial;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusName(): ?string
    {
        return $this->statusName;
    }

    /**
     * @param string $statusName
     * @return self
     */
    public function setStatusName(?string $statusName): self
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->archiveStatus !== null) {
            $result['archive_status'] = $this->archiveStatus;
        }
        if ($this->archiveStatusName !== null) {
            $result['archive_status_name'] = $this->archiveStatusName;
        }
        if ($this->attachList !== null) {
            $result['attach_list'] = $this->attachList;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->refStatementAmount !== null) {
            $result['ref_statement_amount'] = $this->refStatementAmount;
        }
        if ($this->stampStatus !== null) {
            $result['stamp_status'] = $this->stampStatus;
        }
        if ($this->stampStatusName !== null) {
            $result['stamp_status_name'] = $this->stampStatusName;
        }
        if ($this->statementId !== null) {
            $result['statement_id'] = $this->statementId;
        }
        if ($this->statementSerial !== null) {
            $result['statement_serial'] = $this->statementSerial;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusName !== null) {
            $result['status_name'] = $this->statusName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['archive_status'] ?? null) !== null) {
            $obj->archiveStatus = (int) $v;
        }
        if (($v = $data['archive_status_name'] ?? null) !== null) {
            $obj->archiveStatusName = (string) $v;
        }
        if (($v = $data['attach_list'] ?? null) !== null && is_array($v)) {
            $obj->attachList = array_map(fn ($vv) => \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInnerAttachListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['ref_statement_amount'] ?? null) !== null) {
            $obj->refStatementAmount = (string) $v;
        }
        if (($v = $data['stamp_status'] ?? null) !== null) {
            $obj->stampStatus = (int) $v;
        }
        if (($v = $data['stamp_status_name'] ?? null) !== null) {
            $obj->stampStatusName = (string) $v;
        }
        if (($v = $data['statement_id'] ?? null) !== null) {
            $obj->statementId = (int) $v;
        }
        if (($v = $data['statement_serial'] ?? null) !== null) {
            $obj->statementSerial = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_name'] ?? null) !== null) {
            $obj->statusName = (string) $v;
        }
        return $obj;
    }
}
