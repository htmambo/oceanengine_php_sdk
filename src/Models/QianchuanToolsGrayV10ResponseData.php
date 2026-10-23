<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsGrayV10ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $errorList = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsGrayV10ResponseDataSuccessListInner[]
     */
    protected ?array $successList = null;

    /**
     * @return string[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param string[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsGrayV10ResponseDataSuccessListInner[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsGrayV10ResponseDataSuccessListInner[] $successList
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
            $obj->errorList = $v;
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsGrayV10ResponseDataSuccessListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
