<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractedChallengeUrlV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $taskUrl = null;

    /**
     * @return string
     */
    public function getTaskUrl(): ?string
    {
        return $this->taskUrl;
    }

    /**
     * @param string $taskUrl
     * @return self
     */
    public function setTaskUrl(?string $taskUrl): self
    {
        $this->taskUrl = $taskUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->taskUrl !== null) {
            $result['task_url'] = $this->taskUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_url'] ?? null) !== null) {
            $obj->taskUrl = (string) $v;
        }
        return $obj;
    }
}
