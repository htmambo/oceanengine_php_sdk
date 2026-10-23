<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult implements \JsonSerializable
{
    /**
     * @var array<string,array<string,mixed>>
     */
    protected ?array $error = null;

    /**
     * @var int[]
     */
    protected ?array $successIds = null;

    /**
     * @return array<string,array<string,mixed>>
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * @param array<string,array<string,mixed>> $error
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSuccessIds(): ?array
    {
        return $this->successIds;
    }

    /**
     * @param int[] $successIds
     * @return self
     */
    public function setSuccessIds(?array $successIds): self
    {
        $this->successIds = $successIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->successIds !== null) {
            $result['success_ids'] = $this->successIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = $v;
        }
        if (($v = $data['success_ids'] ?? null) !== null && is_array($v)) {
            $obj->successIds = $v;
        }
        return $obj;
    }
}
