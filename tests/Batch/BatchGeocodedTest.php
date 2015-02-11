<?php

/*
 * This file is part of the Geotools library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Geotools\Tests\Batch;

use League\Geotools\Batch\BatchGeocoded;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class BatchGeocodedTest extends \League\Geotools\Tests\TestCase
{
	public function testFromArray()
	{
		$batchGeocoded = new BatchGeocoded;

		$array = array(
			'providerName' => 'Foo provider foo',
			'query'        => 'Bar query bar',
			'exception'    => 'Baz exception baz',
		);

		$batchGeocoded->fromArray($array);

		$this->assertEquals('Foo provider foo', $batchGeocoded->getProviderName());
		$this->assertEquals('Bar query bar', $batchGeocoded->getQuery());
		$this->assertEquals('Baz exception baz', $batchGeocoded->getExceptionMessage());
	}
}