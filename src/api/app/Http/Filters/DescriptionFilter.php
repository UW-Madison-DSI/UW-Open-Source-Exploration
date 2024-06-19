<?php
/******************************************************************************\
|                                                                              |
|                            DescriptionFilter.php                             |
|                                                                              |
|******************************************************************************|
|                                                                              |
|        This defines a utility for filtering by description.                  |
|                                                                              |
|        Author(s): Abe Megahed                                                |
|                                                                              |
|        This file is subject to the terms and conditions defined in           |
|        'LICENSE.txt', which is part of this source code distribution.        |
|                                                                              |
|******************************************************************************|
|            Copyright (C) 2016-2024, Sharedigm, www.sharedigm.com             |
\******************************************************************************/

namespace App\Http\Filters;

use Illuminate\Http\Request;

class DescriptionFilter
{
	/**
	 * Apply filter to query.
	 *
	 * @param Illuminate\Http\Request $request - the Http request object
	 * @param Illuminate\Database\Query\Builder $query - the query to apply filters to
	 * @return Illuminate\Database\Query\Builder
	 */
	static function applyTo(Request $request, $query) {

		// parse parameters
		//
		if ($request->has('description')) {

			// apply filter
			//
			switch ($request->input('description')) {
				case 'true':
					$query = $query->whereNotNull('description');
					break;
				case 'false':
					$query = $query->whereNull('description');
					break;
			}
		}

		return $query;
	}
}