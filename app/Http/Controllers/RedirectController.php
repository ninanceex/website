<?php

namespace App\Http\Controllers;

class RedirectController extends Controller
{
    protected $filenamesMap = [
        'NIC-WhitePaper-Eng.pdf'            => 'Ninance-WhitePaper-En.pdf',
        'NIC-WhitePaper-Rus.pdf'            => 'Ninance-WhitePaper-Ru.pdf',
        'Ninance-BusinessOverview-Eng.pdf' => 'Ninance-BusinessOverview-En.pdf',
        'Ninance-BusinessOverview-Rus.pdf' => 'Ninance-BusinessOverview-Ru.pdf',
        'Ninance-Overview-Eng.pdf'         => 'Ninance-Overview-En.pdf',
        'Ninance-Overview-Rus.pdf'         => 'Ninance-Overview-Ru.pdf',
        'Ninance-Onepager-Eng.pdf'         => 'Ninance-Onepager-En.pdf',
        'Ninance-OnepagerPS-Eng.pdf'       => 'Ninance-OnepagerPS-En.pdf',
    ];

    public function go($filename)
    {
        if ($toFile = array_get($this->filenamesMap, $filename)) {
            return redirect(sprintf("/docs/%s", $toFile));
        }
    }

}