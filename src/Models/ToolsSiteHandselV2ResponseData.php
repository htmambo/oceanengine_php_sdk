<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteHandselV2ResponseData implements \JsonSerializable
{
    /**
     * 转赠失败列表，整体成功不返回该列表
     * @var \Oceanengine\Models\ToolsSiteHandselV2ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * 转赠成功列表，整体失败不返回该列表
     * @var \Oceanengine\Models\ToolsSiteHandselV2ResponseDataSuccessListInner[]
     */
    protected ?array $successList = null;

    /**
     * 转赠失败列表，整体成功不返回该列表
     * @return \Oceanengine\Models\ToolsSiteHandselV2ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * 转赠失败列表，整体成功不返回该列表
     * @param \Oceanengine\Models\ToolsSiteHandselV2ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * 转赠成功列表，整体失败不返回该列表
     * @return \Oceanengine\Models\ToolsSiteHandselV2ResponseDataSuccessListInner[]
     */
    public function getSuccessList(): ?array
    {
        return $this->successList;
    }

    /**
     * 转赠成功列表，整体失败不返回该列表
     * @param \Oceanengine\Models\ToolsSiteHandselV2ResponseDataSuccessListInner[] $successList
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
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteHandselV2ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['success_list'] ?? null) !== null && is_array($v)) {
            $obj->successList = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteHandselV2ResponseDataSuccessListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
