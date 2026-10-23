<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAccountCreateV30RequestOwnerUser implements \JsonSerializable
{
    /**
     * 目标用户邮箱；未传userId时使用，email和mobile同时传时优先使用email
     * @var string
     */
    protected ?string $email = null;

    /**
     * 目标用户手机号；仅在未传userId和email时使用
     * @var string
     */
    protected ?string $mobile = null;

    /**
     * 已解析出的目标用户uid，优先使用
     * @var int
     */
    protected ?int $userId = null;

    /**
     * 目标用户邮箱；未传userId时使用，email和mobile同时传时优先使用email
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * 目标用户邮箱；未传userId时使用，email和mobile同时传时优先使用email
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * 目标用户手机号；仅在未传userId和email时使用
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * 目标用户手机号；仅在未传userId和email时使用
     * @param string $mobile
     * @return self
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * 已解析出的目标用户uid，优先使用
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * 已解析出的目标用户uid，优先使用
     * @param int $userId
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->mobile !== null) {
            $result['mobile'] = $this->mobile;
        }
        if ($this->userId !== null) {
            $result['user_id'] = $this->userId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['mobile'] ?? null) !== null) {
            $obj->mobile = (string) $v;
        }
        if (($v = $data['user_id'] ?? null) !== null) {
            $obj->userId = (int) $v;
        }
        return $obj;
    }
}
