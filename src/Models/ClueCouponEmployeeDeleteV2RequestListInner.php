<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponEmployeeDeleteV2RequestListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $storeId = null;

    /**
     * @var int
     */
    protected ?int $userId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponEmployeeDeleteV2ListUserType
     */
    protected ?string $userType = null;

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponEmployeeDeleteV2ListUserType
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponEmployeeDeleteV2ListUserType $userType
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->storeId !== null) {
            $result['store_id'] = $this->storeId;
        }
        if ($this->userId !== null) {
            $result['user_id'] = $this->userId;
        }
        if ($this->userType !== null) {
            $result['user_type'] = $this->userType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['store_id'] ?? null) !== null) {
            $obj->storeId = (int) $v;
        }
        if (($v = $data['user_id'] ?? null) !== null) {
            $obj->userId = (int) $v;
        }
        if (($v = $data['user_type'] ?? null) !== null) {
            $obj->userType = (string) $v;
        }
        return $obj;
    }
}
