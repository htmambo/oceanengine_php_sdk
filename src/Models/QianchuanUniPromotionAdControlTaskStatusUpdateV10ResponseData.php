<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskStatusUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的任务id和失败原因
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新成功的任务id
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * 更新失败的任务id和失败原因
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 更新失败的任务id和失败原因
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新成功的任务id
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * 更新成功的任务id
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
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
