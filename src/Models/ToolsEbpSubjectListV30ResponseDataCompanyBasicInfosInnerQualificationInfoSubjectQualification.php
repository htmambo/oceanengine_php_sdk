<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerQualificationInfoSubjectQualification implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 验证类型
     * @var int
     */
    protected ?int $checkType = null;

    /**
     * 公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 主体类型 1=企业 ， 2=个人
     * @var int
     */
    protected ?int $companyType = null;

    /**
     * 到期时间
     * @var string
     */
    protected ?string $expireTime = null;

    /**
     * 平台号 BP = 51 ，星图=3 ， AD=0，千川80
     * @var int
     */
    protected ?int $platform = null;

    /**
     * 资质编号
     * @var string
     */
    protected ?string $qualificationSerial = null;

    /**
     * 资质类型
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * 主体资质状态 待提交=0,待审核=1,审核中=2,审核通过=3,审核拒绝=4,已过期=5
     * @var int
     */
    protected ?int $status = null;

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
     * 验证类型
     * @return int
     */
    public function getCheckType(): ?int
    {
        return $this->checkType;
    }

    /**
     * 验证类型
     * @param int $checkType
     * @return self
     */
    public function setCheckType(?int $checkType): self
    {
        $this->checkType = $checkType;
        return $this;
    }

    /**
     * 公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 公司ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 公司名称
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 公司名称
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 主体类型 1=企业 ， 2=个人
     * @return int
     */
    public function getCompanyType(): ?int
    {
        return $this->companyType;
    }

    /**
     * 主体类型 1=企业 ， 2=个人
     * @param int $companyType
     * @return self
     */
    public function setCompanyType(?int $companyType): self
    {
        $this->companyType = $companyType;
        return $this;
    }

    /**
     * 到期时间
     * @return string
     */
    public function getExpireTime(): ?string
    {
        return $this->expireTime;
    }

    /**
     * 到期时间
     * @param string $expireTime
     * @return self
     */
    public function setExpireTime(?string $expireTime): self
    {
        $this->expireTime = $expireTime;
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
     * 资质编号
     * @return string
     */
    public function getQualificationSerial(): ?string
    {
        return $this->qualificationSerial;
    }

    /**
     * 资质编号
     * @param string $qualificationSerial
     * @return self
     */
    public function setQualificationSerial(?string $qualificationSerial): self
    {
        $this->qualificationSerial = $qualificationSerial;
        return $this;
    }

    /**
     * 资质类型
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * 资质类型
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * 主体资质状态 待提交=0,待审核=1,审核中=2,审核通过=3,审核拒绝=4,已过期=5
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 主体资质状态 待提交=0,待审核=1,审核中=2,审核通过=3,审核拒绝=4,已过期=5
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
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
        if ($this->checkType !== null) {
            $result['check_type'] = $this->checkType;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->companyType !== null) {
            $result['company_type'] = $this->companyType;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->qualificationSerial !== null) {
            $result['qualification_serial'] = $this->qualificationSerial;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['check_type'] ?? null) !== null) {
            $obj->checkType = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['company_type'] ?? null) !== null) {
            $obj->companyType = (int) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['qualification_serial'] ?? null) !== null) {
            $obj->qualificationSerial = (string) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
