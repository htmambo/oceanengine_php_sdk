<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeCategoryTopAuthorGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2ResponseDataAuthorsInner[]
     */
    protected ?array $authors = null;

    /**
     * @return \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2ResponseDataAuthorsInner[]
     */
    public function getAuthors(): ?array
    {
        return $this->authors;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2ResponseDataAuthorsInner[] $authors
     * @return self
     */
    public function setAuthors(?array $authors): self
    {
        $this->authors = $authors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authors !== null) {
            $result['authors'] = $this->authors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['authors'] ?? null) !== null && is_array($v)) {
            $obj->authors = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2ResponseDataAuthorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
