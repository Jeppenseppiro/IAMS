<?php
  // Configuration
  include '../tcpdf/tcpdf.php';
  include '../config/database/conn.php';
  session_start();
  ob_start();
  date_default_timezone_set('Asia/Manila');

  class MYPDF extends TCPDF {

    public function Header() {
      $image_file = '../../img/MACBUILDERS.jpg';
      $this->Image($image_file, 40, 4, 22, 17, 'JPG');
      $this->SetFont('helvetica', 'B', 16);
      $this->Cell(0, 0, 'MAC BUILDERS', 0, 1, 'C', 0, '', 0);
      $this->SetFont('helvetica', 'B', 9);
      $this->Cell(0, 0, 'Purok 8, Brgy. Linao, Ormoc City, Western Leyte-6541', 0, 1, 'C', 0, '', 1);
      $this->Cell(0, 0, 'Tel. Nos.: (053) 560-9092, 255-2654; Fax: 561-5720', 0, 1, 'C', 0, '', 1);
    }

    public function Footer() {
      $this->SetY(-15);
      $this->SetFont('helvetica', '', 8);
      $this->Cell(0, 0, 'FO-ICT-001', 0, 1, 'L', 0, '', 1);
      $this->Cell(0, 0, 'REV. 4 01/11/2020', 0, 1, 'L', 0, '', 1);
    }
  }

  $preference = array(
      'Duplex' => 'DuplexFlipLongEdge',
      'PickTrayByPDFSize' => true,
      'PrintPageRange' => array(2,1),
      'NumCopies' => 1
  );

  $width = 210;
  $height = 297;
  $pageLayout = array($width, $height);

  //$pdf = new TCPDF('P', 'mm', $pageLayout);
  $pdf = new MYPDF('P', 'mm', $pageLayout, true, 'UTF-8', false);
  
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('MAC Builders');
  $pdf->SetTitle('IT Infrastructure History Record');
  $pdf->SetSubject('TCPDF Tutorial');
  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

  // set default header data
  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
  $pdf->setFooterData(array(0,64,0), array(0,64,128));

  // set header and footer fonts
  $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, '25', PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

  $pdf->AddPage();
  $pdf->setViewerPreferences($preference);

  $macbuilders_logo = '../../img/MACBUILDERS.png';
  $pdf->Image($macbuilders_logo, 10, 9, 22, 17, 'PNG');

  // HTML Content
  $itemid = $_POST['itemid'];

  $sql = "SELECT * from non_consumable_item AS a
          INNER JOIN item_type AS b ON a.item_code = b.code
          WHERE a.is_deleted = ? AND a.itemid = ?";

  $stmt = $conn->prepare($sql); 
  $stmt->bind_param("ii", $is_deleted, $itemid);
  $stmt->execute();
  $result = $stmt->get_result();

  while ($row = $result->fetch_assoc()) {

    $item_type = $row["type"];
    $code = $row["code"];
    $equipment_code = $row["equipment_code"];
    $brand = $row["brand"];
    $model = $row["model"];
    $serial_no = $row["serial_no"];
    $operating_system = $row["operating_system"];
    $system_type = $row["system_type"];
    $hdd = $row["hdd"];   
    $ram = $row["ram"];   
    $video_card = $row["video_card"];    
    $processor = $row["processor"];
    $motherboard = $row["motherboard"];
    $odd = $row["odd"];
    $card_reader = $row["card_reader"];
    $receive_date = strtoupper(date_format(date_create($row["receive_date"]), "F d, Y"));
    $receive_no = $row["receive_no"];
    $supplier = $row["supplier"];
    $payment_order_no = $row["payment_order_no"];
    $payment_order_date = strtoupper(date_format(date_create($row["payment_order_date"]), "F d, Y"));
    $invoice = $row["invoice"];
    $item_status = $row["status"];
    $amount = $row["item_amount"];
    $rf = $row["rf"];
  }


  $html_content = 
    '<table style="width: 100%; padding: 2px 5px 2px 5px;">
      <tr style="background-color: #E2EFDA; font-size: 16px;">
        <th style="border: 0.5px solid black; text-align: center;"><b>IT INFRASTRUCTURE HISTORY RECORD</b></th>
      </tr>
      <tr style="font-weight: bold; font-size: 11px;">
         <th style="border: 0.5px solid black; text-align: center;" colspan="4"></th>
      </tr>
      <tr style="font-size: 11px;">
        <td style="font-weight: bold; text-align: left; border: 0.5px solid black; width: 20%;">ASSET ID:</td>
        <td style="text-align: left; border: 0.5px solid black; width: 40%;">'.$equipment_code.'</td>
        <td style="font-weight: bold; text-align: left; border: 0.5px solid black; width: 20%;">ASSET TYPE:</td>
        <td style="text-align: left; border: 0.5px solid black; width: 20%;">'.$item_type.'</td>
      </tr>

      <tr style="background-color: #E2EFDA; font-size: 12px;">
        <th style="border: 0.5px solid black; text-align: center;" colspan="4"><b>BASIC INFORMATION</b></th>
      </tr>
      <tr style="font-size: 11px;">
        <td style="text-align: left; border: 0.5px solid black; width: 33%;"><b>BRAND:</b><br>'.$brand.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 33%;"><b>SERIAL NO.:</b><br>'.$serial_no.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 34%;"><b>MODEL:</b><br>'.$model.'</td>
      </tr>
      <tr style="font-size: 11px;">
        <td style="text-align: left; border: 0.5px solid black; width: 33%;"><b>SUPPLIER NAME:</b><br>'.$supplier.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 33%;"><b>ASSET AMOUNT:</b><br> '.number_format($amount,2).'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 34%;"><b>INVOICE #:</b><br>'.$invoice.'</td>
      </tr>
      <tr style="font-size: 11px;">
        <td style="text-align: left; border: 0.5px solid black; width: 19%;"><b>REQUISITION #:</b><br>'.$rf.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 14%;"><b>PO #:</b><br>'.$payment_order_no.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 33%;"><b>PURCHASED DATE:</b><br>'.$payment_order_date.'</td>
        <td style="text-align: left; border: 0.5px solid black; width: 34%;"><b>RECEIVING DATE:</b><br>'.$receive_date.'</td>
      </tr>';

  if($item_type == "DESKTOP" || $item_type == "LAPTOP"){

       $html_content .=
            '<tr style="font-size: 11px;">
              <td style="font-weight: bold; text-align: left; border: 0.5px solid black; width: 33%;">OPERATING SYSTEM</td>
             <td style="text-align: left; border: 0.5px solid black; width: 67%;">'.$operating_system.'</td>
            </tr>
            <tr style="font-size: 11px;">
              <td style="font-weight: bold; text-align: left; border: 0.5px solid black;">SYSTEM TYPE:</td>
              <td style="text-align: left; border: 0.5px solid black;">'.$system_type.'</td>
            </tr>
            <tr style="font-size: 11px;">
              <td style="font-weight: bold; text-align: left; border: 0.5px solid black;">PROCESSOR:</td>
              <td style="text-align: left; border: 0.5px solid black;">'.$processor.'</td>
            </tr>';

       $sql_addon = "SELECT * from item_addon
                        WHERE is_deleted = ? AND asset_code = ?";

        $stmt_addon = $conn->prepare($sql_addon); 
        $stmt_addon->bind_param("ii", $is_deleted, $equipment_code);
        $stmt_addon->execute();
        $result_addon = $stmt_addon->get_result();

        while ($row_addon = $result_addon->fetch_assoc()) {
         
          $addon = $row_addon["brand"].' '.$row_addon["model"].' | SN: '.$row_addon["serial_no"];
          $addon_type = $row_addon["addonname"];

           $html_content .=
           '
            <tr style="font-size: 11px;">
              <td style="font-weight: bold; left; border: 0.5px solid black;">'.$addon_type.':</td>
              <td style="text-align: left; border: 0.5px solid black;">'.$addon.'</td>
            </tr>';     
            }
       
            $html_content .=
           '<tr style="font-size: 11px;">
              <td style="font-weight: bold; border: 0.5px solid black;">PROGRAMS INSTALLED:</td>
              <td style="text-align: left; border: 0.5px solid black;"></td>
            </tr>';     
        }
      

  $html_content .=    
    '</table>
    <table style="width: 100%; padding: 2px 5px 2px 5px;">
      <tr style="background-color: #C00000; font-size: 16px;">
        <th style="border: 0.5px solid black; text-align: center; color: white;"><b>HISTORY RECORD</b></th>
      </tr>
      <tr style="font-weight: bold; font-size: 10px;">
        <td style="text-align: center; border: 0.5px solid black; width: 12%;">DATE</td>
        <td style="text-align: center; border: 0.5px solid black; width: 11%;">SRF #</td>
        <td style="text-align: center; border: 0.5px solid black; width: 20%;">PROBLEM / REQUEST</td>
        <td style="text-align: center; border: 0.5px solid black; width: 20%;">SOLUTION / RECOMMENDATION</td>
        <td style="text-align: center; border: 0.5px solid black; width: 15%;">REMARKS</td>
        <td style="text-align: center; border: 0.5px solid black; width: 22%;">REPAIRED/CHECKED BY</td>
      </tr>';


    $sql_history = "SELECT * from item_history AS a
                    INNER JOIN non_consumable_item AS b ON a.itemid = b.itemid
                    INNER JOIN user AS c ON a.added_by = c.userid
                    WHERE a.is_deleted = ? AND a.itemid = ?";

    $stmt = $conn->prepare($sql_history); 
    $stmt->bind_param("ii", $is_deleted, $itemid);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {

      $date_srf = strtoupper(date_format(date_create($row["datesrf"]), "m/d/Y"));
      $srf = $row["srf"];
      $problem = $row["problem"];
      $solution = $row["solution"];
      $remarks = $row["remarks"];
      $name = $row["names"];

      $html_content .=
        '<tr style="font-size: 10px;">
          <td style="text-align: center; border: 0.5px solid black;">'.$date_srf.'</td>
          <td style="text-align: center; border: 0.5px solid black;">'.$srf.'</td>
          <td style="text-align: center; border: 0.5px solid black;">'.$problem.'</td>
          <td style="text-align: center; border: 0.5px solid black;">'.$solution.'</td>
          <td style="text-align: center; border: 0.5px solid black;">'.$remarks.'</td>
          <td style="text-align: center; border: 0.5px solid black;">'.$name.'</td>
        </tr>';
    }
  

  $html_content .=
    '</table>';

  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell(0, 0, '', '', $header, 0, 1, 0, true, '', true); ob_end_clean();
  $pdf->writeHTMLCell(0, 0, '', '', $html_content, 0, 1, 0, true, '', true); ob_end_clean();
  $pdf->Output();
?>
