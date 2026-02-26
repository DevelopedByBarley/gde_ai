<?php

namespace App\Http\Controllers;

use Core\Response;
use Core\Session;
use Core\ValidationException;

class AbstractUploadController extends Controller
{
  public function index()
  {
    return Response::view('abstracts/index', 'layout');
  }

  public function store()
  {
    try {
      $file = $this->request->file('abstract_file');

      $validated = $this->request->validate([
        'name' => ['required', 'string', 'min:3', 'max:100', 'split', 'alpha'],
        'email' => ['required', 'email', 'max:255'],
        'abstract_file' => [
          'required',
          'fileSize:3072',
          'mimeType:application/pdf|application/msword|application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ],
      ], array_merge($this->request->all(), ['abstract_file' => $file]));

      $savedFileName = $this->storage->file($file)->save('/abstracts');

      if (!$savedFileName) {
        $this->toast->danger('Az absztrakt feltöltése nem sikerült. Kérjük próbálja meg újra.')->back();
      }

      $this->toast->success('Az absztrakt feltöltése sikeres!')->back();
    } catch (ValidationException $e) {
      Session::flash('errors', $e->errors);
      Session::flash('old', $e->old);
      $this->toast->danger('Validation failed. Please check your input and try again.')->back();
    }
  }
}

