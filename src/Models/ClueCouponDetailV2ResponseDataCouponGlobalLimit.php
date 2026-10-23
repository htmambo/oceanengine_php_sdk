<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseDataCouponGlobalLimit implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $dayLimit = null;

    /**
     * @var int
     */
    protected ?int $totalLimit = null;

    /**
     * @return int
     */
    public function getDayLimit(): ?int
    {
        return $this->dayLimit;
    }

    /**
     * @param int $dayLimit
     * @return self
     */
    public function setDayLimit(?int $dayLimit): self
    {
        $this->dayLimit = $dayLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLimit(): ?int
    {
        return $this->totalLimit;
    }

    /**
     * @param int $totalLimit
     * @return self
     */
    public function setTotalLimit(?int $totalLimit): self
    {
        $this->totalLimit = $totalLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dayLimit !== null) {
            $result['day_limit'] = $this->dayLimit;
        }
        if ($this->totalLimit !== null) {
            $result['total_limit'] = $this->totalLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['day_limit'] ?? null) !== null) {
            $obj->dayLimit = (int) $v;
        }
        if (($v = $data['total_limit'] ?? null) !== null) {
            $obj->totalLimit = (int) $v;
        }
        return $obj;
    }
}
