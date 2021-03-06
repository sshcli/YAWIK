<?php
/**
 * YAWIK
 *
 * @filesource
 * @license MIT
 * @copyright https://yawik.org/COPYRIGHT.php
 */

/** */
namespace Jobs\Factory\Listener;

use Interop\Container\ContainerInterface;
use Jobs\Listener\DeleteJob;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * Factory for \Jobs\Listener\DeleteJob
 *
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 * @since 0.29
 */
class DeleteJobFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $acl = $container->get('Acl');
        $auth = $container->get('AuthenticationService');
        $user = $auth->getUser();
        $repositories = $container->get('repositories');
        $repository = $repositories->get('Jobs');
        $listener = new DeleteJob($repository, $user, $acl);

        return $listener;
    }
}