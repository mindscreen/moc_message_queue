<?php
namespace MOC\MocMessageQueue\Message;

/**
 * Interface that all messages must implement
 *
 * The message objects should be simple objects that can be serialized by PHPs native serialize method. A message should
 * not contain objects that are specific to a given context (domain), but should instead provide enough information that
 * different contexts can fetch the needed information to process the given message.
 *
 * As a concrete example, do not let you message contain references to domain objects, but instead let your message hold
 * a unique identifier (maybe the uid of af row in a database) that the domain that listens to the message can use to
 * retrieve the model specific for its domain or context.
 *
 * @package MOC\MocMessageQueue
 */
interface MessageInterface {

	/**
	 * Return a unique identifier for this message
	 *
	 * @return string
	 */
	public function getIdentifier();

	/**
	 * Set the unique identifier for this message.
	 *
	 * The ID is typically generated by the actual message queue implementation, and it needs to be able to set the
	 * id on the message.
	 *
	 * @param string $identifier
	 * @return void
	 */
	public function setIdentifier($identifier);

}