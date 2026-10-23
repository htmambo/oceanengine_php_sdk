<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryStatementV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInner[]
     */
    protected ?array $projectRefStatementList = null;

    /**
     * @return \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInner[]
     */
    public function getProjectRefStatementList(): ?array
    {
        return $this->projectRefStatementList;
    }

    /**
     * @param \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInner[] $projectRefStatementList
     * @return self
     */
    public function setProjectRefStatementList(?array $projectRefStatementList): self
    {
        $this->projectRefStatementList = $projectRefStatementList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectRefStatementList !== null) {
            $result['project_ref_statement_list'] = $this->projectRefStatementList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_ref_statement_list'] ?? null) !== null && is_array($v)) {
            $obj->projectRefStatementList = array_map(fn ($vv) => \Oceanengine\Models\QueryStatementV2ResponseDataProjectRefStatementListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
