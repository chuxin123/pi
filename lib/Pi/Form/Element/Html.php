<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 * @package         Form
 */

namespace Pi\Form\Element;

use Zend\Form\Element;

/**
 * Element to render html code w/o input
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Html extends Element
{
    /**
     * Seed attributes
     * @var array
     */
    protected $attributes = array(
        'type'  => 'html',
    );
}
