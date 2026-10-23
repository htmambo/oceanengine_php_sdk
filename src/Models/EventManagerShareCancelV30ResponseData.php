<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerShareCancelV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
