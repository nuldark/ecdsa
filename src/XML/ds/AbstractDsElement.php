<?php

/*
 * This file is part of the nuldark/xmldsig.
 *
 * Copyright (C) 2023 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Nuldark\XmlDSig\XML\ds;

use Nuldark\Stdlib\XML\AbstractElement;
use Nuldark\XmlDSig\Constants as C;

abstract class AbstractDsElement extends AbstractElement
{
    /**
     * @inheritDoc
     */
    public function getNamespaceURI(): string {
        return C::XMLDSIG_NS;
    }

    /**
     * @inheritDoc
     */
    public function getNamespacePrefix(): ?string {
        return C::XMLDSIG_NS_PREFIX;
    }
}
