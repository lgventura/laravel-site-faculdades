<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
      return [
          'titulo'   => 'required',
          'corpo'   => 'required',
          'resumo'   => 'required',
          'data'   => 'required',
          'palavras_chaves'   => 'required',
      ];
  }

  public function attributes(){
      return[
        'titulo'   => 'Titulo',
      ];
  }
}
