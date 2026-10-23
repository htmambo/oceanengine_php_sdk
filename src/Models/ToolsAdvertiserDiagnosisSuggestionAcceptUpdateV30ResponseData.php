<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * <失败的objectId, error>
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ResponseDataErrorInner[]
     */
    protected ?array $error = null;

    /**
     * 成功的objectId
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * <失败的objectId, error>
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ResponseDataErrorInner[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * <失败的objectId, error>
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ResponseDataErrorInner[] $error
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * 成功的objectId
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * 成功的objectId
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ResponseDataErrorInner::fromArray($vv), $v);
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        return $obj;
    }
}
