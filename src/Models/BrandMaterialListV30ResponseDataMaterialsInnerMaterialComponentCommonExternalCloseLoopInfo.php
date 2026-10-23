<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brandAccountId = null;

    /**
     * @var string
     */
    protected ?string $uid = null;

    /**
     * @return string
     */
    public function getBrandAccountId(): ?string
    {
        return $this->brandAccountId;
    }

    /**
     * @param string $brandAccountId
     * @return self
     */
    public function setBrandAccountId(?string $brandAccountId): self
    {
        $this->brandAccountId = $brandAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return self
     */
    public function setUid(?string $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandAccountId !== null) {
            $result['brand_account_id'] = $this->brandAccountId;
        }
        if ($this->uid !== null) {
            $result['uid'] = $this->uid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_account_id'] ?? null) !== null) {
            $obj->brandAccountId = (string) $v;
        }
        if (($v = $data['uid'] ?? null) !== null) {
            $obj->uid = (string) $v;
        }
        return $obj;
    }
}
