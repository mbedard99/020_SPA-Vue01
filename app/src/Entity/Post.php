<?php

namespace App\Entity;

use Carbon\Carbon;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(name="string", type="string")
	 */
	private $message;

	/**
	 * @var \DateTime
	 * @ORM\Column(name="created", type="datetime")
	 */
	private $created;

	/**
	 * @var \DateTime
	 * @ORM\Column(name="updated", type="datetime", nullable=true)
	 */
	private $updated;

	/**
	 * @var string
	 * @ORM\Column(name="message2", type="string", nullable=true)
	 */
	private $message2;


	/**
	 * @ORM\PrePersist
	 * @return void
	 */
	public function onPrePersist(): void
	{
		$this->created = Carbon::now();
	}

	/**
	 * @ORM\PreUpdate
	 * @return void
	 */
	public function onPreUpdate(): void
	{
		$this->updated = Carbon::now();
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getMessage(): string
	{
		return $this->message;
	}

	/**
	 * @param string $message
	 * @return void
	 */
	public function setMessage(string $message): void
	{
		$this->message = $message;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreated(): \DateTime
	{
		return $this->created;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getUpdated(): ?\DateTime
	{
		return $this->updated;
	}

	/**
	 * @return string
	 */
	public function getMessage2(): ?string {
		return $this->message2;
	}

	/**
	 * @param string $message2
	 */
	public function setMessage2( string $message2 ): void {
		$this->message2 = $message2;
	}


}
