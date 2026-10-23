<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBiddingListQueryV2ResponseDataDataInnerCollaboratorsInner implements \JsonSerializable
{
    /**
     * 协作者ID
     * @var int
     */
    protected ?int $collaboratorId = null;

    /**
     * 协作者名称
     * @var string
     */
    protected ?string $collaboratorName = null;

    /**
     * 协作者ID
     * @return int
     */
    public function getCollaboratorId(): ?int
    {
        return $this->collaboratorId;
    }

    /**
     * 协作者ID
     * @param int $collaboratorId
     * @return self
     */
    public function setCollaboratorId(?int $collaboratorId): self
    {
        $this->collaboratorId = $collaboratorId;
        return $this;
    }

    /**
     * 协作者名称
     * @return string
     */
    public function getCollaboratorName(): ?string
    {
        return $this->collaboratorName;
    }

    /**
     * 协作者名称
     * @param string $collaboratorName
     * @return self
     */
    public function setCollaboratorName(?string $collaboratorName): self
    {
        $this->collaboratorName = $collaboratorName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->collaboratorId !== null) {
            $result['collaborator_id'] = $this->collaboratorId;
        }
        if ($this->collaboratorName !== null) {
            $result['collaborator_name'] = $this->collaboratorName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['collaborator_id'] ?? null) !== null) {
            $obj->collaboratorId = (int) $v;
        }
        if (($v = $data['collaborator_name'] ?? null) !== null) {
            $obj->collaboratorName = (string) $v;
        }
        return $obj;
    }
}
