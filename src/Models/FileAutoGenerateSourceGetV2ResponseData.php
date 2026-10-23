<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAutoGenerateSourceGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @var \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @return \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
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
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\FileAutoGenerateSourceGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
