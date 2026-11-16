<?php

namespace Moonsea\Files\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    use FileRules;
}
