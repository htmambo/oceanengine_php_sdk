<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBpAssetManagementShareV30ResponseData implements \JsonSerializable
{
    /**
     * 失败信息
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * 失败信息
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * 失败信息
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInner[] $errorList
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
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
