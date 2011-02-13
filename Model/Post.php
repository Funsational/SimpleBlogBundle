<?php

namespace Funsational\SimpleBlogBundle\Model;

use DateTime;

abstract class Post
{
    protected $id;
    
    /**
     * @validation:NotBlank(message="Please enter a title")
     *
     * @var string
     */
    protected $title;
    
    /**
     * @validation:NotBlank(message="Please write a message")
     * @validation:MinLength(limit=4, message="Just a little too short.")
     *
     * @var string
     */
    protected $message;

    protected $createdAt;
    protected $updatedAt;

    public function __construct()
    {
        $this->setCreatedAt(new DateTime());
    }

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
     * Sets the title
     * 
     * @return string
     */
    public function setTitle($title)
    {
    	$this->title = $title;
    }
    
    /**
     * Gets the title
     * 
     * @return string
     */
    public function getTitle()
    {
    	return $this->title;
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
     * Return the name of this post author
     *
     * @return string
     **/
    abstract public function getAuthorName();
    
    public function __toString()
    {
        return (string) $this->getId();
    }
}
