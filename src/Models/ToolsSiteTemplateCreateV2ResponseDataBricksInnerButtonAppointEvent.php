<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent implements \JsonSerializable
{
    /**
     * 游戏站ID
     * @var string
     */
    protected ?string $gameId = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink $link = null;

    /**
     * 游戏站ID
     * @return string
     */
    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    /**
     * 游戏站ID
     * @param string $gameId
     * @return self
     */
    public function setGameId(?string $gameId): self
    {
        $this->gameId = $gameId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gameId !== null) {
            $result['game_id'] = $this->gameId;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_id'] ?? null) !== null) {
            $obj->gameId = (string) $v;
        }
        if (($v = $data['link'] ?? null) !== null && is_array($v)) {
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEventLink::fromArray($v);
        }
        return $obj;
    }
}
