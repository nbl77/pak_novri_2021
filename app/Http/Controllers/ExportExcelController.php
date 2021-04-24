<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
  protected $url = "https://www.zonakreasi.com/baru/dataNilai.xml";
  protected $data = [];

  public function __construct(){
      $xml = file_get_contents($this->url);
      if (trim($xml) != '') {
          $xml = simplexml_load_file($this->url);
          $json = json_encode($xml);
          $this->data = json_decode($json,TRUE);
          try {
            if ($this->data['dataPemain']['nama']) {
              $this->data = $this->data;
            }
          } catch (\Exception $e) {
            $this->data = $this->data['dataPemain'];
          }
      }
  }

  function excel()
    {
     $customer_array[] = array('Nama', 'Kelas', 'Nilai', 'Nilai 2', 'Nilai 3', 'UK 1', 'UK 2', 'Semester', 'Pelajaran');
     //  Excel::download('Customer Data', function($excel) use ($customer_array){
     //  $excel->setTitle('Customer Data');
     //  $excel->sheet('Customer Data', function($sheet) use ($customer_array){
     //   $sheet->fromArray($customer_array, null, 'A1', false, false);
     //  });
     // })->download('xlsx');
    $res = [$customer_array];
    foreach ($this->data as $value) {
      $user = array($value['nama'], $value['kelas'], $value['nilai'], $value['nilai2'], $value['nilai3'], $value['uk1'], $value['uk2'], $value['semester'], $value['pelajaran']);
      array_push($res, $user);
    }
     $export = new UsersExport($res);
    return Excel::download($export, 'invoices.xlsx');
    }
}
