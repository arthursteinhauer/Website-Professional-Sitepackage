<?php

/**
 * Extension Manager/Repository config file for ext "website_professional_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Website-Professional-Sitepackage',
    'description' => 'Website-Professional-Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WebsiteProfessional\\WebsiteProfessionalSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Arthur Steinhauer',
    'author_email' => 'a.steinhauer@website-professional.de',
    'author_company' => 'Website-Professional',
    'version' => '1.0.0',
];
