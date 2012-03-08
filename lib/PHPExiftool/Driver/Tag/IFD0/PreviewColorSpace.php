<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class PreviewColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50970;

    protected $Name = 'PreviewColorSpace';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Preview Color Space';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Gray Gamma 2.2',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'sRGB',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Adobe RGB',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'ProPhoto RGB',
        ),
    );

}