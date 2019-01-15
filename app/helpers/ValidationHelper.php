<?php

namespace App\Helpers;

use Respect\Validation\Validator as V;
use DavidePastore\Slim\Validation\Validation;

class ValidationHelper {
	public static function validate($func) {
		return new Validation(call_user_func([new ValidationHelper, $func]));
	}
}