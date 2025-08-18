<?php

return array (
  'front-header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 10,
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'bordered-active-item bordered-active-item--bottom',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'hero' => 
    array (
      'props' => 
      array (
        'heroSection' => 
        array (
          'layout' => 'textOnly',
        ),
      ),
      'style' => 
      array (
        'descendants' => 
        array (
          'outer' => 
          array (
            'padding' => 
            array (
              'top' => 
              array (
                'value' => 280,
              ),
              'bottom' => 
              array (
                'value' => 330,
              ),
            ),
            'background' => 
            array (
              'overlay' => 
              array (
                'enabled' => true,
                'gradient_opacity' => 100,
              ),
              'type' => 'image',
              'image' => 
              array (
                'attachment' => 'scroll',
                'size' => 'cover',
              ),
            ),
          ),
        ),
      ),
      'full_height' => false,
      'hero_column_width' => 100,
    ),
    'buttons' =>
    array (
      'value' =>
      array (
        0 =>
        array (
          'label' => 'Start Your Journey',
        ),
        1 =>
        array (
          'label' => 'Contact us',
        ),
      ),
    ),
  ),
  'header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 10,
          ),
        ),
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'bordered-active-item bordered-active-item--bottom',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
  ),
);
