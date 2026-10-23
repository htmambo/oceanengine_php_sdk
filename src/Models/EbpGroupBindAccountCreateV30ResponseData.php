<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountCreateV30ResponseDataFailedAccountsInner[]
     */
    protected ?array $failedAccounts = null;

    /**
     * 是否异步执行，超出一定账户数量，会异步执行。
     * @var bool
     */
    protected ?bool $isAsync = null;

    /**
     * 异步执行时，任务ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountCreateV30ResponseDataFailedAccountsInner[]
     */
    public function getFailedAccounts(): ?array
    {
        return $this->failedAccounts;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountCreateV30ResponseDataFailedAccountsInner[] $failedAccounts
     * @return self
     */
    public function setFailedAccounts(?array $failedAccounts): self
    {
        $this->failedAccounts = $failedAccounts;
        return $this;
    }

    /**
     * 是否异步执行，超出一定账户数量，会异步执行。
     * @return bool
     */
    public function getIsAsync(): ?bool
    {
        return $this->isAsync;
    }

    /**
     * 是否异步执行，超出一定账户数量，会异步执行。
     * @param bool $isAsync
     * @return self
     */
    public function setIsAsync(?bool $isAsync): self
    {
        $this->isAsync = $isAsync;
        return $this;
    }

    /**
     * 异步执行时，任务ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 异步执行时，任务ID
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
        if ($this->failedAccounts !== null) {
            $result['failed_accounts'] = $this->failedAccounts;
        }
        if ($this->isAsync !== null) {
            $result['is_async'] = $this->isAsync;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_accounts'] ?? null) !== null && is_array($v)) {
            $obj->failedAccounts = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountCreateV30ResponseDataFailedAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['is_async'] ?? null) !== null) {
            $obj->isAsync = (bool) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
