<?php
/**
 * phpDocumentor
 *
 * PHP Version 5
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */
namespace phpDocumentor\Reflection;

use PhpParser\Node\Expr;

/**
 * Test double for PrettyPrinter.
 */
class PrettyPrinterMock extends PrettyPrinter
{
    public $calls = 0;

    public function prettyPrintExpr(Expr $node): string
    {
        $this->calls++;

        return 'test_output';
    }
}
