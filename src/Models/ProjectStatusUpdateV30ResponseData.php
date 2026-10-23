<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectStatusUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 失败原因
     * @var \Oceanengine\Models\ProjectStatusUpdateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新失败的项目ID列表
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 失败原因
     * @return \Oceanengine\Models\ProjectStatusUpdateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 失败原因
     * @param \Oceanengine\Models\ProjectStatusUpdateV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新失败的项目ID列表
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 更新失败的项目ID列表
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
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
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\ProjectStatusUpdateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        return $obj;
    }
}
