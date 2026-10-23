<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoVerifyInfoDto implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 平台号 BP = 51 ，星图=3 ， AD=0，千川80
     * @var int
     */
    protected ?int $platform = null;

    /**
     * 对公验证类型
     * @var int
     */
    protected ?int $verifyCheckType = null;

    /**
     * 对公验证有效截止时间
     * @var string
     */
    protected ?string $verifyExpireTime = null;

    /**
     * 对公验证状态
     * @var int
     */
    protected ?int $verifyStatus = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 平台号 BP = 51 ，星图=3 ， AD=0，千川80
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * 平台号 BP = 51 ，星图=3 ， AD=0，千川80
     * @param int $platform
     * @return self
     */
    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 对公验证类型
     * @return int
     */
    public function getVerifyCheckType(): ?int
    {
        return $this->verifyCheckType;
    }

    /**
     * 对公验证类型
     * @param int $verifyCheckType
     * @return self
     */
    public function setVerifyCheckType(?int $verifyCheckType): self
    {
        $this->verifyCheckType = $verifyCheckType;
        return $this;
    }

    /**
     * 对公验证有效截止时间
     * @return string
     */
    public function getVerifyExpireTime(): ?string
    {
        return $this->verifyExpireTime;
    }

    /**
     * 对公验证有效截止时间
     * @param string $verifyExpireTime
     * @return self
     */
    public function setVerifyExpireTime(?string $verifyExpireTime): self
    {
        $this->verifyExpireTime = $verifyExpireTime;
        return $this;
    }

    /**
     * 对公验证状态
     * @return int
     */
    public function getVerifyStatus(): ?int
    {
        return $this->verifyStatus;
    }

    /**
     * 对公验证状态
     * @param int $verifyStatus
     * @return self
     */
    public function setVerifyStatus(?int $verifyStatus): self
    {
        $this->verifyStatus = $verifyStatus;
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
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->verifyCheckType !== null) {
            $result['verify_check_type'] = $this->verifyCheckType;
        }
        if ($this->verifyExpireTime !== null) {
            $result['verify_expire_time'] = $this->verifyExpireTime;
        }
        if ($this->verifyStatus !== null) {
            $result['verify_status'] = $this->verifyStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['verify_check_type'] ?? null) !== null) {
            $obj->verifyCheckType = (int) $v;
        }
        if (($v = $data['verify_expire_time'] ?? null) !== null) {
            $obj->verifyExpireTime = (string) $v;
        }
        if (($v = $data['verify_status'] ?? null) !== null) {
            $obj->verifyStatus = (int) $v;
        }
        return $obj;
    }
}
