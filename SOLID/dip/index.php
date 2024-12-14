<?php 
//dip

interface IReport{
    public function generate();
}

class PDFReport implements IReport{
    public function generate(){
        echo "PDF report created";
    }
}
class HTMLReport implements IReport{
    public function generate(){
        echo "HTML report created";
    }
}
class Report
{
    private IReport $report;
    public function __construct(IReport $_report)
    {
        $this->report=$_report;
    }
    public function process(){
        $this->report->generate();
    }
}
//we can inject any report type without changing the existing code
$pdf=new Report(new PDFReport());
$pdf->process();
$report=new Report(new HTMLReport());
$report->process();
?>