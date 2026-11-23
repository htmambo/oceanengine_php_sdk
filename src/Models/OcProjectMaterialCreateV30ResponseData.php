<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 部分成功时的逐项失败明细；全部成功或下游整体失败时为空
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * 部分成功时的逐项失败明细；全部成功或下游整体失败时为空
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * 部分成功时的逐项失败明细；全部成功或下游整体失败时为空
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30ResponseDataErrorListInner[] $errorList
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
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
