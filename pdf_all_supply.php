<?php
require('js/fpdf.php');

class PDF_MySQL_Table extends FPDF
{
protected $ProcessingTable=false;
protected $aCols=array();
protected $TableX;
protected $HeaderColor;
protected $RowColors;
protected $ColorIndex;

function Header()
{
    // Print the table header if necessary
    if($this->ProcessingTable)
        $this->TableHeader();
}

function TableHeader()
{
    $this->SetFont('Arial','B',12);
    $this->SetX($this->TableX);
    $fill=!empty($this->HeaderColor);
    if($fill)
        $this->SetFillColor($this->HeaderColor[0],$this->HeaderColor[1],$this->HeaderColor[2]);
    foreach($this->aCols as $col)
        $this->Cell($col['w'],6,$col['c'],1,0,'C',$fill);
    $this->Ln();
}

function Row($data)
{
    $this->SetX($this->TableX);
    $ci=$this->ColorIndex;
    $fill=!empty($this->RowColors[$ci]);
    if($fill)
        $this->SetFillColor($this->RowColors[$ci][0],$this->RowColors[$ci][1],$this->RowColors[$ci][2]);
    foreach($this->aCols as $col)
        $this->Cell($col['w'],5,$data[$col['f']],1,0,$col['a'],$fill);
    $this->Ln();
    $this->ColorIndex=1-$ci;
}

function CalcWidths($width, $align)
{
    // Compute the widths of the columns
    $TableWidth=0;
    foreach($this->aCols as $i=>$col)
    {
        $w=$col['w'];
        if($w==-1)
            $w=$width/count($this->aCols);
        elseif(substr($w,-1)=='%')
            $w=$w/100*$width;
        $this->aCols[$i]['w']=$w;
        $TableWidth+=$w;
    }
    // Compute the abscissa of the table
    if($align=='C')
        $this->TableX=max(($this->w-$TableWidth)/2,0);
    elseif($align=='R')
        $this->TableX=max($this->w-$this->rMargin-$TableWidth,0);
    else
        $this->TableX=$this->lMargin;
}

function AddCol($field=-1, $width=-1, $caption='', $align='L')
{
    // Add a column to the table
    if($field==-1)
        $field=count($this->aCols);
    $this->aCols[]=array('f'=>$field,'c'=>$caption,'w'=>$width,'a'=>$align);
}

function Table($link, $query, $prop=array())
{
    // Execute query
    $res=mysqli_query($link,$query) or die('Error: '.mysqli_error($link)."<br>Query: $query");
    // Add all columns if none was specified
    if(count($this->aCols)==0)
    {
        $nb=mysqli_num_fields($res);
        for($i=0;$i<$nb;$i++)
            $this->AddCol();
    }
    // Retrieve column names when not specified
    foreach($this->aCols as $i=>$col)
    {
        if($col['c']=='')
        {
            if(is_string($col['f']))
                $this->aCols[$i]['c']=ucfirst($col['f']);
            else
                $this->aCols[$i]['c']=ucfirst(mysqli_fetch_field_direct($res,$col['f'])->name);
        }
    }
    // Handle properties
    if(!isset($prop['width']))
        $prop['width']=0;
    if($prop['width']==0)
        $prop['width']=$this->w-$this->lMargin-$this->rMargin;
    if(!isset($prop['align']))
        $prop['align']='C';
    if(!isset($prop['padding']))
        $prop['padding']=$this->cMargin;
    $cMargin=$this->cMargin;
    $this->cMargin=$prop['padding'];
    if(!isset($prop['HeaderColor']))
        $prop['HeaderColor']=array();
    $this->HeaderColor=$prop['HeaderColor'];
    if(!isset($prop['color1']))
        $prop['color1']=array();
    if(!isset($prop['color2']))
        $prop['color2']=array();
    $this->RowColors=array($prop['color1'],$prop['color2']);
    // Compute column widths
    $this->CalcWidths($prop['width'],$prop['align']);
    // Print header
    $this->TableHeader();
    // Print rows
    $this->SetFont('Arial','',11);
    $this->ColorIndex=0;
    $this->ProcessingTable=true;
    while($row=mysqli_fetch_array($res))
        $this->Row($row);
    $this->ProcessingTable=false;
    $this->cMargin=$cMargin;
    $this->aCols=array();
}
}
?>
<?php 

class PDF extends PDF_MySQL_Table
{
    function Header()
    {
        // Title
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'PROPERTY ACKNOWLEDGEMENT RECEIPT', 0, 1, 'C');
        $this->Ln(5);

        // LGU and PAR No.
        $this->SetFont('Arial', '', 12);
        $this->Cell(30, 10, 'LGU: GEN. MACARTHUR', 0, 0);
        $this->Cell(0, 10, '', 0, 1, 'R');
        $this->Cell(30, 10, 'Fund: __________', 0, 0);
        $this->Cell(0, 10, 'PAR NO.: __________', 0, 1, 'R');

        $this->Ln(10);
        // Column headers
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(20, 10, 'Quantity', 1);
        $this->Cell(20, 10, 'Unit', 1);
        $this->Cell(40, 10, 'Description', 1);
        $this->Cell(40, 10, 'Property Number', 1);
        $this->Cell(40, 10, 'Date Acquired', 1);
        $this->Cell(30, 10, 'Amount', 1);
        $this->Ln();
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-80);
        // Approvers
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Received by:', 0, 0, 'L');

        $this->SetX(115);
        $this->Cell(0, 10, 'Approved by:', 0, 1, 'L');
        $this->Ln(5);

        $this->SetFont('Arial', 'U', 12); 
        $this->SetX(35);
        $this->Cell(90, 10, 'ROSE ABOGADIE', 0, 0, 'L');

        $this->SetX(145);
        $this->Cell(0, 10, 'JESSA M. GERMONES', 0, 1, 'L');
        $this->SetFont('Arial', '', 12);

        $this->SetX(10);
        $this->Cell(90, 10, 'Signature over Printed Name of the End User', 0, 0, 'L');

        $this->SetX(140);
        $this->Cell(0, 10, 'Signature over Printed Name', 0, 1, 'L');
        $this->Ln(5);

        $this->SetX(155);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 0, 'Supply Officer l', 0, 0, 'L');
    }

    function TableData($conn)
    {
        $this->SetFont('Arial', '', 12);
        $query = "SELECT material_requisition.QUANTITY, equip_pro.UNIT, equip_pro.EQUIP_DESCRIPTION, equip_pro.PROPERTY_NO, material_requisition.MR_DATE, equip_pro.COST FROM material_requisition JOIN equip_pro ON equip_pro.ID = material_requisition.EQUIP_ID JOIN program ON program.PROGRAM_ID = equip_pro.PROGRAM_ID WHERE program.TYPE = 'Supply'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->Cell(20, 10, $row['QUANTITY'], 1);
                $this->Cell(20, 10, $row['UNIT'], 1);
                $this->Cell(40, 10, $row['EQUIP_DESCRIPTION'], 1);
                $this->Cell(40, 10, $row['PROPERTY_NO'], 1);
                $this->Cell(40, 10, $row['MR_DATE'], 1);
                $this->Cell(30, 10, $row['COST'], 1);
                $this->Ln();
            }
        } else {
            $this->Cell(0, 10, 'No data found', 1, 1, 'C');
        }
    }
}

// Database connection
include 'db.php';
session_start();
$user = $_SESSION['ID'];

$pdf = new PDF();
$pdf->AddPage();
$pdf->TableData($conn);
$pdf->Output();


?>