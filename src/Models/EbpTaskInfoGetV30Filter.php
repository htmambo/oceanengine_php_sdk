<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpTaskInfoGetV30Filter implements \JsonSerializable
{
    /**
     * 通过account_id过滤查询
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\EbpTaskInfoGetV30FilterSubTaskStatus
     */
    protected ?string $subTaskStatus = null;

    /**
     * 通过account_id过滤查询
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 通过account_id过滤查询
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpTaskInfoGetV30FilterSubTaskStatus
     */
    public function getSubTaskStatus(): ?string
    {
        return $this->subTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\EbpTaskInfoGetV30FilterSubTaskStatus $subTaskStatus
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
        if (($v = $data['sub_task_status'] ?? null) !== null) {
            $obj->subTaskStatus = (string) $v;
        }
        return $obj;
    }
}
