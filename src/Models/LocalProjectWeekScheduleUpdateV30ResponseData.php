<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectWeekScheduleUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * <projectId, error>
     * @var \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30ResponseDataErrorInner[]
     */
    protected ?array $error = null;

    /**
     * 成功的projectId
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * <projectId, error>
     * @return \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30ResponseDataErrorInner[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * <projectId, error>
     * @param \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30ResponseDataErrorInner[] $error
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * 成功的projectId
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 成功的projectId
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
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30ResponseDataErrorInner::fromArray($vv), $v);
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        return $obj;
    }
}
