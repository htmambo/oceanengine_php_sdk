<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $contacter = null;

    /**
     * @var string
     */
    protected ?string $email = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $note = null;

    /**
     * @var string
     */
    protected ?string $phonenumber = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContacter(): ?string
    {
        return $this->contacter;
    }

    /**
     * @param string $contacter
     * @return self
     */
    public function setContacter(?string $contacter): self
    {
        $this->contacter = $contacter;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
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
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    /**
     * @param string $phonenumber
     * @return self
     */
    public function setPhonenumber(?string $phonenumber): self
    {
        $this->phonenumber = $phonenumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->contacter !== null) {
            $result['contacter'] = $this->contacter;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->note !== null) {
            $result['note'] = $this->note;
        }
        if ($this->phonenumber !== null) {
            $result['phonenumber'] = $this->phonenumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['contacter'] ?? null) !== null) {
            $obj->contacter = (string) $v;
        }
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['note'] ?? null) !== null) {
            $obj->note = (string) $v;
        }
        if (($v = $data['phonenumber'] ?? null) !== null) {
            $obj->phonenumber = (string) $v;
        }
        return $obj;
    }
}
