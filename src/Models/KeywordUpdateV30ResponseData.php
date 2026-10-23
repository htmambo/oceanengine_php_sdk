<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\KeywordUpdateV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @var \Oceanengine\Models\KeywordUpdateV30ResponseDataSuccessListInner[]
     */
    protected ?array $successList = null;

    /**
     * @return \Oceanengine\Models\KeywordUpdateV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\KeywordUpdateV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordUpdateV30ResponseDataSuccessListInner[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * @param \Oceanengine\Models\KeywordUpdateV30ResponseDataSuccessListInner[] $successList
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
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        if ($this->successList !== null) {
            $result['success_list'] = $this->successList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\KeywordUpdateV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = array_map(fn ($vv) => \Oceanengine\Models\KeywordUpdateV30ResponseDataSuccessListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
