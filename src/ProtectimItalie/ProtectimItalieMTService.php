<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ProtectimItalieMTService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'ArrayOfstring' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfstring',
  'ArrayOfdouble' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfdouble',
  'SimulationDataMT' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SimulationDataMT',
  'ArrayOfAssureData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfAssureData',
  'AssureData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\AssureData',
  'ArrayOfSurprimeData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfSurprimeData',
  'SurprimeData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SurprimeData',
  'RisqueProfessionnel' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\RisqueProfessionnel',
  'ArrayOfPretData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfPretData',
  'PretData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\PretData',
  'ArrayOfPalierPretData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfPalierPretData',
  'PalierPretData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\PalierPretData',
  'SimulationResultMT' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SimulationResultMT',
  'ArrayOfArrayOfFormaliteMedicaleData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfArrayOfFormaliteMedicaleData',
  'ArrayOfFormaliteMedicaleData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfFormaliteMedicaleData',
  'FormaliteMedicaleData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\FormaliteMedicaleData',
  'ArrayOfArrayOfCotisationRow' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfArrayOfCotisationRow',
  'ArrayOfCotisationRow' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfCotisationRow',
  'CotisationRow' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\CotisationRow',
  'ArrayOfCotisationData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfCotisationData',
  'CotisationData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\CotisationData',
  'ArrayOfTauxAssurePret' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfTauxAssurePret',
  'TauxAssurePret' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\TauxAssurePret',
  'ArrayOfArrayOfCotisationData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfArrayOfCotisationData',
  'ArrayOfMontantTotalSouscriptionData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfMontantTotalSouscriptionData',
  'MontantTotalSouscriptionData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\MontantTotalSouscriptionData',
  'ArrayOfProfessionData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfProfessionData',
  'ProfessionData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ProfessionData',
  'ArrayOfDossierSimulation' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\ArrayOfDossierSimulation',
  'DossierSimulation' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\DossierSimulation',
  'CreateSimulationData' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\CreateSimulationData',
  'CreateSimulationDataResponse' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\CreateSimulationDataResponse',
  'Simulate' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\Simulate',
  'SimulateResponse' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SimulateResponse',
  'GetProfessions' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\GetProfessions',
  'GetProfessionsResponse' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\GetProfessionsResponse',
  'SaveDossierSimulation' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SaveDossierSimulation',
  'SaveDossierSimulationResponse' => 'FilippoToso\\AfiEsca\\ProtectimItalie\\SaveDossierSimulationResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'D:\efes.to\components\filippo-toso\afiesca\generator/wsdl/SimulateurProtectimItalieMTService.xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateSimulationData $parameters
     * @return CreateSimulationDataResponse
     */
    public function CreateSimulationData(CreateSimulationData $parameters)
    {
      return $this->__soapCall('CreateSimulationData', array($parameters));
    }

    /**
     * @param Simulate $parameters
     * @return SimulateResponse
     */
    public function Simulate(Simulate $parameters)
    {
      return $this->__soapCall('Simulate', array($parameters));
    }

    /**
     * @param GetProfessions $parameters
     * @return GetProfessionsResponse
     */
    public function GetProfessions(GetProfessions $parameters)
    {
      return $this->__soapCall('GetProfessions', array($parameters));
    }

    /**
     * @param SaveDossierSimulation $parameters
     * @return SaveDossierSimulationResponse
     */
    public function SaveDossierSimulation(SaveDossierSimulation $parameters)
    {
      return $this->__soapCall('SaveDossierSimulation', array($parameters));
    }

}
