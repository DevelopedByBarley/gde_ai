<?php
return [
  'title' => 'Regisztráció',
  'intro' => 'Töltsd ki az alábbi űrlapot a konferenciára való jelentkezéshez.',
  'types' => [
    'Résztvevő regisztráció',
    'Előadó regisztráció',
  ],
  'fields' => [
    'name' => 'Név',
    'email' => 'E-mail cím',
    'company' => 'Cég / Egyetem',
    'phone' => 'Telefonszám',
  ],
  'select_conferences' => 'Válaszd ki, mely konferenciákon vennél részt',
  'conf_items' => [
    [
      'title' => 'Információbiztonság',
      'value' => 'information_security',
      'meta' => 'Kiberbiztonság, adatvédelem, kockázatkezelés',
      'date' => 'május 18.',
      'icon' => '🔒',
    ],
    [
      'title' => 'Dróntechnológia',
      'value' => 'drone_technology',
      'meta' => 'Rendszerek, alkalmazások, kockázatkezelés',
      'date' => 'május 18.',
      'icon' => '🛸',
    ],
    [
      'title' => 'FTFL',
      'value' => 'ftfl',
      'meta' => 'Tanulási rendszerek, új módszertanok',
      'date' => 'május 18.',
      'icon' => '💡',
    ],
    [
      'title' => 'International Conference on Artificial Intelligence and Digital Transformation',
      'value' => 'artificial_intelligence',
      'meta' => 'AI, adatok, alkalmazások',
      'date' => 'május 18.',
      'icon' => '☁️',
    ],
  ],
  'agree' => 'Elfogadom az ÁSZF-et',
  'submit' => 'Küldés',
];
