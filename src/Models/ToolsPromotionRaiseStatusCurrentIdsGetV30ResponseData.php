<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataErrorListInner[] $errorList
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
