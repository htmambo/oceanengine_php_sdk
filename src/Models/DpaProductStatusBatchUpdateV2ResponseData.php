<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductStatusBatchUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 修改状态失败的商品列表
     * @var \Oceanengine\Models\DpaProductStatusBatchUpdateV2ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * 修改状态成功的商品列表
     * @var int[]
     */
    protected ?array $successList = null;

    /**
     * 修改状态失败的商品列表
     * @return \Oceanengine\Models\DpaProductStatusBatchUpdateV2ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * 修改状态失败的商品列表
     * @param \Oceanengine\Models\DpaProductStatusBatchUpdateV2ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * 修改状态成功的商品列表
     * @return int[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * 修改状态成功的商品列表
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
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\DpaProductStatusBatchUpdateV2ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = $v;
        }
        return $obj;
    }
}
