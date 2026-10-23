<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeBannedDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 删除失败的结果
     * @var \Oceanengine\Models\ToolsAwemeBannedDeleteV30ResponseDataFailInner[]
     */
    protected ?array $fail = null;

    /**
     * 删除成功的结果
     * @var string[]
     */
    protected ?array $success = null;

    /**
     * 删除失败的结果
     * @return \Oceanengine\Models\ToolsAwemeBannedDeleteV30ResponseDataFailInner[]
     */
    public function getFail(): ?array
    {
        return $this->fail;
    }

    /**
     * 删除失败的结果
     * @param \Oceanengine\Models\ToolsAwemeBannedDeleteV30ResponseDataFailInner[] $fail
     * @return self
     */
    public function setFail(?array $fail): self
    {
        $this->fail = $fail;
        return $this;
    }

    /**
     * 删除成功的结果
     * @return string[]
     */
    public function getSuccess(): ?array
    {
        return $this->success;
    }

    /**
     * 删除成功的结果
     * @param string[] $success
     * @return self
     */
    public function setSuccess(?array $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fail !== null) {
            $result['fail'] = $this->fail;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail'] ?? null) !== null && is_array($v)) {
            $obj->fail = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeBannedDeleteV30ResponseDataFailInner::fromArray($vv), $v);
        }
        if (($v = $data['success'] ?? null) !== null && is_array($v)) {
            $obj->success = $v;
        }
        return $obj;
    }
}
