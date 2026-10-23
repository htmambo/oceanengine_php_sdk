<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordProjectUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * 更新失败的项目id列表
     * @var int[]
     */
    protected ?array $projectErrorList = null;

    /**
     * 更新成功的项目列表
     * @var array<string,mixed>[]
     */
    protected ?array $projectList = null;

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * 更新失败的项目id列表
     * @return int[]
     */
    public function getProjectErrorList(): ?array
    {
        return $this->projectErrorList;
    }

    /**
     * 更新失败的项目id列表
     * @param int[] $projectErrorList
     * @return self
     */
    public function setProjectErrorList(?array $projectErrorList): self
    {
        $this->projectErrorList = $projectErrorList;
        return $this;
    }

    /**
     * 更新成功的项目列表
     * @return array<string,mixed>[]
     */
    public function getProjectList(): ?array
    {
        return $this->projectList;
    }

    /**
     * 更新成功的项目列表
     * @param array<string,mixed>[] $projectList
     * @return self
     */
    public function setProjectList(?array $projectList): self
    {
        $this->projectList = $projectList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        if ($this->projectErrorList !== null) {
            $result['project_error_list'] = $this->projectErrorList;
        }
        if ($this->projectList !== null) {
            $result['project_list'] = $this->projectList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_error_list'] ?? null) !== null && is_array($v)) {
            $obj->projectErrorList = $v;
        }
        if (($v = $data['project_list'] ?? null) !== null && is_array($v)) {
            $obj->projectList = $v;
        }
        return $obj;
    }
}
