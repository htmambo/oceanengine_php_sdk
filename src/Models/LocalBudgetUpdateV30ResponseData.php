<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalBudgetUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalBudgetUpdateV30ResponseDataErrorInner[]
     */
    protected ?array $error = null;

    /**
     * @return \Oceanengine\Models\LocalBudgetUpdateV30ResponseDataErrorInner[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * @param \Oceanengine\Models\LocalBudgetUpdateV30ResponseDataErrorInner[] $error
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = array_map(fn ($vv) => \Oceanengine\Models\LocalBudgetUpdateV30ResponseDataErrorInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
