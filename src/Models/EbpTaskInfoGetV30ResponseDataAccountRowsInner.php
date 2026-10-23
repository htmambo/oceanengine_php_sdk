<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpTaskInfoGetV30ResponseDataAccountRowsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var string
     */
    protected ?string $failMsg = null;

    /**
     * @var \Oceanengine\Models\EbpTaskInfoGetV30DataAccountRowsSubTaskStatus
     */
    protected ?string $subTaskStatus = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailMsg(): ?string
    {
        return $this->failMsg;
    }

    /**
     * @param string $failMsg
     * @return self
     */
    public function setFailMsg(?string $failMsg): self
    {
        $this->failMsg = $failMsg;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpTaskInfoGetV30DataAccountRowsSubTaskStatus
     */
    public function getSubTaskStatus(): ?string
    {
        return $this->subTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\EbpTaskInfoGetV30DataAccountRowsSubTaskStatus $subTaskStatus
     * @return self
     */
    public function setSubTaskStatus(?string $subTaskStatus): self
    {
        $this->subTaskStatus = $subTaskStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->failMsg !== null) {
            $result['fail_msg'] = $this->failMsg;
        }
        if ($this->subTaskStatus !== null) {
            $result['sub_task_status'] = $this->subTaskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['fail_msg'] ?? null) !== null) {
            $obj->failMsg = (string) $v;
        }
        if (($v = $data['sub_task_status'] ?? null) !== null) {
            $obj->subTaskStatus = (string) $v;
        }
        return $obj;
    }
}
