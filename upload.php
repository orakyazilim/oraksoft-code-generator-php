<?php
require 'vendor/autoload.php';

use Engtuncay\Phputils8\meta\FiColList;
use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['excelFile'])) {
  $uploadedFile = $_FILES['excelFile'];

  if ($uploadedFile['error'] !== UPLOAD_ERR_OK) {
    die('Dosya yüklenirken hata oluştu.');
  }

  $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
  $allowedExtensions = ['xlsx', 'xls', 'csv'];

  if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
    die('Geçersiz dosya formatı. Sadece .xlsx, .xls veya .csv dosyaları yükleyebilirsiniz.');
  }

  $inputFileName = $uploadedFile['tmp_name'];

  $fiExcel = new \Engtuncay\Phputils8\excel\FiExcel();

  $fiCols = new FiColList();
  $fiCol = new \Engtuncay\Phputils8\meta\FiCol();
  $fiCol->ofcTxFieldName="A1";
  $fiCol->ofcTxHeader="A1";

  $fiCols->add($fiCol);

  $fdr = $fiExcel::readExcelFile($inputFileName, $fiCols);

  print_r($fdr);




//    try {
//        $spreadsheet = IOFactory::load($inputFileName);
//        $sheet = $spreadsheet->getActiveSheet();
//
//        // En yüksek satır ve sütun numaralarını al
//        $highestRow = $sheet->getHighestRow(); // Toplam satır sayısı
//        $highestColumn = $sheet->getHighestColumn(); // En yüksek sütun harfi (örneğin, "D")
//        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // Sütun harfini indekse çevir (örneğin, "D" -> 4)
//
//        // Satırları dolaş
//        for ($row = 1; $row <= $highestRow; $row++) {
//            // Sütunları dolaş
//            $fkb = new \Engtuncay\Phputils\core\FiKeybean();
//            for ($col = 1; $col <= $highestColumnIndex; $col++) {
//                // Hücre değerini al
//                $cellValue = $sheet->getCellByColumnAndRow($col, $row)->getValue();
//                echo $cellValue . "\t";
//            }
//            echo PHP_EOL; // Satır sonu
//        }
//
////        foreach ($sheet->getRowIterator() as $row) {
////            $cellIterator = $row->getCellIterator();
////            $cellIterator->setIterateOnlyExistingCells(false);
////
////            foreach ($cellIterator as $cell) {
////                echo $cell->getValue() . "\t";
////            }
////            echo PHP_EOL;
////        }
//    } catch (Exception $e) {
//        echo 'Excel dosyası okunurken hata oluştu: ', $e->getMessage(), PHP_EOL;
//    }
//} else {
//    echo 'Lütfen bir dosya seçin.';

}
