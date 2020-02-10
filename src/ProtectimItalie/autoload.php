<?php


 function autoload_bf0419f415703f4cf901664e94789157($class)
{
    $classes = array(
        'FilippoToso\AfiEsca\ProtectimItalie\ProtectimItalieMTService' => __DIR__ .'/ProtectimItalieMTService.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfdouble' => __DIR__ .'/ArrayOfdouble.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT' => __DIR__ .'/SimulationDataMT.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfAssureData' => __DIR__ .'/ArrayOfAssureData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\AssureData' => __DIR__ .'/AssureData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\TypeCivilite' => __DIR__ .'/TypeCivilite.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfSurprimeData' => __DIR__ .'/ArrayOfSurprimeData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SurprimeData' => __DIR__ .'/SurprimeData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel' => __DIR__ .'/RisqueProfessionnel.php',
        'FilippoToso\AfiEsca\ProtectimItalie\TypeCotisation' => __DIR__ .'/TypeCotisation.php',
        'FilippoToso\AfiEsca\ProtectimItalie\TypePeriodicite' => __DIR__ .'/TypePeriodicite.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfPretData' => __DIR__ .'/ArrayOfPretData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\PretData' => __DIR__ .'/PretData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfPalierPretData' => __DIR__ .'/ArrayOfPalierPretData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\PalierPretData' => __DIR__ .'/PalierPretData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT' => __DIR__ .'/SimulationResultMT.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfFormaliteMedicaleData' => __DIR__ .'/ArrayOfArrayOfFormaliteMedicaleData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfFormaliteMedicaleData' => __DIR__ .'/ArrayOfFormaliteMedicaleData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\FormaliteMedicaleData' => __DIR__ .'/FormaliteMedicaleData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfCotisationRow' => __DIR__ .'/ArrayOfArrayOfCotisationRow.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfCotisationRow' => __DIR__ .'/ArrayOfCotisationRow.php',
        'FilippoToso\AfiEsca\ProtectimItalie\CotisationRow' => __DIR__ .'/CotisationRow.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfCotisationData' => __DIR__ .'/ArrayOfCotisationData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\CotisationData' => __DIR__ .'/CotisationData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfTauxAssurePret' => __DIR__ .'/ArrayOfTauxAssurePret.php',
        'FilippoToso\AfiEsca\ProtectimItalie\TauxAssurePret' => __DIR__ .'/TauxAssurePret.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfCotisationData' => __DIR__ .'/ArrayOfArrayOfCotisationData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfMontantTotalSouscriptionData' => __DIR__ .'/ArrayOfMontantTotalSouscriptionData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData' => __DIR__ .'/MontantTotalSouscriptionData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfProfessionData' => __DIR__ .'/ArrayOfProfessionData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ProfessionData' => __DIR__ .'/ProfessionData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\ArrayOfDossierSimulation' => __DIR__ .'/ArrayOfDossierSimulation.php',
        'FilippoToso\AfiEsca\ProtectimItalie\DossierSimulation' => __DIR__ .'/DossierSimulation.php',
        'FilippoToso\AfiEsca\ProtectimItalie\CreateSimulationData' => __DIR__ .'/CreateSimulationData.php',
        'FilippoToso\AfiEsca\ProtectimItalie\CreateSimulationDataResponse' => __DIR__ .'/CreateSimulationDataResponse.php',
        'FilippoToso\AfiEsca\ProtectimItalie\Simulate' => __DIR__ .'/Simulate.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SimulateResponse' => __DIR__ .'/SimulateResponse.php',
        'FilippoToso\AfiEsca\ProtectimItalie\GetProfessions' => __DIR__ .'/GetProfessions.php',
        'FilippoToso\AfiEsca\ProtectimItalie\GetProfessionsResponse' => __DIR__ .'/GetProfessionsResponse.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulation' => __DIR__ .'/SaveDossierSimulation.php',
        'FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulationResponse' => __DIR__ .'/SaveDossierSimulationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bf0419f415703f4cf901664e94789157');

// Do nothing. The rest is just leftovers from the code generation.
{
}
