<?php
include "../database.php"
?>

<?php
class connect
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function select_accounttho()
    {
        $query = "SELECT * FROM account_tho where hoTen <> ''";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_accountthue()
    {
        $query = "SELECT * FROM account_thue where hoTen <> ''";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thongtintho()
    {
        $query = "SELECT * FROM thongtintho";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thongtinthue()
    {
        $query = "SELECT * FROM thongtinthue";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_managerposttimtho()
    {
        $query = "SELECT * FROM post_timtho";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_managerprofile()
    {
        $query = "SELECT * FROM profile";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_baidangcuatho()
    {
        $query = "SELECT * FROM post";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_tacphamcuatho()
    {
        $query = "SELECT * FROM tacpham";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thongtindanhgia()
    {
        $query = "SELECT * FROM thongtindanhgia";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thuequanlybaidang()
    {
        $query = "SELECT * FROM quanlybaidang";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_thoquanlyyeucau()
    {
        $query = "SELECT * FROM quanlyyeucau";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_phanhoitunguoidung()
    {
        $query = "SELECT * FROM baocaochoadmin";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_thongtindanhgia()
    {
        $madanhgia = $_POST['madanhgia'];
        $query = "DELETE FROM thongtindanhgia WHERE madanhgia = '$madanhgia'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function update_thongtindanhgia()
    {
        $madanhgia = $_POST['madanhgia-edit'];

        $mathongtinthue = $_POST['mathongtinthue-edit'];
        $mathongtintho = $_POST['mathongtintho-edit'];
        $rating = $_POST['rating-edit'];
        $mota = $_POST['mota-edit'];
        $hinhdanhgia = $_POST['hinhdanhgia-edit'];
        $thoigian = $_POST['thoigian-edit'];
        $videodanhgia = $_POST['videodanhgia-edit'];
        $query = "UPDATE `thongtindanhgia` 
            SET `mathongtinthue`='$mathongtinthue',
            `mathongtintho`='$mathongtintho',
            `rating`='$rating',
            `mota`='$mota',
            `hinhdanhgia`='$hinhdanhgia',
            `videodanhgia`='$videodanhgia',
            `thoigian`='$thoigian' 
            where `madanhgia`='$madanhgia'";
        $result = $this->db->update($query);
        header('Location:qly_thongtindanhgia.php');
        return $result;
    }
}
?>