<p>ประวัติการเติมเงินของคุณ ย้อนหลังสูงสุด 30 ครั้ง</p>
<?php
$history = $this->db->get_where("tb_topup",array(
    "topup_name" => "{$this->session->userdata("username")}"
),0,30);
if($history->num_rows() > 0)
{
    foreach($history->result() as $row_history)
    {
        echo "<p>เติมเงินจำนวน : $row_history->topup_point บาท วันที่ $row_history->topup_date</p>";
        
    }
}
else
{
    echo "<p>คุณยังไม่เคยเติมเงิน</p>";
}
?>
<hr>
