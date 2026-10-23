<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselDeleteV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $failedIds = null;

    /**
     * @var int[]
     */
    protected ?array $successList = null;

    /**
     * @return int[]
     */
    public function getFailedIds(): ?array
    {
        return $this->failedIds;
    }

    /**
     * @param int[] $failedIds
     * @return self
     */
    public function setFailedIds(?array $failedIds): self
    {
        $this->failedIds = $failedIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * @param int[] $successList
     * @return self
     */
    public function setSuccessList(?array $successList): self
    {
        $this->successList = $successList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedIds !== null) {
            $result['failed_ids'] = $this->failedIds;
        }
        if ($this->successList !== null) {
            $result['success_list'] = $this->successList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_ids'] ?? null) !== null && is_array($v)) {
            $obj->failedIds = $v;
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = $v;
        }
        return $obj;
    }
}
