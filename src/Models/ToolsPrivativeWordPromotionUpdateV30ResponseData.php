<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordPromotionUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @var int[]
     */
    protected ?array $promotionErrorList = null;

    /**
     * @var array<string,mixed>[]
     */
    protected ?array $promotionList = null;

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPromotionErrorList(): ?array
    {
        return $this->promotionErrorList;
    }

    /**
     * @param int[] $promotionErrorList
     * @return self
     */
    public function setPromotionErrorList(?array $promotionErrorList): self
    {
        $this->promotionErrorList = $promotionErrorList;
        return $this;
    }

    /**
     * @return array<string,mixed>[]
     */
    public function getPromotionList(): ?array
    {
        return $this->promotionList;
    }

    /**
     * @param array<string,mixed>[] $promotionList
     * @return self
     */
    public function setPromotionList(?array $promotionList): self
    {
        $this->promotionList = $promotionList;
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
        if ($this->promotionErrorList !== null) {
            $result['promotion_error_list'] = $this->promotionErrorList;
        }
        if ($this->promotionList !== null) {
            $result['promotion_list'] = $this->promotionList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_error_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionErrorList = $v;
        }
        if (($v = $data['promotion_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionList = $v;
        }
        return $obj;
    }
}
