<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderCloseV30ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,string>
     */
    protected ?array $failList = null;

    /**
     * @var int[]
     */
    protected ?array $successList = null;

    /**
     * @return array<string,string>
     */
    public function getFailList(): ?array
    {
        return $this->failList;
    }

    /**
     * @param array<string,string> $failList
     * @return self
     */
    public function setFailList(?array $failList): self
    {
        $this->failList = $failList;
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
        if ($this->failList !== null) {
            $result['fail_list'] = $this->failList;
        }
        if ($this->successList !== null) {
            $result['success_list'] = $this->successList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_list'] ?? null) !== null && is_array($v)) {
            $obj->failList = $v;
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = $v;
        }
        return $obj;
    }
}
