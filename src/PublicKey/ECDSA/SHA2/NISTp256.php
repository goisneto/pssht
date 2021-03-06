<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace fpoirotte\Pssht\PublicKey\ECDSA\SHA2;

/**
 * Public key using the Elliptic Curve Digital Signature Algorithm (ECDSA)
 * with the NIST P-256 elliptic curve.
 */
class NISTp256 extends \fpoirotte\Pssht\PublicKey\ECDSA\SHA2\Base
{
    public static function getHash()
    {
        return 'sha256';
    }

    public static function getIdentifier()
    {
        return 'nistp256';
    }
}
