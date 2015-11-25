<?php

    namespace Dez\Config\Adapter;

    use Dez\Config\Config;
    use Dez\Config\Exception;

    class Ini extends Config {

        /**
         * Ini constructor.
         * @param string $filePath
         * @throws Exception
         */
        public function __construct( $filePath = '' )
        {
            if( ! file_exists( $filePath ) ) {
                throw new Exception("Config file dont exists {$filePath}");
            }
            parent::__construct( parse_ini_file( realpath( $filePath ), true ) );
        }

    }