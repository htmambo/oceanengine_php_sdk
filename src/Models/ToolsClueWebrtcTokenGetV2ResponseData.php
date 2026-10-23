<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueWebrtcTokenGetV2ResponseData implements \JsonSerializable
{
    /**
     * 坐席token
     * @var string
     */
    protected ?string $token = null;

    /**
     * 坐席token
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * 坐席token
     * @param string $token
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->token !== null) {
            $result['token'] = $this->token;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['token'] ?? null) !== null) {
            $obj->token = (string) $v;
        }
        return $obj;
    }
}
