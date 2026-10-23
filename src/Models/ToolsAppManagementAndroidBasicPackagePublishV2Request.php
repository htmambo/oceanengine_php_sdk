<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidBasicPackagePublishV2Request implements \JsonSerializable
{
    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等 格式: int64
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 应用包id
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等 格式: int64
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等 格式: int64
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 应用包id
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包id
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
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
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
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
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        return $obj;
    }
}
