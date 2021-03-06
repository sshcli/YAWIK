<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright https://yawik.org/COPYRIGHT.php
 * @license   MIT
 */

/** CoordinateInterface.php */
namespace Jobs\Entity;

use Core\Entity\EntityInterface;

/**
 * Interface CoordinatesInterface
 *
 * @package Jobs\Entity
 */
interface CoordinatesInterface extends EntityInterface
{
    const TYPE_POINT = 'Point';
    const TYPE_MULTIPOINT = 'MultiPoint';
    const TYPE_LINESTRING = 'LineString';
    const TYPE_POLYGON = 'Polygon';
    const TYPE_MULTILINESTRING = 'MultiLineString';
    const TYPE_MULTIPOLYGON = 'MultiPolygon';

    public function setType($type);
    public function getType();
    public function setCoordinates(array $coordinates);
    public function getCoordinates();
}
