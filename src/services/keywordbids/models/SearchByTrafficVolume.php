<?php

namespace directapi\services\keywordbids\models;


use directapi\components\Model;

class SearchByTrafficVolume extends Model
{
    /**
     * @var int Желаемый объем трафика на поиске. Указывается в процентах от 5 до 100.
     * @Assert\Count(
     *     min=5,
     *     max=100
     * )
     */
    public $TargetTrafficVolume;

    /**
     * @var int Процент надбавки от 0 до 1000. Если не задан, надбавка не рассчитывается.
     * @Assert\Count(
     *     min=0,
     *     max=1000
     * )
     */
    public $IncreasePercent;
}