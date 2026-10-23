<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QualAccountListV2ResponseDataUserAccountInfosInner implements \JsonSerializable
{
    /**
     * 账户 id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 服务商公司的名称
     * @var string
     */
    protected ?string $agentCompanyName = null;

    /**
     * 邮箱
     * @var string
     */
    protected ?string $email = null;

    /**
     * 昵称
     * @var string
     */
    protected ?string $nickname = null;

    /**
     * owner 的 uid
     * @var int
     */
    protected ?int $ownerUid = null;

    /**
     * 手机号
     * @var string
     */
    protected ?string $phone = null;

    /**
     * 账户 id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户 id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 服务商公司的名称
     * @return string
     */
    public function getAgentCompanyName(): ?string
    {
        return $this->agentCompanyName;
    }

    /**
     * 服务商公司的名称
     * @param string $agentCompanyName
     * @return self
     */
    public function setAgentCompanyName(?string $agentCompanyName): self
    {
        $this->agentCompanyName = $agentCompanyName;
        return $this;
    }

    /**
     * 邮箱
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * 邮箱
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * 昵称
     * @return string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * 昵称
     * @param string $nickname
     * @return self
     */
    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * owner 的 uid
     * @return int
     */
    public function getOwnerUid(): ?int
    {
        return $this->ownerUid;
    }

    /**
     * owner 的 uid
     * @param int $ownerUid
     * @return self
     */
    public function setOwnerUid(?int $ownerUid): self
    {
        $this->ownerUid = $ownerUid;
        return $this;
    }

    /**
     * 手机号
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 手机号
     * @param string $phone
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
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
        if ($this->agentCompanyName !== null) {
            $result['agent_company_name'] = $this->agentCompanyName;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->nickname !== null) {
            $result['nickname'] = $this->nickname;
        }
        if ($this->ownerUid !== null) {
            $result['owner_uid'] = $this->ownerUid;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['agent_company_name'] ?? null) !== null) {
            $obj->agentCompanyName = (string) $v;
        }
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['nickname'] ?? null) !== null) {
            $obj->nickname = (string) $v;
        }
        if (($v = $data['owner_uid'] ?? null) !== null) {
            $obj->ownerUid = (int) $v;
        }
        if (($v = $data['phone'] ?? null) !== null) {
            $obj->phone = (string) $v;
        }
        return $obj;
    }
}
