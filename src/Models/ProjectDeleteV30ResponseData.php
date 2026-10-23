<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 错误信息
     * @var \Oceanengine\Models\ProjectDeleteV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 项目id列表
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 错误信息
     * @return \Oceanengine\Models\ProjectDeleteV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 错误信息
     * @param \Oceanengine\Models\ProjectDeleteV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 项目id列表
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 项目id列表
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
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\ProjectDeleteV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        return $obj;
    }
}
