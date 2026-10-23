<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalLifeAdvertiserCreateV30Request implements \JsonSerializable
{
    /**
     * 来客账户
     * @var int
     */
    protected ?int $lifeAccountId = null;

    /**
     * 来客账户
     * @return int
     */
    public function getLifeAccountId(): ?int
    {
        return $this->lifeAccountId;
    }

    /**
     * 来客账户
     * @param int $lifeAccountId
     * @return self
     */
    public function setLifeAccountId(?int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lifeAccountId !== null) {
            $result['life_account_id'] = $this->lifeAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['life_account_id'] ?? null) !== null) {
            $obj->lifeAccountId = (int) $v;
        }
        return $obj;
    }
}
