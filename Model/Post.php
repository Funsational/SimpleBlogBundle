<?php

namespace Funsational\SimpleBlogBundle\Model;

use DateTime;

abstract class Post
{
    protected $id;
    
    /**
     * Topic the post belongs to
     * @mongodb:String
     * @var Topic
     */
    protected $topic;
    
    /**
     * @validation:NotBlank(message="Please write a message")
     * @validation:MinLength(limit=4, message="Just a little too short.")
     *
     * @var string
     */
    protected $message;
    
    /**
     * Post number relative to its topic
     *
     * @var int
     */
    protected $number = null;

    protected $createdAt;
    protected $updatedAt;

    public function __construct()
    {
        $this->setCreatedAt(new DateTime());
    }

    /**
     * Return the name of this post author
     *
     * @return string
     **/
    abstract public function getAuthorName();

    /**
     * Gets the id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Gets the message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get number
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number
     * @param  int
     * @return null
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Gets the creation timestamp
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the creation date
     *
     * @return null
     **/
    public function setCreatedAt(DateTime $date)
    {
        $this->createdAt = $date;
    }

    /**
     * Gets the update timestamp
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Gets the topic
     *
     * @return Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets the topic
     *
     * @return null
     **/
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }

}
