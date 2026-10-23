<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserStoreSearchV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $address = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        return $obj;
    }
}
