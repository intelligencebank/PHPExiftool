<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPCreatorAtom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MacAtomInvocationAppleEvent extends AbstractTag
{

    protected $Id = 'macAtomInvocationAppleEvent';

    protected $Name = 'MacAtomInvocationAppleEvent';

    protected $FullName = 'XMP::creatorAtom';

    protected $GroupName = 'XMP-creatorAtom';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-creatorAtom';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Mac Atom Invocation Apple Event';
}
