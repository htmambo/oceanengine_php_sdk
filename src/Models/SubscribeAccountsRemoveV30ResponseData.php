<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubscribeAccountsRemoveV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $failedAdvertierIds = null;

    /**
     * @var string
     */
    protected ?string $failedReason = null;

    /**
     * @return int[]
     */
    public function getFailedAdvertierIds(): ?array
    {
        return $this->failedAdvertierIds;
    }

    /**
     * @param int[] $failedAdvertierIds
     * @return self
     */
    public function setFailedAdvertierIds(?array $failedAdvertierIds): self
    {
        $this->failedAdvertierIds = $failedAdvertierIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedReason(): ?string
    {
        return $this->failedReason;
    }

    /**
     * @param string $failedReason
     * @return self
     */
    public function setFailedReason(?string $failedReason): self
    {
        $this->failedReason = $failedReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedAdvertierIds !== null) {
            $result['failed_advertier_ids'] = $this->failedAdvertierIds;
        }
        if ($this->failedReason !== null) {
            $result['failed_reason'] = $this->failedReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_advertier_ids'] ?? null) !== null && is_array($v)) {
            $obj->failedAdvertierIds = $v;
        }
        if (($v = $data['failed_reason'] ?? null) !== null) {
            $obj->failedReason = (string) $v;
        }
        return $obj;
    }
}
