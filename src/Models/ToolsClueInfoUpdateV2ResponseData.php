<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的线索id列表
     * @var \Oceanengine\Models\ToolsClueInfoUpdateV2ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新成功的线索id列表
     * @var int[]
     */
    protected ?array $successes = null;

    /**
     * 更新失败的线索id列表
     * @return \Oceanengine\Models\ToolsClueInfoUpdateV2ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 更新失败的线索id列表
     * @param \Oceanengine\Models\ToolsClueInfoUpdateV2ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新成功的线索id列表
     * @return int[]
     */
    public function getSuccesses(): ?array
    {
        return $this->successes;
    }

    /**
     * 更新成功的线索id列表
     * @param int[] $successes
     * @return self
     */
    public function setSuccesses(?array $successes): self
    {
        $this->successes = $successes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->successes !== null) {
            $result['successes'] = $this->successes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueInfoUpdateV2ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['successes'] ?? null) !== null && is_array($v)) {
            $obj->successes = $v;
        }
        return $obj;
    }
}
