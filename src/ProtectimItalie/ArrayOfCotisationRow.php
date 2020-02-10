<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfCotisationRow
{

    /**
     * @var CotisationRow $CotisationRow
     */
    protected $CotisationRow = null;

    /**
     * @param CotisationRow $CotisationRow
     */
    public function __construct($CotisationRow = null)
    {
      $this->CotisationRow = $CotisationRow;
    }

    /**
     * @return CotisationRow
     */
    public function getCotisationRow()
    {
      return $this->CotisationRow;
    }

    /**
     * @param CotisationRow $CotisationRow
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfCotisationRow
     */
    public function setCotisationRow($CotisationRow)
    {
      $this->CotisationRow = $CotisationRow;
      return $this;
    }

}
