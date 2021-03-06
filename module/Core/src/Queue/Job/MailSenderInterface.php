<?php

/**
 * YAWIK
 *
 * @see       https://github.com/cross-solution/YAWIK for the canonical source repository
 * @copyright https://github.com/cross-solution/YAWIK/blob/master/COPYRIGHT
 * @license   https://github.com/cross-solution/YAWIK/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Core\Queue\Job;

use Laminas\Mail\Message;

/**
 * TODO: description
 *
 * @author Mathias Gelhausen
 */
interface MailSenderInterface
{
    /**
     * Returns a mail spec understood by {@link \Core\Mail\MailService}
     *
     * This can either be a {@link Laminas\Mail\Message} object
     * or an array, which first element is the name of a mail
     * generated by the mail plugin manager, and the second element are the options.
     *
     * @return Message|array
     */
    public function getMail();
}
