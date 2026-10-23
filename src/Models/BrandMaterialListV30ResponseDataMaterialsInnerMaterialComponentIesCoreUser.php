<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentIesCoreUser implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $aliasAwemeId = null;

    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @return string
     */
    public function getAliasAwemeId(): ?string
    {
        return $this->aliasAwemeId;
    }

    /**
     * @param string $aliasAwemeId
     * @return self
     */
    public function setAliasAwemeId(?string $aliasAwemeId): self
    {
        $this->aliasAwemeId = $aliasAwemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->aliasAwemeId !== null) {
            $result['alias_aweme_id'] = $this->aliasAwemeId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alias_aweme_id'] ?? null) !== null) {
            $obj->aliasAwemeId = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        return $obj;
    }
}
