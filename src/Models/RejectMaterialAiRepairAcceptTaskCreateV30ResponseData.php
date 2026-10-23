<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairAcceptTaskCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adoptAiRepairIds = null;

    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @return int[]
     */
    public function getAdoptAiRepairIds(): ?array
    {
        return $this->adoptAiRepairIds;
    }

    /**
     * @param int[] $adoptAiRepairIds
     * @return self
     */
    public function setAdoptAiRepairIds(?array $adoptAiRepairIds): self
    {
        $this->adoptAiRepairIds = $adoptAiRepairIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adoptAiRepairIds !== null) {
            $result['adopt_ai_repair_ids'] = $this->adoptAiRepairIds;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adopt_ai_repair_ids'] ?? null) !== null && is_array($v)) {
            $obj->adoptAiRepairIds = $v;
        }
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
