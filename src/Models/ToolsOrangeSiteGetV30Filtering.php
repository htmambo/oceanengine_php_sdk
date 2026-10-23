<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsOrangeSiteGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $microAppInstanceId = null;

    /**
     * @var string
     */
    protected ?string $search = null;

    /**
     * @return int
     */
    public function getMicroAppInstanceId(): ?int
    {
        return $this->microAppInstanceId;
    }

    /**
     * @param int $microAppInstanceId
     * @return self
     */
    public function setMicroAppInstanceId(?int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * @param string $search
     * @return self
     */
    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->microAppInstanceId !== null) {
            $result['micro_app_instance_id'] = $this->microAppInstanceId;
        }
        if ($this->search !== null) {
            $result['search'] = $this->search;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['micro_app_instance_id'] ?? null) !== null) {
            $obj->microAppInstanceId = (int) $v;
        }
        if (($v = $data['search'] ?? null) !== null) {
            $obj->search = (string) $v;
        }
        return $obj;
    }
}
