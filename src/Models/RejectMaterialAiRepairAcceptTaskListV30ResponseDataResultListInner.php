<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairAcceptTaskListV30ResponseDataResultListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $aiRepairErrorMessage = null;

    /**
     * @var int
     */
    protected ?int $aiRepairId = null;

    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus
     */
    protected ?string $aiRepairStatus = null;

    /**
     * @return string
     */
    public function getAiRepairErrorMessage(): ?string
    {
        return $this->aiRepairErrorMessage;
    }

    /**
     * @param string $aiRepairErrorMessage
     * @return self
     */
    public function setAiRepairErrorMessage(?string $aiRepairErrorMessage): self
    {
        $this->aiRepairErrorMessage = $aiRepairErrorMessage;
        return $this;
    }

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
     * @return \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus
     */
    public function getAiRepairStatus(): ?string
    {
        return $this->aiRepairStatus;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus $aiRepairStatus
     * @return self
     */
    public function setAiRepairStatus(?string $aiRepairStatus): self
    {
        $this->aiRepairStatus = $aiRepairStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->aiRepairErrorMessage !== null) {
            $result['ai_repair_error_message'] = $this->aiRepairErrorMessage;
        }
        if ($this->aiRepairId !== null) {
            $result['ai_repair_id'] = $this->aiRepairId;
        }
        if ($this->aiRepairStatus !== null) {
            $result['ai_repair_status'] = $this->aiRepairStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ai_repair_error_message'] ?? null) !== null) {
            $obj->aiRepairErrorMessage = (string) $v;
        }
        if (($v = $data['ai_repair_id'] ?? null) !== null) {
            $obj->aiRepairId = (int) $v;
        }
        if (($v = $data['ai_repair_status'] ?? null) !== null) {
            $obj->aiRepairStatus = (string) $v;
        }
        return $obj;
    }
}
