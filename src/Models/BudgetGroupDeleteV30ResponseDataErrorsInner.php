<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupDeleteV30ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @return int
     */
    public function getBudgetGroupId(): ?int
    {
        return $this->budgetGroupId;
    }

    /**
     * @param int $budgetGroupId
     * @return self
     */
    public function setBudgetGroupId(?int $budgetGroupId): self
    {
        $this->budgetGroupId = $budgetGroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budgetGroupId !== null) {
            $result['budget_group_id'] = $this->budgetGroupId;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget_group_id'] ?? null) !== null) {
            $obj->budgetGroupId = (int) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        return $obj;
    }
}
