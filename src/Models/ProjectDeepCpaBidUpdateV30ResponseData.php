<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectDeepCpaBidUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的项目列表
     * @var \Oceanengine\Models\ProjectDeepCpaBidUpdateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新失败的项目列表
     * @return \Oceanengine\Models\ProjectDeepCpaBidUpdateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 更新失败的项目列表
     * @param \Oceanengine\Models\ProjectDeepCpaBidUpdateV30ResponseDataErrorsInner[] $errors
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
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\ProjectDeepCpaBidUpdateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
