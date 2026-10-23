<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateStatusV2ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
     * @var \Oceanengine\Models\ToolsSiteUpdateStatusV2ResponseDataFailInner[]
     */
    protected ?array $fail = null;

    /**
     * 更新成功的site_id 列表。如果全部更新失败，len(list) = 0
     * @var string[]
     */
    protected ?array $success = null;

    /**
     * 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
     * @return \Oceanengine\Models\ToolsSiteUpdateStatusV2ResponseDataFailInner[]
     */
    public function getFail(): ?array
    {
        return $this->fail;
    }

    /**
     * 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
     * @param \Oceanengine\Models\ToolsSiteUpdateStatusV2ResponseDataFailInner[] $fail
     * @return self
     */
    public function setFail(?array $fail): self
    {
        $this->fail = $fail;
        return $this;
    }

    /**
     * 更新成功的site_id 列表。如果全部更新失败，len(list) = 0
     * @return string[]
     */
    public function getSuccess(): ?array
    {
        return $this->success;
    }

    /**
     * 更新成功的site_id 列表。如果全部更新失败，len(list) = 0
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
            $obj->fail = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteUpdateStatusV2ResponseDataFailInner::fromArray($vv), $v);
        }
        if (($v = $data['success'] ?? null) !== null && is_array($v)) {
            $obj->success = $v;
        }
        return $obj;
    }
}
