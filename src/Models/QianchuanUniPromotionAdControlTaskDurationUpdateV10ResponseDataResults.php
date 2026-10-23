<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResultsErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResultsErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResultsErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * @param int[] $taskIds
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->taskIds = $taskIds;
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
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResultsErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
