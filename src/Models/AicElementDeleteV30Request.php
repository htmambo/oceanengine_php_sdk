<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementDeleteV30Request implements \JsonSerializable
{
    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\AicElementDeleteV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 需要删除的元素id， 注:删除文件夹元素会把文件夹的子文件都移动到上层文件夹， 权限范围:传入的account_id账户下的元素
     * @var int
     */
    protected ?int $elementId = null;

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementDeleteV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AicElementDeleteV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 需要删除的元素id， 注:删除文件夹元素会把文件夹的子文件都移动到上层文件夹， 权限范围:传入的account_id账户下的元素
     * @return int
     */
    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    /**
     * 需要删除的元素id， 注:删除文件夹元素会把文件夹的子文件都移动到上层文件夹， 权限范围:传入的account_id账户下的元素
     * @param int $elementId
     * @return self
     */
    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->elementId !== null) {
            $result['element_id'] = $this->elementId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['element_id'] ?? null) !== null) {
            $obj->elementId = (int) $v;
        }
        return $obj;
    }
}
