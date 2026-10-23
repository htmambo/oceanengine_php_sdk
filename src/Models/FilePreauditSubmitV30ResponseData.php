<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePreauditSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 预审ID
     * @var int
     */
    protected ?int $preauditId = null;

    /**
     * 预审ID
     * @return int
     */
    public function getPreauditId(): ?int
    {
        return $this->preauditId;
    }

    /**
     * 预审ID
     * @param int $preauditId
     * @return self
     */
    public function setPreauditId(?int $preauditId): self
    {
        $this->preauditId = $preauditId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->preauditId !== null) {
            $result['preaudit_id'] = $this->preauditId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['preaudit_id'] ?? null) !== null) {
            $obj->preauditId = (int) $v;
        }
        return $obj;
    }
}
