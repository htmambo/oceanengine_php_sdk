<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo implements \JsonSerializable
{
    /**
     * 操作人
     * @var string
     */
    protected ?string $operator = null;

    /**
     * 操作人名称
     * @var string
     */
    protected ?string $operatorName = null;

    /**
     * 操作人
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * 操作人
     * @param string $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * 操作人名称
     * @return string
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * 操作人名称
     * @param string $operatorName
     * @return self
     */
    public function setOperatorName(?string $operatorName): self
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->operatorName !== null) {
            $result['operator_name'] = $this->operatorName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        if (($v = $data['operator_name'] ?? null) !== null) {
            $obj->operatorName = (string) $v;
        }
        return $obj;
    }
}
