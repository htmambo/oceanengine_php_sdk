<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectStatusUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的项目ID与失败信息
     * @var \Oceanengine\Models\LocalProjectStatusUpdateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新成功的项目ID
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 更新失败的项目ID与失败信息
     * @return \Oceanengine\Models\LocalProjectStatusUpdateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 更新失败的项目ID与失败信息
     * @param \Oceanengine\Models\LocalProjectStatusUpdateV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新成功的项目ID
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 更新成功的项目ID
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
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectStatusUpdateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        return $obj;
    }
}
