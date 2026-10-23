<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirementsSpecifiedIsvDetailInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $isvId = null;

    /**
     * @var string
     */
    protected ?string $isvName = null;

    /**
     * @return int
     */
    public function getIsvId(): ?int
    {
        return $this->isvId;
    }

    /**
     * @param int $isvId
     * @return self
     */
    public function setIsvId(?int $isvId): self
    {
        $this->isvId = $isvId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsvName(): ?string
    {
        return $this->isvName;
    }

    /**
     * @param string $isvName
     * @return self
     */
    public function setIsvName(?string $isvName): self
    {
        $this->isvName = $isvName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isvId !== null) {
            $result['isv_id'] = $this->isvId;
        }
        if ($this->isvName !== null) {
            $result['isv_name'] = $this->isvName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['isv_id'] ?? null) !== null) {
            $obj->isvId = (int) $v;
        }
        if (($v = $data['isv_name'] ?? null) !== null) {
            $obj->isvName = (string) $v;
        }
        return $obj;
    }
}
