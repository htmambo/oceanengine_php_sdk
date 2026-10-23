<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairAcceptTaskCreateV30ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $aiRepairId = null;

    /**
     * @var string
     */
    protected ?string $errorMessge = null;

    /**
     * @return int
     */
    public function getAiRepairId(): ?int
    {
        return $this->aiRepairId;
    }

    /**
     * @param int $aiRepairId
     * @return self
     */
    public function setAiRepairId(?int $aiRepairId): self
    {
        $this->aiRepairId = $aiRepairId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessge(): ?string
    {
        return $this->errorMessge;
    }

    /**
     * @param string $errorMessge
     * @return self
     */
    public function setErrorMessge(?string $errorMessge): self
    {
        $this->errorMessge = $errorMessge;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->aiRepairId !== null) {
            $result['ai_repair_id'] = $this->aiRepairId;
        }
        if ($this->errorMessge !== null) {
            $result['error_messge'] = $this->errorMessge;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ai_repair_id'] ?? null) !== null) {
            $obj->aiRepairId = (int) $v;
        }
        if (($v = $data['error_messge'] ?? null) !== null) {
            $obj->errorMessge = (string) $v;
        }
        return $obj;
    }
}
