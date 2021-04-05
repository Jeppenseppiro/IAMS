<?php
  // Configuration
  include '../tcpdf/tcpdf.php';
  include '../config/database/conn.php';
  session_start();
  ob_start();

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
     /* $this->SetY(-15);
      $this->SetFont('helvetica', '', 8);
      $this->Cell(0, 0, 'FO-ICT-001', 0, 1, 'L', 0, '', 1);
      $this->Cell(0, 0, 'REV. 4 01/11/2020', 0, 1, 'L', 0, '', 1);*/
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
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];


  $html_content = 
    '<table style="width: 100%; padding: 2px 5px 2px 5px;">
      <tr style="background-color: #E2EFDA; font-size: 16px;">
        <th style="border: 0.5px solid black; text-align: center;"><b>IT ASSET RECEIPT</b></th>
      </tr>
      <tr style="font-weight: bold; font-size: 11px;">
         <th style="text-align: center;" colspan="4"></th>
      </tr>
      <tr style="font-size: 11px;">
        <td style="font-weight: bold; text-align: left; width: 30%;"></td>
        <td style="text-align: right; width: 70%;" colspan="6">'.date('D, M j, Y \a\t g:ia').'</td>
      </tr>
      <tr style="font-size: 11px;">
        <td style="font-weight: bold; text-align: left; width: 30%;">BORROWER\'S NAME</td>
        <td style="text-align: left; width: 70%;" colspan="6">'.$lname.', '.$fname.'</td>
      </tr>
      <tr style="font-weight: bold; font-size: 11px;">
         <th style="text-align: center;" colspan="4"></th>
      </tr>
      <tr style="font-size: 11px;">
        <td style="font-weight: bold; text-align: left; width: 30%;">BORROWED ASSET/S</td>
        <td style="text-align: left; width: 70%;" colspan="6"></td>
      </tr>  
      <tr style="font-size: 8px; color: red;">
        <td style="font-weight: bold; text-align: left; width: 16.7%;">ASSET TYPE</td>
        <td style="font-weight: bold; text-align: left; width: 16.7%;">ASSET CODE</td>
        <td style="font-weight: bold; text-align: left; width: 16.7%;">BRAND</td>
        <td style="font-weight: bold; text-align: left; width: 16.7%;">MODEL</td>
        <td style="font-weight: bold; text-align: left; width: 16.7%;">S. N.</td>
        <td style="font-weight: bold; text-align: left; width: 16.7%;">AMOUNT</td>
      </tr> 
    </table>';

    $sql = "SELECT * from item_deploy AS a
          INNER JOIN non_consumable_item AS b ON a.itemid = b.itemid
          INNER JOIN item_type AS c ON b.item_code = c.code
          WHERE a.user_fname = ? AND a.user_lname = ? AND a.is_deleted = ? AND b.is_deleted = ?";

    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("ssii", $fname, $lname, $is_deleted, $is_deleted);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {

      $total += $row["item_amount"];
      $equipment_code = $row["equipment_code"];

      $html_content .= 
      '<table style="width: 100%; padding: 2px 5px 2px 5px;">
        <tr style="font-size: 8px;">
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row["type"].'</td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row["equipment_code"].'</td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row["brand"].'</td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row["model"].'</td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row["serial_no"].'</td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;">'.number_format($row["item_amount"],2).'</td>
          </tr>';

          if ($row["type"] == "DESKTOP" || $row["type"] == "LAPTOP") {

            $sql_addon = "SELECT a.brand, a.model, a.serial_no, a.addonname, a.item_amount, a.description from item_addon AS a
                         INNER JOIN non_consumable_item AS b ON a.asset_code = b.equipment_code
                         WHERE a.is_deleted = ? AND b.is_deleted = ? AND a.asset_code = ?";

            $stmt_addon = $conn->prepare($sql_addon); 
            $stmt_addon->bind_param("iis", $is_deleted, $is_deleted, $equipment_code);
            $stmt_addon->execute();
            $result_addon = $stmt_addon->get_result();

            while ($row_addon = $result_addon->fetch_assoc()) {

             $total_addon += $row_addon["item_amount"];

             $html_content .= 
              '<tr style="font-size: 8px;">
                  <td style="font-weight: bold; text-align: left; width: 16.7%;">&nbsp;&nbsp;&nbsp;'.$row_addon["addonname"].'</td>
                  <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
                  <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row_addon["brand"].'</td>
                  <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row_addon["model"].'</td>
                  <td style="font-weight: bold; text-align: left; width: 16.7%;">'.$row_addon["serial_no"].' '.$row_addon["description"].'</td>
                  <td style="font-weight: bold; text-align: left; width: 16.7%;">'.number_format($row_addon["item_amount"],2).'</td>
              </tr>';
            }
           }
    }

    $final_total = $total_addon +  $total;

    $html_content .= '
          <tr style="font-size: 8px;">
            <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
            <td style="font-weight: bold; text-align: left; width: 16.7%;"></td>
            <td style="font-weight: bold; text-align: left; width: 16.7%; color: red;">'.number_format($final_total,2).'</td>
          </tr> 
          </table>';


    $html_content .= 
      '<table style="width: 100%; padding: 2px 5px 2px 5px;">
         <tr style="font-size: 11px;"><br><br>
            <td style="font-weight: bold; text-align: left; width: 50%;" colspan="3">'.$fname.' '.$lname.'</td>
            <td style="font-weight: bold; text-align: right; width: 50%;" colspan="3">__________________________</td>
          </tr> 
           <tr style="font-size: 11px;">
            <td style=" text-align: left; width: 50%;" colspan="3">Borrowers Signature</td>
            <td style=" text-align: right; width: 50%;" colspan="3">IT Asset Associate</td>
          </tr>
      </table>      
      ';


  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell(0, 0, '', '', $header, 0, 1, 0, true, '', true); ob_end_clean();
  $pdf->writeHTMLCell(0, 0, '', '', $html_content, 0, 1, 0, true, '', true); ob_end_clean();
 
  $pdf->Output();
?>
