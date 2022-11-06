<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;
class OperationsModel{

	function __construct(){

	}

	public function indexDB(){

		$sql="SELECT *FROM operations";

		return Connection::prepare($sql)->fetchAll();
	}

	public function exportExcelDB(Operations $operation){

		$sql="SELECT * FROM operations WHERE operations_date BETWEEN ? AND ?";

		$sql_query=Connection::prepare($sql)->bindvalue(
			$operation->getOperationsDate(),
			$operation	->getOperationsDate()
		)->fetchAll();

		$url ="./assets/excel/templates/Hermeco-template.xlsx";
		$inicial = 4;
		$contador = count($sql_query);

		$spreadsheet = IOFactory::createReader("Xlsx")->load($url);
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->getStyle('A:R')->getAlignment()->setHorizontal('center');

		foreach($sql_query as $key => $file) {
			$worksheet->getStyle("A{$inicial}:R{$inicial}")
			->getFill()
			->setFillType(Fill::FILL_SOLID)
			->getStartColor()
			->setARGB((($key % 2) === 0) ? "D5D3D1" : "FFFFFF");

			$worksheet->setCellValue("A{$inicial}", $file->operations_delivery_order);
			$worksheet->setCellValue("B{$inicial}", $file->operations_date);
			$worksheet->setCellValue("C{$inicial}", $file->operations_op);
			$worksheet->setCellValue("D{$inicial}", $file->idproviders);
			$worksheet->setCellValue("E{$inicial}", $file->operations_number_bags);
			$worksheet->setCellValue("F{$inicial}", $file->operations_guide);
			$worksheet->setCellValue("G{$inicial}", $file->operations_delivery);
			$worksheet->setCellValue("H{$inicial}", $file->operations_purchase_order);
			$worksheet->setCellValue("I{$inicial}", $file->operations_content);
			$worksheet->setCellValue("J{$inicial}", $file->operations_departure_date);
			$worksheet->setCellValue("K{$inicial}", $file->operations_city);
			$worksheet->setCellValue("L{$inicial}", $file->operations_departament);
			$worksheet->setCellValue("M{$inicial}", $file->operations_recipient_name);
			$worksheet->setCellValue("N{$inicial}", $file->idproviders_second);
			$worksheet->setCellValue("O{$inicial}", $file->operations_plaque);
			$worksheet->setCellValue("P{$inicial}", $file->idstatus);
			$worksheet->setCellValue("Q{$inicial}", $file->operations_type);
			$worksheet->setCellValue("R{$inicial}", $file->codigo_tarifa);

			$inicial ++;
		}

		$filename = "Informe-Hermeco.xlsx";
		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save("templates/{$filename}");
		header("http://localhost:8000/api/assets/excel/templates/{$filename}");
	}
}