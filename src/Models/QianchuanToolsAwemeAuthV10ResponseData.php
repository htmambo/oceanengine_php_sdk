<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsAwemeAuthV10ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $authSuccess = null;

    /**
     * @return bool
     */
    public function getAuthSuccess(): ?bool
    {
        return $this->authSuccess;
    }

    /**
     * @param bool $authSuccess
     * @return self
     */
    public function setAuthSuccess(?bool $authSuccess): self
    {
        $this->authSuccess = $authSuccess;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authSuccess !== null) {
            $result['auth_success'] = $this->authSuccess;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_success'] ?? null) !== null) {
            $obj->authSuccess = (bool) $v;
        }
        return $obj;
    }
}
