<?php

namespace Realestate\MssqlBundle\Schema;

use Doctrine\DBAL\Schema\SQLServerSchemaManager;
use Doctrine\DBAL\Schema\ForeignKeyConstraint;

/**
 * Schema manager for the MsSql/Dblib RDBMS.
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @author      Scott Morken <scott.morken@pcmail.maricopa.edu>
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 * @author      Roman Borschel <roman@code-factory.org>
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @version     $Revision$
 * @since       2.0
 */

class DblibSchemaManager extends SQLServerSchemaManager
{

}
