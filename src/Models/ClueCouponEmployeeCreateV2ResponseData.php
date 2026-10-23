<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponEmployeeCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataExistedListInner[]
     */
    protected ?array $existedList = null;

    /**
     * @var \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataSuccessListInner[]
     */
    protected ?array $successList = null;

    /**
     * @return \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataExistedListInner[]
     */
    public function getExistedList(): ?array
    {
        return $this->existedList;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataExistedListInner[] $existedList
     * @return self
     */
    public function setExistedList(?array $existedList): self
    {
        $this->existedList = $existedList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataSuccessListInner[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataSuccessListInner[] $successList
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
        if ($this->existedList !== null) {
            $result['existed_list'] = $this->existedList;
        }
        if ($this->successList !== null) {
            $result['success_list'] = $this->successList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['existed_list'] ?? null) !== null && is_array($v)) {
            $obj->existedList = array_map(fn ($vv) => \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataExistedListInner::fromArray($vv), $v);
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = array_map(fn ($vv) => \Oceanengine\Models\ClueCouponEmployeeCreateV2ResponseDataSuccessListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
