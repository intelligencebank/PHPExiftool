<?php

namespace PHPExiftool\Driver\Tag\Canon;

class ToningEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 15;

    protected $Name = 'ToningEffect';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Toning Effect';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Sepia',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Blue',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Purple',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Green',
        ),
    );

}